@extends('admin.layouts.main')

@section('admin_content')
    {{-- awal section data tutorial --}}
    <section id="admintutorial" class="pt-8">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="overflow">
                        <div class="mt-5">
                            <a href="tutorial/create" class="px-3 py-3 rounded bg-orange-500 text-secondary text-base"><i class="fa fa-plus"></i> Tutorial</a>
                        </div>
                    <table class="w-full mt-5">
                        <thead class="bg-orange-500">
                            <tr class="text-gray-primary px-4">
                                <th>No</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-700">
                            @foreach ($tutorials as $tutorial)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tutorial->image }}</td>
                                <td>{{ $tutorial->name }}</td>
                                <td>{{ $tutorial->category->name }}</td>
                                <td>{{ $tutorial->slug }}</td>
                                <td>
                                    <a href="" class="p-3 bg-green-500 mr-1"><i class="fa fa-edit text-secondary"></i></a>
                                    <a href="" class="p-3 bg-red-500"><i class="fa fa-trash text-secondary"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section data tutorial --}}
@endsection
