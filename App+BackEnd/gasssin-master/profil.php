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
    <script src="js/filter.js"></script>
    <script src="js/trigger.js"></script>
    <script>
        // menampilkan 4 grid-item dulu
        // kemudian setelah klik div dengan id="loadmore" akan menampilkan 4 item lainnya
        $(function () {
            $(".grid-item").slice(0, 4).show();
            $("#loadmore").on('click', function (e) {
                e.preventDefault();
                $(".grid-item:hidden").slice(0, 4).show();
            });
        });
    </script>
    <!-- bootstrap js -->
    <title>Profil | Gasssin</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
</head>
<body>
    <div class="row row-fluid bgbrown">
        <div id="page_1" class="navpd w-100" style="display: block; visibility: visible;">
            <nav class="navbar w-100 fadeindown">
                <div class="navbar-brand">
                    <span class="navbar-brand pointer-cursor" onclick="pagechange(1,2)"><img src="img/menu-br.png" alt=""></span>
                    <a class="navbar-brand" href="gallery.php">
                        <img class="pointer-cursor icon-chat" src="img/brand pojok.png" alt="">
                    </a>
                </div>
                <!-- belum masuk -->
                <div style="display: none; visibility: hidden">
                    <a class="text-hv fs20 fcwhitesmoke p-2 text-decoration-none" href="login.html">Masuk</a>
                    <span class="dst-signin pointer-cursor"><a class="btn-hv fs20 fcwhitesmoke p-2 bglbrown rounded text-decoration-none" href="register.html">Daftar</a></span>
                </div>
                <!-- belum masuk -->
                <!-- sudah masuk -->
                <div id="user-profile" class="pointer-cursor fadeindown" style="display: inline; visibility: visible" onclick="showuserinfo();">
                    <span class="dst-signin fclbrown">Welcome, </span>
                    <span class="dst-signin fcwhitesmoke mr-1">
                    <?php
                        session_start();
                        echo "".$_SESSION['nama_mahasiswa'];
                        ?>
                    </span>
                    <span class="thumb_desc_img rounded-circle mr-2"><img class="img_image_profile rounded-circle" src="<?php echo "upload/profile_pict/".$_SESSION['file_pp']; ?>" alt=""></span>
                </div>
                <!-- sudah masuk -->
            </nav>  
            <div id="userinfo" class="snav row row-fluid infogroup fadeinfast" style="display: none; visibility: hidden">
                <div class="position-absolute w-100">
                    <div class="col">
                        <div class="w-100 bglbrown mt-12 pd16 rounded bx-shadow-lg">
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="profil.php">Profil Anda</a></div>
                            <hr>
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="edit-profile.php">Edit Profil</a></div>
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="editportofolio.php">Edit Portfolio</a></div>
                            <hr>
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="login.php">Keluar</a></div>
                            <hr>
                            <center>
                            <div>
                                <span class="pointer-cursor"><a class="btn-hv fs20 fcwhitesmoke p-2 bgbrown rounded text-decoration-none" href="upload.php">Upload</a></span>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="w-100">
                <div class="w-100 fadeindown mb-20">
                    <div class="mt-48">
                        <center>
                            <div>
                                <span class="rounded-circle mr-2"><img class="img_image_profile_user rounded-circle" src="img/p1.jpg" alt=""></span>
                            </div>
                            <div class="mt-12">
                                <span class="fcwhitesmoke fs36 etnic-san">
                                <?php
                                echo "".$_SESSION['nama_mahasiswa'];
                                ?>
                                </span>
                            </div>
                            <div class="prof-desc mt-12">
                                <span class="fclbrown">Currently Addicted to Front End | Interaction Design #UX #UI #interactiondesign #frontend 🚑 Interaction Design | Front-End addicted</span>
                            </div>
                        </center>
                    </div>
                </div>
                <hr>
                <!-- filter navigation -->
                <div class="w-100 mt-24 fadeindown">
                    <div class="py-2">
                        <span id="cari" class="btn-shadow bx-shadow-sm pd8 pointer-cursor bglbrown rounded mr-2" onclick="showhide(1,2);animateCSS('#div_2','fadein',function() {$('#div_2').removeClass('fadein');});">
                            <span><img src="img/search-ic.png" alt=""></span>
                            <span class="ml-1 fcwhitesmoke">cari</span>
                        </span>
                        <span id="filter" class="btn-shadow bx-shadow-sm pd8 pointer-cursor bglbrown rounded" onclick="showhide(2,1);animateCSS('#div_1','fadein',function() {$('#div_1').removeClass('fadein');});">
                            <span><img src="img/filter.png" alt=""></span>
                            <span class="ml-1 fcwhitesmoke">filter</span>
                        </span>
                    </div>
                </div>
                <!-- filter navigation -->
                <!-- Search box -->
                <div id="div_1" class="w-100 mt-12 fadein" style="visibility: hidden; display: none;">
                    <form class="navbar-form pull-left form-search">
                        <div class="input-append">
                          <input class="stform stform-search bgwhitesmoke pd8" type="text" name="" id="" placeholder="Temukan karyamu...">
                          <button class="btn-search">Search</button>
                        </div>
                    </form>
                </div>
                <!-- Search box -->
                <!-- filter box -->
                <div id="div_2" class="w-100 pl-3 mt-12 bglbrown rounded bx-shadow-md fadein" style="visibility: hidden; display: none;">
                    <form class="navbar-form pull-left form-search">
                        <div class="input-append">
                            <div class="row pd16">
                                <div class="pd8 mr-2">
                                    <div class="mb-12"><span class="fcbrown"><strong>Jangka Waktu</strong></span></div>
                                    <div>
                                        <select class="filter-select pd8 rounded" name="" id="">
                                            <option value="" disabled selected>Jangka Waktu</option>
                                            <option value="">Bulan ini</option>
                                            <option value="">Bulan lalu</option>
                                            <option value="">Tahun lalu</option>
                                            <option value="">Semua</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pd8 mr-2">
                                    <div class="mb-12"><span class="fcbrown"><strong>Platform</strong></span></div>
                                    <div>
                                        <select class="filter-select pd8 rounded text-bold" name="" id="">
                                            <option value="" disabled selected>Platform</option>
                                            <option value="">Website</option>
                                            <option value="">PWA</option>
                                            <option value="">Android</option>
                                            <option value="">Ios</option>
                                            <option value="">Desktop</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- filter box -->
                <!-- showcase gallery -->
                <div class="w-100 mt-24">
                    <div class="grid-container">
                        <!-- one show -->
                        <div class="grid-item bx-shadow-lg pointer-cursor fadein">
                            <div class="thumbnail_wrappper">
                                <div class="thumbnail">
                                    <img class="thumb_img" src="img/thumb_sample.png" alt="">
                                </div>
                                <div class="thumb_title">
                                    <span class="fcwhitesmoke">Master Cooking</span>
                                </div>
                            </div>
                            <div class="thumb_desc">
                                <span class="thumb_desc_img rounded-circle mr-1"><img class="thumb_desc_img_image rounded-circle" src="img/p1.jpg" alt=""></span>
                                <span>Hanif Abdillah</span>
                            </div>
                        </div>
                        <!-- one show -->

                        <!-- one show -->
                        <div class="grid-item bx-shadow-lg pointer-cursor fadein">
                            <div class="thumbnail_wrappper">
                                <div class="thumbnail">
                                    <img class="thumb_img" src="img/thumb_sample2.jpg" alt="">
                                </div>
                                <div class="thumb_title">
                                    <span class="fcwhitesmoke">Acts Planner</span>
                                </div>
                            </div>
                            <div class="thumb_desc">
                                <span class="thumb_desc_img rounded-circle mr-1"><img class="thumb_desc_img_image rounded-circle" src="img/p1.jpg" alt=""></span>
                                <span>Hanif Abdillah</span>
                            </div>
                        </div>
                        <!-- one show -->

                        <!-- one show -->
                        <div class="grid-item bx-shadow-lg pointer-cursor fadein">
                            <div class="thumbnail_wrappper">
                                <div class="thumbnail">
                                    <img class="thumb_img" src="img/thumb_sample.png" alt="">
                                </div>
                                <div class="thumb_title">
                                    <span class="fcwhitesmoke">Master Cooking</span>
                                </div>
                            </div>
                            <div class="thumb_desc">
                                <span class="thumb_desc_img rounded-circle mr-1"><img class="thumb_desc_img_image rounded-circle" src="img/p1.jpg" alt=""></span>
                                <span>Hanif Abdillah</span>
                            </div>
                        </div>
                        <!-- one show -->

                        <!-- one show -->
                        <div class="grid-item bx-shadow-lg pointer-cursor fadein">
                            <div class="thumbnail_wrappper">
                                <div class="thumbnail">
                                    <img class="thumb_img" src="img/thumb_sample2.jpg" alt="">
                                </div>
                                <div class="thumb_title">
                                    <span class="fcwhitesmoke">Acts Planner</span>
                                </div>
                            </div>
                            <div class="thumb_desc fadein">
                                <span class="thumb_desc_img rounded-circle mr-1"><img class="thumb_desc_img_image rounded-circle" src="img/p1.jpg" alt=""></span>
                                <span>Hanif Abdillah</span>
                            </div>
                        </div>
                        <!-- one show -->

                        <!-- one show -->
                        <div class="grid-item bx-shadow-lg pointer-cursor fadein">
                            <div class="thumbnail_wrappper">
                                <div class="thumbnail">
                                    <img class="thumb_img" src="img/thumb_sample.png" alt="">
                                </div>
                                <div class="thumb_title">
                                    <span class="fcwhitesmoke">Master Cooking</span>
                                </div>
                            </div>
                            <div class="thumb_desc">
                                <span class="thumb_desc_img rounded-circle mr-1"><img class="thumb_desc_img_image rounded-circle" src="img/p1.jpg" alt=""></span>
                                <span>Hanif Abdillah</span>
                            </div>
                        </div>
                        <!-- one show -->

                        <!-- one show -->
                        <div class="grid-item bx-shadow-lg pointer-cursor fadein">
                            <div class="thumbnail_wrappper">
                                <div class="thumbnail">
                                    <img class="thumb_img" src="img/thumb_sample2.jpg" alt="">
                                </div>
                                <div class="thumb_title">
                                    <span class="fcwhitesmoke">Acts Planner</span>
                                </div>
                            </div>
                            <div class="thumb_desc">
                                <span class="thumb_desc_img rounded-circle mr-1"><img class="thumb_desc_img_image rounded-circle" src="img/p1.jpg" alt=""></span>
                                <span>Hanif Abdillah</span>
                            </div>
                        </div>
                        <!-- one show -->
                    </div>
                    <!-- load more -->
                    <center>
                        <div class="mt-48 mb-48 fadeindown">
                            <a id="loadmore" class="btn-hv fs20 fcwhitesmoke p-2 bglbrown rounded text-decoration-none" href="#">Lihat Lainnya</a></span>
                        </div>
                    </center>
                    <!-- load more -->
                </div>
                <!-- showcase gallery -->
                <hr>
                <!-- footer -->
                <footer class="fadein">
                    <div class="grid-container-footer">
                        <div class="grid-item-footer">
                            <div class="fs48 fclbrown etnic-san">gasssin</div>
                            <div class="fclbrown"><strong>Tunjukan karyamu dan Buat dirimu bersinar</strong></div>
                            <div class="fs16 fclbrown">Apa yang sedang kamu kerjakan? Gasssin adalah sebuah komunitas untuk mahasiswa berbagi pekerjaan, proses, dan projek.</div>
                        </div>
                        <div class="grid-item-footer">
                            <div class="row p-2">
                                <div><a class="text-hv fclbrown text-decoration-none mb-12" href="gallery.html">Gasssin.</a></div>
                            </div>
                            <div class="row p-2">
                                <div class="col">
                                    <div><a class="fs14 text-hv fclbrown text-decoration-none" href="#">About</a></div>
                                    <div><a class="fs14 text-hv fclbrown text-decoration-none" href="#">Help</a></div>
                                    <div><a class="fs14 text-hv fclbrown text-decoration-none" href="#">Contact</a></div>
                                </div>
                                <div class="col">
                                    <div><a class="fs14 text-hv fclbrown text-decoration-none" href="#">Terms</a></div>
                                    <div><a class="fs14 text-hv fclbrown text-decoration-none" href="#">Guidelines</a></div>
                                    <div><a class="fs14 text-hv fclbrown text-decoration-none" href="#">Privacy</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item-footer">
                            <div class="row p-2">
                                <div class="fclbrown"><a class="text-hv text-decoration-none mb-12">Shots Statistik.</a></div>
                            </div>
                            <div class=" row my-auto">
                                <div class="m-2 p-2">
                                    <img class="footer-img" src="img/PRODUCT LOGO.png" alt="">
                                </div>
                                <div class="m-2 p-2 ml12">
                                    <span class="fs36 etnic-san fclbrown">11,350,840</span><br>
                                    <span class="fclbrown">gasssins shoted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-24 w-100 fclbrown">
                        <center>© 2020 Gasssin. All rights reserved. | Made with ♥ remotely from Team Horeey</center>
                    </div>
                </footer>
                <!-- footer -->
            </div>
        </div>

        <div id="page_2" class="navpd w-100" style="display: none; visibility: hidden;">
            <nav class="navbar w-100">
                <div class="navbar-brand">
                    <span class="navbar-brand pointer-cursor" onclick="pagechange(2,1)"><img src="img/imgclose.png" alt=""></span>
                </div>
            </nav>  
            <center>
                <div class="pd54">
                    <div class="slideinleft"><a class="fs60 fcwhitesmoke" href="gallery.php">Shots</a></div>
                    <div class="slideinright"><a class="fs60 fcwhitesmoke" href="#">Top Creator</a></div>
                    <div class="slideinleft"><a class="fs60 fcwhitesmoke" href="#">Tentang</a></div>
                    <div class="slideinright"><a class="fs60 fcwhitesmoke" href="#">Kontak</a></div>
                </div>
            </center>
        </div>
    </div>
</body>
</html>