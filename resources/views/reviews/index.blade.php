@extends('_layouts.main')

@section('content')
<main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <!-- Breadcrumb Start -->
                        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                                Tables
                            </h2>

                            <nav>
                                <a
                                    href="/movies/create"
                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                                >
                                    Create
                                </a>
                            </nav>
                        </div>
                        <!-- Breadcrumb End -->

                        <!-- ====== Table Section Start -->
                        <div class="flex flex-col gap-10">
                            <!-- ====== Table Two Start -->
                            <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="px-4 py-2">id.</th>
                                    <th class="px-4 py-2">Movies</th>
                                    <th class="px-4 py-2">User</th>
                                    <th class="px-4 py-2">Rating</th>
                                    <th class="px-4 py-2">Date</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td class="px-4 py-2">1.</td>
                                    <td class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                        <div class="w-12 rounded-md">
                                            <img src="src/images/movie/movie-01.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Attack on Titan
                                        </p>
                                    </td>
                                    <td class="px-4 py-2">
                                         Alex Brian
                                    </td>
                                    <td class="px-4 py-2">
                                       4 
                                    </td>
                                    <td class="px-4 py-2">
                                        01 Oktober 2021
                                    </td>
                                </tr>
                                <tr>
                                    <tr>
                                    <td class="px-4 py-2">1.</td>
                                    <td class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                        <div class="w-12 rounded-md">
                                            <img src="src/images/movie/movie-02.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black dark:text-white">
                                              Noragami
                                        </p>
                                    </td>
                                    <td class="px-4 py-2">
                                         Beby Girl
                                    </td>
                                    <td class="px-4 py-2">
                                        4
                                    </td>
                                    <td class="px-4 py-2">
                                        20 November 2021
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2">3.</td>
                                    <td class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                        <div class="w-12 rounded-md">
                                            <img src="src/images/movie/movie-03.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Wind Breaker
                                        </p>
                                    </td>
                                    <td class="px-4 py-2">
                                         Bryan Elvaro
                                    </td>
                                    <td class="px-4 py-2">
                                        5
                                    </td>
                                    <td class="px-4 py-2">
                                        28 Desember 2019
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2">4.</td>
                                    <td class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                        <div class="w-12 rounded-md">
                                            <img src="src/images/movie/movie-04.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black dark:text-white">
                                         Spy × Family
                                        </p>
                                    </td>
                                    <td class="px-4 py-2">
                                        Alvino Jord
                                    </td>
                                    <td class="px-4 py-2">
                                        5
                                    </td>
                                    <td class="px-4 py-2">
                                        20 Februari 2020
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2">5.</td>
                                    <td class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                        <div class="w-12 rounded-md">
                                            <img src="src/images/movie/movie-05.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black dark:text-white">
                                         Detective Conan: Black Iron Submarine (2023)
                                        </p>
                                    </td>
                                    <td class="px-4 py-2">
                                        Vino Bastian
                                    </td>
                                    <td class="px-4 py-2">
                                        5
                                    </td>
                                    <td class="px-4 py-2">
                                        21 Januari 2022
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            <!-- ====== Table Two End -->
                        </div>
                        <!-- ====== Table Section End -->
                    </div>
                </main>
@endsection