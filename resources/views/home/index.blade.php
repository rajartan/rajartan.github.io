@extends('layouts.main')

@section('content')
    {{-- awal section jumbotron --}}
    <section id="jumbotron" class="h-[500px] bg-secondary">
        <div class="container">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/2 mx-4">
                    <div class="mb-10">
                        <h1 class="text-gray-900 font-bold text-6xl"><span class="text-orange-500 font-light text-xl">Halo,</span><br> Mari membuat sesuatu yang lebih baik setiap harinya</h1>
                    </div>
                    <a href="" class="py-4 px-6 bg-orange-500 text-secondary mt-5 text-xl rounded-md">Hubungi Saya</a>
                </div>
                <div class="w-full mx-4 ml-auto flex justify-between items-center md:w-1/3">
                    <img src="images/rajartan.png" alt="Rajartan Logo" class="w-full">
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section jumbotron --}}

    {{-- awal section moto --}}
    <section id="moto" class="bg-gray-200">
        <div class="container">
            <div class="flex flex-wrap justify-between">
                <div class="w-1/3 px-4">
                    <div class="flex items-center py-10">
                        <i class="fa-solid fa-graduation-cap text-6xl pr-4 text-orange-500"></i>
                        <div class="flex flex-col">
                            <h3 class="text-primary text-xl font-semibold">Belajar</h3>
                            <p class="text-sm font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, consequatur?</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 px-4">
                    <div class="flex items-center py-10">
                        <i class="fa-solid fa-share-nodes text-6xl pr-4 text-orange-500"></i>
                        <div class="flex flex-col">
                            <h3 class="text-primary text-xl font-semibold">Berbagi</h3>
                            <p class="text-sm font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, consequatur?</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 px-4">
                    <div class="flex items-center py-10">
                        <i class="fa-solid fa-people-group text-6xl pr-4 text-orange-500"></i>
                        <div class="flex flex-col">
                            <h3 class="text-primary text-xl font-semibold">Berkolaborasi</h3>
                            <p class="text-sm font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, consequatur?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section moto --}}

    {{-- awal section projek --}}
    <section id="sosmed" class="pt-28">
        <div class="container">
            <div class="flex justify-between">
                <div class="w-full md:w-1/2 px-4  ">
                    <div class="flex flex-col  ">
                        <div class="w-3/4 p-4 shadow-lg rounded-md mb-8">
                            <div class="flex">
                                <div class="rounded-md p-4">
                                    <i class="fa-solid fa-pen-ruler text-6xl pr-4 text-green-500"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-primary text-xl font-semibold">Website Design</h3>
                                    <p class="text-sm font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, consequatur?</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-3/4 p-4 shadow-lg rounded-md mb-8">
                            <div class="flex">
                                <div class="rounded-md p-4">
                                    <i class="fa-solid fa-desktop text-6xl pr-4 text-yellow-300"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-primary text-xl font-semibold">Website Developer</h3>
                                    <p class="text-sm font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, consequatur?</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-3/4 p-4 shadow-lg rounded-md mb-8">
                            <div class="flex">
                                <div class="rounded-md p-4">
                                    <i class="fa-solid fa-people-group text-6xl pr-4 text-orange-500"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-primary text-xl font-semibold">Brand Identity</h3>
                                    <p class="text-sm font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, consequatur?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <h2 class="text-5xl font-bold mb-4">Apa Yang Bisa Saya Bantu?</h2>
                    <p class="text-base text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati mollitia totam dolorem saepe impedit dignissimos, veniam, pariatur recusandae reprehenderit ea ipsam odit corporis hic quos, earum sed provident amet. Explicabo, atque nesciunt sequi accusantium, assumenda molestiae esse voluptas aperiam unde voluptatibus facilis quaerat non, mollitia odio. Cupiditate, aperiam quia cumque odit officia eos ducimus non magni voluptatum ex incidunt autem. Perferendis nam sed at fugit officia alias quidem accusantium consectetur soluta quod vero accusamus quo dolorum eum, minima, quia itaque.</p>

                    <div class="flex justify-between mt-14">
                        <div class="w-1/2">
                            <h1 class="text-5xl text-orange-500 font-bold">1</h1>
                            <p class="text-base text-primary">Projek Selesai</p>
                        </div>
                        <div class="w-1/2">
                            <h1 class="text-5xl text-orange-500 font-bold">1</h1>
                            <p class="text-base text-primary">Klien Senang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section projek --}}

    {{-- awal section sosial media --}}
    <section id="sosmed" class="pt-28">
        <div class="container">
            <div class="flex flex-wrap">
                <h3 class="px-4 font-semibold text-5xl">Mari Berteman</h3>
                <hr>
                <div class="flex flex-wrap">
                    <div class="w-1/3 px-4">

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section sosial media --}}
@endsection
