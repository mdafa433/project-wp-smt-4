<!-- Header -->

<nav class="nav navbar-expand-lg navbar-dark shadow bg-main">
        <div class="container text-center bg-main py-2">
            <a class="title navbar-brand mx-auto p-4">
                <h3 class="font-semibold text-xl">Kursus Online Programming</h3>
            </a>
        </div>
    </nav>
        <div class="row justify-content-center mx-w-xl mx-auto py-6">
            <div class="col-md-8 col-sm-8  col-lg-5">
                <div class="border border-black-800 rounded-lg mx-auto px-4 p-6">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <i class="fa-brands fa-strava fa-3x"></i>
                            <h2 class="card-title">Login</h2>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('auth') ?>" method="post">
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ketikan Email" required>
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Ketikan Kata Sandi" required>
                                    <button type="button" class="show-password" onclick="togglePassword()">Tampilkan</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="true" id="rememberMe" name="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Ingat Saya
                                    </label>

                                </div>
                                <div class="text-end">
                                    <a href="#" class="text-danger">Lupa Kata Sandi?</a>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" class="btn text-gray btn-danger btn-block rounded-pill">Masuk</button>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <p>━━━━━━ Atau ━━━━━━</p>
                        </div>
                        <div class="mt-4 d-flex justify-content-between">
                            <!-- Google Icon -->
                            <div data-ripple-light="true" data-tooltip-target="google">
                            <a href="#" ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 48 48">
                                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                    <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                                    <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                                    <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                </svg></a>
                                </div>
                                <div data-tooltip="google" data-tooltip-placement="top" class="absolute z-50 whitespace-normal break-words rounded-lg bg-black py-1.5 px-3 font-sans text-sm font-normal text-white focus:outline-none ">
                                   Google
                                </div>

                            <!-- Facebook Icon -->
                            <div data-ripple-light="true" data-tooltip-target="facebook">
                            <a href="#" ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 48 48">
                                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                                    <path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                                </svg></a>
                                </div>
                                <div data-tooltip="facebook" data-tooltip-placement="top" class="absolute z-50 whitespace-normal break-words rounded-lg bg-black py-1.5 px-3 font-sans text-sm font-normal text-white focus:outline-none ">
                                    Facebook
                                </div>
                            <!-- X-Twitter Icon -->
                            <div data-ripple-light="true" data-tooltip-target="twitter">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 512 512">
                                    <path fill="#1DA1F2" d="M512,97.1c-18.8,8.4-39.1,14-60.2,16.5c21.6-13,38.1-33.5,45.9-58.1c-20.2,12-42.6,20.7-66.5,25.5c-19.1-20.4-46.2-33.1-76.2-33.1c-57.6,0-104.4,46.8-104.4,104.4c0,8.2,0.9,16.2,2.7,23.9c-87-4.4-164.2-46.2-216.1-109.9c-9,15.4-14.1,33.4-14.1,52.5c0,36.2,18.4,68.2,46.4,86.9c-17.1-0.5-33.2-5.3-47.3-13.1c-0.1,0.4-0.1,0.8-0.2,1.3c0,50.6,35.9,92.7,83.6,102c-8.7,2.4-17.9,3.7-27.4,3.7c-6.7,0-13.3-0.7-19.7-1.9c13.3,41.6,51.9,72.1,97.7,72.9c-35.8,28.1-81.1,44.9-130,44.9c-8.5,0-16.8-0.5-25.1-1.5c46.4,29.7,101.3,47,160,47c192,0,297.6-159,297.6-297.6c0-4.5-0.1-8.9-0.3-13.3C480.3,136.7,497.1,118.1,512,97.1z" />
                                </svg>
                            </a>
                            </div>
                            <div data-tooltip="twitter" data-tooltip-placement="top" class="absolute z-50 whitespace-normal break-words rounded-lg bg-black py-1.5 px-3 font-sans text-sm font-normal text-white focus:outline-none ">
                                Twitter
                            </div>
                            <!-- Instagram Icon -->
                            <div data-ripple-light="true" data-tooltip-target="instagram">
                            <a href="#" ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 48 48">
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fd5"></stop>
                                        <stop offset=".328" stop-color="#ff543f"></stop>
                                        <stop offset=".348" stop-color="#fc5245"></stop>
                                        <stop offset=".504" stop-color="#e64771"></stop>
                                        <stop offset=".643" stop-color="#d53e91"></stop>
                                        <stop offset=".761" stop-color="#cc39a4"></stop>
                                        <stop offset=".841" stop-color="#c837ab"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#4168c9"></stop>
                                        <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                    <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                    <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                    <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                </svg></a>
                                </div>
                                <div data-tooltip="instagram" data-tooltip-placement="top" class="absolute z-50 whitespace-normal break-words rounded-lg bg-black py-1.5 px-3 font-sans text-sm font-normal text-white focus:outline-none ">
                                             Instagram
                                </div>
                        </div>
                    </div>
                    <p class="text-center mt-4">Belum Memiliki Akun?<a href="<?= base_url('auth/registrasi')  ?>" class="text-danger"> Daftar Sekarang</a></p>
                </div>
            </div>
        </div>
    
