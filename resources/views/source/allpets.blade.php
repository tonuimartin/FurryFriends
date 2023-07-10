<x-app-layout> 

    <x-slot name="header">
    @include('layouts.sourcenavbar')
    
    </x-slot>
    
    @include('userpartials.displaycards')
    
</x-app-layout>
