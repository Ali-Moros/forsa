@extends('layout')
@section('content')
    <div dir="rtl">



        <div>
            <x-message />
            <x-.Home.NavBar />
            <x-.Home.Hero />
        </div>

        <div>
            <x-Home.About />
        </div>


        <div>
            <x-home.Contact />
        </div>
    </div>


    <div class="mt-28">
        <x-footer />
    </div>
@endsection
