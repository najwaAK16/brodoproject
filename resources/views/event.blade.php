@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: transparent; transition: background-color 0.3s;">
    <div class="container"> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#invitation">INVITATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#film">FILM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#filosofi">FILOSOFI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">GALLERY</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid p-0">
    <!-- Hero Section -->
    <div class="hero text-center text-white d-flex align-items-center" 
         style="background-image: url('{{ asset('images/bghutan.png') }}'); height: 470px; background-size: cover;">
        <div style="padding-top: 60px">
            <h1 class="BRO" style="font-style: italic; text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5);">
                Bro Do Fest 2.0
            </h1>
            <h2 class="text-uppercase" style="font-weight: bold;">ANTRA: <br> MAYANIDRA PRAKASHA</h2>
            <p class="shine mt-3">Shinning Beyond Imagination</p>
        </div>
    </div>

    <!-- Content Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('images/foto-event.png') }}" class="img-fluid rounded" alt="Bro Do Fest 2.0">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h3 class="mb-3">Bro Do Fest 2.0</h3>
                    <p style="text-align: justify;">
                        Bro Do Fest 22.0 mengusung tema <span class="biru2">"Antra: Mayanidra Prakasha"</span> dan memiliki tagline 
                        <span class="biru2">"Shinning Beyond Imagination"</span> yang maknanya adalah kami kembali bersinar sebagai event 
                        <span class="biru2">Bro Do Fest 2.0</span> yang melampaui imajinasi.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <div id="home" class="section" style="padding-top: 70px;">
        <div class="container">
            <h1>Welcome to Bro Do Fest</h1>
            <p>Creating unforgettable moments through film that leave a timeless impact.</p>
        </div>
    </div>
    
    <div id="about" class="section" style="padding: 100px 0;">
        <div class="container">
            <h2>About Bro Do Fest</h2>
            <p>Informasi mengenai acara Bro Do Fest.</p>
        </div>
    </div>
    
    <div id="invitation" class="section" style="padding: 100px 0;">
        <div class="container">
            <h2>Invitation</h2>
            <p>Detail undangan untuk acara Bro Do Fest.</p>
        </div>
    </div>
    
    <div id="film" class="section" style="padding: 100px 0;">
        <div class="container">
            <h2>Film</h2>
            <p>Karya film yang akan ditampilkan dalam acara.</p>
        </div>
    </div>
    
    <div id="filosofi" class="section" style="padding: 100px 0;">
        <div class="container">
            <h2>Filosofi</h2>
            <p>Filosofi di balik Bro Do Fest.</p>
        </div>
    </div>
    
    <div id="gallery" class="section" style="padding: 100px 0;">
        <div class="container">
            <h2>Gallery</h2>
            <p>Galeri foto dan video Bro Do Fest.</p>
        </div>
    </div>
    
</div>
@endsection

<script>
    document.querySelectorAll('a.nav-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 70, // Sesuaikan offset agar header tidak menutupi konten
                    behavior: 'smooth'
                });
            }
        });
    });

    // Tambahkan event listener untuk mendeteksi scroll
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) { // Jika menggulir lebih dari 50px
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    document.addEventListener('scroll', function () {
        const sections = document.querySelectorAll('.section');
        const navLinks = document.querySelectorAll('.nav-link');

        let currentSectionId = '';

        // Cari section yang sedang berada di viewport
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 80; // Sesuaikan dengan tinggi navbar
            const sectionHeight = section.offsetHeight;

            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });

        // Perbarui kelas aktif pada navbar link
        navLinks.forEach(link => {
            if (link.getAttribute('href').substring(1) === currentSectionId) {
                link.classList.add('active-section');
            } else {
                link.classList.remove('active-section');
            }
        });
    });
</script>

