<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/indexStyle.css">
    <title>Document</title>
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
            <a href="./index.php">Naslovna</a>
            <a href="#">O nama</a>
            <a href="#">Projekti</a>
            <a href="./blog.php">Blog</a>
            <a href="#">Kontakt</a>
        </div>
    </header>

    <div class="contact-info">
        <div class="phone-contact">
            <img src="./assets/site_pics/location.svg" alt="location">
            <div class="phone-info">
                <p>Telefon</p>
                <small>+0123456789</small>
            </div>
        </div>

        <div class="email-contact">
            <img src="./assets/site_pics/mail.svg" alt="mail">
            <div class="mail-info">
                <p>Email adresa</p>
                <small>@email.com</small>
            </div>
        </div>

        <div class="location-contact">
            <img src="./assets/site_pics/phone.svg" alt="phone">
            <div class="location-info">
                <p>Lokacija</p>
                <small>Ime adrese</small>
            </div>
        </div>
    </div>
    <div class="kontakForma m-5">
        <h2>Pošalji poruku</h2>
        <form action="./src/contactFormProcess.php" method="post">
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Vaše ime">
                    <label for="floatingInput">Vaše ime:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Vaše ime">
                    <label for="floatingInput">Email adresa:</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Broj telefona">
                    <label for="floatingInput">Broj telefona:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Tema">
                    <label for="floatingInput">Tema:</label>
                </div>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Poruka</label>
            </div>

            <div class="form-group mt-3">
                <input type="submit" value="Pošalji" class="btn btn-primary">
            </div>
        </form>
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

    <script src="./js/contactFormValidation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>