@extends('layout')
@section('content')
    <x-message />
    <x-jobListing.navBar />
    {{-- <x-jobListing.searchBar /> --}}
    @include('partials._search')
    <div class="flex items-center justify-end mt-20 gap-16 px-16">
        <div class="relative">
            <div>
                <p class="absolute end-5 -top-10 text-lg text-grayText">
                    {{-- <span>50 </span>نتيجة --}}
                </p>
                <div class="grid  grid-cols-2 gap-8 overflow-scroll  no-scrollbar">

                    {{-- <x-jobListing.jobCard.placeHolder /> --}}

                    @unless (count($listings) == 0)
                        @foreach ($listings as $listing)
                            <x-jobListing.jobCard.jobCard :listing="$listing" />
                        @endforeach
                    @else
                        <p>No Listings found</p>
                    @endunless

                </div>
            </div>
            {{-- <x-jobListing.jobList> --}}
            {{-- <x-jobListing.pagination /> --}}
            <div class ='mt-6'>
                {{ $listings->links() }}
            </div>

        </div>
        <x-jobListing.filters />
    </div>

    <div class="mt-28">
        <x-footer />
    </div>

@endsection
