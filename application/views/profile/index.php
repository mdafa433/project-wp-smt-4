    <div class="py-4 sm:mt-6 ">
        <h1 class="flex justify-center font-bold text-3xl py-8">Profil Anda</h1>
        <a href="#" class="relative block w-4/6 max-w-xl mx-auto overflow-hidden rounded-lg border border-black-100 p-4 sm:p-6 lg:p-8 hover:cursor-default ">
            <?= $this->session->flashdata('message'); ?>
            <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-red-500 from-10% via-blue-400 via-30% to-purple-300 to-90%"></span>
            <div class="flex justify-center items-center flex flex-col">
                <img class="rounded-full w-32 h-32 sm:w-40 sm:h-40" src="<?= base_url('vendor/img/profile/') . $user['image']; ?>" alt="">
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-2 mt-4 sm:ml-20">
                <div class="flex flex-col sm:flex-row ml-0 gap-2 sm:gap-0 md:ml-0 md:pl-8">
                    <img src="vendor/img/user.png" alt="" class="size-8">
                    <div class="">
                        <p class="w-full sm:w-64 font-bold text-lg sm:text-xl border-1 rounded-full flex justify-center items-center px-4 "><?= $user['nama']; ?></p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row ml-0 gap-2 sm:gap-0 md:ml-0 md:pl-8 ">
                    <img src="vendor/img/mail.png" alt="" class="size-8">
                    <div class="">
                        <p class="w-full sm:w-64 font-bold text-lg sm:text-xl border-1 rounded-full flex justify-center items-center px-4 text-center"><?= $user['email']; ?></p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row ml-0 gap-2 sm:gap-0 md:ml-0 md:pl-8">
                    <img src="vendor/img/feather.png" alt="" class="size-8">
                    <div class="">
                        <p class="w-full sm:w-64 font-bold text-lg sm:text-xl border-1 rounded-full flex justify-center items-center text-center"><?= date('d F Y', $user['tanggal_input']); ?></p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    </div>

    <div class="grid grid-cols-1 flex justify-center items-center w-32 mx-xl-xl mx-auto mb-20">
        <a class="flex justify-center text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br  shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2" href="#sunting">Sunting</a> 
    </div>

    <div class="py-6 sm:mt-20">
    <a name="sunting"></a>
    <div class="flex justify-center mr-6 md:mr-2 block border border-gray-200 bg-gradient-to-r from-red-300 to-blue-400 to-white-200 rounded-lg max-w-4xl mx-auto p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 max-w-xl">
            <div class="flex justify-center items-center">
                <img src="<?= base_url('vendor/img/profile/') . $user['image']; ?>" alt="Foto Profil" class="mt-2 mr-2 w-56 h-56 sm:w-80 sm:h-72 sm xl:w-96 xl:h-72 rounded-full object-cover ">
            </div>
            <div class=" max-w-xl px-4 mt-6 sm:mt-2 md:mt-4 lg:mt-6">
                <?= form_open_multipart('user/ubahprofil'); ?>
                <!-- Form Nama -->
                <div class="mb-4 sm:mb-6">
                    <label for="nama" class="block text-sm font-medium leading-6 text-black">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($user['nama']); ?>" class="block w-full sm:w-72 h-11 rounded-lg outline-none  ring-2 py-1.5 px-3 text-gray-900 placeholder-gray-400  text-sm">
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>
                <!-- End Form Nama -->

                <!-- Form Email -->
                <div class="mb-4 sm:mb-6">
                    <label for="email" class="block text-sm font-medium leading-6 text-black">Email</label>
                    <input type="email" name="email" id="email" value="<?= $user['email']; ?>" class="block w-full sm:w-72 h-11 rounded-lg outline-none ring-2 bg-slate-200 py-1.5 px-3 text-gray-900 placeholder-gray-400 text-sm hover:cursor-default" readonly>
                </div>
                <!-- End Form Email -->

                <!-- Form Image -->
                <div class="mb-4 sm:mb-6">
                    <label for="image" class="block text-sm font-medium leading-6 text-black">Ubah Foto Profil</label>
                    <input type="file" name="image" id="image" class="block w-full sm:w-72 h-11 py-2 rounded-lg bg-slate-200 py-1.5 px-3 text-gray-900 ring-2 placeholder-gray-400 focus:ring-2 focus:ring-blue-600 text-sm
                    file:text-violet-700 file:border-0 file:bg-violet-50 file:rounded-full hover:file:bg-violet-100 file:mr-4 file:py-1 file:px-4">
                </div>
                <!-- End Form Image -->

                <div class="">
                    <button type="submit"  class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5">Simpan</button>
                    <a href="<?= base_url('user') ?>" class="ml-6 font-semibold text-lg text-blue-600">Kembali</a>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
    </div>
</div>
</div>





   