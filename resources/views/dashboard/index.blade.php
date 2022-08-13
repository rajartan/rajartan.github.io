@extends('admin_layouts.main')

@section('content')
<main class="w-full flex-grow p-6">
    <h1 class="text-3xl text-black pb-6">Dashboard</h1>

    <div class="flex flex-wrap mt-6">
        <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-plus mr-3"></i> Monthly Reports
            </p>
            <div class="p-6 bg-white">
                <canvas id="chartOne" width="400" height="200"></canvas>
            </div>
        </div>
    </div>


</main>
@endsection
