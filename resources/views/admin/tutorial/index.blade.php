@extends('admin.layouts.main')

@section('admin_content')
    {{-- awal section data tutorial --}}
    <section id="admintutorial" class="pt-8">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <h3 class="text-2xl text-primary font-semibold">Tutorials</h3>
                    <hr class="mb-10">
                    <a href="" class="px-3 py-2 bg-orange-500 text-secondary rounded"><i class="fa fa-plus"></i> Add Tutorial</a>
                    <div class="overflow-x-auto relative mt-4">
                        <table class="w-full text-base text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-base text-primary bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6 rounded-l">
                                        No
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Image
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Title
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Category
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Link
                                    </th>
                                    <th scope="col" class="py-3 px-6 rounded-r">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tutorials as $tutorial)
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="py-4 px-6">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $tutorial->image }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $tutorial->name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $tutorial->category->name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $tutorial->slug }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex">
                                            <a href="/admin/tutorial/{{ $tutorial->slug }}/edit" class="px-2 py-1.5 rounded text-secondary mr-2 bg-yellow-300"><i class="fa fa-edit"></i></a>
                                            <a href="" class="px-2 py-1.5 rounded text-secondary bg-red-500"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <nav aria-label="Page navigation example">
                            <ul class="inline-flex -space-x-px">
                            <li>
                                <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $loop->iteration }}</a>
                            <li>
                                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir section data tutorial --}}
@endsection
