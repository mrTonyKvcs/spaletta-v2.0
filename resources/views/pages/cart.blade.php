@extends('layouts.app')

@section('title') {{ __('Kosár') }} @endsection

@section('meta_data')
    <meta name="description" content="A Spaletta Étterem Kecskeméten honlapjáról már online rendelésre is van lehetőség. Élveze otthonába a Spaletta Étterem étel különlegeségeit.">
    <meta property="og:description" content="A Spaletta Étterem Kecskeméten honlapjáról már online rendelésre is van lehetőség.Élveze otthonába a Spaletta Étterem étel különlegeségeit.">
    <meta property="og:url" content="https://spalettaetterem.com/kosár"> 
@endsection

<x-layout>
    <x-header background="about">{{ __('Kosár') }}</x-header>
    <livewire:cart></livewire>

</x-layout>
