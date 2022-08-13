@extends('admin_layouts.main')

@section('content')
<main class="w-full flex-grow p-6">
    <h1 class="text-3xl text-black pb-6">Tutorials</h1>
            <div class="text-lg py-2 px-3 flex items-center text-sidebar">
                <i class="fas fa-plus mr-3"></i> <a href="" class="py-2 px-3 bg-blue-500 text-secondary rounded ">Tambah Data</a>
            </div>

    <div class="flex flex-wrap mt-3">
        <div class="w-full overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            No
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Image
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Link
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tutorials as $tutorial)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">{{ $loop->iteration }}</td>
                        <td class="py-4 px-6">{{ $tutorial->name }}</td>
                        <td class="py-4 px-6">{{ $tutorial->image }}</td>
                        <td class="py-4 px-6">{{ $tutorial->category->name }}</td>
                        <td class="py-4 px-6">{{ $tutorial->slug }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
