@extends('layouts.app')

@push('styles')
    <!-- Tambahkan gaya khusus di sini -->
     @livewireStyles
@endpush

@push('scripts')
    <!-- Tambahkan skrip khusus di sini -->
    @livewireScripts
@endpush


@section('content')
    
    <livewire:counter />
    <x-success :user="$user" />

@endsection