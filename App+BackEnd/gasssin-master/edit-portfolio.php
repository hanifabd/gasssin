<?php 
    $data = $_GET['id'];
    session_start();
    include 'koneksi.php';
    $query = "SELECT * FROM mahasiswa WHERE id_mahasiswa=$data";
    $dewan1 = $db1->prepare($query);
    $dewan1->execute();
    $res1 = $dewan1->get_result();
    $row = $res1->fetch_assoc();
?>
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
    <script src="js/modal-dialog.js"></script>
    <script>
        // menampilkan 4 grid-item dulu
        // kemudian setelah klik div dengan id="loadmore" akan menampilkan 4 item lainnya
        $(function () {
            $(".grid-item").slice(0, 12).show();
            $("#loadmore").on('click', function (e) {
                e.preventDefault();
                $(".grid-item:hidden").slice(0, 4).show();
            });
        });
    </script>
    <!-- bootstrap js -->
    <title>Atur Karya | Gasssin</title>
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
                <!-- sudah masuk -->
                <div id="user-profile" class="pointer-cursor fadeindown" style="display: inline; visibility: visible" onclick="showuserinfo();">
                    <span class="dst-signin fclbrown">Welcome, </span>
                    <span class="dst-signin fcwhitesmoke mr-1">
                    <?php
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
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="profil.php?id=<?php echo $_SESSION['id_mahasiswa'] ?>">Profil Anda</a></div>
                            <hr>
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="edit-profile.php">Edit Profil</a></div>
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="edit-portfolio.php">Edit Portfolio</a></div>
                            <hr>
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="logout.php">Keluar</a></div>
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
                            <div class="mt-12">
                                <span class="fcwhitesmoke fs36 etnic-san">Atur Karya Milikmu</span>
                            </div>
                        </center>
                    </div>
                </div>
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
                    <form class="navbar-form pull-left form-search" method="POST">
                        <div class="input-append">
                          <input class="stform stform-search bgwhitesmoke pd8" type="text" name="kata-search" placeholder="Temukan karya atau creator...">
                          <input type="submit" class="ml12 btn bglbrown fcwhitesmoke" name="cari" value="Cari">
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
                        <?php
                        $id = $row['id_mahasiswa']; 

                        $query2 = "SELECT * FROM project WHERE id_mahasiswa=$id ORDER BY tgl_upload DESC";
                        $dewan2 = $db1->prepare($query2);
                        $dewan2->execute();
                        $res2 = $dewan2->get_result();
                        while($row2 = $res2->fetch_assoc()) {
                    ?>
                        <!-- one show -->
                        <?php
                            $idp = $row2['id_platform']; 

                            $query3 = "SELECT * FROM tabel_platform WHERE id_platform=$idp";
                            $dewan3 = $db1->prepare($query3);
                            $dewan3->execute();
                            $res3 = $dewan3->get_result();
                            $row3 = $res3->fetch_assoc();
    
                            $profil = $row['file_pp'];
                            $judul = $row2['judul'];
                            $nama = $row['nama_mahasiswa'];
                            $gambar = $row2['foto_karya'];
                            $platform = $row3['nama_platform'];
                            $tgl = $row2['tgl_upload'];
                            $desc = $row2['deskripsi'];
    
                        ?>
                        <div class="grid-item bx-shadow-lg fadein">
                            <div class="thumbnail_wrappper pointer-cursor">
                                <div class="thumbnail">
                                    <span onclick="<?php echo "showDialog('$profil','$judul','$nama','$gambar','$platform','$tgl','$desc');" ?>">
                                    <img class="thumb_img" src="<?php echo "upload/upload_foto_karya/".$row2['foto_karya'] ?>" alt="">
                                    </span>
                                </div>
                                <div class="thumb_title">
                                    <span class="fcwhitesmoke"><?php echo $row2['judul'] ?></span>
                                </div>
                            </div>
                            <div class="navbar thumb_desc">
                                <span class="navbar-brand">                                    
                                    <span class="thumb_desc_img rounded-circle mr-1"><a href="#"><img class="thumb_desc_img_image rounded-circle" src="<?php echo "upload/profile_pict/".$row['file_pp'] ?>" alt=""></a></span>
                                    <span class="fs16"><a class="user-nm" href="profil.php?id=<?php echo $row2['id_mahasiswa'] ?>"><?php echo $row['nama_mahasiswa'] ?></a></span>
                                </span>
                                <span class="nav-item">
                                    <span class="mr-1"><a href="upload-edit.php?id_prj=<?php echo $row2['id_project'] ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zM8.999 17H7v-1.999l5.53-5.522l1.999 1.999L8.999 17zm6.473-6.465l-1.999-1.999l1.524-1.523l1.999 1.999l-1.524 1.523z" fill="#626262"/></svg></a></span>
                                    <span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z" fill="#626262"/></svg></a></span>
                                </span>
                            </div>
                        </div>
                        <!-- one show -->
                    <?php 
                        } 
                    ?>
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
                                <div><a class="text-hv fclbrown text-decoration-none mb-12" href="gallery.php">Gasssin.</a></div>
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

        <!-- detil karya -->
        <section id="view-shot" class="overlay" style="display: none; visibility: hidden;">
            <nav class="navbar close-fixed">
                <span class="navbar-brand">
                    <span class="navbar-brand pointer-cursor" onclick="closeDialog()"><img src="img/imgclose.png" alt=""></span>
                </span>
            </nav>  
            <div class="view-wrapper fadeindown">
                <div class="navpd-overlay">
                    <div class="row my-auto mb-20">
                        <div class="m-2 p-2">
                            <span class="rounded-circle"><img class="img-profile-overlay rounded-circle" src="img/p1.jpg" alt=""></span>
                        </div>
                        <div class="m-2 p-2 ml12">
                            <span class="fs24 fcbrown"><b>Master Cooking</b></span><br>
                            <span class="fcgrey">by </span><a class="user-nm-l" href="#">Hanif Yuli Abdillah P</a>
                        </div>
                    </div>
                    <div class="my-auto mb-20">
                        <div>
                            <span class="rounded">
                                <img class="img-shots-overlay rounded" src="img/thumb_sample.png" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="mb-20 mt-12">
                        <span>
                            <span class="center-hz">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="24" height="24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M3 18h18a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2zM4 4h16a2 2 0 0 1 2 2v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a2 2 0 0 1 2-2z" fill="#626262"/></svg>
                            </span>
                            <span class="fs14 ml6 center-hz">Android</span>
                        </span>
                        <span class="ml12">
                            <span class="center-hz">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="24" height="24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path class="clr-i-solid clr-i-solid-path-1" d="M32.25 6h-4v3a2.2 2.2 0 1 1-4.4 0V6H12.2v3a2.2 2.2 0 0 1-4.4 0V6h-4A1.78 1.78 0 0 0 2 7.81v22.38A1.78 1.78 0 0 0 3.75 32h28.5A1.78 1.78 0 0 0 34 30.19V7.81A1.78 1.78 0 0 0 32.25 6zM10 26H8v-2h2zm0-5H8v-2h2zm0-5H8v-2h2zm6 10h-2v-2h2zm0-5h-2v-2h2zm0-5h-2v-2h2zm6 10h-2v-2h2zm0-5h-2v-2h2zm0-5h-2v-2h2zm6 10h-2v-2h2zm0-5h-2v-2h2zm0-5h-2v-2h2z" fill="#626262"/><path class="clr-i-solid clr-i-solid-path-2" d="M10 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1z" fill="#626262"/><path class="clr-i-solid clr-i-solid-path-3" d="M26 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1z" fill="#626262"/></svg>
                            </span>
                            <span class="fs14 ml6 center-hz">20 Mei 2020</span>
                        </span>
                    </div>
                    <hr>
                    <div class="mb-20 mt-12">
                        Hello, this is my second shot for Paperpillar team about design exploration for an old project. I combine the experimental layout with the use of bold illustration. The orange color is utilized to give a tasty food feels, while the soft pink and brown color represents dessert.<br>
                        <br>
                        I hope you guys like it!<br>
                        Have a great day, thanks!<br>
                        -----------------------<br>
                        Interested to work with us?<br> 
                        Shoot your business inquiry to hello@paperpillar.com
                    </div>
                    <hr>
                    <div class="mb-20 mt-12">
                        <div class="mb-12">Suka dengan apa yang kamu lihat ?</div>
                        <div class="dst-signin-show pointer-cursor"><a class="btn-hv fs20 fcwhitesmoke p-2 bglbrown rounded text-decoration-none" href="mailto: example@gmail.com">Kontak Creator</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- detil karya -->
    </div>
</body>
</html>