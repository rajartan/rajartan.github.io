@extends('layouts.main')

@section('content')
    {{-- awal section jumbotron --}}
    <section id="jumbotron" class=" bg-secondary h-[660px]">
        <div class="container">
            <div class="flex flex-wrap justify-center items-center -mt-32">
                <div class="w-full md:w-1/2 px-4">
                    <div class="mb-8">
                        <h1 class="text-gray-900 font-bold text-6xl"><span class="text-orange-500 font-light text-xl">Hello
                                Everyone,</span><br> Mari membuat sesuatu yang lebih baik setiap harinya</h1>
                    </div>
                    <a href="mailto:rajartan201319@gmail.com" class="py-4 px-6 bg-orange-500 text-secondary mt-5 text-xl rounded-md">Hubungi Saya</a>
                </div>
                <div class="w-full md:w-1/2 px-4 mb-32">
                    <img src="images/rachel.png" alt="Rajartan Logo" class="w-full rounded-full animate-none ease-in-out duration-300">
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
                            <p class="text-sm font-light">Boleh berhenti sekolah, tapi jangan berhenti belajar.</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 px-4">
                    <div class="flex items-center py-10">
                        <i class="fa-solid fa-share-nodes text-6xl pr-4 text-orange-500"></i>
                        <div class="flex flex-col">
                            <h3 class="text-primary text-xl font-semibold">Berbagi</h3>
                            <p class="text-sm font-light">Berbagi hidup membawa kebahagiaan terbesar.</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 px-4">
                    <div class="flex items-center py-10">
                        <i class="fa-solid fa-people-group text-6xl pr-4 text-orange-500"></i>
                        <div class="flex flex-col">
                            <h3 class="text-primary text-xl font-semibold">Berkolaborasi</h3>
                            <p class="text-sm font-light">Saat Anda perlu berinovasi, Anda membutuhkan kolaborasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section moto --}}

    {{-- awal section projek --}}
    <section id="projek" class="pt-28">
        <div class="container">
            <div class="flex justify-between">
                <div class="w-full md:w-1/2 px-4 ">
                    <div class="flex flex-col ">
                        <div class="w-3/4 p-4 shadow-lg rounded-md mb-8">
                            <div class="flex items-center">
                                <div class="rounded-md p-4">
                                    <i class="fa-solid fa-pen-ruler text-6xl pr-4 text-green-500"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-primary text-xl font-semibold">Website Design</h3>
                                    <p class="text-sm font-light">Desain Web atau Mobile Apps menggunakan Aplikasi Figma</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-3/4 p-4 shadow-lg rounded-md mb-8">
                            <div class="flex items-center">
                                <div class="rounded-md p-4">
                                    <i class="fa-solid fa-desktop text-6xl pr-4 text-yellow-300"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-primary text-xl font-semibold">Website Developer</h3>
                                    <p class="text-sm font-light">Semua Website atau Web Service di bangun menggunakan PHP
                                        dan Framework Laravel</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-3/4 p-4 shadow-lg rounded-md mb-8">
                            <div class="flex items-center">
                                <div class="rounded-md p-4">
                                    <i class="fa-solid fa-building-user text-6xl pr-4 text-orange-500"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-primary text-xl font-semibold">Brand Identity</h3>
                                    <p class="text-sm font-light">Brand Identity didesain dengan Aplikasi Figma</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <h2 class="text-5xl font-bold mb-4">Apa Yang Bisa Saya Bantu?</h2>
                    <p class="text-base text-gray-500 text-justify mb-4">saya akan membantu Anda mencari solusi dan memecahkan masalah Anda. Kami menggunakan desain proses untuk membuat produk digital.
                    </p>
                    <p class="text-base text-gray-500 text-justify">Selain itu juga membantu bisnis mereka.
                        Menyelesaikan projek dan memuaskan klien adalah prioritas saya.</p>

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
            <div class="flex flex-wrap items-start">
                <div class="w-full md:w-1/2 text-justify">
                    <h3 class="px-4 font-bold text-5xl mb-4">Tentang Saya!</h3>
                    <h5 class="text-lg font-light text-orange-500 px-4 mb-6">
                        <blockquote>"Masa depan adalah untuk mereka yang masih percaya dengan mimpi-mimpi indahnya"
                        </blockquote>
                    </h5>
                    <p class="text-base text-gray-500 px-4 mb-4">Mewujudkan mimpi adalah impian semua orang, tapi bagaimana cara seseorang menggapainya adalah cara yang paling menarik dalam hidup. Naik dan turun proses yang dialami membuat seseorang menjadi lebih baik setiap harinya.</p>
                    <p class="text-base text-gray-500 px-4">Percaya proses anda dan tersenyumlah ketika sudah sampai di posisi itu.</p>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <div class="flex flex-col">
                        <div>
                            <h3 class="text-4xl font-semibold px-4 mb-4 text-right">Mari Berteman</h3>
                            <p class="px-4 text-base text-gray-500 text-justify">Saya mempunyai beberapa platform sosial media. Mari berteman dan terhubung dengan saya dan mari berkolaborasi untuk membuat sesuatu yang hebat</p>
                        </div>
                        <div class="px-4 text-right mt-8">
                            <a href="" data-tooltip-target="youtube" data-tooltip-placement="bottom" type="button"
                                class="hover:bg-orange-500 rounded-md border border-spacing-4"><i
                                    class="fa-brands fa-youtube text-gray-500 text-3xl p-2 hover:text-secondary"></i></a>
                            <div id="youtube" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Rajartan
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <a href="" data-tooltip-target="instagram" data-tooltip-placement="bottom" type="button"
                                class="hover:bg-orange-500 rounded-md border border-spacing-4"><i
                                    class="fa-brands fa-instagram text-gray-500 text-3xl p-2 hover:text-secondary"></i></a>
                            <div id="instagram" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Rajartan
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <a href="" data-tooltip-target="github" data-tooltip-placement="bottom"
                                type="button" class="hover:bg-orange-500 rounded-md border border-spacing-4"><i
                                    class="fa-brands fa-github text-gray-500 text-3xl p-2 hover:text-secondary"></i></a>
                            <div id="github" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Rajartan
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <a href="" data-tooltip-target="discord" data-tooltip-placement="bottom"
                                type="button" class="hover:bg-orange-500 rounded-md border border-spacing-4">
                                <i class="fa-brands fa-discord text-gray-500 text-3xl p-2 hover:text-secondary"></i></a>
                            <div id="discord" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Rachlapg
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- akhir section sosial media --}}

    {{-- awal section produk unggulan --}}
    <section id="produk" class="pt-28">
        <div class="container">
            <div class="flex flex-wrap items-center justify-between">
                <div class="w-full md:w-1/2 px-4">
                    <div class="mb-8">
                        <h3 class="font-medium text-5xl mb-4">Produk Unggulan Saya</h3>
                        <p class="text-base text-gray-500">Produk sudah teruji dan digunakan oleh klien</p>
                    </div>
                    <a href="" class="py-3 px-4 text-lg bg-orange-500 rounded shadow-md text-secondary">Cek
                        Produk</a>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <img src="images/rajartan.png" alt="" class="w-full">
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section produk unggulan --}}

    {{-- awal section kontak --}}
    <section id="kontak" class="pt-28">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="flex items-center bg-orange-500 py-20 rounded">
                        <div class="text-left pl-8">
                            <p class="text-lg text-secondary">Apakah ada yang bisa saya bantu?</p>
                            <h3 class="text-5xl font-medium text-secondary">Saya siap membantu anda</h3>
                        </div>
                        <div class="mx-auto">
                            <a class="py-4 px-5 bg-secondary rounded shadow-md-light  text-center text-xl font-bold mx-auto text-orange-500" role="button"
                            href="mailto:rajartan201319@gmail.com">Hubungi Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section kontak --}}
@endsection
