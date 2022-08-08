@extends('layouts.main')

@section('content')
    <section id="jumbotron" class="h-[600px] bg-primary">
        <div class="container">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/2">
                    <div class="mb-10">
                        <h1 class="text-secondary font-bold text-6xl"><span class="text-orange-500 font-light text-4xl">Halo,</span><br> Mari membuat sesuatu yang lebih baik setiap harinya</h1>
                    </div>
                    <a href="" class="py-3 px-4 bg-orange-500 text-secondary mt-5 text-xl rounded-md">Hubungi Saya</a>
                </div>
                <div class="w-full ml-auto flex justify-between items-center md:w-1/3">
                        <img src="images/rajartan.png" alt="Rajartan Logo" class="w-full">
                </div>
            </div>
        </div>
    </section>
@endsection
