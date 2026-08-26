<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between h-16">

            <!-- LEFT SIDE -->
            <div class="flex">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">

                    @if(auth()->user()->role === 'admin')

                        <a href="{{ route('dashboard') }}">

                    @else

                        <a href="{{ route('student.dashboard') }}">

                    @endif

                        <x-application-logo
                            class="block h-9 w-auto fill-current text-gray-800"
                        />

                    </a>

                </div>


                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    <!-- =========================
                         ADMIN NAVIGATION
                    ========================= -->

                    @if(auth()->user()->role === 'admin')

                        <!-- Dashboard -->
                        <x-nav-link
                            :href="route('dashboard')"
                            :active="request()->routeIs('dashboard')"
                        >
                            {{ __('Dashboard') }}
                        </x-nav-link>


                        <!-- Students -->
                        <x-nav-link
                            :href="route('students.index')"
                            :active="request()->routeIs('students.*')"
                        >
                            {{ __('Students') }}
                        </x-nav-link>


                        <!-- Courses -->
                        <x-nav-link
                            :href="route('courses.index')"
                            :active="request()->routeIs('courses.*')"
                        >
                            {{ __('Courses') }}
                        </x-nav-link>


                        <!-- Users -->
                        <x-nav-link
                            :href="route('users.index')"
                            :active="request()->routeIs('users.*')"
                        >
                            {{ __('Users') }}
                        </x-nav-link>

                    @endif


                    <!-- =========================
                         STUDENT NAVIGATION
                    ========================= -->

                    @if(auth()->user()->role === 'student')

                        <!-- Student Dashboard -->
                        <x-nav-link
                            :href="route('student.dashboard')"
                            :active="request()->routeIs('student.dashboard')"
                        >
                            {{ __('Dashboard') }}
                        </x-nav-link>


                        <!-- Student Courses -->
                        <x-nav-link
                            :href="route('student.courses')"
                            :active="request()->routeIs('student.courses')"
                        >
                            {{ __('Courses') }}
                        </x-nav-link>

                    @endif

                </div>

            </div>


            <!-- RIGHT SIDE -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <x-dropdown align="right" width="48">

                    <!-- User Dropdown Button -->
                    <x-slot name="trigger">

                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                        >

                            <!-- User Name -->
                            <div>
                                {{ Auth::user()->name }}
                            </div>


                            <!-- User Role -->
                            <div class="ms-2 text-xs text-indigo-600 font-bold uppercase">
                                {{ Auth::user()->role }}
                            </div>


                            <!-- Arrow -->
                            <div class="ms-1">

                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >

                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />

                                </svg>

                            </div>

                        </button>

                    </x-slot>


                    <!-- Dropdown Content -->
                    <x-slot name="content">

                        <!-- Profile -->
                        <x-dropdown-link
                            :href="route('profile.edit')"
                        >
                            {{ __('Profile') }}
                        </x-dropdown-link>


                        <!-- Logout -->
                        <form
                            method="POST"
                            action="{{ route('logout') }}"
                        >

                            @csrf

                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                            >
                                {{ __('Log Out') }}
                            </x-dropdown-link>

                        </form>

                    </x-slot>

                </x-dropdown>

            </div>


            <!-- MOBILE MENU BUTTON -->
            <div class="-me-2 flex items-center sm:hidden">

                <button
                    @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                >

                    <svg
                        class="h-6 w-6"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 24 24"
                    >

                        <path
                            :class="{'hidden': open, 'inline-flex': ! open}"
                            class="inline-flex"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />

                        <path
                            :class="{'hidden': ! open, 'inline-flex': open}"
                            class="hidden"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />

                    </svg>

                </button>

            </div>

        </div>

    </div>


    <!-- =========================
         RESPONSIVE NAVIGATION
    ========================= -->

    <div
        :class="{'block': open, 'hidden': ! open}"
        class="hidden sm:hidden"
    >

        <div class="pt-2 pb-3 space-y-1">


            <!-- =========================
                 ADMIN MOBILE LINKS
            ========================= -->

            @if(auth()->user()->role === 'admin')

                <!-- Dashboard -->
                <x-responsive-nav-link
                    :href="route('dashboard')"
                    :active="request()->routeIs('dashboard')"
                >
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>


                <!-- Students -->
                <x-responsive-nav-link
                    :href="route('students.index')"
                    :active="request()->routeIs('students.*')"
                >
                    {{ __('Students') }}
                </x-responsive-nav-link>


                <!-- Courses -->
                <x-responsive-nav-link
                    :href="route('courses.index')"
                    :active="request()->routeIs('courses.*')"
                >
                    {{ __('Courses') }}
                </x-responsive-nav-link>


                <!-- Users -->
                <x-responsive-nav-link
                    :href="route('users.index')"
                    :active="request()->routeIs('users.*')"
                >
                    {{ __('Users') }}
                </x-responsive-nav-link>

            @endif


            <!-- =========================
                 STUDENT MOBILE LINKS
            ========================= -->

            @if(auth()->user()->role === 'student')

                <!-- Student Dashboard -->
                <x-responsive-nav-link
                    :href="route('student.dashboard')"
                    :active="request()->routeIs('student.dashboard')"
                >
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>


                <!-- Student Courses -->
                <x-responsive-nav-link
                    :href="route('student.courses')"
                    :active="request()->routeIs('student.courses')"
                >
                    {{ __('Courses') }}
                </x-responsive-nav-link>

            @endif

        </div>


        <!-- =========================
             RESPONSIVE USER INFORMATION
        ========================= -->

        <div class="pt-4 pb-1 border-t border-gray-200">

            <div class="px-4">

                <div class="font-medium text-base text-gray-800">
                    {{ Auth::user()->name }}
                </div>

                <div class="font-medium text-sm text-gray-500">
                    {{ Auth::user()->email }}
                </div>

                <div class="text-xs text-indigo-600 font-bold uppercase mt-1">
                    {{ Auth::user()->role }}
                </div>

            </div>


            <!-- Responsive Settings -->
            <div class="mt-3 space-y-1">

                <!-- Profile -->
                <x-responsive-nav-link
                    :href="route('profile.edit')"
                >
                    {{ __('Profile') }}
                </x-responsive-nav-link>


                <!-- Logout -->
                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >

                    @csrf

                    <x-responsive-nav-link
                        :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>

                </form>

            </div>

        </div>

    </div>

</nav>