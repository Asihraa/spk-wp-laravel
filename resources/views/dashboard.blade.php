@extends('layouts.app')

@section('title', 'Dashboard - Selamat Datang')

@section('contents')
    <div class="row">
        Selamat datang di aplikasi SPK menggunakan metode WP,
        Silahkan pilih menu disamping untuk melakukan pengolahan data
    </div>
    <h3>Pengertian Metode WP</h3>
    <p>Metode Weighted Product (WP) adalah metode yang digunakan untuk menentukan peringkat dari sejumlah alternatif berdasarkan beberapa kriteria. WP menggunakan konsep perbandingan relatif untuk mengalikan nilai dari setiap kriteria yang telah dipangkatkan dengan bobot kriteria tersebut. Metode ini sangat efektif digunakan ketika ingin menggabungkan beberapa kriteria yang memiliki bobot atau tingkat kepentingan yang berbeda-beda.</p>
    <h3>Langkah-langkah Perhitungan dengan Metode WP</h3>
    <p>1. Penentuan Kriteria dan Alternatif

        * Tentukan kriteria-kriteria yang akan digunakan dalam pengambilan keputusan. Misalnya, dalam menentukan gunung terbaik untuk pendakian, kriteria bisa berupa biaya, durasi pendakian, ketersediaan sumber mata air, jarak, dan popularitas.
        * Tentukan alternatif yang akan dievaluasi berdasarkan kriteria tersebut. Misalnya, alternatif bisa berupa beberapa gunung yang akan dibandingkan.
    <p>2. Penentuan Bobot Kriteria
        
        * Setiap kriteria diberi bobot yang mencerminkan tingkat kepentingannya relatif terhadap kriteria lainnya. Bobot ini biasanya ditentukan oleh pembuat keputusan.</p>Penentuan Bobot Kriteria
        
        Setiap kriteria diberi bobot yang mencerminkan tingkat kepentingannya relatif terhadap kriteria lainnya. Bobot ini biasanya ditentukan oleh pembuat keputusan.
        
    <p>3. Normalisasi Bobot
        
        *Normalisasi bobot dilakukan dengan membagi setiap bobot kriteria dengan total bobot keseluruhan.</p>
        </p>
    
    
@endsection