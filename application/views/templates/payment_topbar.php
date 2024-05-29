<div class="container-fluid m-0 p-0 content-wrapper">
    <header class="bg-blue-900">
        <div class="mx-auto max-w-screen-5xl px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="flex flex-row justify-center sm:flex-row items-center sm:text-left">
                    <svg class="w-8 fill-white hover:fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M158.4 0L7 292h89.2l62.2-116.1L220.1 292h88.5zm150.2 292l-43.9 88.2-44.6-88.2h-67.6l112.2 220 111.5-220z" />
                    </svg>
                    <p class="text-2xl font-bold text-white sm:text-3xl transform  translate-x-6;">Kursus Programmer</p>
                </div>
                <nav class="">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
                        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 -translate-y-[38px] sm:-translate-y-0 -translate-x-5 sm:-translate-x-0" aria-controls="navbar-dropdown" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                            <ul class="flex flex-col font-medium md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                                <li>
                                    <a href="<?= base_url('kelas') ?>" class="block py-2 px-3 text-white duration-150 hover:border-b-2 hover:border-b-blue-600 md:bg-transparent md:p-0 " aria-current="page">Home</a>
                                </li>
                                <li>
                                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex duration-150 hover:border-b-2 hover:border-b-blue-600 items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto dark:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Product<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-60 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-center" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="<?= base_url('kelas/kelas_live') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:text-black rounded-full">Kelas Live Dengan Mentor</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?= base_url('tentang/about')  ?>" class="block duration-150 hover:border-b-2 hover:border-b-blue-600 py-2 px-3 text-white capitalize">about coding skuy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class=" sm:mt-0 sm:flex-row py-4 flex justify-center sm:items-center">
                    <div class="relative">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="gap-2 text-white font-medium text-sm px-5 text-center inline-flex items-center" type="button"><?= $user['nama'];  ?>
                            <img src="<?= base_url('vendor/img/profile/') . $user['image'];  ?>" alt="" class="rounded-full w-8 h-8 order-first ">
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-black dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="<?= base_url('user');  ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('kelas/cara_bayar');  ?>" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">FAQ</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/logout'); ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Dropdown menu -->
                    </div>


                </div>
            </div>
        </div>
    </header>