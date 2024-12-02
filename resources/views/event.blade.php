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
    <div class="hero-wrapper" 
     style="background-image: url('{{ asset('images/bghutanfull.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: top;">

    <!-- Hero Section -->
    <div id="home" class="hero section text-center text-white d-flex align-items-center" style="height: 470px;">
        <div style="padding-top: 180px">
            <h1 class="BRO" style="font-style: italic; text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5);">
                Bro Do Fest 2.0
            </h1>
            <h2 class="text-uppercase" style="font-weight: bold;">ANTRA: <br> MAYANIDRA PRAKASHA</h2>
            <p class="shine mt-3">Shinning Beyond Imagination</p>
        </div>
        <div style="position: absolute; top: 62%; left: 50%; transform: translate(-50%, -50%); z-index: 0; padding-top: 350px;">
            <img src="{{ asset('images/elemen.png') }}" alt="Elemen">
        </div>
    </div>


    <!-- Content Section -->
    <section class="section py-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('images/foto2.png') }}" class="img-fluid rounded" alt="Bro Do Fest 2.0" style="padding-left: 45px; padding-top: 25px;">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <h3 style="font-weight: 700; font-style: italic; padding-top:40px; padding-left:60px;">
                        <span class="kuning">Bro</span>
                        <span class="putih">Do</span>
                        <span class="kuning">Fest</span>
                        <span class="putih">2.0</span>
                    </h3>
                    <p style="text-align: justify; color:beige; padding-top:25px;">
                        <span class="kuning">Bro</span>
                        <span class="putih">Do</span>
                        <span class="kuning">Fest</span>
                        <span class="putih">2.0</span> 
                        <span class="putih">"Antra:</span> 
                        <span class="kuning">Mayanidra</span>
                        <span class="putih">Prakasha"</span>  dan memiliki tagline 
                        <span class="putih">"Shinning</span> 
                        <span class="kuning">Beyond</span>
                        <span class="putih">Imagination"</span>
                        yang maknanya adalah kami kembali bersinar sebagai event 
                        <span class="kuning">Bro</span>
                        <span class="putih">Do</span>
                        <span class="kuning">Fest</span>
                        <span class="putih">2.0</span>
                         yang melampaui imajinasi.
                    </p>
                </div>
            </div>
        </div>
        <div style="position: absolute; left: 50%; transform: translate(-50%, -50%); z-index: 0; padding-top: 170px;">
            <img src="{{ asset('images/elemen.png') }}" alt="Elemen">
        </div>
    </section>
    
    <div id="invitation" class="section" style="padding: 85px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 p-0">
                    <img src="{{ asset('images/kupu.png') }}" >
                </div>
                <div class="col d-flex flex-column justify-content-center p-0">
                    <h2 style="font-weight: 700; font-style: italic; padding-left:50px; padding-top:18px; color:#ffff; text-shadow: 0 0 1px rgba(255, 255, 255, 1), 0 0 1px rgba(255, 255, 255, 0.5), 0 0 50px rgba(255, 255, 255, 0.8), 0 0 100px rgba(255, 255, 255, 1);">
                        Will be held on
                    </h2>
                    <p style="text-align: justify; padding-top:30px; font-size:23px;">
                        <span class="putih">Date : </span>
                        <span class="kuning">14 December 2024</span>
                    </p>
                    <p style="text-align: justify; font-size:23px;">
                        <span class="putih">Time : </span>
                        <span class="kuning">07.00 - 17.10</span>
                    </p>
                    <p style="text-align: justify; font-size:23px;">
                        <span class="putih">Place : </span>
                        <span class="kuning">Lapang 2 SMKN 1 Katapang</span>
                    </p>
                    
                </div>
                <div class="col-sm-1">
                    <img src="{{ asset('images/kupu2.png') }}" style="padding-top:230px;">
                </div>
                <div class="col">
                    <img src="{{ asset('images/peta.png') }}" class="img-fluid rounded" alt="Bro Do Fest 2.0" style="padding-left: 45px; padding-top: 45px;">
                </div>
            </div>
        </div>
        <div style="position: absolute; left: 50%; transform: translate(-50%, -50%); z-index: 0; padding-top: 85px;">
            <img src="{{ asset('images/elemen.png') }}" alt="Elemen">
        </div>
    </div>
    
    <div id="film" class="section" style="padding: 85px 0;">
        <div class="container">
            <h2>Gallery</h2>
            <p>Galeri foto dan video Bro Do Fest.</p>
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
</div>
<footer class="footer text-white text-center py-3">
        <p>&copy; 2024 Bro Do Fest</p>
    </footer>
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

