<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta property="og:image:secure_url" content=”https://roamers.in/assets/img/Kerala/KeralaCover.jpg” />

  <!-- SEO Meta Description -->
  <meta name="description" content="" />
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/Kerala/KeralaCover.jpg" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Kerala/KeralaCover.jpg" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />

  <!-- Title  -->
  <title>Roamers</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Favicon  -->
  <link rel="icon" href="assets/img/Logo/Logo mark-01.png" sizes="192x192" />
  <!-- ***** All CSS Files ***** -->
  <!-- ***** Font Asesome cdn ***** -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Style css -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- Responsive css -->

  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
    .butn:link,
    .butn:visited {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 2.5rem;
      text-decoration: none;
      background-color: #5e16bd;
      background-image: linear-gradient(90deg, #501aa8, #870de8);
      padding: 1rem 2.5rem;
      width: 25.1rem;

      margin-right: 13px;
      border-radius: 4px;
      border: none;
      color: #fff;
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease-in-out;
    }

    .butn::before {
      background: #fff;
      content: "";
      height: 55px;
      opacity: 0;
      position: absolute;
      top: 0px;
      transform: rotate(35deg);
      width: 20px;
      transition: all 3000ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .butn::after {
      background: #fff;
      content: "";
      height: 8rem;
      opacity: 0;
      position: absolute;
      top: -50px;
      transform: rotate(35deg);
      transition: all 3000ms cubic-bezier(0.19, 1, 0.22, 1);
      width: 2rem;
    }

    .butn__new::before {
      left: -50%;
    }

    .butn__new::after {
      left: -100%;
    }

    .butn:hover,
    .butn:active {
      transform: translateY(-3px);
      color: #fff;
      box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.3);
    }

    .butn__new:hover::before {
      left: 50%;
      opacity: 0.5s;
    }

    .butn__new:hover::after {
      left: 150%;
      opacity: 0.6;
    }

    .trip-home {
      /* background: url(assets/img//kerala/KeralaCover.jpg) !important; */
      background-position: center !important;
      background-size: cover !important;
      background-repeat: no-repeat !important;
      position: relative !important;
      background-attachment: fixed !important;
    }

    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      animation: fadeInUp1 0.5s ease-in-out forwards;
      display: block !important;
    }

    .travel-des {
      padding: 30px;
    }

    .new-year {
      position: absolute;
      height: 28px !important;
      width: 160px;
      transition: all 0.7s;
      border-radius: 0px !important;
    }

    .christmas {
      position: absolute;
      height: 28px !important;
      width: 160px;
      transition: all 0.7s;
      border-radius: 0px !important;
    }

    .travel-des a {
      max-width: 200px;
    }

    .price-occupancy {
      padding: 10px 30px;
      background: #fff;
      border: 1px solid #eee;
      margin: 5px;
      border-radius: 5px;
      font-family: "Heebo", sans-serif;
    }

    .price-occupancy1 {
      border: none;
    }

    .upcoming-slot h4 {
      font-weight: 400;
      padding: 3px 8px 3px 8px;
      background: white;
      border-radius: 10px;
      box-shadow: rgb(255 255 255 / 30%) 0px 1px 2px 0px, rgb(125 128 130 / 15%) 0px 2px 6px !important;
      font-size: 14px !important;
      line-height: 26px;
      color: #878686 !important;
      margin: 0;
    }

    .price-occupancy1:focus {
      outline: 0px solid !important;
      border: 2px solid #4ec1db0d !important;
      /* -moz-outline-style: none !important; */
      border-color: none !important;
      background-color: #4ec0db0f;
      box-shadow: none !important;
    }

    .occupancy {
      display: flex;
      justify-content: center;
    }


    .ai1::before {
      background-image: url(assets/img/images/line.svg) !important;
    }

    .accordion-button::after {
      background-image: url(assets/img/images/arrow-down.svg) !important;
    }


    .accordion-button:not(.collapsed)::after {
      background-image: url(assets/img/images/arrow-up.svg) !important;
      transform: rotate(-360deg) !important;
    }

    .why-us {
      background: url(assets/img/images/sea-travel.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
      padding: 60px 0px;
    }

    .why-us::before {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .why-para {
      color: #fff;
      text-align: center;
      font-size: 16px;
      margin-bottom: 60px;
    }

    .why-us .trip-inner>h3 {
      margin-bottom: 30px;
      padding: 20px 24px;
    }

    .per-person {
      color: #7c7c7c;
      font-weight: 500;
      font-size: 13px;
    }

    .silder-inner h3 {
      font-size: 11px;
      color: #4EC0DB;
      font-weight: 700;
    }

    .silder-inner h2 {
      color: #094067;
      font-size: 20px;
      margin-bottom: 0.7rem;
    }

    .silder-inner h4 {
      display: flex;
      align-items: center;
      color: #5F6C7B;
      font-size: 12px;
      font-weight: 400;
    }

    #moreText {
      visibility: hidden;
    }

    #readMoreLink {
      visibility: hidden;
    }

    .silder-inner h4>img {
      width: 20px;
      height: 20px;
      display: inline-block;
      margin-right: 15px;
      margin-top: -7px;
    }

    .silder-inner1 p {
      border: none !important;
      margin-bottom: 0px !important;
      font-size: 12px;
      font-weight: 400;
      color: #5F6C7B;
      padding-bottom: 10px;
    }

    .silder-inner span {
      display: flex;
      align-items: center;
      color: #4EC0DB;
      font-size: 16px;
      margin-left: 5px;
      font-weight: 600;
    }

    .silder-inner {
      padding: 30px 20px;
      background: #ffff;
    }

    .short-trips {
      background: none;
      padding-bottom: 60px;
    }

    .container-fluid {
      width: 96%;
      padding-right: var(--bs-gutter-x, .75rem);
      padding-left: var(--bs-gutter-x, .75rem);
      margin-right: auto;
      margin-left: auto;
    }

    .get-option {
      display: flex;
      justify-content: center;
    }

    .get-option button {
      padding: 5px 19px;
      border-radius: 6px;
      background: #fff;
      border: none;
      margin-top: 10px;
      color: black;
    }

    .get-option button:hover {
      background: #d8eefe;
    }

    .itinerary-logo-content p {
      font-size: 14px;
      background: #d8eefe !important;
      margin: 4px;
      color: black !important;
      border-radius: 31px;
      padding: 5px 10px;
      text-transform: capitalize;
    }

    .acc-inner li::before {
      width: 0;
      height: 0;
      border-top: 5px solid transparent;
      border-left: 10px solid #4ec0db !important;
      border-bottom: 5px solid transparent;
      position: absolute;
      left: 0;
      content: "";
      margin-top: 5px;
    }

    .acc-inner li:hover::before {
      border-left: 10px solid #555 !important;
    }

    .acc-btn::after {
      background-image: url(assets/img/images/arroww\ Black.svg) !important;
    }

    .acc-btn:not(.collapsed)::after {
      background-image: url(assets/img/images/arroww\ white.svg) !important;
      transform: rotate(-360deg) !important;
    }

    .trip-nav {
      grid-template-columns: repeat(4, 1fr) !important;
    }
    .trip-about img{
      transition: 0.5s all;
      border-radius: 5px;
    }
    .trip-about img:hover{
  transform: scale(1.04) !important;
}
    #tab1 p {
      padding-left: 30px;
      position: relative;
    }

    @media (max-width: 600px) {
      .kerala-overview {
        font-size: 20px !important;
      }

      .butn:link,
      .butn:visited {
        margin-right: auto !important;
        width: auto !important;
      }

      .butn::after {
        top: -21px !important;
        width: 1rem !important;
      }


      .butn__new::after {
        left: 6% !important;
      }

      .butn__new::before {
        left: -7% !important;
      }

      .price-occupancy {
        padding: 10px 20px !important;
        font-size: 14px !important;
        box-shadow: rgb(0 207 264 / 35%) 0px 6px 10px, rgba(0, 0, 0, 0.23) 0px 2px 5px;
      }

      .silder-inner h4 {
        font-size: 12px !important;

      }

      #price {
        margin-left: 145px !important;
      }

      .trip-home h1 {
        margin: 72px 0px 20px !important;
      }

      .des-sub {
        margin-bottom: 20px !important;
      }

      .acc-container {
        padding: 0px 0px 0px 6px !important;
      }

      #tab1 p {
        font-size: 11px;
      }

      .occupancy {
        font-size: 10px !important;
      }

      #tab2 p {
        font-size: 11px;
      }

      #moreText {
        visibility: visible !important;
      }

      #readMoreLink {
        visibility: visible !important;
      }

      .readless {
        display: none;
      }

      .slider-item2 img {
        height: 380px !important;
      }

      .slider-item2-image {
        margin-left: 0px !important;
      }

      .accordion-button {
        font-size: 8px !important;
        padding: 10px 20px !important;
      }

      .days {
        font-size: 8px !important;
      }
      .trek-sec {
        display: block !important;
      }
      .diff-sec{
        display: none !important;
      }
      .desktop-inform {
        display: none !important;
      }
    }

    #tab1 p::before {
      content: "";
      position: absolute;
      font-size: 20px;
      background: url(assets/img/icon/chexh\ 1.png);
      left: 0;
      width: 20px;
      margin-top: 3px;
      background-position: center;
      height: 20px;
      background-size: cover;
    }

    #tab2 p {
      padding-left: 30px;
      position: relative;
    }

    #tab2 p::before {
      content: "";
      position: absolute;
      font-size: 20px;
      background: url(assets/img/icon/Close\ 1.png);
      left: 0;
      width: 20px;
      margin-top: 3px;
      background-position: center;
      height: 20px;
      background-size: cover;
    }

    .arrow-right {
      height: 20px;
      width: 30px;
      margin-left: 10px;
    }

    .des-sub {
      display: flex;
      justify-content: center;
      margin-left: -43px !important;
      margin-bottom: 43px;
    }

    .accordion-button:not(.collapsed) {
      color: #0c63e4;
      background-color: #094067 !important;
    }

    .faq {
      background-image: url(assets/img/images/world2.png) !important;
    }

    /* dates update */
    .kodai-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .andaman-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .kerala-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .ooty-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .pondi-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .kolukku-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .chik-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .goa-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .diff i {
    padding: 0 6px 0 0px;
    color: #4ec0db;
    text-shadow: -1.3px 1px #000;
}

    .difficulty {
      font-size: 14px;
      font-weight: 700;
    }

    .sub-diff {
      font-size: 14px;
      font-weight: 600;
    }

    .diff {
      padding-bottom: 10px;
    }

    .diff-sec {
      margin-top: 20px;
      padding-top: 20px;
      padding-bottom: 10px;
    }

    .trek-sec {
      display: none;
    }

    .trek {
      padding-top: 15px !important;
      padding-bottom: 15px !important;
      background-color: #fff;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
      border-radius: 10px;
    }
    /*  */
  </style>
