<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Konseling</title>
    <link rel="stylesheet" href="{{ asset('/css/landing-page.css') }}">
    <link href="https://fonts.cdnfonts.com/css/graphik" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <a href="#" class="logo"><img src="{{ asset('/images/logo.png') }}" alt=""></a>
                <input type="checkbox" id="menu-toggle" />
                <label for="menu-toggle" class="menu-icon">&#9776;</label>
                <ul class="menu">
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="<?= url('login'); ?>" class="btn-login">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero" id="hero">
        <div class="hero-container">
            <h1>Selamat Datang di SAC</h1>
            <p>Dapatkan bantuan profesional untuk masalah pribadi anda <br> di Starbhak Advocacy & Care, platform yang
                didedikasikan <br> untuk Bimbingan Konseling.</p>
            <a href="#contact" class="btn">Hubungi Kami</a>
        </div>
        <img src="{{ asset('/images/Consulting_Flatline.png') }}" alt="">
    </section>

    <section id="about" style="margin-top: 5vw;">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>
                Starbhak Advocacy & Care adalah sebuah layanan profesional yang menyediakan dukungan dan bimbingan <br>
                konseling
                untuk membantu Anda mengatasi masalah pribadi, seperti stres, kecemasan, depresi, dan lainnya.
            </p>
        </div>
    </section>

    <section class="visimisi" id="visimisi">
        <img src="{{ asset('/images/Conversation _Flatline.png') }}" alt="">
        <div class="visimisi-container">
            <h2 style="margin-bottom: 10px;">Visi & Misi</h2>
            <p>
                <b>Visi</b> <br>
                Visi SAC adalah terwujudnya kehidupan kemanusiaan <br> yang membahagiaan melalui tersedianya pelayanan
                <br> bimbingan konseling dalam pemberian dukungan <br> perkembangan dan pengetasan masalah agar peserta
                didik berkembang secara optimasi, mandiri dan bahagia.
            </p>
            <p>
                <b>Misi</b> <br>
                <b>1.</b> Misi pendidikan, yaitu memfasilitasi pengembangan peserta didik melalui pembentukan perilaku
                efektif-nromatif dalam kehidupan keseharian dan masa depan. <br>
                <b>2.</b> Misi pengembangan, yaitu memfasilitasi pengembangan potensi dan kompetensi peserta didik dalam
                lingkungan sekolah/madrasah, keluarga dan masyarakat. <br>
                <b>3.</b> Misi menuntaskan masalah, yaitu memfasilitasi menuntaskan masalah peserta didik mengacu pada
                kehidupan efektif sehari-hari. <br>
            </p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2 style="margin-bottom: 1.5vw;">Layanan Kami</h2>
            <div class="service">
                <h3>Konseling Pribadi</h3>
                <p>
                    Kami menawarkan konseling pribadi yang disesuaikan dengan kebutuhan Anda. Anda akan bekerja dengan
                    konselor terlatih yang akan membantu Anda menemukan solusi terbaik untuk masalah yang Anda hadapi.
                </p>
            </div>
            <div class="service">
                <h3>Konseling Kelompok</h3>
                <p>
                    Selain konseling pribadi, kami juga menyediakan konseling kelompok yang memungkinkan Anda berbagi
                    pengalaman dan mendapatkan dukungan dari orang lain yang mengalami masalah serupa.
                </p>
            </div>
        </div>
    </section>

    <section id="contact" style="margin-bottom: 5vw; margin-top: 5vw;">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <p>Jika Anda membutuhkan bantuan, memiliki masalah dengan layanan kami, atau memiliki pertanyaan lebih
                lanjut tentang SAC, silakan hubungi kami melalui
                formulir di bawah ini.</p>
            <form>
                <input type="text" placeholder="Nama" required style="height: 25px;">
                <input type="email" placeholder="Email" required style="height: 25px;"> <br>
                <textarea placeholder="Pesan" required style="height: 100px; width: 317px; margin-top: 10px;"></textarea> <br>
                <button type="submit" class="btn-kontak">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <p>&copy; 2023 SWITCHBLADE-FUTUR3 Productions. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>