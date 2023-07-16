<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        // Check the user's role
        if ($user->role === 'source') {
            return redirect()->intended('/source_dashboard');
        } else {
            return redirect()->intended('/dashboard');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboard(){
    if (auth()->user()->role != "user") {
        abort(403, 'Unauthorized Action! This page is for users only');
     }

    
      return view('dashboard');
 }

 public function source_dashboard(){
    if (auth()->user()->role != "source") {
        abort(403, 'Unauthorized Action! This page is for pet sources only');
     }

    
      return view('source.sourcedashboard');
 }
}
