<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-[48rem] mx-auto pb-20 pt-20">
        <form id="registerForm" action="<?= base_url('form/submit') ?>" method="post" class="border-2 border-gray-300 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="text-center">
                <span class="text-[32.2px] font-bold">Daftar Kelas Intro to Python Fast Track</span>
            </div>
            <div class="flex items-center justify-center py-8">
                <p class="text-[20px]">Form Pendaftaran:</p>
                <div class="border bg-gray-600 w-[15rem] h-1 translate-y-[3px]"></div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama1">Nama</label>
                <input name="nama1" id="nama1" class="appearance-none border outline-blue-600 rounded w-full py-2 px-3 text-gray-700 leading-tight" type="text" placeholder="Nama" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="no_whatsapp">No WhatsApp</label>
                <input name="no_whatsapp" id="no_whatsapp" class="appearance-none border outline-blue-600 rounded w-full py-2 px-3 text-gray-700 leading-tight" type="text" placeholder="No WhatsApp" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email1">Email</label>
                <input name="email1" id="email1" class="appearance-none border rounded outline-blue-600 w-full py-2 px-3 text-gray-700 leading-tight" type="email" placeholder="Email" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="skema_belajar">Skema Belajar</label>
                <select name="skema_belajar" id="skema_belajar" class="appearance-none border outline-blue-600 rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
                    <option value="Reguler Class">Reguler Class</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="metode_belajar">Metode Belajar</label>
                <select name="metode_belajar" id="metode_belajar" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="via Online Google Meet">Online via Google Meet</option>
                    <option value="Offline @Depok">Offline @Depok</option>
                </select>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-[20rem]">
                    Daftar Sekarang
                </button>
            </div>
        </form>
    </div>
</body>
</html>
