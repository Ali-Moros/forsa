@extends('layout')
@section('content')
    <x-message />
    <x-jobListing.navBar />
    <div dir="rtl"
        class=" px-20 w-full h-full border border-solid rounded-lg border-grayBorder pt-10 pb-16 flex justify-center items-center ">
        <div class=" border border-gray-200 p-10 rounded w-full">
            <header>
                <h1 class="text-3xl text-center font-bold my-6 uppercase">
                    منشوراتك
                </h1>
            </header>

            <table class="w-full table-auto rounded-sm">
                <tbody>
                    @unless ($listings->isEmpty())
                        @foreach ($listings as $listing)
                            <tr class="border-gray-300">
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="/listings/{{ $listing->id }}" class="text-primaryColor">
                                        {{ $listing->title }}
                                    </a>
                                </td>
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg flex  items-center">
                                    <a href="/listings/{{ $listing->id }}/listEdit"
                                        class="text-primaryColor px-1 py-2 rounded-xl"><i class="fa-solid"></i>
                                        تعديل
                                    </a>
                                    <box-icon name='edit' color='#0e2f56'></box-icon>
                                </td>
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <form method="POST" action="/listings/{{ $listing->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <div class="flex  items-center justify-center">
                                            <button type="submit" class="text-red-600">
                                                حذف
                                            </button>
                                            <box-icon name='trash' color='#dc2626'></box-icon>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <p class="text-center">لا يوجد لديك منشورات</p>
                            </td>
                        </tr>
                    @endunless
                </tbody>
            </table>
        </div>
    </div>


    <div class="mt-28">
        <x-footer />
    </div>
    {{-- <x-jobListing.searchBar /> --}}
@endsection
