<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>AndinTransport</title>
  <meta name="title" content="AndinTransport">
  <meta name="description" content=" - ">
  @vite(['resources/css/style.css', 'resources/js/script.js'])


  <!-- 
    - Logo Title
  -->
  <link rel="shortcut icon" href="images/logo/AndinTransportLogo_Resize.png" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="images/hero/hero1-modified.JPEG">
  <link rel="preload" as="image" href="images/hero/hero2-modified.jpeg">
  <link rel="preload" as="image" href="images/hero/hero3-modified.jpeg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Andin</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Tenggilis Mejoyo V / 19, Kota Surabaya, JawaTimur, ID
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Daily : 7.00 am to 17.00 pm</span>
      </div>

      <a href="tel:+6281911966906" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+62 819 119 66906</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:andintransport@gmail.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">andintransport@gmail.com</span>
      </a>

    </div>
  </div>




    <!-- Masukkan Header -->
    @include('components.header')




  <main>
    <article>

      <!-- Hero Start -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <!-- Hero Slider 1 -->
          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="{{ asset('images/hero/hero1-modified.JPEG') }}" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Your Trust, Our Journey</p>

            <h1 class="display-1 hero-title slider-reveal">
              PILIHAN REVOLUSIONER UNTUK SEWA MOBIL YANG  <br>
              BERKUALITAS
            </h1>

            <p class="body-2 hero-text slider-reveal">
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">Unit</span>

              <span class="text text-2" aria-hidden="true">View Our Unit</span>
            </a>

          </li>

          <!-- Hero Slider 2 -->
          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="{{ asset('images/hero/hero2-modified.jpeg') }}" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Cruising with Elegance</p>

            <h1 class="display-1 hero-title slider-reveal">
              Kendaraan Berkualitas, Layanan Terpercaya <br>
            </h1>

            <p class="body-2 hero-text slider-reveal">
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">Unit</span>

              <span class="text text-2" aria-hidden="true">View Our Unit</span>
            </a>

          </li>

          <!-- Hero Slider 3 -->
          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="{{ asset('images/hero/hero3-modified.jpeg') }}" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Safe, Comfortable, and Reliable.</p>

            <h1 class="display-1 hero-title slider-reveal">
              Percayakan Perjalanan Anda pada Kami: Aman, Nyaman, dan <br>
              Terpercaya
            </h1>

            <p class="body-2 hero-text slider-reveal">
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">Unit</span>

              <span class="text text-2" aria-hidden="true">View Our Unit</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        

      </section>

      <!-- Hero Close -->



      <!-- 
        - #SERVICE
      -->

      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <p class="section-subtitle label-2">Our Best Seller Unit</p>

          <h2 class="headline-1 section-title"></h2>

          <p class="section-text">
            Untuk perjalanan yang sempurna, Toyota Innova dan Mercedes Benz Sprinter -
             kombinasi kenyamanan, ruang, dan kemewahan yang tak tertandingi.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="{{ asset('images/product/innova-diesel.jpg') }}" width="285" height="336" loading="lazy" alt="Innova Diesel"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Toyota <br> Innova Diesel</a>
                  </h3>

                  <a href="https://wa.me/6281911966906?text=Halo,%20apakah%20%22Toyota%20Innova%20Diesel%22%20nya%20tersedia%20?" class="btn-text hover-underline label-2">Book now</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="{{ asset('images/product/mercedesBenz-sprinter.jpeg') }}" width="285" height="336" loading="lazy" alt="Sprinter"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Mercedes Benz Sprinter</a>
                  </h3>

                  <a href="https://wa.me/6281911966906?text=Halo,%20apakah%20%22Mercedez%20benz%20Sprinter%22%20nya%20tersedia%20?" class="btn-text hover-underline label-2">Book now</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="{{ asset('images/product/innova-g.jpeg') }}" width="285" height="336" loading="lazy" alt="Innova-g"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Toyota <br> Innova G</a>
                  </h3>

                  <a href="https://wa.me/6281911966906?text=Halo,%20apakah%20%22Toyota%20Innova%20Type%20G%22%20nya%20tersedia%20?" class="btn-text hover-underline label-2">Book Now</a>

                </div>

              </div>
            </li>

          </ul>

          <img src="{{ asset('images/shape-1.png') }}" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="{{ asset('images/shape-2.png') }}" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Our Story</p>

            <h2 class="headline-1 section-title"></h2>

            <p class="section-text">
              AndinTransport dimulai dengan satu mobil dan semangat pantang menyerah. Dari melayani kebutuhan antar jemput hingga menjadi escort duties dan keperluan bisnis pribadi, 
              Dan AndinTransport akan terus mengembangkan usahanya menjadi perusahaan transportasi yang besar dan akan cukup dikenal masyarakat, dengan armada yang terjaga dan tim profesional, 
              AndinTransport berkomitmen memberikan pelayanan terbaik untuk setiap pelanggan.
            </p>

            <div class="contact-label">Pesan Melalui Panggilan Sekarang</div>

            <a href="tel:+6281911966906" class="body-1 contact-number hover-underline">+62 (819) 119 66906</a>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">More Info</span>

              <span class="text text-2" aria-hidden="true">Read More</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="{{ asset('images/about/about1.jpeg') }}" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="{{ asset('images/logo/AndinTransportLogo.png') }}" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

          </figure>

          <img src="{{ asset('images/shape-3.png') }}" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>





      <!-- 
        - #SPECIAL DISH
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <div id="map" class="google-api-cover" style="width: 100%; height: 0;"></div>
          <script>
            function myMap() {
              var mapCanvas = document.getElementById("map");
              var myCenter = new google.maps.LatLng(-7.3224196475778545, 112.75967579772895);
              var mapOptions = { center: myCenter, zoom: 18 };
              var map = new google.maps.Map(mapCanvas, mapOptions);
              var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE
              });
              marker.setMap(map);
            }
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-3hNtLbvi65P2wqyhB7D44UJa8uZYG-M&callback=myMap">
          </script>
        </div>
        
        <style>
          /* Default padding for all screen sizes */
          .google-api-cover {
            padding-bottom: 100%; /* Default padding for smaller screens */
          }
        
          /* Media query for laptops */
          @media only screen and (min-width: 1024px) {
            .google-api-cover {
              padding-bottom: 150%;
            }
          }
        </style>
        
      
        <div class="special-dish-content bg-black-10">
          <div class="container">
      
            <img src="{{ asset('images/icon/location.png') }}" width="50" height="50" loading="lazy" alt="badge" class="abs-img">
      
            <p class="section-subtitle label-2">Our Location</p>
      
            <p class="section-text">
              Tenggilis Mejoyo V / 19, Kota Surabaya, JawaTimur, Indonesia
            </p>
      
            <div class="wrapper">
              <del class="del body-3"></del>
              <span class="span body-1"></span>
            </div>
      
            <a href="https://maps.app.goo.gl/qdiEUwcPhoGgRHabA" class="btn btn-primary">
              <span class="text text-1">Visit</span>
              <span class="text text-2" aria-hidden="true">Google Maps</span>
            </a>                        
      
          </div>
        </div>
      </section>
      
      

        





      <!-- 
        - #MENU
      -->

      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Our Unit <br>by</p>

          <h2 class="headline-1 section-title text-center">Andin Transport</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/product/png/innova-diesel.png') }}" width="100" height="100" loading="lazy" alt="Innova Diesel"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Innova%20Diesel%22%20nya%20tersedia?" class="card-title">Toyota<br>Innova Diesel</a>
                    </h3>
                    <span class="span title-2"></span>
                  </div>                  

                  <p class="card-text label-1">
                    Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/product/png/innova-g.png') }}" width="100" height="100" loading="lazy" alt="Innova G"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Innova%20Type%20G%22%20nya%20tersedia?" class="card-title">Toyota<br>Innova Type G</a>
                    </h3>
                    <span class="span title-2"></span>
                  </div>                  

                  <p class="card-text label-1">
                    Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/product/png/innova-trd-diesel.png') }}" width="100" height="100" loading="lazy" alt="Innova Trd Diesel"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Innova%20TRD%20Diesel%22%20nya%20tersedia?" class="card-title">Toyota<br>Innova TRD Diesel</a>
                    </h3>
                    <span class="span title-2"></span>
                  </div>                  

                  <p class="card-text label-1">
                    Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/product/png/innova-venturer.png') }}" width="100" height="100" loading="lazy" alt="Innova Venturer"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Innova%20Venturer%22%20nya%20tersedia?" class="card-title">Toyota<br>Innova Venturer</a>
                    </h3>                  
                    <!-- 
                    <span class="badge label-1">New</span>
                    -->
                    <span class="span title-2"></span>
                  </div>

                  <p class="card-text label-1">
                    Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/product/png/toyota-fortuner-gr.png') }}" width="100" height="100" loading="lazy" alt="Fortuner GR"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Fortuner%20GR%22%20nya%20tersedia?" class="card-title">Toyota<br>Fortuner GR</a>
                    </h3>
                    <span class="span title-2"></span>
                  </div>                  

                  <p class="card-text label-1">
                    Avocados with crab meat, red onion, crab salad stuffed red bell pepper and green bell pepper.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/product/png/toyota-hiace-luxury.png') }}" width="100" height="100" loading="lazy" alt="Toyota Hiace"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Hiace%20Luxury%22%20nya%20tersedia?" class="card-title">Toyota<br>Hiace Luxury</a>
                    </h3>
                    <span class="span title-2"></span>
                  </div>                  

                  <p class="card-text label-1">
                    Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <p class="menu-text text-center">
            Open Monday - Friday <span class="span">7:00 am</span> to <span class="span">5:00 pm</span>
          </p>

          <a href="#reservation" class="btn btn-primary">
            <span class="text text-1">Order</span>

            <span class="text text-2" aria-hidden="true">Now</span>
          </a>

          <img src="{{ asset('images/shape-5.png') }}" width="921" height="1036" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
          <img src="{{ asset('images/shape-6.png') }}" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testi text-center has-bg-image"
        style="background-image: url('images/hero/hero2-modified.jpeg')" aria-label="testimonials">
        
      <!-- 
        - #FEATURES
      -->

      {{-- <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">Crew</p>

          <h2 class="headline-1 section-title">Our Available Driver</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="{{ asset('images/icon/person.png') }}" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Driver 1</h3>

                <p class="label-1 card-text">Amam Rachmanto</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="{{ asset('images/icon/person.png') }}" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Driver 2</h3>

                <p class="label-1 card-text">Rizqi Ivah</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="{{ asset('images/icon/person.png') }}" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Driver 3</h3>

                <p class="label-1 card-text">Nadief Yanar</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="{{ asset('images/icon/person.png') }}" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Driver 4</h3>

                <p class="label-1 card-text">Leon Lee</p>

              </div>
            </li>

          </ul>

          <img src="{{ asset('images/shape-7.png') }}" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="{{ asset('images/shape-8.png') }}" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section> --}}

      </section>

      <!-- 
        - #RESERVATION
      -->

      <section class="reservation" id="reservation">
        <div class="container">
      
          <div class="form reservation-form bg-black-10">
      
            {{-- <form id="reservation-form" class="form-left">
      
              <h2 class="headline-1 text-center">Online Reservation</h2>
      
              <p class="form-text text-center">
                Booking request <a href="tel:+6281911966906" class="link">+62-819-11966906</a>
                or fill out the order form
              </p>
      
              <!-- Function Reservation -->
      
              <div class="input-wrapper">
                <input type="text" id="name" name="name" placeholder="Your Name" autocomplete="off" class="input-field" required>
                <input type="tel" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field" required>
              </div>
      
              <div class="input-wrapper">
                <div class="icon-wrapper">
                  <ion-icon name="car-outline" aria-hidden="true"></ion-icon>
                  <select id="car" name="car" class="input-field" required>
                    <option value="Toyota Innova Diesel">Toyota Innova Diesel</option>
                    <option value="Toyota Innova TRD Diesel">Toyota Innova TRD Diesel</option>
                    <option value="Toyota Fortuner GR">Toyota Fortuner GR</option>
                    <option value="Toyota Innova Type G">Toyota Innova Type G</option>
                    <option value="Toyota Innova Venturer">Toyota Innova Venturer</option>
                    <option value="Toyota Hiace Luxury">Toyota Hiace Luxury</option>
                    <option value="Mercedes Benz Sprinter">Mercedes Benz Sprinter</option>
                  </select>
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
      
                <div class="icon-wrapper">
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                  <input type="date" id="reservation-date" name="reservation-date" class="input-field" required>
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
      
                <div class="icon-wrapper">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                  <select id="time" name="time" class="input-field" required>
                    <option value="08:00am">08 : 00 am</option>
                    <option value="09:00am">09 : 00 am</option>
                    <option value="10:00am">10 : 00 am</option>
                    <option value="11:00am">11 : 00 am</option>
                    <option value="12:00pm">12 : 00 pm</option>
                    <option value="01:00pm">01 : 00 pm</option>
                    <option value="02:00pm">02 : 00 pm</option>
                    <option value="03:00pm">03 : 00 pm</option>
                    <option value="04:00pm">04 : 00 pm</option>
                    <option value="05:00pm">05 : 00 pm</option>
                    <option value="06:00pm">06 : 00 pm</option>
                    <option value="07:00pm">07 : 00 pm</option>
                    <option value="08:00pm">08 : 00 pm</option>
                    <option value="09:00pm">09 : 00 pm</option>
                    <option value="10:00pm">10 : 00 pm</option>
                  </select>
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
              </div>
      
              <textarea id="message" name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>
      
              <button type="button" class="btn btn-secondary" onclick="sendToWhatsApp()">
                <span class="text text-1">Order</span>
                <span class="text text-2" aria-hidden="true">By Whatsapp</span>
              </button>
      
            </form> --}}
      
            <!-- Function Reservation End -->
      
            <div class="form-right text-center" style="background-image: url('images/form-pattern.png')">
              <h2 class="headline-1 text-center">Contact Us</h2>
              <p class="contact-label">Booking Request</p>
              <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+62-819-11966906</a>
              <div class="separator"></div>
              <p class="contact-label">Location</p>
              <address class="body-4">
                Tenggilis Mejoyo V / 19, Surabaya, JawaTimur, ID <br>
              </address>
              <p class="contact-label">Open Hours</p>
              <p class="body-4">
                Monday to Friday <br>
                07.00 am - 5.30pm
              </p>
            </div>
      
          </div>
      
        </div>
      </section>
      
      <script>
        function sendToWhatsApp() {
          // Ambil nilai dari form
          const name = document.getElementById("name").value;
          const phone = document.getElementById("phone").value;
          const car = document.getElementById("car").value;
          const date = document.getElementById("reservation-date").value;
          const time = document.getElementById("time").value;
          const message = document.getElementById("message").value;
      
          // Buat teks pesan untuk WhatsApp
          const textMessage = `Halo, saya ingin melakukan reservasi mobil:\n\n` +
                              `Nama: ${name}\n` +
                              `Telepon: ${phone}\n` +
                              `Mobil: ${car}\n` +
                              `Tanggal: ${date}\n` +
                              `Waktu: ${time}\n` +
                              `Pesan: ${message}`;
      
          // Buat URL wa.me untuk mengirim pesan
          const whatsappUrl = `https://wa.me/6285336565485?text=${encodeURIComponent(textMessage)}`;
      
          // Redirect user ke WhatsApp
          window.open(whatsappUrl, '_blank');
        }
      </script>
      
      





      





      <!-- 
        - #EVENT
      -->

      <section class="section event bg-black-10" aria-label="event" id="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Recent Updates</p>

          <h2 class="section-title headline-1 text-center">Upcoming Event</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="{{ asset('images/blog/dpr.jpeg') }}" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2024-06-15">15/06/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">DPR RI</p>

                  <h3 class="card-title title-2 text-center">
                    Penggunaan Jasa AndinTransport untuk Patwal
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="{{ asset('images/blog/smelter.jpeg') }}" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2024-06-15">15/06/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">PT. Smelter Indonesia</p>

                  <h3 class="card-title title-2 text-center">
                    Penjemputan Staff Freeport Indonesia
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="{{ asset('images/blog/Document-3.JPG') }}" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2024-07-03">03/07/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Preparing for customer Order</p>

                  <h3 class="card-title title-2 text-center">
                    Menyiapkan sejumlah mobil untuk customer
                  </h3>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





    <!-- Masukkan Footer -->
    @include('components.footer')





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="{{ asset('js/script.js') }}" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>