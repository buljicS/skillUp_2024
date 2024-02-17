<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zajedno za Zemlju | Naslovna</title>
  <link rel="icon" type="image/x-icon" href="assets/site_pics/logo.svg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style/indexStyle.css">
  <link rel="stylesheet" href="./style/timer.css">
</head>

<body>
  <header>
    <div class="upper-header">
      <div class="logo">
        <img src="./assets/site_pics/logo.svg" alt="languages" width="38" height="auto">
      </div>
      <div class="languages">
        <img src="./assets/site_pics/lang.svg" alt="languages" width="28" height="auto">
      </div>
    </div>

    <div class="nav-header">
      <a href="#">Naslovna</a>
      <a href="#">O nama</a>
      <a href="#">Projekti</a>
      <a href="./blog.php">Blog</a>
      <a href="./contact.php">Kontakt</a>
    </div>
  </header>



  <div class="content-wrapper">
    <div class="hero">
      <div class="hero_text">
        <h2>Zajedno za Zemlju: Ekološka platforma za inspiraciju i akciju</h2>
        <p>Povežite se, inspirišite se, delujte zajedno za našu planetu! Dobrodošli na našu platformu posvećenu ekologiji i razmeni ideja za održivu budućnost.</p>
      </div>
      <a class="dugme_hero" href="">Pročitaj više</a>
    </div>
    <div class="wrapper">
      <h2>Projekti</h2>
      <div class="cols">
        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container">
            <div class="front" style="background-image: url(https://unsplash.it/500/500/)">
              <div class="inner">
                <p>DajNesebično</p>
                <!-- <span>Lorem ipsum</span> -->
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>DajNesebično je inicijativa posvećena povezivanju dobrotvornih pojedinaca sa onima kojima je potrebna pomoć.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="container">
            <div class="front" style="background-image: url(https://unsplash.it/511/511/)">
              <div class="inner">
                <p>Osvježi vazduh, oživi šume</p>
                <!-- <span>Lorem ipsum</span> -->
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Naš projekat za zaštitu vazduha i očuvanje šuma je posvećen stvaranju zdravijeg i održivijeg okruženja za sve nas.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="container">
            <div class="front" style="background-image: url(https://unsplash.it/503/503/)">
              <div class="inner">
                <p> Zajedno ka Održivoj Potrošnji</p>
                <!-- <span>Lorem ipsum</span> -->
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Naš projekat se fokusira na ohrabrivanje održive potrošnje kroz usklađivanje potreba kupaca i ponude prodavaca.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="onama">
      <img src="./assets/site_pics/oNama.png" alt="onama-hero">
      <div class="onama_desno">
        <div class="text_onama">
          <h3>O nama:</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o</p>
        </div>
        <div class="text_onama_innerInfo">
          <div class="team3">
            <p class="Ime_tima">Team3</p>
            <p class="SDG">Cilj odživog razvoja 12</p>
          </div>
          <a href="#">Pretraži više</a>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <h2>Blog</h2>
      <div class="cols">
        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container">
            <div class="front" style="background-image: url(https://unsplash.it/500/500/)">
              <div class="inner">
                <p>Diligord</p>
                <span>Lorem ipsum</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container">
            <div class="front" style="background-image: url(https://unsplash.it/502/502/)">
              <div class="inner">
                <p>Strizzes</p>
                <span>Lorem ipsum</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="container">
            <div class="front" style="background-image: url(https://unsplash.it/503/503/)">
              <div class="inner">
                <p>Clossyo</p>
                <span>Lorem ipsum</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2>Komentari</h2>
          <p>Oduševljena sam što sam pronašla ovu platformu! Konačno mogu da podelim svoje ideje za održivu budućnost i da se povežem sa ljudima koji dele istu strast. Hvala vam što ste omogućili ovu razmenu znanja i inspiracije za bolji svet!</p>
          <div class="nalog">
            <div class="text_nalog">
              <p class="nalog_ime">Marija Jovanović</p>
              <p class="nalog_lokacija">Beograd</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sapiente reprehenderit hic. Quis eligendi nesciunt quibusdam. Unde nihil ipsa nostrum, ab quidem vitae voluptate repellat recusandae. Cum natus quae porro.</span><span>Enim autem praesentium eos expedita in provident modi, reiciendis non quibusdam voluptate placeat soluta ut facere eligendi est eveniet quis cupiditate fuga laudantium necessitatibus earum. Quis eaque voluptate assumenda neque?</span></p>
        </div>
        <div class="carousel-item">
          <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sapiente reprehenderit hic. Quis eligendi nesciunt quibusdam. Unde nihil ipsa nostrum, ab quidem vitae voluptate repellat recusandae. Cum natus quae porro.</span><span>Enim autem praesentium eos expedita in provident modi, reiciendis non quibusdam voluptate placeat soluta ut facere eligendi est eveniet quis cupiditate fuga laudantium necessitatibus earum. Quis eaque voluptate assumenda neque?</span></p>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="container">
    <h1 id="headline">Početak novog projekta</h1>
    <div id="countdown">
      <ul>
        <li><span id="days"></span>days</li>
        <li><span id="hours"></span>Hours</li>
        <li><span id="minutes"></span>Minutes</li>
        <li><span id="seconds"></span>Seconds</li>
      </ul>
    </div>
    <div id="content" class="emoji">
      <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
          <path d="M24.9999 2.24609C17.9989 2.24609 12.3046 7.94043 12.3046 14.9414C12.3046 21.9424 17.9989 27.6367 24.9999 27.6367C32.0008 27.6367 37.6952 21.9424 37.6952 14.9414C37.6952 7.94043 32.0008 2.24609 24.9999 2.24609ZM24.1864 5.28584L23.0366 8.72783L28.1289 8.19434L27.6224 6.48955L29.0505 6.88496V8.77627L31.2813 8.92178L30.845 7.22451L32.0175 6.54541C34.4149 8.5501 35.9374 11.5642 35.9374 14.9414C35.9374 16.5691 35.5834 18.1124 34.9486 19.4992L32.3968 19.9311V23.0051C31.9101 23.4517 31.3839 23.8535 30.8247 24.2053L29.7294 22.5014L27.5954 23.0834L28.195 25.4063C27.1591 25.7206 26.0824 25.8798 24.9999 25.8789C21.9712 25.8789 19.2345 24.6548 17.256 22.6732L19.2052 22.4045L20.5148 19.834L16.3437 17.7486L19.3022 15.2266L16.7319 13.0928L14.1056 13.9681C14.4095 10.5063 16.3178 7.5127 19.0855 5.73389L19.6418 10.1827L24.1864 5.28584ZM27.9833 11.557L24.451 13.8203L27.5376 16.5638L29.7668 15.9122L29.5609 18.5871L33.6419 17.5583L32.0986 14.0604L29.6295 14.0947L31.8244 12.2086L27.9834 11.557H27.9833ZM24.314 15.5007L22.4278 16.3236L23.7652 17.3182L24.314 15.5007ZM19.8841 15.8087L18.5748 17.3604L22.2024 19.9101L19.8841 15.8087ZM25.7201 16.6666L24.3827 19.1702L27.6063 21.3649L26.4745 19.753L27.8805 18.0727L25.7201 16.6666ZM5.87584 19.3419C5.01471 19.3285 4.13336 20.4252 4.12828 23.2366C4.12066 27.5484 3.70289 28.7655 5.6983 33.642C7.16148 37.218 7.81764 39.9665 12.4999 42.1875C13.0546 44.1428 12.8332 44.6025 12.4569 46.2734C12.1057 47.8334 15.7209 48.1201 18.3684 46.806C21.2093 45.2563 20.971 40.9898 20.4634 38.0966C19.8732 34.7319 18.0162 34.0326 16.4065 32.5954C14.7351 30.2053 14.3462 25.8754 11.6354 24.1287C11.0693 23.764 8.18131 23.3937 12.1493 33.3027C6.91774 32.007 7.87066 26.0007 7.49234 21.5537C7.37965 20.2294 6.63561 19.3535 5.87584 19.3418V19.3419ZM44.1239 19.3419C43.3641 19.3536 42.6201 20.2294 42.5074 21.5538C42.1291 26.0007 43.082 32.007 37.8504 33.3027C41.8185 23.3936 38.9304 23.764 38.3643 24.1287C35.6536 25.8754 35.2647 30.2053 33.5932 32.5955C31.9836 34.0326 30.1264 34.7319 29.5363 38.0966C29.0288 40.9898 28.7904 45.2563 31.6313 46.806C34.2789 48.12 37.894 47.8334 37.5427 46.2734C37.1666 44.6025 36.9452 44.1428 37.4999 42.1875C42.1821 39.9665 42.8382 37.218 44.3014 33.642C46.2968 28.7655 45.8791 27.5484 45.8714 23.2367C45.8664 20.4252 44.985 19.3285 44.1239 19.3419Z" fill="#4F6F52" />
        </svg></span>
      <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
          <path d="M25.9479 4.81043L25 4.32501L24.0521 4.81043C21.668 6.02948 19.4947 7.62258 17.6146 9.52918C20.3495 10.9537 22.842 12.8015 25 15.0042C27.1573 12.8017 29.6492 10.9539 32.3833 9.52918C30.5038 7.62282 28.3312 6.02973 25.9479 4.81043ZM22.2896 18.1958C18.6564 14.3657 13.9021 11.7865 8.71042 10.8292L6.25 10.375V27.0833C6.25001 30.8463 7.38188 34.5223 9.49852 37.6335C11.6152 40.7447 14.6187 43.1474 18.1187 44.5292C17.1538 41.5881 16.6636 38.512 16.6667 35.4167C16.6667 28.975 18.7521 23.0208 22.2896 18.1958ZM43.75 10.3771L41.2917 10.8292C29.65 12.9667 20.8333 23.1604 20.8333 35.4167C20.8333 38.6167 21.4375 41.6813 22.5354 44.5L23.0354 45.7813C23.6896 45.8021 24.3458 45.8333 25 45.8333C29.9728 45.8333 34.7419 43.8579 38.2582 40.3416C41.7746 36.8253 43.75 32.0562 43.75 27.0833V10.3771Z" fill="#ECE3CE" />
        </svg></span>
      <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
          <path d="M23.4375 45.8333C22.2917 45.8333 21.1375 45.7035 19.975 45.4437C18.8125 45.184 17.6229 44.8104 16.4062 44.3229C16.8229 40.1215 18.0382 36.1979 20.0521 32.5521C22.066 28.9062 24.6528 25.6944 27.8125 22.9167C23.9931 24.8611 20.6861 27.4305 17.8917 30.625C15.0972 33.8194 13.1437 37.4653 12.0312 41.5625C11.8924 41.4583 11.7625 41.3458 11.6417 41.225L11.25 40.8333C9.61806 39.2014 8.37708 37.3785 7.52708 35.3646C6.67708 33.3507 6.25139 31.25 6.25 29.0625C6.25 26.7014 6.71875 24.4444 7.65625 22.2917C8.59375 20.1389 9.89583 18.2292 11.5625 16.5625C14.375 13.75 18.0208 11.9187 22.5 11.0687C26.9792 10.2187 33.2639 10.1403 41.3542 10.8333C41.9792 19.1319 41.875 25.4604 41.0417 29.8187C40.2083 34.1771 38.4028 37.7444 35.625 40.5208C33.9236 42.2222 32.0222 43.5333 29.9208 44.4542C27.8194 45.375 25.6583 45.8347 23.4375 45.8333Z" fill="#3A4D39" />
        </svg></span>
    </div>
  </div>

  <footer>
    <img class="slika" src="assets/site_pics/logo.svg" alt="">
    <div class="footerdole">
      <p>Copyright@Team3</p>
      <div class="stranicefooter">
        <a href="#">Naslovna</a>
        <a href="#">O nama</a>
        <a href="#">Projekti</a>
        <a href="./blog.php">Blog</a>
        <a href="./kontakt.php">Kontakt</a>
      </div>
    </div>
  </footer>

  <script src="./js/timer.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>