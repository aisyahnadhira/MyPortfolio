@extends('layout.master')
@section('title','Portfolio | Aisyah portfolio')

@section('content')
<section class="portfolio">
    <h1 class="heading"> <span>my</span> work </h1>
    <div class="box-container">

        <div class="box">
            <img src="images/w1.PNG" alt="">
            <div class="content">
                <h3>ILC Website</h3>
                <p>Is a website that is used to upload posts
                    regarding industry & activities in the form of webinars
                    conducted by the Industry learning Center. The website was created
                    using wordpress.</p>
                <a href="https://industrylearningcenter.com/" target="_blank">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/w2.PNG" alt="">
            <div class="content">
                <h3>Admark</h3>
                <p>Is a website that is used for ordering banners. The website was created
                    using wordpress.</p>
                <a href="https://keyhome12.000webhostapp.com/" target="_blank">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/w3.PNG" alt="">
            <div class="content">
                <h3>Farm Fresh</h3>
                <p>An online shop website selling fruits and vegetables with the laravel framework,
                    using php and javascript, the website is connected to a sql database.</p>
                <a href="https://drive.google.com/file/d/1c8zotUrnq-1enzTN4uGd4Azjsehgavw8/view?usp=sharing" target="_blank">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/m1.jpg" alt="">
            <div class="content">
                <h3>Calori Food App</h3>
                <p>Application that contains the number of calories in each food and drink.</p>
                <a href="https://drive.google.com/file/d/1KPijSWSa3GLF5I_zRa-O4ZTB0no0fdh7/view?usp=sharing" target="_blank">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/m2.jpg" alt="">
            <div class="content">
                <h3>Coffee Shop</h3>
                <p>Mobile application used to place coffee orders.</p>
                <a href="https://drive.google.com/file/d/1sbCRrvqyFWJXeDLhnvHIBOawc4HUO7uv/view?usp=sharing" target="_blank">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images//m3.jpg" alt="">
            <div class="content">
                <h3>Recipe Food App</h3>
                <p>Applications that contain a collection of recipes along with the ingredients used as well as cooking video tutorials.</p>
                <a href="https://drive.google.com/file/d/1y9abLYpB-ZAO3eQ2Lv3N-f2U8QmkPVON/view?usp=sharing" target="_blank">read more</a>
            </div>
        </div>
    </div>
    <a href="https://drive.google.com/drive/folders/1tpipLdSYDhbW2uMCvH9ASzSZXSYsJVKw?usp=sharing" class="btn" target="_blank"> load more <i class="fas fa-redo"></i> </a>

</section>

@endsection
