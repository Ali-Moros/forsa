@extends('layout')
@section('content')
    <x-message />
    <x-jobListing.navBar />


    <x-titleBar />

    <div class="p-10 ">
        <x-ListEdit :listing="$listing" />
    </div>



    <div class="mt-28">
        <x-footer />
    </div>
    {{-- <x-jobListing.searchBar /> --}}
@endsection