</head>

<body>
  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>

  <!-- ***** Header Start ***** -->
  <?php include('includes/header.php'); ?>
  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>
  <!-- ***** Header End ***** -->
  <!-- ***** Welcome Area Start ***** -->

  <section class="trip-home" style="background-image: url('assets/img/Kerala/KeralaCover.jpg');">
    <div class="container" style="  position: relative;">
      <h1>KERALA: TO GOD’s OWN PLACE</h1>
      <ul class="des-sub">
        <li>
          Vagamon <img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
        <li>
          Varkala<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        <li>
          Alleppey
        </li>
      </ul>
      <div class="row desktop-inform">
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-indian-rupee-sign"></i></h3>
            <p style="color:white !important;">Starting Price</p>
            <h2>₹19,499 /-</h2>
          </div>
        </div>
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-calendar-days"></i></h3>
            <p style="color:white !important;">Duration</p>
            <h2>6 Days - 5 Nights</h2>
          </div>
        </div>
        <div class="col-md-4 col-4 ">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-location-dot"></i></h3>
            <p style="color:white !important;">Pickup & Drop</p>
            <h2>Kochi </h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="trek-sec">
    <div class="container trek">
      <div class="row">
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-indian-rupee-sign"></i>
            </h3>
            <p style="margin: 1px 0px 0px 0 !important;">Starting Price</p>
            <h2 style="color: black;">₹19,499 /-</h2>
          </div>
        </div>
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-calendar-days"></i></h3>
            <p style="margin: 1px 0px 0px 0 !important;">Duration</p>
            <h2 style="color: black;">6D - 5N</h2>
          </div>
        </div>
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-location-dot"></i></h3>
            <p style="margin: 1px 0px 0px 0 !important;">Pickup & Drop</p>
            <h2 style="color: black;">Kochi
            </h2>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="container">
      <div class="row diff-sec">
        <div style="margin:0px !important;text-align: left;
    padding-left: 40px;" class="col-md-6 col-6">
          <div class="diff">
            <i class="fa-solid fa-person-hiking"></i><span class="difficulty">Altitude: </span><span
              class="sub-diff">12000ft</span>
          </div>
          <div class="diff">
            <i class="fa-solid fa-map-location-dot"></i><span class="difficulty">Trek Length: </span><span
              class="sub-diff">20km</span>
          </div>
        </div>

        <div style="margin:0px !important; padding:0px; text-align:left;" class="col-md-6 col-6">
          <div class="diff">
            <i class="fa-solid fa-mountain"></i><span class="difficulty">Trek Difficulty: </span><span
              class="sub-diff">Moderate</span>
          </div>
          <div class="diff">
            <i class="fa-solid fa-tents"></i><span class="difficulty"> Base Camp: </span><span class="sub-diff">Sankri
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Welcome Area end ***** -->


  <!-- ***** Travel Desitination***** -->
  <section class="Desitination">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="trip-about">
            <div class="row">
              <div class="col-6">
                <img src="assets/img/Kerala/Kerala-1.jpg" alt="roamers-trip">
              </div>
              <div class="col-6">
                <img style="height:100%" src="assets/img/Kerala/Wagamon.jpg" alt="roamers-trip"
                  style="margin-top:70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7" style="display: grid; place-items: center;">
          <div class="travel-des">
            <h2 style=" margin-bottom:15px; text-align:left !important;"
              class="head text-center text-md-left kerala-overview">
              Kerala Unplugged- Mountains, Beaches, and Backwater Bliss!
            </h2>
            <p>
              Hey, folks! Get ready for our Kerala backpacking extravaganza! We'll kick off in the Vagamon Hills with
              epic paragliding, trek to Waterfalls and under star campfires, But hold onto your flip-flops because we're
              not done yet! We'll be heading to the laid-back vibes of Varkala for beachfront bliss, explore mangroves,
              and visit the world's largest sculpture, Jatayu Finally, it's off to Alleppey
            </p>
            <p>
              <span class="readless">
                to experience its mesmerizing backwater beauty, and unique boathouse stay
                and delicious Kerala cuisine. More surprises await as we explore 'God's Own Country' for unforgettable
                moments and good times! 🌴🌊🌟</span>
              <span id="moreText" style="display:none">
                to experience its mesmerizing backwater beauty, and unique boathouse stay
                and delicious Kerala cuisine. More surprises await as we explore 'God's Own Country' for unforgettable
                moments and good times! 🌴🌊🌟</span>
              <a href="javascript:void(0);" id="readMoreLink" onclick="toggleReadMore()">...Read More</a>
            </p>

            <a style="width: 200px" href="assets/brochures/Kerala-Itinerary.pdf" class="btn butn butn__new"> <i
                style="margin-right: 8px" class="fa-solid fa-cloud-arrow-down"></i>Get Itinerary </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Travel Desitination end***** -->

  <!-- ***** Itinerary & Upcoming Dates start***** -->

  <!-- ***** Itinerary start***** -->
  <section class="ilt-up">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="head text-center text-md-left head1">
            Itinerary
          </h2>
          <div class="acc-container">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <div class="days"> DAY 1</div>: ARRIVAL IN KOCHI AND SCENIC DRIVE TO
                    | VAGAMON
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Vagamon hills</p>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Dinner
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Hey y'all, welcome to the land of coconuts! Meet our Roamers
                        team and captains at Kochi as our exciting journey starts at
                        11 am to the most beloved hill station; Vagamon.
                      </li>
                      <li>
                        It's going to be about a 3-hour Journey. During the
                        scenic drive, let's share stories, laughter and get to
                        know each other while enjoying the mesmerizing |
                        views of the Vagamon hills.
                      </li>
                      <li>
                        Upon reaching Vagamon, check in to your hotel and
                        take a leisurely through Vagamon'’s roads. Soak in
                        the captivating ambience and indulge in a delightful
                        local-style dinner.
                      </li>
                      <li>
                        Get ready for an electrifying night on the hilltop!
                        Let's dance and sing under the stars, creating
                        unforgettable memories and endless laughter.
                      </li>
                      <li>
                        Rest and recharge for an exciting day ahead, as our Vagamon
                        adventure has just begun...
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> DAY 2</div>: VAGAMON MEADOWS, PARAGLIDING,
                    PINE FOREST & MARMALA WATER FALLS
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Vagamon Meadows</p>
                        <p>Paragliding</p>
                        <p>Pine Forest</p>
                        <P>Marmala Waterfalls</P>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Breakfast + Dinner
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Let's start our day bright and early, heading straight
                        to the Vagamon Meadows. Explore the serene
                        landscapes, take leisure strolls, snap stunning photos
                      </li>
                      <li>
                        Alright, it's time to fly Roamers! We'll head to the
                        paragliding activity spot. Experience the thrill of
                        Paragliding as you glide through the clouds and witness
                        the breathtaking aerial views of Vagamon's
                        mesmerizing landscape.</li>
                      <li>
                        Getreadyto be amazed by the renowned Pine Forest.
                        Take your time to wander and soak in the serene
                        nature, surrounded by majestic Pine trees. </li>
                      <li>
                        Post lunch, let's head towards majestic Marmala
                        Waterfalls for an adventure. Trek through the rugged
                        path to reach this untouched beauty! Swim in
                        refreshing water or relax and feel the mist on your
                        face.
                      </li>

                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> DAY 3</div>: JATAYU, VARKALA BEACH & CAFE-HOPPING
                  </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Varkala</p>
                        <p>Jatayu Earth Centre</p>
                        <p>Our Hotel</p>
                        <P>Beach , Cliffs</P>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Breakfast + Dinner
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Post breakfast, bid farewell to the hills as we embark on our
                        journey towards the coastal town of Varkala.</li>
                      <li>
                        En route we'll stop at the fascinating Jatayu Earth Centre.
                        Discover the larger-than-life sculpture of Jatayu, the
                        mythical bird from the Indian epic Ramayana. We'll take
                        a cable car ride to the top of the center and be rewarded
                        with panoramic views of the landscapes.</li>
                      <li>
                        We'll take a cable car ride to the top of the center and you'll be rewarded with breathtaking
                        panoramic views of the surrounding landscapes, don't forget to capture stunning photos here
                        gang!
                      </li>
                      <li>
                        As the evening approaches, we'll make our way back to our hotel to

                        unwind and recharge. </li>
                      <li>
                        Let's go to the Beach, Cliffs to witness the sunset &
                        explore the vibrant local markets to find unique
                        souvenirs for your loved ones & explore the flavors of
                        Varkala by visiting popular cafes and treating yourself. </li>
                      <li>
                        Get ready for an exhilarating adventure that awaits us tomorrow.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 4</div>: BEACH DAY, SURFING, KAYAKING AND
                    | MORE ADVENTURE!
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Surfing</p>
                        <p>Black Beach</p>
                        <p>Mangroove Forest</p>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Breakfast + Dinner
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Get early and start the day with a Surfing lesson at
                        Beach. Surf with proper guide in a surf-friendly
                        conditions.
                      </li>
                      <li>
                        Afterwards, let's head to check out the famous Black
                        Beach or Papanasam Beach.</li>
                      <li>
                        Next we'll go to the Mangroove forest to spill our
                        adventure spirits. Indulge in kayaking, cycling, stand
                        up paddling, spending the entire eve and
                        do the activities you like. </li>
                      <li>
                        After a satisfying day, let's head to our hotel for a delsih dinner and good
                        night's sleep.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> DAY 5</div>: ALLEPPEY | HOUSEBOAT STAY &
                    FAREWELL DINNER
                  </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Alleppey</p>
                        <p>House boat</p>
                        <p>Charming Villages</p>
                        <P>Farewell Dinner</P>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          B + L + D
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Post breakast, Say goodbye to Varkala. We'll checkout from our hotel and driving to Alleppey
                        which
                        is touted as the 'Backwater capital of India'.
                      </li>
                      <li>
                        Check into our floating paradise, the House boat,
                        and indulge in a delectable local lunch while cruising
                        along the mesmerizing backwaters.
                      </li>
                      <li>
                        But the excitement doesn't stop there. You can hop
                        on a thrilling Speed Boat Ride or Start exploring the
                        Charming Villages and hidden gems that surround us. <br>
                        Capture the sunset while having Kerala traditional tea
                        & snack from the Houseboat.
                      </li>
                      <li>
                        Let's give a thought about poor souls who left Kerala
                        just by visiting one place and left. <br>
                        Finally, we'll retire for the night with a Farewell
                        Dinner along music, dance and party with the gang
                        in the middle of the sea.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> DAY 6</div>: ALAPPUZHA BEACH & BACK TO HOME!
                  </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Alappuzha Beach</p>
                        <p>Shopping</p>
                        <p>Kochi </p>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Breakfast
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Indulge in delightful Breakfast on houseboat, let's
                        checkout and begin day by visiting the Alappuzha
                        Beach, where you can take a stroll along the

                        shoreline and enjoy the serene coastal ambiance.</li>
                      <li>
                        Finally, get time to go Shopping, buy souveneirs to
                        your loved ones. Then, we'll depart from Alleppey

                        and drive back to Kochi.
                      </li>
                      <li>
                        In just 6 days, we shared thrills, spills, and
                        countless good times. Let's plan a reunion
                        trip next year to continue the adventure.
                        100% guaranteed!
                      </li>
                      <li>
                        Goodbyes are never easy, but what ride
                        roumers it has been! See you guys, more Hugs!

                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- *****tab section start***** -->
          <div class="tab-section">
            <div class="wrapper">
              <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                <li><a href="#tab1" class="active"><i class="fa-solid fa-check"></i>Inclusions</a></li>
                <li><a href="#tab2"><i class="fa-solid fa-xmark"></i>Exclusions</a></li>
              </ul>
              <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                  <p>Cover all Transportation as mentioned in itinerary.
                  </p>
                  <p>
                    Includes Hotels & Houseboat stay. Solo travellers can share with a persons
                    of same gender travellers
                  </p>
                  <p>
                    5 Breakfast, 1 lunch & 5 Dinner [Includes Houseboat meals]
                  </p>
                  <p>
                    Experienced Team Leaders who are super friendly & knowledgeable
                  </p>
                  <p>
                    Entry fees for Included places and local tax. No hidden charges.
                  </p>
                  <p>
                    A-Z Trip assistance from our Travel Experts.
                  </p>
                </div>
                <div id="tab2">
                  <p>Personal Expenses like shopping, Paragliding, Kayaking and other optional activities.
                  </p>
                  <p>Any other costing involved due to natural calamity or any other forced circumstance which are
                    out of our control.
                  </p>
                  <p>
                    GST (5%) is applicable extra.
                  </p>
                  <p>
                    Anything which is not mentioned in the above Inclusions
                  </p>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="sticky-sidebar">
            <h2 class="head text-center text-md-left ">
              Upcoming Slots
            </h2>
            <div class="trip-tab">
              <ul class="nav nav-pills trip-nav mb-3" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Nov</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Nov</button>
                </li> -->
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-dail"
                    type="button" role="tab" aria-controls="pills-dail" aria-selected="false">Dec</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Jan</button>
                </li>
              </ul>
              <div class="tab-content tab-con" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                  aria-labelledby="pills-profile-tab">
                  <div class="upcoming-slot ">
                    <h3>Nov 25</h3>
                    <h4>(Sold Out)</h4>
                  </div>

                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="upcoming-slot ">
                    <h3>Nov 25</h3>

                  </div>
                </div>
                <div class="tab-pane fade" id="pills-dail" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="upcoming-slot ">
                    <h3>Dec 23</h3>
                    <h4>( Sold Out )</h4>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                  <div class="upcoming-slot ">
                    <h3> Jan 13 </h3>

                  </div>

                </div>
              </div>
            </div>
            <h2 style="font-size: 21px; margin-top: 32px;" class="head text-center text-md-left">
              Sharing Occupancy Type
            </h2>
            <div class="occupancy">
              <div class="price-occupancy">
                <select class="price-occupancy1" name="" id="">
                  <option value="21499">Double Sharing</option>
                  <!-- <option value="">Quad Sharing</option> -->
                  <option value="19499" selected>Triple Sharing</option>
                </select>
              </div>
              <div class="price-occupancy">
                <i class="fa-solid fa-location-dot" style="color: #adadad; font-size: 11px; padding: 0px 0 0 4px;"></i>
                <select class="price-occupancy1" name="" id="">
                  <!-- <option value="" selected>Chennai</option> -->
                  <option value="">Kochi</option>
                  <!-- <option value="">Coimbatore</option> -->
                </select>
              </div>
            </div>
            <div class="price">
              <h4>Price</h4>
              <p id="price">₹19,499 <span class="per-person">Per Person</span></p>
            </div>


            <div class="trip-form">
              <a href="#" class="btn inquiry butn butn__new">Send Inquiry</a>
              <a href="kerala-form" class="btn butn butn__new">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Itinerary end***** -->

  <!-- ***** Itinerary & Upcoming Dates end***** -->

  <!-- ***** why choose us start***** -->

  <!-- <section class="why-us">
    <div class="container position-relative">
      <h2 class="head text-white mb-2">
        why choose us
      </h2>

      <p class="why-para">
        Choose us for your travel needs because we offer extensive knowledge, a user-friendly experience, trustworthy recommendations, and exclusive deals and discounts. 
      </p>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-briefcase"></i></h3>
            <h2>affordable price available</h2>
            <p>
              At our travel site, we prioritize affordability, ensuring that you have access to a wide range of travel options at competitive prices.            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="trip-inner trip-inner1">
            <h3><i class="fa-solid fa-earth-americas"></i></h3>
            <h2>wide variety of designation</h2>
            <p>
              Embark on your next adventure with our travel site, offering a wide variety of destinations to suit every traveler's taste. From tropical paradises to bustling cities, explore breathtaking landscapes and immerse yourself in diverse cultures around the world.            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-thumbs-up"></i></h3>
            <h2>highly quality of service</h2>
            <p>
              Experience the highest quality of service with our travel site. From personalized assistance to reliable support, we are committed to delivering excellence at every step of your journey.            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ***** why choose us end***** -->


  <!--====== CUSTOMISE YOUR TRIP Start ======-->

  <section class="customise_your_trip  ">
    <h2 class="head">
      Spots/activity
    </h2>
    <div class="slider">
      <div class="slider-container">
        <div class="slider-item2 ">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/places-to-visit-in-vagamon-FEATURE-compressed.jpg"
                alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Vagamon Hills</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/Paraglyding.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Paragliding</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/jatayu.jpg" alt="roamers-Gallery" style="object-fit:fill;">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Jatayu Earth Centre</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/Kerala photos.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2> Alleppey Houseboat</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/black-beach.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Papanasam Beach</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/marmala.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Marmala Waterfalls</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/f5.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Mangroove Kayaking</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/cliffs.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Varkala Beach</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/meadows.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Vagamon Meadows</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/pine-forest.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Pine Forest</h2>
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/Kerala/7221844019.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>Alappuzha Beach</h2>
            </div>
          </div>
        </div>


        <!-- <div class="slider-item2">
          <div class="silder-pad">
            <a href="#">
              <div class="slid-img">
                <img class="cus-img" src="assets/img/Kerala/146.jpg" alt="roamers-Gallery">
              </div>
              <div class="cust-inner">
                <h3> </h3>
                <h2>Houseboat</h2>
              </div>
            </a>
          </div>
        </div> -->

        <!-- <div class="slider-item2">
          <div class="silder-pad">
            <a href="#">
              <div class="slid-img">
                <img class="cus-img" src="assets/img/Kerala/houseboat-Copy.jpg" alt="roamers-Gallery">
              </div>
              <div class="cust-inner">
                <h3> </h3>
                <h2>Alleppey</h2>
              </div>
            </a>
          </div>
        </div> -->

      </div>
      <button class="prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
      <button class="next-btn"><i class="fa-solid fa-chevron-right"></i></button>

      <button class="prev-btn1"><i class="fa-solid fa-chevron-left"></i></button>
      <button class="next-btn1"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
  </section>

  <!--====== faq Start ======-->
  <section class="faq">
    <h2 class="head">FAQ</h2>
    <div class="container">
      <div class="row">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item acc-item">
            <h2 class="accordion-header acco-head" id="flush-headingOne">
              <button class="accordion-button acc-btn collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Can I Join solo?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Absolutely! Whether you're joining solo, with friends, or as a couple, these group trips are designed to
                accommodate all types of travelers. Join us for budget-friendly adventures and check off more items from
                your bucket list! </div>
            </div>
          </div>
          <div class="accordion-item acc-item">
            <h2 class="accordion-header acco-head" id="flush-headingTwo">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                How about a safety for female Travellers?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Yes, female solo travelers can confidently join our group trips. We prioritize their safety by ensuring
                a secure environment with trusted trip captains, verified hosts, and reliable transport vendors. Your
                safety is our top priority any safety concerns during the trip will be promptly addressed by our team.
                So relax and make the most of your journey!</div>
            </div>
          </div>
          <div class="accordion-item acc-item">
            <h2 class="accordion-header  acco-head" id="flush-headingThree">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                What is the age requirement to Join?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                The trips is for 18-35 year olds
              </div>
            </div>
          </div>
          <div class="accordion-item acc-item">
            <h2 class="accordion-header acco-head" id="flush-headingFour">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                How do I confirm my booking?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Send the payment screenshot to info@roamers.in and you’ll get the confirmation email within 24 hours.
              </div>
            </div>
          </div>
          <div class="accordion-item acc-item">
            <h2 class="accordion-header acco-head" id="flush-headingFive">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                How do I trust Roamers?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                You can absolutely trust us! We've nailed over 500 awesome trips. Check out the great reviews, speak to
                our travel consultants, and check the website for further details. Our offices are in Chennai and Delhi
                – we're all about being upfront and reliable all the way… Feel free to connect.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== faq END ======-->



  <section class="Popular-Destination">
    <h2 class="head">
      Popular Destination
    </h2>
    <div class="container-fluid">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="pondicherry">
              <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon"> EX: Chennai
                  </h4>
                </div>
                <h2>Pondi Dive-in
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Pondicherry</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="pondi-dates">Nov
                      24, Dec 09, 23 </span>
                  </h4>
                  <h4><span>₹6,999</span> </h4>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="ooty">
              <img src="assets/img/short-trip/Ooty photo.jpg " alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon"> EX: Chennai,
                    Coimbatore
                  </h4>
                </div>
                <h2>Ooty the Queen of Hills
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Nilgiri, Conoor, Coimbatore
                  </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="ooty-dates">Nov 3, 24, Dec 8, 15, 22, Jan 26 </span>
                  </h4>
                  <h4><span>₹6,999</span> </h4>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide swiper-slide-image">
            <a href="kedarkantha">
              <img src="assets/img/kedarkantha/main-sub.jpg " alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>5 DAYS / 4 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon"> EX: Dehradun
                  </h4>
                </div>
                <h2>Kedarkantha Trek
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Kedarkantha
                  </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="kedar-dates">Open Soon</span>
                  </h4>
                  <h4><span>₹8,999</span> </h4>
                </div>
              </div>
            </a>
          </div>
      
          <div class="swiper-slide">
            <a href="wayanad">
              <!-- <img class="new-year" src="assets/img/bg/Pongal-gif.gif" alt=""> -->
              <img src="assets/img/wayanad/900Kandi-1.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Direct /
                    Chennai
                  </h4>
                </div>
                <h2>Wonders of Wayanad
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Wayanad</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="kolukku-dates">
                      Jan 12 </span>
                  </h4>
                  <h4><span>₹7,999</span> </h4>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="kolukkumalai-trek">
              <img src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai
                  </h4>
                </div>
                <h2>Munnar with Kolukkumalai Trek
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Munnar</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="kodai-dates">Jan
                      12, Feb 16 </span>
                  </h4>
                  <h4><span>₹7,999</span> </h4>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="chikmagalur">
              <img src="assets/img/Testimnils/chikmagalur.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Bangalore
                  </h4>
                </div>
                <h2>Chikmagalur Trek
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Chikmagalur, Z point, Hebbe Falls</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="chik-dates"> Dec
                      15 </span>
                  </h4>
                  <h4><span>₹7,999</span> </h4>
                </div>
              </div>
            </a>
          </div>
          <!-- <div class="swiper-slide">
            <a href="kolukkumalai">
              <img class="new-year" src="assets/img/bg/christmas.gif" alt="">
              <img src="assets/img/short-trip/st1.JPG" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>2 DAYS / 1 NIGHT</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai
                  </h4>
                </div>
                <h2>Munnar with Kolukkumalai
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Kolukkumalai, Munnar </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="kolukku-dates"> Dec
                      8, 23, Jan 12 </span>
                  </h4>
                  <h4><span>₹5,499</span> </h4>
                </div>
              </div>
            </a>
          </div> -->
          <div class="swiper-slide">
            <a href="kodaikanal">
              <img src="assets/img/kodaikanal/Dolphin nose.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai
                  </h4>
                </div>
                <h2>Kodaikanal Trek with Poombarai
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Perumal peak, Vattakanal, Poombarai</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="kodai-dates">Jan
                      26, Feb 10 </span>
                  </h4>
                  <h4><span>₹7,999</span> </h4>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="kerala">
              <img src="assets/img/backpacking/Kerala centre.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>6 DAYS / 5 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Kochi
                  </h4>
                </div>
                <h2>Kerala: To God’s Own Country

                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Vagamon, Varkala, Alleppey</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="kerala-dates"> Nov
                      25, Dec 23 </span>
                  </h4>
                  <h4><span>₹19,499</span> </h4>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="andaman">
              <img src="assets/img/backpacking/Andaman hoppers.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>7 DAYS / 6 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Port Blair
                  </h4>
                </div>
                <h2>Andaman Island Hopping
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Havelock Island, Neil Island, Port
                    Blair
                  </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="andaman-dates"> Dec 23 </span>
                  </h4>
                  <h4><span>₹24,499</span> </h4>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#home-form">
              <img src="assets/img/backpacking/Leh ladakh (1).jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>6 DAYS / 5 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Leh
                  </h4>
                </div>
                <h2>Leh-Ladakh Backpacking
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon"> Leh, Nubra, Pangong</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    (Sold Out)
                  </h4>
                  <h4><span>₹21,999</span> </h4>
                </div>
              </div>
            </a>
          </div>


          <!-- <div class="swiper-slide">
            <a href="#home-form">
              <img src="assets/img/short-trip/Tourist-Places-in-Kodaikanal-.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>2 DAYS / 1 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai
                  </h4>
                </div>
                <h2>Kodai paradise
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Kodaikanal</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    Opens Soon
                  </h4>
                  <h4><span>₹7,499</span> </h4>
                </div>
              </div>
            </a>
          </div> -->
          <div class="swiper-slide">
            <a href="#home-form">
              <img src="assets/img/images/bp2.png" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Bangalore
                  </h4>
                </div>
                <h2>Goa Escape
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">North Goa, South Goa </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    Opens Soon
                  </h4>
                  <h4><span>₹8,499</span> </h4>
                </div>
              </div>
            </a>
          </div>



          <!-- Add more swiper-slide elements for additional images -->
        </div>
        <div class="swiper-button-next" style="right: 46px;"></div>
        <div class="swiper-button-prev" style="left: 46px;"></div>
      </div>
    </div>
  </section>
  <!--====== quotes End ======-->

  <!--====== FOOTER START======-->
  <?php include('includes/footer.php'); ?>
  <!--====== FOOTER END======-->

  <!-- ***** All jQuery Plugins ***** -->

  <!-- jQuery(necessary for all JavaScript plugins) -->
  <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap js -->
  <script src="assets/js/bootstrap/popper.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>

  <!-- Plugins js -->
  <script src="assets/js/plugins/plugins.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Active js -->
  <script src="assets/js/active.js"></script>
  <script src="assets/js/dates.js"></script>

  <script>

    // Get all elements with the class "price-occupancy1"
    const selectElements = document.getElementsByClassName("price-occupancy1");

    // Get the price element
    const price = document.getElementById('price');
    const person = document.querySelector('.per-person');

    // Add a change event listener to each select element
    for (const select of selectElements) {
      select.addEventListener("change", function () {
        // Get the selected option
        const selectedOption = select.options[select.selectedIndex];

        // Update the value
        const selectedValue = parseInt(selectedOption.value); // Parse as an integer

        // You can do something with the selected value here
        price.innerHTML = `₹${selectedValue.toLocaleString()} <span class="per-person">Per Person</span>`;
      });
    }


    // *****Sidebar tab content end*****    

    // *****Sidebar tab radio content start*****
    var sliders = document.querySelectorAll(".slider");
    sliders.forEach(function (slider) {
      var sliderContainer = slider.querySelector(".slider-container");
      var prevBtn = slider.querySelector(".prev-btn1");
      var nextBtn = slider.querySelector(".next-btn1");

      var slideWidth = slider.offsetWidth / 5; // Default slide width for desktop
      var slidesToShow = 5; // Number of slides to show at a time on desktop
      var currentSlide = 0;
      var totalSlides = sliderContainer.childElementCount;
      var touchStartX = 0;
      var touchEndX = 0;
      var isDesktop = window.innerWidth >= 768; // Adjust the breakpoint as needed

      if (!isDesktop) {
        slideWidth = slider.offsetWidth / 1; // Slide width for mobile
        slidesToShow = 1; // Number of slides to show at a time on mobile
      }

      prevBtn.addEventListener("click", handlePrevClick);
      nextBtn.addEventListener("click", handleNextClick);
      sliderContainer.addEventListener("touchstart", handleTouchStart);
      sliderContainer.addEventListener("touchmove", handleTouchMove);
      sliderContainer.addEventListener("touchend", handleTouchEnd);

      updateButtonVisibility();

      function handlePrevClick() {
        if (isDesktop) {
          currentSlide = Math.max(currentSlide - 1, 0);
        } else {
          currentSlide = Math.max(currentSlide - 1, 0);
          currentSlide = Math.min(currentSlide, totalSlides - 1);
        }
        sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
        updateButtonVisibility();
      }

      function handleNextClick() {
        if (isDesktop) {
          currentSlide = Math.min(currentSlide + 1, totalSlides - slidesToShow);
        } else {
          currentSlide = Math.min(currentSlide + 1, totalSlides - 1);
        }
        sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
        updateButtonVisibility();
      }

      function handleTouchStart(e) {
        touchStartX = e.touches[0].clientX;
      }

      function handleTouchMove(e) {
        touchEndX = e.touches[0].clientX;
        var touchDistance = touchStartX - touchEndX;

        // Smooth scrolling by adjusting the transform value based on touch distance
        sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth - touchDistance}px)`;
      }

      function handleTouchEnd() {
        var touchDistance = touchStartX - touchEndX;

        if (touchDistance > slideWidth / 2) {
          handleNextClick();
        } else if (touchDistance < -slideWidth / 2) {
          handlePrevClick();
        } else {
          // Reset the transform value if swipe distance is not significant
          sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
        }
      }

      function updateButtonVisibility() {
        if (currentSlide === 0) {
          prevBtn.style.display = "none";
          nextBtn.style.display = "none";
        } else if (currentSlide >= totalSlides - slidesToShow) {
          prevBtn.style.display = "none";
          nextBtn.style.display = "none";
        } else {
          prevBtn.style.display = "none";
          nextBtn.style.display = "none";
        }
      }
    });



    function toggleReadMore() {
      var moreText = document.getElementById('moreText');
      var readMoreLink = document.getElementById('readMoreLink');

      if (moreText.style.display === 'none') {
        moreText.style.display = 'inline';
        readMoreLink.textContent = '...Read Less';
      } else {
        moreText.style.display = 'none';
        readMoreLink.textContent = '...Read More';
      }
    }







    window.addEventListener('DOMContentLoaded', function () {
      const swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 10,
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          1300: {
            slidesPerView: 4,
          },
          640: {
            slidesPerView: 3,
          },
          240: {
            slidesPerView: 1.1,
          },
        },
      });

    });
  </script>
  <script>
    var navbar = document.querySelector('nav')

    window.onscroll = function () {

      // pageYOffset or scrollY
      if (window.scrollY > 100) {
        navbar.classList.add('scrolled')
      } else {
        navbar.classList.remove('scrolled')
      }
    }
  </script>
</body>

</html>