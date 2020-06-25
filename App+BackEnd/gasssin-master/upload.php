<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="js/dropzone-5.7.0/dist/dropzone.css">
    <!-- bootstrap css -->

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/filter.js"></script>
    <script src="js/trigger.js"></script>
    <script src="js/dropzone-5.7.0/dist/dropzone.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.19.3/dist/sweetalert2.all.js"></script>
    <script src="js/swal.js"></script>
    <!-- bootstrap js -->

    <title>Upload Karya | Gasssin</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
</head>
<body>
    <div class="row row-fluid bgwhitesmoke">
        <div class="w-100 bgwhitesmoke">
            <div class="navpd bgbrown fadeindown">
                <nav class="navbar w-100">
                    <div class="navbar-brand">
                        <a href="gallery.php">
                            <img class="pointer-cursor icon-chat" src="img/brand pojok.png" alt="">
                        </a>
                    </div>
                    <div class="dst">
                        <span class="dst fs24 fcwhitesmoke">Publikasikan Karya Milikmu</span>
                    </div>
                    <div>
                        <span class="fs20 fclbrown text-hv pointer-cursor" onclick="help();">Bantuan</span>
                    </div>
                </nav>  
            </div>
            <div class="navpd fadein">
                <center>
                <div class="mbl pb16">
                    <span class="fs24 fcbrown">Publikasikan Karya Milikmu</span>
                </div>
                </center>
                <section>
                    <div id="dropzone">
                        <form class="mt-24 dropzone-detil" action="proses_upload.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-20">
                                <div class="fcbrown fs16 mb8">Foto Karya<span class="fclbrown">* </span><input class="fcwhitesmoke" type="file" name="foto_karya" id="" required></div>                                
                            </div>
                            <div class="mb-20">
                                <div class="fcbrown fs16 mb8">Judul<span class="fclbrown">*</span></div>
                                <div><input class="stform stform-search bglgrey pd8 fs16 w-100" type="text" name="judul" id="" placeholder="Judul Karyamu.." required></div>
                            </div>
                            <?php date_default_timezone_set('Asia/Jakarta')?>
                            <div class="mb-20">
                                <div class="fcbrown fs16 mb8">Platform<span class="fclbrown">*</span></div>
                                <select class="form-control" name="id_platform" id="id_platform">
                                        <option value=""> Pilih Platform</option>
                                        <?php
                                            include 'koneksi.php';
                                            $query = "SELECT * FROM tabel_platform ORDER BY nama_platform ASC";
                                            $dewan1 = $db1->prepare($query);
                                            $dewan1->execute();
                                            $res1 = $dewan1->get_result();
                                            while ($row = $res1->fetch_assoc()) {
                                                echo "<option value='" . $row['id_platform'] . "'>" . $row['nama_platform'] . "</option>";
                                            }
                                        ?>
                                </select>
                            </div>    
                            <div class="mb-48">
                                <div class="fcbrown fs16 mb8">Deskripsi<span class="fclbrown"></span></div>
                                <div>
                                    <textarea class="stform stform-search bglgrey pd8 fs16 w-100" name="deskripsi" id="" maxlength="1024" placeholder="Ceritakan bagaimana Proses dan bagaimana anda menyelesaikan productmu..."></textarea>
                                </div>
                            </div>
                        <!-- batas -->
                    </div>
                </section>                
                <br/>
            </div>
            <!-- footer -->
            <footer class="footer-fixed bgbrown w-100 fadeinup">
                <div class="navbar">
                    <div>
                        <a class="text-hv fs20 fcwhitesmoke" href="gallery.php">Batal</a>
                    </div>
                    <div>
                        <input class="btn bglbrown fs20" type="submit" value="Publikasikan">
                    </div>
                </div>
            </footer>
            </form>
            <!-- footer -->
            </div>
        </div>
    </div>
</body>
</html>