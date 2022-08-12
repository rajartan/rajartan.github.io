@extends('layouts.main')

@section('content')
    <!-- awal section search -->
    <section id="search" class="pt-28">
        <div class="container">
            <div class="flex justify-center items-center ">
                <div class="w-3/4 shadow-md rounded">
                    <div class="flex items-center">
                        <div class="w-[5%]">
                            <i class="fa-solid fa-magnifying-glass text-xl text-gray-500 px-4 py-4 w-1/8"></i>
                        </div>
                        <div class="w-[95%]">
                            <form method="post" action="">
                                <input type="text" name="search" placeholder="Cari" class="w- border-0 py-4 w-full text-lg text-gray-500  hover:border hover:border-orange-500 focus:outline-0 focus:border-0 focus:ring-1 focus:ring-orange-500 rounded">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- akhir section search -->

    {{-- awal section kategori tutorial --}}
    <section id="kategory" class="pt-16">
        <div class="container">
            <div class="flex justify-center">
                <div class="w-full px-4 text-center">
                    <div>
                        <a href="" class="text-xl text-gray-500 mx-4 hover:text-primary hover:font-bold">Semua</a>
                        @foreach ($categories as $category)
                        <a href="/tutorial/{{ $category->slug }}" class="text-xl text-gray-500 mx-4 hover:text-primary hover:font-bold">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section kategori tutorial --}}


    {{-- awal section card --}}
    <section id="card" class="pt-28">
        <div class="container">
            <div class="flex flex-wrap justify-start">
                @foreach ($tutorials as $tutorial)
                <div class="w-full md:w-1/4 relative px-4 mb-8">
                    <a href="/category/{{ $tutorial->category->slug }}" class="absolute top-0 py-1 text-secondary px-3 bg-orange-500 rounded-r rounded-t-none shadow">{{ $tutorial->category->name }}</a>
                        <a href="" class="w-full">
                            <div class="rounded shadow-md overflow-hidden">
                                <img src="images/rajartan.png" alt="">
                                <h5 class="text-gray-500 text-base p-4 truncate">{{ $tutorial->name }}<h5>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    {{-- akhir section card --}}
@endsection
