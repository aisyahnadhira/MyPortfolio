@extends('layout.master')
@section('title','About | Aisyah portfolio')

@section('content')
<section class="about">
    <h1 class="heading"> about <span>me</span> </h1>
    <div class="row">
        <div class="info-container">
            <div class="box-container">
                <div class="box">
                    <h3> <span>Name : </span> Aisyah Nadhira Salma Maritza</h3>
                    <h3> <span>Age : </span> 20 </h3>
                    <h3> <span>Email : </span> aisyahaisyah725@gmail.com </h3>
                    <h3> <span>Address : </span> Malang, East Java, Indonesia </h3>
                </div>
                <div class="box">
                    <div class="share">
                        <a href="https://www.facebook.com/aisyah.nadhira.90/" class="fab fa-facebook-f" target="_blank"></a>
                        <a href="https://twitter.com/Aisyah_2150" class="fab fa-twitter" target="_blank"></a>
                        <a href="https://www.instagram.com/aisyah1205/" class="fab fa-instagram" target="_blank"></a>
                        <a href="https://github.com/aisyahnadhira" class="fab fa-github" target="_blank"></a>
                        <a href="https://www.linkedin.com/in/aisyah-nadhira-salma-maritza/" class="fab fa-linkedin" target="_blank"></a>
                    </div>
                    <div class="button">
                        <a href="Assets/Curriculum Vitae Aisyah Nadhira.pdf" download="CV Aisyah Nadhira" class="btn"> download CV <i class="fas fa-download"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="skills">
    <h1 class="heading"> <span>my</span> skills </h1>
    <div class="box-container">
        <div class="box">
            <h3>Laravel</h3>
        </div>
        <div class="box">
            <h3>Wordpress</h3>
        </div>
        <div class="box">
            <h3>Design</h3>
        </div>
        <div class="box">
            <h3>Java</h3>
        </div>
        <div class="box">
            <h3>Php</h3>
        </div>
        <div class="box">
            <h3>HTML CSS</h3>
        </div>
        <div class="box">
            <h3>Database sql</h3>
        </div>
    </div>
</section>

<section class="education">
    <h1 class="heading"> <span>my</span> education </h1>
    <div class="box-container">

        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2020 - Now</span>
            <h3>Politeknik Negeri Malang - Information Technology Department</h3>
            <p>Member of the mobile programming division of the (WRI) Workshop Riset Informatika</p>
        </div>

        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2017 - 2020</span>
            <h3>Man 1 Kota Malang - MIPA</h3>
            <p>Member of the KIR (Karya Ilmiah Remaja)</p>
        </div>
    </div>
</section>

<section class="education">
    <h1 class="heading"> <span>my</span> experience </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-briefcase"></i>
            <span>2021 - Now</span>
            <h3>Industry Learning Center</h3>
            <p>- Website administrator</p>
            <p>- Designing a website using
                canva and upload the design to
                on wordpress</p>
            <p>- Uploading blog content</p>
            <p>- Create designs for instagram posts</p>
        </div>

        <div class="box">
            <i class="fas fa-briefcase"></i>
            <span>2021</span>
            <h3>Tugas Akhir Semester 3</h3>
            <p>Create a sales website about
                fruits and vegetables with laravel framework
                , using php and javascript language,
                the website is connected to
                sql database</p>
        </div>

        <div class="box">
            <i class="fas fa-briefcase"></i>
            <span>2021</span>
            <h3>PKM - KC</h3>
            <p>Create a Simonga website (Sistem Monitoring Magang Mahasiswa)</p>
        </div>
    </div>
</section>
@endsection
