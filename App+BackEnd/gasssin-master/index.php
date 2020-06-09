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
    <script>        
        $(document).ready(function() {            
            setTimeout(function() {
                window.location = 'gallery.php';
            }, 4000);
        });
    </script>
    <!-- bootstrap js -->
    <title>Gasssin - Temukan Karya dan Creator Mahasiswa terbaik</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
</head>
<body>
    <!-- SPALSH SCREEN -->
    <div class="row row-fluid bgbrown fadein">
        <div class="dst pd54 mx-auto my-auto fadeindown-d3">
            <a id="splashscreen" onclick="toggleFullscreen();"><img class="spsc" src="img/logo_middle.png" alt=""></a>
            <center>
                <div class="mt-4">
                    <span class="fs20 fcwhitesmoke etnic-san">hello</span><br>
                    <span class="fs60 fclbrown etnic-san">gasssin</span>
                </div>
            </center>
        </div>
        <div class="mbl pd54 mx-auto my-auto fadeindown-d3">
            <a id="splashscreen" onclick="toggleFullscreen();"><img class="spsc" src="img/mobile_logo.png" alt=""></a>
        </div>
    </div>
    <!-- SPALSH SCREEN -->
</body>
</html>