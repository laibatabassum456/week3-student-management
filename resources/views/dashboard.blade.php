<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">
                    Admin Dashboard
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Overview of your student management system
                </p>
            </div>

            <div class="text-sm text-gray-500">
                Welcome back, <span class="font-semibold text-gray-700">
                    {{ auth()->user()->name }}
                </span>
            </div>
        </div>
    </x-slot>

    <div class="py-10 bg-gray-50 min-h-screen">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Page Heading --}}
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">
                    Dashboard
                </h1>

                <p class="mt-2 text-gray-500">
                    Manage students, courses and registered users from one place.
                </p>
            </div>


            {{-- Statistics --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">

                {{-- Students --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100
                            hover:shadow-md transition duration-200">

                    <div class="p-6">

                        <div class="flex items-center justify-between">

                            <div>
                                <p class="text-sm font-medium text-gray-500">
                                    Total Students
                                </p>

                                <p class="text-4xl font-bold text-gray-900 mt-2">
                                    {{ \App\Models\Student::count() }}
                                </p>
                            </div>

                            <div class="w-12 h-12 rounded-xl bg-indigo-50
                                        flex items-center justify-center">

                                <svg class="w-6 h-6 text-indigo-600"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M17 20h5v-2a3 3 0 00-5.196-2.121
                                             M9 20H4v-2a3 3 0 015.196-2.121
                                             M15 11a4 4 0 10-6 0
                                             M17 8a3 3 0 11-6 0
                                             M7 8a3 3 0 11-6 0"/>
                                </svg>

                            </div>

                        </div>

                        <a href="{{ route('students.index') }}"
                           class="inline-flex items-center mt-5 text-sm font-semibold
                                  text-indigo-600 hover:text-indigo-800">

                            View Students

                            <span class="ml-2">
                                →
                            </span>

                        </a>

                    </div>

                </div>


                {{-- Courses --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100
                            hover:shadow-md transition duration-200">

                    <div class="p-6">

                        <div class="flex items-center justify-between">

                            <div>
                                <p class="text-sm font-medium text-gray-500">
                                    Total Courses
                                </p>

                                <p class="text-4xl font-bold text-gray-900 mt-2">
                                    {{ \App\Models\Course::count() }}
                                </p>
                            </div>

                            <div class="w-12 h-12 rounded-xl bg-emerald-50
                                        flex items-center justify-center">

                                <svg class="w-6 h-6 text-emerald-600"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 14l9-5-9-5-9 5 9 5z"/>

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 14l6.16-3.422
                                             A12.083 12.083 0 0118 20.5
                                             12.083 12.083 0 016 20.5
                                             12.083 12.083 0 015.84 10.578
                                             L12 14z"/>
                                </svg>

                            </div>

                        </div>

                        <a href="{{ route('courses.index') }}"
                           class="inline-flex items-center mt-5 text-sm font-semibold
                                  text-emerald-600 hover:text-emerald-800">

                            View Courses

                            <span class="ml-2">
                                →
                            </span>

                        </a>

                    </div>

                </div>


                {{-- Users --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100
                            hover:shadow-md transition duration-200">

                    <div class="p-6">

                        <div class="flex items-center justify-between">

                            <div>
                                <p class="text-sm font-medium text-gray-500">
                                    Total Users
                                </p>

                                <p class="text-4xl font-bold text-gray-900 mt-2">
                                    {{ \App\Models\User::count() }}
                                </p>
                            </div>

                            <div class="w-12 h-12 rounded-xl bg-purple-50
                                        flex items-center justify-center">

                                <svg class="w-6 h-6 text-purple-600"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M16 7a4 4 0 11-8 0
                                             4 4 0 018 0z
                                             M12 14a7 7 0 00-7 7h14
                                             a7 7 0 00-7-7z"/>
                                </svg>

                            </div>

                        </div>

                        <span class="inline-block mt-5 text-sm text-gray-500">
                            Registered Accounts
                        </span>

                    </div>

                </div>

            </div>


            {{-- Welcome Card --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100
                        overflow-hidden mb-8">

                <div class="p-8">

                    <div class="flex flex-col md:flex-row md:items-center
                                md:justify-between gap-6">

                        <div>

                            <div class="flex items-center gap-3 mb-3">

                                <div class="w-10 h-10 rounded-full bg-indigo-100
                                            flex items-center justify-center">

                                    <span class="text-indigo-700 font-bold">
                                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                    </span>

                                </div>

                                <span class="text-sm font-medium text-indigo-600">
                                    Administrator
                                </span>

                            </div>

                            <h3 class="text-2xl font-bold text-gray-900">
                                Welcome, {{ auth()->user()->name }}!
                            </h3>

                            <p class="text-gray-500 mt-2 max-w-xl">
                                You are logged in as an administrator.
                                Use the quick actions to manage students and courses.
                            </p>

                        </div>

                    </div>


                    {{-- Action Buttons --}}
                    <div class="mt-8 flex flex-col sm:flex-row gap-3">

                        <a href="{{ route('students.index') }}"
                           class="inline-flex items-center justify-center
                                  px-5 py-3 rounded-xl
                                  bg-indigo-600 text-white font-semibold
                                  hover:bg-indigo-700
                                  transition duration-200 shadow-sm">

                            Manage Students

                            <span class="ml-2">
                                →
                            </span>

                        </a>


                        <a href="{{ route('students.create') }}"
                           class="inline-flex items-center justify-center
                                  px-5 py-3 rounded-xl
                                  border border-gray-200
                                  bg-white text-gray-700 font-semibold
                                  hover:bg-gray-50
                                  transition duration-200">

                            + Add Student

                        </a>


                        <a href="{{ route('courses.index') }}"
                           class="inline-flex items-center justify-center
                                  px-5 py-3 rounded-xl
                                  bg-gray-900 text-white font-semibold
                                  hover:bg-gray-800
                                  transition duration-200">

                            Manage Courses

                            <span class="ml-2">
                                →
                            </span>

                        </a>

                    </div>

                </div>

            </div>


            {{-- Quick Information --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-white rounded-2xl border border-gray-100
                            shadow-sm p-6">

                    <h3 class="text-lg font-bold text-gray-900">
                        Student Management
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Add new students, update their information,
                        upload profile images and view student profiles.
                    </p>

                    <a href="{{ route('students.index') }}"
                       class="inline-block mt-4 text-sm font-semibold
                              text-indigo-600 hover:text-indigo-800">

                        Open Student Module →

                    </a>

                </div>


                <div class="bg-white rounded-2xl border border-gray-100
                            shadow-sm p-6">

                    <h3 class="text-lg font-bold text-gray-900">
                        Course Management
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        View available courses and see the number of
                        students enrolled in each course.
                    </p>

                    <a href="{{ route('courses.index') }}"
                       class="inline-block mt-4 text-sm font-semibold
                              text-emerald-600 hover:text-emerald-800">

                        Open Course Module →

                    </a>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>