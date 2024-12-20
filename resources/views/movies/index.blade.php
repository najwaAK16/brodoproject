@extends('layouts.app')

@section('content')

<div class="container-fluid p-0">
    <!-- Hero Section -->
    <div class="hero-wrapper" 
     style="background-image: url('{{ asset('images/bghutanfull.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: top;">

     <div id="film" class="section" style="padding: 25px 0;">
        <div class="container">
            <div class="header-film" style="background: rgba(0, 0, 0, 0.7); height: 60px; display: flex; justify-content: center; align-items: center;">
                <h2 class="ourmovies" style="font-size: 30px; font-style: italic; color: #F6DDA4; text-shadow: 0 0 10px rgba(255, 255, 255, 0.2), 0 0 20px rgba(255, 255, 255, 0.2), 0 0 30px rgba(255, 255, 255, 0.2);">
                    Rating Movie
                </h2>
            </div>

            <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
                <div class="row py-3 justify-content-center" style="padding-left:18px;">
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card border-0">
                            <img src="{{ asset('images/cnth.jpg') }}" class="img-fluid mb-3">
                            <div class="konten-film" style="padding: 20px; padding-top:10px;">
                                <h4 class="judul-film fw-bold mb-3 kuning">Peramal Kode Buntut</h4>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Produser  : </span><span class="produser" style="color: #F6DDA4;">Ajeng Niramaya</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Sutradara : </span><span class="sutradara" style="color: #F6DDA4;">Stefanus Efendi</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Penulis naskah : </span><span class="penas" style="color: #F6DDA4;">Rasyid Faqih</span></p>
                                    <p style="margin-bottom: 15px"><span style="color: #ffff">Pemeran : </span><span class="cast" style="color: #F6DDA4;">Rasyid Faqih, Ajeng Niramaya, Stefanus Efendi</span></p>
                                <!-- Button trigger modal -->
                                <a href="/rating" type="button" class="btn btn-outline-custom">
                                    Rating <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card border-0">
                            <img src="{{ asset('images/cnth.jpg') }}" class="img-fluid mb-3">
                            <div class="konten-film" style="padding: 20px; padding-top:10px;">
                                <h4 class="judul-film fw-bold mb-3 kuning">Peramal Kode Buntut</h4>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Produser  : </span><span class="produser" style="color: #F6DDA4;">Ajeng Niramaya</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Sutradara : </span><span class="sutradara" style="color: #F6DDA4;">Stefanus Efendi</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Penulis naskah : </span><span class="penas" style="color: #F6DDA4;">Rasyid Faqih</span></p>
                                    <p style="margin-bottom: 15px"><span style="color: #ffff">Pemeran : </span><span class="cast" style="color: #F6DDA4;">Rasyid Faqih, Ajeng Niramaya, Stefanus Efendi</span></p>
                                <!-- Button trigger modal -->
                                <a href="/rating" type="button" class="btn btn-outline-custom">
                                    Rating <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card border-0">
                            <img src="{{ asset('images/cnth.jpg') }}" class="img-fluid mb-3">
                            <div class="konten-film" style="padding: 20px; padding-top:10px;">
                                <h4 class="judul-film fw-bold mb-3 kuning">Peramal Kode Buntut</h4>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Produser  : </span><span class="produser" style="color: #F6DDA4;">Ajeng Niramaya</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Sutradara : </span><span class="sutradara" style="color: #F6DDA4;">Stefanus Efendi</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Penulis naskah : </span><span class="penas" style="color: #F6DDA4;">Rasyid Faqih</span></p>
                                    <p style="margin-bottom: 15px"><span style="color: #ffff">Pemeran : </span><span class="cast" style="color: #F6DDA4;">Rasyid Faqih, Ajeng Niramaya, Stefanus Efendi</span></p>
                                <!-- Button trigger modal -->
                                <a href="/rating" type="button" class="btn btn-outline-custom">
                                    Rating <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card border-0">
                            <img src="{{ asset('images/cnth.jpg') }}" class="img-fluid mb-3">
                            <div class="konten-film" style="padding: 20px; padding-top:10px;">
                                <h4 class="judul-film fw-bold mb-3 kuning">Peramal Kode Buntut</h4>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Produser  : </span><span class="produser" style="color: #F6DDA4;">Ajeng Niramaya</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Sutradara : </span><span class="sutradara" style="color: #F6DDA4;">Stefanus Efendi</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Penulis naskah : </span><span class="penas" style="color: #F6DDA4;">Rasyid Faqih</span></p>
                                    <p style="margin-bottom: 15px"><span style="color: #ffff">Pemeran : </span><span class="cast" style="color: #F6DDA4;">Rasyid Faqih, Ajeng Niramaya, Stefanus Efendi</span></p>
                                <!-- Button trigger modal -->
                                <a href="/rating" type="button" class="btn btn-outline-custom">
                                    Rating <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card border-0">
                            <img src="{{ asset('images/cnth.jpg') }}" class="img-fluid mb-3">
                            <div class="konten-film" style="padding: 20px; padding-top:10px;">
                                <h4 class="judul-film fw-bold mb-3 kuning">Peramal Kode Buntut</h4>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Produser  : </span><span class="produser" style="color: #F6DDA4;">Ajeng Niramaya</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Sutradara : </span><span class="sutradara" style="color: #F6DDA4;">Stefanus Efendi</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Penulis naskah : </span><span class="penas" style="color: #F6DDA4;">Rasyid Faqih</span></p>
                                    <p style="margin-bottom: 15px"><span style="color: #ffff">Pemeran : </span><span class="cast" style="color: #F6DDA4;">Rasyid Faqih, Ajeng Niramaya, Stefanus Efendi</span></p>
                                <!-- Button trigger modal -->
                                <a href="/rating" type="button" class="btn btn-outline-custom">
                                    Rating <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>  
            </div> 
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

