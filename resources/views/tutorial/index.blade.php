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
                    <div class="">
                        <a href="" class="text-xl text-gray-500 mx-4 hover:text-primary hover:font-bold">Semua</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section kategori tutorial --}}
@endsection
