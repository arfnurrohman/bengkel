@extends('layouts.app')

@section('content')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Jumbotron example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">

    

    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
     
         <center ><h3><b>fixie</b></h3></center>
      </a>
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid ">
       <center> <h1 class="bold">sejarah fixie</h1></center>
       
       <center> <img  src="{{url('images/fixie4.png')}}" alt="Slide1" width="500" height="400"></center> 
      <p></p>
       <h4> <p style="text-align: justify">Meski berbentuk tidak lazim seperti sepeda fixie yang kita kenal sekarang, Penny-Farthing atau sepeda dengan roda depan yang lebih besar yang ditemukan oleh James Starley seorang enjiner berkebangsaan Inggris sekitar tahun 1871 (beberapa catatan menyebut bahwa Penny Farthing dibuat pada tahun 1869 oleh orang berkebangsaan Perancis, Eugene Meyer namun saat itu belum diberi nama). Penny-Farthing sudah mengaplikasikan sistem Fixie, karena crank set yang menyatu dengan as/hub roda depan ini membuat pedal akan selalu berputar searah perputaran roda depan.

            Pada tahun 1874 mulai digunakan teknologi rantai yang mana bentuk sepeda sudah mulai lazim seperti sepeda yang kita kenal sekarang. Sepeda Fixie sebelumnya hanya digunakan sebagai sepada balap di velodrome namun mulai populer setelah digunakan oleh kurir untuk mengantar barang maupun dokumen terutama di Amerika (New York). Kemudian Fixie mulai dianggap bagian dari lifestyle kaum urban dan hippies.
            
            Tidak ada catatan pasti kapan sepeda Fixie mulai dikenal di Indonesia, namun baru sekitar tahun 2010 sepeda ini booming divkalangan remaja terutama di Jakarta. Meski penggemar Fixie sudah mulai berkurang, namun jumlahnya masih terhitung cukup besar jika dilihat dari antusiasme para pengguna Fixie di berbagai event yang cukup sering diadakan. Dan kita juga bisa menemukan komunitas Fixie yang tersebar di berbagai kota di Tanah Air yang masih exist sampai sekarang.</p></h4>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
         <center><h2>part fixie</h2> </center> 
          <center> <img  src="{{url('images/fixie3.jpg')}}" alt="Slide1" width="400" height="400"></center> 
      
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>kelebihan dan kekurangan</h2>
          
<p>kelebihan</p>
          <center style="text-align: justify">Bobot sepeda lebih ringan, karena tidak terdapat part-part seperti sepeda pada umumnya
          Sederhana/minimalis, dilihat dari bagian-bagian sepeda yang tidak serumit sepeda jenis lainnya
          Bagi yang suka bike-tricks, Fixie bisa banyak dieksplore karena bisa digunakan untuk sepeda lambat, berjalan mundur, track stand tanpa harus melepas kaki dari pedal dan maih banyak gaya lainnya
          Biaya perawatan yang lebih murah jika dibandingkan sepeda jenis lain sekelasnya
          <p></p>
          <p>kekurangan</p>
          Kebanyakan tidak menggunakan rem tangan (meski bisa ditambahi) sehingga membutuhkan waktu adaptasi untuk melakukan pengereman
          Kurang sesuai untuk penggunakan jarak jauh karena rasio gear yang hanya satu sehingga lebih melelahkan
          Tidak sesuai untuk penggunaan off road </center>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2022
    </footer>
  </div>
</main>


    
  </body>
</html>

@endsection