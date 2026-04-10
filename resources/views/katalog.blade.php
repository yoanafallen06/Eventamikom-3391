<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Katalog Event Amikom</title>
</head>
<body class="bg-slate-100 min-h-screen p-8 font-sans">
    
    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl font-black text-slate-900 mb-8 text-center tracking-tight">Katalog AmikomEventHub</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white p-6 rounded-2xl shadow-sm border-t-4 border-blue-500 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="font-bold text-xl text-slate-800">Workshop Laravel 11</h3>
                <p class="text-slate-500 text-sm mt-2">Belajar fundamental backend modern.</p>
                <button class="mt-4 px-4 py-2 bg-blue-50 text-blue-600 rounded-lg text-sm font-semibold w-full">Lihat Detail</button>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border-t-4 border-purple-500 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="font-bold text-xl text-slate-800">Seminar UI/UX</h3>
                <p class="text-slate-500 text-sm mt-2">Mendesain antarmuka yang ramah pengguna.</p>
                <button class="mt-4 px-4 py-2 bg-purple-50 text-purple-600 rounded-lg text-sm font-semibold w-full">Lihat Detail</button>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border-t-4 border-emerald-500 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="font-bold text-xl text-slate-800">Cyber Security 101</h3>
                <p class="text-slate-500 text-sm mt-2">Pengenalan keamanan jaringan dasar.</p>
                <button class="mt-4 px-4 py-2 bg-emerald-50 text-emerald-600 rounded-lg text-sm font-semibold w-full">Lihat Detail</button>
            </div>
        </div>

        <div class="flex flex-wrap gap-4 justify-center bg-white p-4 rounded-2xl shadow-sm">
            <a href="/" class="px-5 py-2.5 bg-slate-100 text-slate-700 rounded-full hover:bg-slate-200 transition font-semibold">Home</a>
            <a href="/profil" class="px-5 py-2.5 bg-slate-100 text-slate-700 rounded-full hover:bg-slate-200 transition font-semibold">Profil</a>
            <a href="/katalog" class="px-5 py-2.5 bg-slate-800 text-white rounded-full shadow-md font-semibold">Katalog</a>
            <a href="/bantuan" class="px-5 py-2.5 bg-slate-100 text-slate-700 rounded-full hover:bg-slate-200 transition font-semibold">Bantuan</a>
            <a href="/kontak" class="px-5 py-2.5 bg-slate-100 text-slate-700 rounded-full hover:bg-slate-200 transition font-semibold">Kontak</a>
        </div>
    </div>

</body>
</html>