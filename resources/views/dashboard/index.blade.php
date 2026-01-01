@extends('layouts.app')

@section('content')
<div class="content">

    <!-- CARD UTAMA -->
    <div class="card mb-6">
        <h2 class="text-xl font-bold text-center mb-4">PROFIL PERUSAHAAN</h2>

        <div class="flex gap-6">
            <img src="{{ asset('images/dashboard/foto-toko.jpg') }}"
                 class="w-60 h-40 rounded-lg object-cover">

            <div>
                <h5 class="font-bold text-lg mb-2">ES KOPI & BRASIL</h5>
                <p class="text-gray-600 text-sm">
                    Jl. Jenderal Suprapto No.25, Kauman Lama, Purwokerto Lor, Kec. Purwokerto Timur,
                    Kabupaten Banyumas, Jawa Tengah 53114
                </p>
            </div>
        </div>
    </div>

    <!-- CARD GALERI -->
    <div class="card mb-6">
        <div class="grid grid-cols-4 gap-4">
            @for ($i = 1; $i <= 8; $i++)
                <img src="{{ asset('images/dashboard/galeri'.$i.'.jpg') }}"
                     class="rounded-lg h-32 object-cover">
            @endfor
        </div>
    </div>

    <div class="card">
        <p
        class="leading-relaxed text-gray-700"
        style="text-align: justify;">
        Berdiri sejak tahun 1968, Ruko Es & Kopi Brasil telah berkembang menjadi lokasi pusat penjualan produk-produk
        unggulan Brasil, oleh-oleh khas Purwokerto, dan tempat makan prasmanan tradisional. Nama “Brasil” dalam merk ini 
        bukan merujuk ke negara, melainkan singkatan dari kata “berhasil”, sebagai doa dan harapan dari pendiri agar usaha 
        ini sukses dan terus dikenal luas. Selama 56 tahun, Es Brasil terus menjadi usaha keluarga yang turun - temurun 
        mempertahankan cita rasa khas tradisional es puter & es krim untuk dinikmati bersama. Selain es puter tradisional, 
        juga menyediakan varian es krim dengan rasa yang modern seperti Oreo, Green Tea, Blackforest, Almond, Mocca dan 
        masih banyak lagi. Kini, Es Brasil telah berkembang menjadi salah satu merek es tradisional yang sangat dikenal 
        oleh masyarakat, tidak hanya di Purwokerto tetapi juga di daerah lainnya, seperti Jakarta. Dengan konsistensi 
        rasa yang tetap terjaga dan inovasi produk yang terus berkembang, perusahaan ini tetap relevan dari masa ke masa 
        dan menjadi salah satu ikon kuliner daerah yang tak lekang oleh waktu.
        </p>
    </div>

</div>
@endsection