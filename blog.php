<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/blog.css">
    <title>Blog</title>
</head>

<body>

    <header>
        <div class="upper-header">
            <div class="logo">
                <img src="./images/Logo.png" alt="languages" width="38" height="auto">
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_259_630)">
                    <path d="M12 23C18.075 23 23 18.075 23 12C23 5.925 18.075 1 12 1M12 23C5.925 23 1 18.075 1 12C1 5.925 5.925 1 12 1M12 23C15 23 16 18 16 12C16 6 15 1 12 1M12 23C9 23 8 18 8 12C8 6 9 1 12 1M2 16H22M2 8H22" stroke="#3A4D39" stroke-width="2" />
                </g>
                <defs>
                    <clipPath id="clip0_259_630">
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            
            <svg class="hamburger" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                <path d="M5.83325 10.2083H10.2083M29.1666 10.2083H16.0416M29.1666 24.7917H24.7916M5.83325 24.7917H18.9583M5.83325 17.5H29.1666" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        </div>

        <div class="nav-header">
            <a href="index.php">Naslovna</a>
            <a href="o-nama.php">O nama</a>
            <a href="projekti.php">Projekti</a>
            <a href="#">Blog</a>
            <a href="contact.php">Kontakt</a>
        </div>
    </header>

    <div id="parallax-world-of-ugg">

        <section>
            <div class="parallax-one">
                <h2>BLOG</h2>
            </div>
        </section>

        <section>
            <div class="block">
                <p><span class="first-character sc">N</span>aš blog ima cilj da redovnim posetiocima našeg sajta prinese više informacija o našim projektima. Na našem blogu će biti predstavljeno nekoliko projekata kao što su: reciklaža, minimiziranje otpada, odgovorna potrošnja, zaštita vazduha itd. Prilikom čitanja našeg bloga čitaoci se mogu bolje upoznati sa našom idejom uokviru svakog od tih projekata i bolje se upoznati sa planovima koje imamo za budućnost. Čitaoci, na našim blogovima, mogu ostaviti svoje mišljenje, komentar ili preporuku koja će biti dostupna svima da je vide.</p>
            </div>
        </section>

    </div>

    <div class="wrapper">
        <h1>ISTAKNUTE PRIČE</h1>
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(https://unsplash.it/500/500/)">
                        <div class="inner">
                            <p>Marko Obrenović</p>
                            <span>Beograd</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Oduvek sam voleo prirodu, ali tek kada sam počeo da živim održivije, shvatio sam koliko je važno čuvati je. Sada recikliram, smanjujem potrošnju plastike i koristim obnovljive izvore energije.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(https://unsplash.it/500/500/)">
                        <div class="inner">
                            <p>Luka Jovanović</p>
                            <span>Niš</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Svaki dan radim sitne korake ka održivijem načinu života. Kupujem lokalno, biram proizvode sa manje ambalaže. Iako su to mali koraci, znam da doprinose većem cilju očuvanja planete</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(https://unsplash.it/502/502/)">
                        <div class="inner">
                            <p>Mia Marković</p>
                            <span>Vranje</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>U početku mi je bilo teško da se prilagodim održivom načinu života, ali sada ne mogu zamisliti drugačiji. Kroz proaktivno recikliranje osećam se odgovorno prema budućim generacijama.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(https://unsplash.it/503/503/)">
                        <div class="inner">
                            <p>Nemanja Živanović</p>
                            <span>Novi Sad</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Zajednica u kojoj živim podržava održivost kroz različite akcije. Redovno organizujemo čišćenja parkova, razmenjujemo odeću i predmete umesto da ih bacamo, i zajedno radimo na stvaranju bolje budućnosti za sve nas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer>
        <img class="slika" src="./images/Logo.png" alt="">
        <div class="footerdole">
            <p>Copyright@Team3</p>

            <div class="stranicefooter">
                <a href="#">Naslovna</a>
                <a href="#">O nama</a>
                <a href="#">Projekti</a>
                <a href="#">Blog</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>