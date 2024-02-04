@extends('layout')
@section('content')
    <div>
        <x-jobListing.navBar />
        <x-JobDesc.JobDesc :listing="$listing" />

        <div class="mt-28">
            <x-footer />
        </div>

    </div>












    {{-- <x-jobListing.searchBar /> --}}
@endsection
