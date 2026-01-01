@extends('layouts.app')

@section('content')

<div class="settings-wrapper">

    {{-- HEADER PROFIL --}}
    <div class="profile-card">
        <img src="{{ asset('images/avatar.png') }}" class="profile-avatar">

        <div class="profile-info">
            <h4>Fakhri Pangeran Beji</h4>
            <p>owner@gmail.com</p>
        </div>

        <span class="role">Owner</span>
    </div>

    {{-- PROFIL --}}
    <h3 class="section-title">Profil</h3>

    <div class="settings-card">
        <a href="#" class="settings-item">
            <i class="fa-regular fa-user"></i>
            <span>Info Profil</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>
    </div>

    {{-- PENGATURAN AKUN --}}
    <h3 class="section-title">Pengaturan Akun</h3>

    <div class="settings-card">
        <a href="#" class="settings-item">
            <i class="fa-solid fa-shield-halved"></i>
            <span>Kata Sandi & Keamanan</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>

        <a href="#" class="settings-item">
            <i class="fa-solid fa-globe"></i>
            <span>Bahasa</span>
            <span class="badge-lang">Indonesia</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>

        <a href="#" class="settings-item">
            <i class="fa-solid fa-headset"></i>
            <span>Bantuan</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>

        <a href="#" class="settings-item">
            <i class="fa-regular fa-circle-question"></i>
            <span>Tentang</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>
    </div>

</div>

@endsection