<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Recruitment Player</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Pastikan Anda sudah menambahkan skrip EmailJS -->
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-6 bg-white shadow-lg rounded-lg max-w-xl mt-10">
    <h1 class="text-3xl font-semibold text-center mb-8">Open Recruitment Player</h1>
    <form id="contact-form" onsubmit="sendEmail(event)">
        <!-- Nama Asli -->
        <div class="mb-4">
            <label for="full-name" class="block text-sm font-medium text-gray-700">Nama Asli</label>
            <input type="text" id="full-name" name="full-name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <!-- Usia -->
        <div class="mb-4">
            <label for="age" class="block text-sm font-medium text-gray-700">Usia</label>
            <input type="number" id="age" name="age" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <!-- Nickname Game -->
        <div class="mb-4">
            <label for="nickname" class="block text-sm font-medium text-gray-700">Nickname Game</label>
            <input type="text" id="nickname" name="nickname" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <!-- ID Game -->
        <div class="mb-4">
            <label for="game-id" class="block text-sm font-medium text-gray-700">ID Game</label>
            <input type="text" id="game-id" name="game-id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <!-- Alamat Domisili -->
        <div class="mb-4">
            <label for="domicile" class="block text-sm font-medium text-gray-700">Alamat Domisili</label>
            <input type="text" id="domicile" name="domicile" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <!-- Upload Image Profil -->
        <div class="mb-4">
            <label for="profile-image" class="block text-sm font-medium text-gray-700">Upload Image Profil Akun</label>
            <input type="file" id="profile-image" name="profile-image" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-md file:text-sm file:bg-gray-100 file:text-indigo-700 hover:file:bg-indigo-50 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Kirim</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    (function() {
        emailjs.init("ovada288"); // Ganti dengan User ID Anda dari EmailJS
    })();

    function sendEmail(event) {
        event.preventDefault();  // Mencegah pengiriman form secara standar

        // Kirim data form ke EmailJS dengan Service ID dan Template ID
        emailjs.sendForm("service_y0qwjxw", "template_oac4o5b", this)
            .then(function(response) {
                console.log("Success!", response);
                alert("Formulir berhasil dikirim!");
            }, function(error) {
                console.log("Failed...", error);
                alert("Terjadi kesalahan, coba lagi!");
            });
    }
</script>

</body>
</html>
<?php /**PATH C:\laragon\www\kel4\resources\views/opmem.blade.php ENDPATH**/ ?>