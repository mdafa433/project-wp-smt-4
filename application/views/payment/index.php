<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title; ?></title>
</head>

<body>

    <a href="#" class="mt-4 mx-w-xl mx-auto block max-w-sm p-8 bg-slate-100 border border-gray-200 rounded-lg shadow hover:cursor-default">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-700">Pembayaran Materi</h5>
        <p class="font-bold text-3xl text-black">HTML</p>
        <p class="font-semibold text-black-400"><?= 'Nama: ' .  $user['nama']; ?></p>
        <p class="font-semibold text-black-400"><?= 'Email: ' . $user['email']; ?></p>
        <p class="font-semibold text-black-400">Harga: Rp.500.000.00</p>
    </a>

    <div class="mt-4 mx-auto block max-w-4xl p-12 bg-slate-100 border border-gray-200 rounded-lg shadow">
        <h5 class="mb-2 flex justify-center text-2xl font-bold tracking-tight text-blue-700">Cara Pembayaran</h5>
        <p class="font-bold text-sm text-black py-6">Sebelum Melakukan Pembayaran, Silahkan Pilih Kelas Yang Akan Di Minati</p>
        <p class="font-bold text-2xl text-black-400">Sistem Pembayaran</p>
        <p class="font-bold text-sm text-black-400">Silahkan kirim sejumlah uang yang sesuai dengan harga kelas yang akan di ikuti ke rekening berikut:</p>
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
            <div class="py-4">
                <img src="https://www.freepnglogos.com/uploads/logo-bca-png/bank-bca-file-bank-bri-logo-svg-wikimedia-commons-8.png" alt="" class="w-32 sm:-w-80">
                <p class="font-semibold text-sm text-black-400">No Rekening: XXXX-XXXX-XXXX</p>
                <p class="font-semibold text-sm text-black-400">Nama: XXXX-XXXX-XXXX</p>
            </div>
            <div class="py-4">
                <img src="https://www.freepnglogos.com/uploads/logo-bca-png/bca-mainan-jebo-6.png" alt="" class="w-32 sm:-w-80">
                <p class="font-semibold text-sm text-black-400">No Rekening: XXXX-XXXX-XXXX</p>
                <p class="font-semibold text-sm text-black-400">Nama: XXXX-XXXX-XXXX</p>
            </div>
            <div class="py-4">
                <img src="https://www.freepnglogos.com/uploads/logo-bca-png/bank-bca-solutions-agate-26.png" alt="" class="w-32 sm:-w-80">
                <p class="font-semibold text-sm text-black-400">No Rekening: XXXX-XXXX-XXXX</p>
                <p class="font-semibold text-sm text-black-400">Nama: XXXX-XXXX-XXXX</p>
            </div>
            <div class="py-4">
                <img src="https://www.freepnglogos.com/uploads/logo-bca-png/bank-bca-solutions-agate-26.png" alt="" class="w-32 sm:-w-80">
                <p class="font-semibold text-sm text-black-400">No Rekening: XXXX-XXXX-XXXX</p>
                <p class="font-semibold text-sm text-black-400">Nama: XXXX-XXXX-XXXX</p>
            </div>
            <div class="py-4">
                <img src="https://www.freepnglogos.com/uploads/logo-bca-png/bank-bca-solutions-agate-26.png" alt="" class="w-32 sm:-w-80">
                <p class="font-semibold text-sm text-black-400">No Rekening: XXXX-XXXX-XXXX</p>
                <p class="font-semibold text-sm text-black-400">Nama: XXXX-XXXX-XXXX</p>
            </div>
            <div class="py-4">
                <img src="https://www.freepnglogos.com/uploads/logo-bca-png/bank-bca-solutions-agate-26.png" alt="" class="w-32 sm:-w-80">
                <p class="font-semibold text-sm text-black-400">No Rekening: XXXX-XXXX-XXXX</p>
                <p class="font-semibold text-sm text-black-400">Nama: XXXX-XXXX-XXXX</p>
            </div>

        </div>
        <div class="flex items-center rounded-lg bg-white-300 text-black text-sm font-semibold px-4 py-3 mb-4" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <p>Setelah itu tekan tombol di bawah agar di arahkan ke WhatsApp admin untuk pengiriman bukti transfer</p>
        </div>
        <div class="flex justify-center">
            <div class="flex justify-center focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-80 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                </svg>
                <a href="https://wa.me/6281362186447?text=<?= 'Halo%20saya : ' .  $user['nama'] .  '%20Ingin%20Mengirim%20Bukti%20Pembayaran'; ?>" class="">Beli Sekarang</a>
            </div>
        </div>



    </div>




    </div>
</body>

</html>