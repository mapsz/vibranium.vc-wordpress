<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>

  <style>
    @font-face {
      font-family: "ABC Favorit Regular";
      src: url(fonts/ABCFavoritPro-Regular.otf) format("truetype");
    }
    @font-face {
      font-family: "ABC Favorit Medium";
      src: url(fonts/ABCFavoritPro-Medium.otf) format("truetype");
    }
    body{
      font-family: 'ABC Favorit Regular';
      font-size: 18px;
      line-height: 140%;
      margin:0px;
    }
    h1{
      font-family: 'ABC Favorit Medium' !important;
      font-size: 64px;
      line-height: 95%;
    }
    h2, .h2{
      font-family: 'ABC Favorit Medium' !important;
      font-size: 48px;
      line-height: 95%;
    }
    h3{
      font-family: 'ABC Favorit Medium' !important;
      font-size: 32px;
      line-height: 100%;
    }
    h4{
      font-family: 'ABC Favorit Medium' !important;
      font-size: 18px;
      line-height: 120%;
    }
    p{
      margin:0px;
    }
    @media (min-width: 768px) {
      body{
        font-size: 20px;
      }
      h1{
        font-size: 96px;
      }
      h2, .h2{
        font-size: 64px;
      }
      h3{
        font-size: 48px;
        line-height: 95%;
      }
      h4{
        font-size: 32px;
        line-height: 100%;
      }
    }
    a{
      color:black;
      text-decoration: none;
    }
    a:hover{
      text-decoration: underline;
    }
    .main-color{
      background-color: #2A4E5F !important;
    }
    .navbar {
      background-color: transparent !important;
      height: 80px;
      color: white;
    }
    .navbar-brand, .nav-link {
      font-size: 18px !important;
      color: white;
    }
    .navbar.scrolled{
      background-color: black !important;
    }
    @media (max-width: 767px) {
      .navbar-collapse{
        background-color: black !important;
        padding: 15px;
        text-align: right;
      }
    }

    .btn{
      border-radius: 50px;
    }

    .welcome{
      padding-top: 80px !important;
    }

    .p-40{
      padding:40px;
    }
    .my-40{
      margin-top:40px;
      margin-bottom:40px;
    }
    .mr-40{
      margin-right:40px;
    }

    @media (min-width: 768px) {
      .program-online-free-container .inner-container{
        max-width: 660px;
        font-size: 27px;
        margin-left: 15%;
      }
    }
    .program-online-free-container .inner-container{
      line-height: 140%;
    }

    .navbar-skip{
      padding-top:80px;
    }

    .main-container .inner-container{
      height: 100vh;
      background-image: url('img/main-mobile.png');
      background-color: #2A4E5F;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: top;
      font-weight: 500;
      line-height: 100%;
    }

    @media (min-width: 768px) {
      .main-container .inner-container{
        background-image: url('img/main-desktop.png');
      }
      .main-container .main-text{
        line-height: 95%;
        max-width: 436px;
        margin-left: 15%;
      }
    }

    .venture-hacks-card:first-child {
      margin-left: 160px !important;
    }

    .venture-hacks-carusel{
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    .venture-hacks-carusel::-webkit-scrollbar{
      display: none;
    }

    .carusel-button{
      position: absolute;
      top: 220px;
      cursor: pointer;
      z-index: 10;
    }
    .carusel-button-right{
      right: 0px;
    }

  </style>


  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-xxl">

      <a class="navbar-brand" href="#">

        <svg width="39" height="34" viewBox="0 0 39 34" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M36.68 8H29.75L33.21 2L34.36 0H4.62L9.24 8H0L13.72 31.76L14.87 33.76L16.02 31.76L19.48 25.76L22.94 31.76L24.09 33.76L25.24 31.76L37.81 10L38.96 8H36.65H36.68ZM8.08 2H30.9L27.44 8H11.55L8.09 2H8.08ZM14.87 29.76L3.46 10H10.39L18.34 23.76L14.88 29.76H14.87ZM12.7 10H26.28L19.49 21.76L12.7 10ZM24.11 29.76L20.65 23.76L28.6 10H35.53L24.12 29.76H24.11Z" fill="white"/>
        </svg>
        <span>VIBRANIUM</span>
        <span style="color:#606A6F">.VC</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Approach</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light" href="#">Apply</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main -->
  <div class="main-container container-fluid p-0">
    <div class="inner-container">
      <div class="container-xxl d-flex align-items-end h-100" style="padding-bottom:80px">
        <div class="main-text">
          <h1 class="text-light">
            Stronger with Vibranium
          </h1>
          <p class="text-light">
            Our mission is to support startups with global ambitions to innovate with purpose and scale with impact.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Approach -->
  <div class="container-xxl mt-5">
    <div class="row">
      <div class="col-12 col-md-6">
        <h2 style="max-width: 400px;">
          Our Approach
        </h2>
      </div>
      <div class="col-12 col-md-6">
        <p class="mb-4">We carefully select startups that fit our investment criteria and have the potential for global scaling. </p>
        <p class="mb-4">Most of our portfolio companies are in the B2B SaaS segment, because we are eager to work in strategic markets that attract a lot of talent and demonstrate impressive growth. We look for startups that apply disruptive technology and/or business models and can show measurable progress, such as proven sales, product market fit and customer validation. Trends that are likely to increase market demand for startups' products are another positive factor.</p>
        <p class="mb-4">A competent team with skills, vision, and passion for reaching the goal is of utmost importance to us. We take interest not only in your work, but also in what brought you together and what drives you to success. </p>
        <p class="mb-5">Our investment committee includes two Vibranium GPs and one  external. The final decision is based on company analysis, interviews with founders, and due diligence results. We seal deals according to Delaware law, which we believe to be the best fit for both parties.</p>

        <button class="btn btn-dark px-4">Apply</button>

      </div>
    </div>
  </div>

  <!-- Latest updates -->
  <div class="container-xxl mt-5 pt-md-4">
    <div class="row">
      <div class="col-12 col-md-6">

        <div class="h-100 d-flex flex-column justify-content-between pb-4">
          <div class="d-flex justify-content-between mb-5 pb-0 pb-md-5 ">
            <h2 style="max-width: 400px;">
              Latest updates
            </h2>
            <a class="text-secondary px-4" href="#">
              All news
            </a>
          </div>

          <div>
            <div class="d-flex align-items-center py-4 border-bottom">
              <div>Another day, another milestone! Vibranium.VC to be featured as a Top Investor by SeedRound Info alongside key venture players such as Y Combinator and Liquid2 Venture</div>
              <div class="p-4">
                <a href="#">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.9688 29.9375C17.0208 29.9375 18.9479 29.5469 20.75 28.7656C22.5521 27.9844 24.1406 26.9062 25.5156 25.5312C26.901 24.1562 27.9844 22.5677 28.7656 20.7656C29.5469 18.9531 29.9375 17.0208 29.9375 14.9688C29.9375 12.9271 29.5417 11.0052 28.75 9.20312C27.9688 7.39062 26.8854 5.79688 25.5 4.42188C24.125 3.03646 22.5365 1.95312 20.7344 1.17188C18.9323 0.390625 17.0052 0 14.9531 0C12.9115 0 10.9896 0.390625 9.1875 1.17188C7.38542 1.95312 5.79167 3.03646 4.40625 4.42188C3.03125 5.79688 1.95312 7.39062 1.17188 9.20312C0.390625 11.0052 0 12.9271 0 14.9688C0 17.0208 0.390625 18.9531 1.17188 20.7656C1.96354 22.5677 3.04688 24.1562 4.42188 25.5312C5.79688 26.9062 7.38542 27.9844 9.1875 28.7656C10.9896 29.5469 12.9167 29.9375 14.9688 29.9375ZM14.9688 27.6719C13.2083 27.6719 11.5573 27.3438 10.0156 26.6875C8.48438 26.0312 7.14062 25.125 5.98438 23.9688C4.82812 22.8021 3.92188 21.4531 3.26562 19.9219C2.60938 18.3802 2.28125 16.7292 2.28125 14.9688C2.28125 13.2188 2.60938 11.5781 3.26562 10.0469C3.92188 8.50521 4.82812 7.15625 5.98438 6C7.14062 4.83333 8.48438 3.92188 10.0156 3.26562C11.5469 2.60938 13.1927 2.28125 14.9531 2.28125C16.724 2.28125 18.375 2.60938 19.9062 3.26562C21.4479 3.92188 22.7969 4.83333 23.9531 6C25.1198 7.15625 26.026 8.50521 26.6719 10.0469C27.3281 11.5781 27.6562 13.2188 27.6562 14.9688C27.6562 16.7292 27.3281 18.3802 26.6719 19.9219C26.026 21.4531 25.1198 22.8021 23.9531 23.9688C22.7969 25.125 21.4479 26.0312 19.9062 26.6875C18.375 27.3438 16.7292 27.6719 14.9688 27.6719ZM22.5312 14.9531C22.5312 14.6927 22.4062 14.4323 22.1562 14.1719L17.0625 9.0625C16.8854 8.875 16.651 8.78125 16.3594 8.78125C16.0781 8.78125 15.8438 8.875 15.6562 9.0625C15.4792 9.25 15.3906 9.47917 15.3906 9.75C15.3906 10.0312 15.4896 10.2708 15.6875 10.4688L17.7344 12.5L19.5312 14.0469L16.5625 13.9375H8.34375C8.04167 13.9375 7.79688 14.0312 7.60938 14.2188C7.42188 14.4062 7.32812 14.651 7.32812 14.9531C7.32812 15.2448 7.42188 15.4896 7.60938 15.6875C7.79688 15.875 8.04167 15.9688 8.34375 15.9688H16.5625L19.5312 15.8594L17.7344 17.4219L15.6875 19.4219C15.4896 19.6198 15.3906 19.8646 15.3906 20.1562C15.3906 20.4271 15.4792 20.6562 15.6562 20.8438C15.8438 21.0312 16.0781 21.125 16.3594 21.125C16.6406 21.125 16.875 21.0312 17.0625 20.8438L22.1562 15.7344C22.4062 15.4844 22.5312 15.224 22.5312 14.9531Z" fill="#040615" fill-opacity="0.3"/>
                  </svg>
                </a>
              </div>
            </div>

            <div class="d-flex align-items-center py-4 border-bottom">
              <div>Zamir Shukho Of Vibranium VC 5 Things I Wish Someone Had Told Me Before I Switched Careers</div>
              <div class="p-4">
                <a href="#">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.9688 29.9375C17.0208 29.9375 18.9479 29.5469 20.75 28.7656C22.5521 27.9844 24.1406 26.9062 25.5156 25.5312C26.901 24.1562 27.9844 22.5677 28.7656 20.7656C29.5469 18.9531 29.9375 17.0208 29.9375 14.9688C29.9375 12.9271 29.5417 11.0052 28.75 9.20312C27.9688 7.39062 26.8854 5.79688 25.5 4.42188C24.125 3.03646 22.5365 1.95312 20.7344 1.17188C18.9323 0.390625 17.0052 0 14.9531 0C12.9115 0 10.9896 0.390625 9.1875 1.17188C7.38542 1.95312 5.79167 3.03646 4.40625 4.42188C3.03125 5.79688 1.95312 7.39062 1.17188 9.20312C0.390625 11.0052 0 12.9271 0 14.9688C0 17.0208 0.390625 18.9531 1.17188 20.7656C1.96354 22.5677 3.04688 24.1562 4.42188 25.5312C5.79688 26.9062 7.38542 27.9844 9.1875 28.7656C10.9896 29.5469 12.9167 29.9375 14.9688 29.9375ZM14.9688 27.6719C13.2083 27.6719 11.5573 27.3438 10.0156 26.6875C8.48438 26.0312 7.14062 25.125 5.98438 23.9688C4.82812 22.8021 3.92188 21.4531 3.26562 19.9219C2.60938 18.3802 2.28125 16.7292 2.28125 14.9688C2.28125 13.2188 2.60938 11.5781 3.26562 10.0469C3.92188 8.50521 4.82812 7.15625 5.98438 6C7.14062 4.83333 8.48438 3.92188 10.0156 3.26562C11.5469 2.60938 13.1927 2.28125 14.9531 2.28125C16.724 2.28125 18.375 2.60938 19.9062 3.26562C21.4479 3.92188 22.7969 4.83333 23.9531 6C25.1198 7.15625 26.026 8.50521 26.6719 10.0469C27.3281 11.5781 27.6562 13.2188 27.6562 14.9688C27.6562 16.7292 27.3281 18.3802 26.6719 19.9219C26.026 21.4531 25.1198 22.8021 23.9531 23.9688C22.7969 25.125 21.4479 26.0312 19.9062 26.6875C18.375 27.3438 16.7292 27.6719 14.9688 27.6719ZM22.5312 14.9531C22.5312 14.6927 22.4062 14.4323 22.1562 14.1719L17.0625 9.0625C16.8854 8.875 16.651 8.78125 16.3594 8.78125C16.0781 8.78125 15.8438 8.875 15.6562 9.0625C15.4792 9.25 15.3906 9.47917 15.3906 9.75C15.3906 10.0312 15.4896 10.2708 15.6875 10.4688L17.7344 12.5L19.5312 14.0469L16.5625 13.9375H8.34375C8.04167 13.9375 7.79688 14.0312 7.60938 14.2188C7.42188 14.4062 7.32812 14.651 7.32812 14.9531C7.32812 15.2448 7.42188 15.4896 7.60938 15.6875C7.79688 15.875 8.04167 15.9688 8.34375 15.9688H16.5625L19.5312 15.8594L17.7344 17.4219L15.6875 19.4219C15.4896 19.6198 15.3906 19.8646 15.3906 20.1562C15.3906 20.4271 15.4792 20.6562 15.6562 20.8438C15.8438 21.0312 16.0781 21.125 16.3594 21.125C16.6406 21.125 16.875 21.0312 17.0625 20.8438L22.1562 15.7344C22.4062 15.4844 22.5312 15.224 22.5312 14.9531Z" fill="#040615" fill-opacity="0.3"/>
                  </svg>
                </a>
              </div>
            </div>

            <div class="d-flex align-items-center py-4">
              <div>Stronger with Vibranium.  Relocate your startup to the US with the help of the best Silicon Valley experts</div>
              <div class="p-4">
                <a href="#">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.9688 29.9375C17.0208 29.9375 18.9479 29.5469 20.75 28.7656C22.5521 27.9844 24.1406 26.9062 25.5156 25.5312C26.901 24.1562 27.9844 22.5677 28.7656 20.7656C29.5469 18.9531 29.9375 17.0208 29.9375 14.9688C29.9375 12.9271 29.5417 11.0052 28.75 9.20312C27.9688 7.39062 26.8854 5.79688 25.5 4.42188C24.125 3.03646 22.5365 1.95312 20.7344 1.17188C18.9323 0.390625 17.0052 0 14.9531 0C12.9115 0 10.9896 0.390625 9.1875 1.17188C7.38542 1.95312 5.79167 3.03646 4.40625 4.42188C3.03125 5.79688 1.95312 7.39062 1.17188 9.20312C0.390625 11.0052 0 12.9271 0 14.9688C0 17.0208 0.390625 18.9531 1.17188 20.7656C1.96354 22.5677 3.04688 24.1562 4.42188 25.5312C5.79688 26.9062 7.38542 27.9844 9.1875 28.7656C10.9896 29.5469 12.9167 29.9375 14.9688 29.9375ZM14.9688 27.6719C13.2083 27.6719 11.5573 27.3438 10.0156 26.6875C8.48438 26.0312 7.14062 25.125 5.98438 23.9688C4.82812 22.8021 3.92188 21.4531 3.26562 19.9219C2.60938 18.3802 2.28125 16.7292 2.28125 14.9688C2.28125 13.2188 2.60938 11.5781 3.26562 10.0469C3.92188 8.50521 4.82812 7.15625 5.98438 6C7.14062 4.83333 8.48438 3.92188 10.0156 3.26562C11.5469 2.60938 13.1927 2.28125 14.9531 2.28125C16.724 2.28125 18.375 2.60938 19.9062 3.26562C21.4479 3.92188 22.7969 4.83333 23.9531 6C25.1198 7.15625 26.026 8.50521 26.6719 10.0469C27.3281 11.5781 27.6562 13.2188 27.6562 14.9688C27.6562 16.7292 27.3281 18.3802 26.6719 19.9219C26.026 21.4531 25.1198 22.8021 23.9531 23.9688C22.7969 25.125 21.4479 26.0312 19.9062 26.6875C18.375 27.3438 16.7292 27.6719 14.9688 27.6719ZM22.5312 14.9531C22.5312 14.6927 22.4062 14.4323 22.1562 14.1719L17.0625 9.0625C16.8854 8.875 16.651 8.78125 16.3594 8.78125C16.0781 8.78125 15.8438 8.875 15.6562 9.0625C15.4792 9.25 15.3906 9.47917 15.3906 9.75C15.3906 10.0312 15.4896 10.2708 15.6875 10.4688L17.7344 12.5L19.5312 14.0469L16.5625 13.9375H8.34375C8.04167 13.9375 7.79688 14.0312 7.60938 14.2188C7.42188 14.4062 7.32812 14.651 7.32812 14.9531C7.32812 15.2448 7.42188 15.4896 7.60938 15.6875C7.79688 15.875 8.04167 15.9688 8.34375 15.9688H16.5625L19.5312 15.8594L17.7344 17.4219L15.6875 19.4219C15.4896 19.6198 15.3906 19.8646 15.3906 20.1562C15.3906 20.4271 15.4792 20.6562 15.6562 20.8438C15.8438 21.0312 16.0781 21.125 16.3594 21.125C16.6406 21.125 16.875 21.0312 17.0625 20.8438L22.1562 15.7344C22.4062 15.4844 22.5312 15.224 22.5312 14.9531Z" fill="#040615" fill-opacity="0.3"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6" style="background-color: #2A4E5F;">
        <div class="h2 m-3 my-5 m-md-5 pt-md-3 pb-md-5">
          <span class="text-light">Stronger with Vibranium.</span>
          <span class="text-secondary">Relocate your startup to the US with the help of the best Silicon Valley experts</span>
        </div>

        <div class="m-3 mt-5 py-4 m-md-5 pt-md-5">
          <a href="#" class="h2 text-light">
            Apply now
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Faces -->
  <div class="container-xxl mt-5">

    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-between mb-5 pb-0 pb-md-5 ">
          <h2 style="max-width: 400px;">
            Faces
          </h2>
          <a class="text-secondary px-4" href="#">
            All stories
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-6 text-secondary align-self-end mb-4 mb-md-5">
        <div class="mb-1 md-md-3">
          <span class="text-dark">Vibranium</span>
          Become Stronger with a Trusted and Founder-Friendly VC Partner
        </div>
        <div>
          <img class="w-100" src="img/faces/vibranium.png" alt="">
        </div>
      </div>

      <div class="col-12 col-md-6 text-secondary align-self-end mb-4 mb-md-5">
        <div class="mb-1 md-md-3">
          <span class="text-dark">Everytale</span>
          Monetize Past and Present Online Events in a Few Clicks
        </div>
        <div>
          <img class="w-100" src="img/faces/everytale.png" alt="">
        </div>
      </div>

      <div class="col-12 col-md-6 text-secondary align-self-end mb-4 mb-md-5">
        <div class="mb-1 md-md-3">
          <span class="text-dark">MR NET</span>
          Keep Your Business Online No Matter What
        </div>
        <div>
          <img class="w-100" src="img/faces/mrnet.png" alt="">
        </div>
      </div>

      <div class="col-12 col-md-6 text-secondary align-self-end mb-4 mb-md-5">
        <div class="mb-1 md-md-3">
          <span class="text-dark">Vibranium</span>
          Become Stronger with a Trusted and Founder-Friendly VC Partner
        </div>
        <div>
          <img class="w-100" src="img/faces/vibranium.png" alt="">
        </div>
      </div>

      <div class="col-12 col-md-6 text-secondary align-self-end mb-4 mb-md-5">
        <div class="mb-1 md-md-3">
          <span class="text-dark">Everytale</span>
          Monetize Past and Present Online Events in a Few Clicks
        </div>
        <div>
          <img class="w-100" src="img/faces/everytale.png" alt="">
        </div>
      </div>

      <div class="col-12 col-md-6 text-secondary align-self-end mb-4 mb-md-5">
        <div class="mb-1 md-md-3">
          <span class="text-dark">MR NET</span>
          Keep Your Business Online No Matter What
        </div>
        <div>
          <img class="w-100" src="img/faces/mrnet.png" alt="">
        </div>
      </div>

      <div class="col-12 col-md-6 text-secondary align-self-end mb-4 mb-md-5">
        <div class="mb-1 md-md-3">
          <span class="text-dark">MR NET</span>
          Keep Your Business Online No Matter What
        </div>
        <div>
          <img class="w-100" src="img/faces/mrnet.png" alt="">
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center my-5">
      <button class="btn btn-dark px-4">More stories</button>
    </div>

  </div>


  <!-- Venture Hacks -->
  <div class="container-xxl mt-5 pb-5">
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-between mb-5 pb-0 pb-md-5 ">
          <h2>
            Venture Hacks
          </h2>
          <a class="text-secondary px-4" href="#">
            All venture hacks
          </a>
        </div>
      </div>
    </div>

    <div class="venture-hacks-carusel-container">

      <div style="position: relative;">
        <div class="carusel-button carusel-button-left">
          <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.7">
              <circle cx="30" cy="30" r="30" fill="#B0B6B9" fill-opacity="0.5"/>
              <path d="M28.5 24L22.5 30L28.5 36" stroke="black" stroke-width="2" stroke-linecap="round"/>
              <line x1="23" y1="30" x2="36" y2="30" stroke="black" stroke-width="2" stroke-linecap="round"/>
            </g>
          </svg>
        </div>
        <div class="carusel-button carusel-button-right">
          <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.7">
              <circle cx="30" cy="30" r="30" fill="#B0B6B9" fill-opacity="0.5" transform="rotate(-180 30 30)"/>
              <path d="M31.5 36L37.5 30L31.5 24" stroke="black" stroke-width="2" stroke-linecap="round"/>
              <line x1="37" y1="30" x2="24" y2="30" stroke="black" stroke-width="2" stroke-linecap="round"/>
            </g>
          </svg>
        </div>
      </div>

      <div class="venture-hacks-carusel d-flex flex-row flex-nowrap overflow-auto m-0">
        <?php for ($i=0; $i < 12; $i++) : ?>
          <div class="venture-hacks-card card mr-40" style="min-width: 400px; min-height: 500px;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <div class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</div>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <?php endfor ?>
      </div>

    </div>

  </div>


  <!-- Footer -->
  <footer style="background-color:#B0B6B9">
    <div class="container-xxl pt-5" >
      <div class="row">
        <div class="col-12 col-md-6 p-3">
          <div class="row">
            <div class="col-12">
              <svg width="138" height="120" viewBox="0 0 156 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M146.72 16H9.24023L13.8402 24L73.3602 127.08L77.9602 135.08L82.5602 127.08L142.12 24L146.72 16ZM77.9602 119.08L23.0802 24H132.88L78.0002 119.08H77.9602Z" fill="#040615" fill-opacity="0.3"/>
                <path d="M146.72 32H119L132.84 8L137.44 0H18.48L36.96 32H0L54.88 127.04L59.48 135.04L64.08 127.04L77.92 103.04L91.76 127.04L96.36 135.04L100.96 127.04L151.24 40L155.84 32H146.6H146.72ZM32.32 8H123.6L109.76 32H46.2L32.36 8H32.32ZM59.48 119.04L13.84 40H41.56L73.36 95.04L59.52 119.04H59.48ZM50.8 40H105.12L77.96 87.04L50.8 40ZM96.44 119.04L82.6 95.04L114.4 40H142.12L96.48 119.04H96.44Z" fill="#040615"/>
              </svg>
            </div>
            <div class="col-12 col-md-6">
              <p class="mt-3">
                Vibranium is a Silicon Valley-based venture fund that focuses on startups with global ambitions. We provide seed-stage funding to technologically advanced IT solutions based on B2B SaaS business models.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="row">
            <div class="col-12 col-md-6 mb-5">
              <h4 class="mb-4" style="color:black">Our portfolio</h4>
              <a href="#">Everytale </a> <br>
              <a href="#">MR NET</a> <br>
              <a href="#">Otis</a> <br>
              <a href="#">IVM Market</a> <br>
              <a href="#">iSchoolConnect </a> <br>
              <a href="#">PicUP</a>
            </div>
            <div class="col-12 col-md-6">
              <div class="mb-5">
                <h4 class="mb-4" style="color:black">Media</h4>
                <a href="#">News</a> <br>
                <a href="#">Faces</a> <br>
                <a href="#">Venture Hacks</a>
              </div>
              <div class="mb-5">
                <h4 class="mb-4" style="color:black">Address</h4>
                <p>
                  101 Jefferson Drive <br>
                  Menlo Park <br>
                  CA, 94025
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-5 border-dark border-top">
        <div class="col-12 col-md-6">
          <div class="d-md-inline mr-5">
            <a href="#">AML Policy</a>
          </div>
          <div class="d-md-inline mx-md-3">
            <a href="#">Sanctions Policy</a>
          </div>
          <div class="d-md-inline">
            <a href="#">Privacy Policy</a>
          </div>
        </div>
        <div class="col-12 col-md-6 mt-5 mt-md-0 d-md-flex justify-content-end">
          <div class="d-md-inline">
            <a href="#">Twitter</a>
          </div>
          <div class="d-md-inline mx-md-3">
            <a href="#">Telegram</a>
          </div>
          <div class="d-md-inline">
            <a href="#">Facebook</a>
          </div>
          <div class="d-md-inline mx-md-3">
            <a href="#">Linkedin</a>
          </div>
          <div class="d-md-inline">
            <a href="#">Medium</a>
          </div>
        </div>
      </div>
    </div>
  </footer>


</body>


<script>
  $(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 80);
  });

  $('.venture-hacks-carusel-container .carusel-button-left').click(function() {
    event.preventDefault();
    $('.venture-hacks-carusel').animate({
      scrollLeft: "-=775px"
    }, "slow");
  });

 $('.venture-hacks-carusel-container .carusel-button-right').click(function() {
    event.preventDefault();
    $('.venture-hacks-carusel').animate({
      scrollLeft: "+=775px"
    }, "slow");
  });

</script>

</html>