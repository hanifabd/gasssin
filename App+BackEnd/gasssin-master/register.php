<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- bootstrap css -->

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <title>Daftar | Gasssin</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
</head>
<body>
    <div id="login" class="row row-fluid bgbrown fadein">
        <div class="pd54">
            <div class="fs60 fadeindown-d3">
                <span class="fclbrown etnic-san">Hi!</span><span class="fcwhitesmoke etnic-san"> Ada yang mau gabung nih</span>
            </div>
            <div class="mt-5">
                <form action="proses_register.php" method="POST">
                    <!-- input -->
                    <input class="stform stform-login bx-shadow-md bglpink fcpurple fadeinleftbig" type="email" name="email_mahasiswa" id="email_mahasiswa" placeholder="Email kamu disini"><br>
                    <input class="stform stform-login bx-shadow-md bglpink fcpurple mt-24 fadeinleftbig" type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="kalo Username nya disini"><br>
                    <input class="stform stform-login bx-shadow-md bglpink fcpurple mt-24 fadeinleftbig" type="password" name="password_mahasiswa" id="password_mahasiswa" placeholder="sekarang Password kamu"><br>
                    <input class="stform stform-login bx-shadow-md bglpink fcpurple mt-24 fadeinleftbig" type="password" name="konfirmasi_password" id="konfirmasi_password" placeholder="coba ulangi Password nya lagi"><br>
                    <!-- input -->
                    <!-- button -->
                    <input class="button-main mt-48 bglbrown fcbrown bx-shadow-lg" type="submit" name="register" value="lanjutkan">
                    <!-- <a href="#" class="button-main mt-48 bglbrown fcwhitesmoke bx-shadow-lg ml-2">masuk</a> -->
                    <div class="mt-24 fcwhitesmoke">
                        <span>sudah punya akun ? </span><a href="login.php" class="fclbrown">masuk</a>
                    </div>
                    <!-- button -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>