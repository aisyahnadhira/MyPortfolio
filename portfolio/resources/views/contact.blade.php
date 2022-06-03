@extends('layout.master')
@section('title','Contact | Aisyah portfolio')

@section('content')
<section class="contact">
    <h1 class="heading"> contact <span>me</span> </h1>
    <div class="row">
        <div class="info-container">
            <!-- <h1>get in touch</h1> -->

            <p>If you want to contact me, you can use the number and email below and if you have questions, you can fill in the message column</p>

            <div class="box-container">

                <div class="box">
                    <i class="fas fa-map"></i>
                    <div class="info">
                        <h3>address :</h3>
                        <p>Malang, East Java, Indonesia</p>
                    </div>
                </div>

                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <div class="info">
                        <h3>email :</h3>
                        <p>aisyahaisyah725@gmail.com</p>
                    </div>
                </div>

                <div class="box">
                    <i class="fas fa-phone"></i>
                    <div class="info">
                        <h3>number :</h3>
                        <p>089635622707</p>
                    </div>
                </div>

            </div>
        </div>

        <form action="{{url('/tambah-pesan')}}" method="POST">
            @csrf
            <div class="inputBox">
                <input type="text" placeholder="your name" id="nama" name="nama">
                <input type="number" placeholder="your number" id="nomer" name="nomer">
            </div>

            <div class="inputBox">
                <input type="email" placeholder="your email" id="email" name="email">
                <input type="text" placeholder="your subject" id="subjek" name="subjek">
            </div>
            <textarea placeholder="your message" cols="30" rows="10" id="pesan" name="pesan"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </div>
    </section>
@endsection
