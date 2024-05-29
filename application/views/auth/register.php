<body> <!-- Header -->
<div class="container-fluid m-0 p-0 content-wrapper">
    <nav class="nav navbar-expand-lg navbar-dark shadow bg-main">
        <div class="container text-center bg-main py-2">
            <a class="title navbar-brand mx-auto p-4">
                <h3 class="font-semibold text-xl">Kursus Online Programming</h3>
            </a>
        </div>
    </nav>
        <div class="">
            <div class="row justify-content-center mx-auto mt-5">
                <div class="col-md-6 col-sm-8 col-lg-5">
                    <div class="border border-black-800 rounded-lg mx-w-xl mx-auto px-4 p-6">
                        <div class="card-body mt-5">
                            <div class="text-center mb-4">
                                <i class="fa-brands fa-strava fa-3x"></i>
                                <h2 class="card-title">Daftar Akun</h2>
                            </div>

                            <?= $this->session->flashdata('message');?> 


                            <form action="<?= base_url('auth/registrasi') ?>" method="post">
                                <div class="mb-2">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Ketikan Nama" value="<?= set_value('nama'); ?>" required>
                                </div>
                                <div class="mb-2">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Ketikan Email" value="<?= set_value('email'); ?>" required>
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="form-label">Kata Sandi</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Ketikan Kata Sandi" required>
                                        <button type="button" class="show-password" onclick="togglePassword()">Tampilkan</button>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mt-5">
                                    <button type="submit" class="btn text-gray btn-danger btn-block rounded-pill">Daftar</button>
                                </div>
                            </form>
                            <p class="text-center mt-4">Sudah punya akun?<a href="<?= base_url('auth')  ?>" class="text-danger"> Log in</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   

    