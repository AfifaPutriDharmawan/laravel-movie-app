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
                                    <th class="px-4 py-2">No.</th>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">Genre</th>
                                    <th class="px-4 py-2">Actions</th>
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
                                        Attack on Titan is an anime series that follows the story of Eren Yeager and his friends, who live in a world where giant humanoid creatures called Titans prey on humans.
                                    </td>
                                    <td class="px-4 py-2">
                                        Action, Adventure, Fantasy
                                    </td>
                                    <td class="px-4 py-2 flex items-center space-x-2">
                                        <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                        <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
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
                                    Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.
                                    </td>
                                    <td class="px-4 py-2">
                                        Drama
                                    </td>
                                    <td class="px-4 py-2 flex items-center space-x-2">
                                        <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                        <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
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
                                        Haruka Sakura wants nothing to do with weaklings—he's only interested in the strongest of the strong.
                                    </td>
                                    <td class="px-4 py-2">
                                        Action
                                    </td>
                                    <td class="px-4 py-2 flex items-center space-x-2">
                                        <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                        <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
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
                                        The story follows a spy who has to "build a family" to execute a mission, not realizing that his adopted daughter is a telepath, and the woman he agrees to marry is a skilled assassin.
                                    </td>
                                    <td class="px-4 py-2">
                                        Shonen manga
                                    </td>
                                    <td class="px-4 py-2 flex items-center space-x-2">
                                        <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                        <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
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
                                        The story follows a spy who has to "build a family" to execute a mission, not realizing that his adopted daughter is a telepath, and the woman he agrees to marry is a skilled assassin.
                                    </td>
                                    <td class="px-4 py-2">
                                        Animasi, misteri, detektif, drama, kriminal
                                    </td>
                                    <td class="px-4 py-2 flex items-center space-x-2">
                                        <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                        <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
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