<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <!-- Students -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-500 text-sm">
                            Total Students
                        </div>

                        <div class="text-3xl font-bold text-gray-800 mt-2">
                            {{ \App\Models\Student::count() }}
                        </div>

                        <a href="{{ route('students.index') }}"
                           class="text-indigo-600 hover:text-indigo-800 text-sm mt-3 inline-block">
                            View Students →
                        </a>
                    </div>
                </div>

                <!-- Courses -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-500 text-sm">
                            Total Courses
                        </div>

                        <div class="text-3xl font-bold text-gray-800 mt-2">
                            {{ \App\Models\Course::count() }}
                        </div>

                        <a href="{{ route('courses.index') }}"
                           class="text-indigo-600 hover:text-indigo-800 text-sm mt-3 inline-block">
                            View Courses →
                        </a>
                    </div>
                </div>

                <!-- Users -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-500 text-sm">
                            Total Users
                        </div>

                        <div class="text-3xl font-bold text-gray-800 mt-2">
                            {{ \App\Models\User::count() }}
                        </div>

                        <span class="text-gray-500 text-sm mt-3 inline-block">
                            Registered Accounts
                        </span>
                    </div>
                </div>

            </div>

            <!-- Welcome Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        Welcome, {{ auth()->user()->name }}!
                    </h3>

                    <p class="text-gray-600">
                        You are logged in as an administrator.
                    </p>

                    <div class="mt-6 flex gap-4">

                        <a href="{{ route('students.index') }}"
                           class="bg-indigo-600 text-white px-5 py-2 rounded-md hover:bg-indigo-700">
                            Manage Students
                        </a>

                        <a href="{{ route('courses.index') }}"
                           class="bg-gray-800 text-white px-5 py-2 rounded-md hover:bg-gray-900">
                            Manage Courses
                        </a>

                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>