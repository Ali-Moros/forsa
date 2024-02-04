@extends('layout')
@section('content')
    <x-jobListing.navBar />





    <x-titleBar />

    <div class="p-10 ">
        <x-jobApply.jobApply />
    </div>



    <div class="mt-28">
        <x-footer />
    </div>
    {{-- <x-jobListing.searchBar /> --}}
@endsection
