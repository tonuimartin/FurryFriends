<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Onlinepayment;
use App\Models\RetakeRequest;
use App\Models\Order;
use App\Models\Pet;
use Carbon\Carbon;
use Exception;
use App\Models\Confirmation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class MpesaController extends Controller
{
    public function stkPush(Request $request)
    {
        //  ini_set('display_errors', 1);
        //  ini_set('display_startup_errors', 1);
        //  error_reporting(E_ALL);

        // $validator = Validator::make($request->all(), [
        //     'phone_number' => 'required|regex:/^2547\d{8}$/',
        // ]);

        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }

        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $timestamp = date('YmdHis');
        $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $businessShortCode = 174379;
        $password = base64_encode($businessShortCode . $passkey . $timestamp);
        $partyA = 254727363529;

        $stkHeader = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->generateAccessToken(),
        ];

        $stkBody = [
            'BusinessShortCode' => $businessShortCode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => 1,
            'PartyA' => 254727363529,
            'PartyB' => $businessShortCode,
            'PhoneNumber' => 254727363529,
            'CallBackURL' => 'https://30cb-41-80-118-9.ngrok-free.app/api/callback_url',
            'AccountReference' => 'Account',
            'TransactionDesc' => 'Payment',
        ];

        $response = Http::withHeaders($stkHeader)->post($url, $stkBody);

        // $studentID = $request->student_id;
        // $retake_id = $request->requestID;
         $user=auth()->id();
   
         Onlinepayment::create([
            
            'user_id' => 21,
            'checkout_id' => $response->json()['CheckoutRequestID'],
            'amount' => 1,
            'phone_number' => $partyA,
            'mpesa_receipt_number' => 'RGJ1WE05LZ',
            'transaction_date' => Carbon::now(),
            'status' => 'paid',
         ]);
         
        $source_id = $request->query('source_id');
       
        $pet_id = $request->query('pet_id');
        
        $total = $request->query('total');
        
        Order::create([
            
            'user_id' => 21,
            'source_id' => 25,
            'pet_id' => 1,
            'total' => 1604,
        ]);
    
        $pet = Pet::where('pet_id', '1');

        $pet->update([
            'status' => 'bought',
        ]);
           //return view('maps.map', compact('location','total','source_id','pet_id'));
        return redirect('/dashboard')->with('message', 'Please complete the payment on your phone.');
    }

    public function callback(Request $request)
    {
        $callbackJSONData = $request->getContent();
        Log::info('callback data:', ['data' => $callbackJSONData]);
        try {
            $callbackData = json_decode($callbackJSONData);
        } catch (Exception $e) {
            Log::error('JSON decode error: ' . $e->getMessage());
        }
        $resultCode = $callbackData->Body->stkCallback->ResultCode;
        $resultDesc = $callbackData->Body->stkCallback->ResultDesc;
        $checkoutRequestID = $callbackData->Body->stkCallback->CheckoutRequestID;

        $onlinePayment = Onlinepayment::where('checkout_id', $checkoutRequestID)->first();

        if (!$onlinePayment) {
             Log::info('No payment exists with this CheckoutRequestID');
             return;
         }

        if ($resultCode == 0) {
            if (property_exists($callbackData->Body->stkCallback, 'CallbackMetadata')) {
                $amount = $callbackData->Body->stkCallback->CallbackMetadata->Item[0]->Value;
                $mpesaReceiptNumber = $callbackData->Body->stkCallback->CallbackMetadata->Item[1]->Value;
                $transactionDate = $callbackData->Body->stkCallback->CallbackMetadata->Item[3]->Value;
                $phoneNumber = $callbackData->Body->stkCallback->CallbackMetadata->Item[4]->Value;

                 $onlinePayment->update([
                     'mpesa_receipt_number' => $mpesaReceiptNumber,
                     'status' => 'paid',
                 ]);
                    
                Log::info('Payment was successful.');

            } else {
                Log::error('CallbackMetadata property not found');
                $onlinePayment->update([
                     'status' => 'failed',
                 ]);
            }
         } elseif ($resultCode == 1032) {
             $onlinePayment->update([
                 'status' => 'cancelled',
             ]);

            // $retakeRequest = RetakeRequest::where('id', $onlinePayment->retake_id)->first();

            // if($retakeRequest){
            //     $retakeRequest->update([
            //         'status' => 'Awaiting_Payment',
            //     ]);
            // }

            Log::info('Payment was unsuccessful. Reason: '.$resultDesc);
        } else {
             $onlinePayment->update([
                 'status' => 'failed',
             ]);
            
            Log::info('Payment was unsuccessful. Reason: '.$resultDesc);
        }
    }

    private function generateAccessToken()
    {
        $consumer_key = 'nuZjpQBVtpZ7ZAYyPxMaiDGzS3ZYxvc5';
        $consumer_secret = 'ASAv4CBFvaTlffXe';
        $credentials = base64_encode($consumer_key . ':' . $consumer_secret);

        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $response = Http::withHeaders(['Authorization' => 'Basic ' . $credentials])->get($url);

        $result = $response->json();

        return $result['access_token'];
    }
}