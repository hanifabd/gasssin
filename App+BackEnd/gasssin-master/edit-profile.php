<?php
    session_start();
    include "koneksi.php";
?>
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
    <!-- bootstrap css -->

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/filter.js"></script>
    <script src="js/trigger.js"></script>
    <!-- bootstrap js -->

    <title>Edit Profil | Gasssin</title>
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
                <div class="grid-container-edit-profile w-100 fadeindown mb-20">
                    <div class="grid-item-edit-profile navpd mt-48">
                        <div class="w-100">
                            <div class="fs24 fcwhitesmoke">
                                <span>
                                <?php
                                    echo "".$_SESSION['nama_mahasiswa'];
                                ?>
                                </span><span> / Edit Profil</span>
                            </div>
                            <div class="fs16 fcwhitesmoke">
                                <span>Siapkan profil gasssinmu untuk memulai perjalanan yang luar biasa</span>
                            </div>
                        </div>
                        <div class="w-100 mt-24">
                            <span id="menu_21" class="text-hv fs20 fclgrey pointer-cursor active" onclick="divchange(22,21);">PROFIL PUBLIK</span>
                            <span class="fclbrown ml12"> | </span>
                            <span id="menu_22" class="text-hv fs20 fclgrey pointer-cursor ml12" onclick="divchange(21,22);;">PASSWORD</span>
                        </div>
                    </div>
                    <form action="updatecek.php" method="POST" enctype="multipart/form-data">
                    <div id="div_21" class="grid-item-edit-profile navpd fadein" style="display: block; visibility: visible;">
                        <div class="mb-20">
                            <span class="rounded-circle mr-2"><img class="img_image_profile_user_edit rounded-circle" src="<?php echo "upload/profile_pict/".$_SESSION['file_pp']; ?>" alt=""></span>
                            <!-- <span id="edit-avatar" class="pointer-cursor ml12"><a class="btn-hv fs20 fcwhitesmoke p-2 bglbrown rounded text-decoration-none">Upload Foto Profil Baru</a></span> -->
                            <input class="fcwhitesmoke" type="file" name="profilepicture">
                            <!-- <span id="delete-avatar" class="fcwhitesmoke pointer-cursor"><a class="text-hv fs20 p-2 text-decoration-none">Delete</a></span> -->
                        </div>
                        <div class="mb-20">
                            
                            <div class="fcwhitesmoke fs20 mb8">Nama<span class="fclbrown">*</span></div>
                            <div><input class="stform stform-search pd8 fs16 w-100" type="text" name="nama_mahasiswa" id="name_mahasiswa" value="<?php if($_SESSION['nama_mahasiswa'] != null) { echo $_SESSION['nama_mahasiswa']; }?>" required></div>
                            <div class="fs16 fclgrey">Kamu akan bersinar dengan nama asli anda, jadi mereka akan tahu siapa anda yang sebenarnya</div>
                        </div>
                        <div class="mb-20">
                            <div class="fcwhitesmoke fs20 mb8">Username<span class="fclbrown">*</span></div>
                            <div><input class="stform stform-search pd8 fs16 w-100" type="text" name="username_mahasiswa" id="username_maahsiswa" value="<?php if($_SESSION['username_mahasiswa'] != null) { echo $_SESSION['username_mahasiswa']; }?>"></div>
                        </div>
                        <div class="mb-48">
                            <div class="fcwhitesmoke fs20 mb8">Biografi</div>
                            <div>
                                <textarea class="stform stform-search pd8 fs16 w-100" name="biografi_mahasiswa" id="biografi_mahasiswa" maxlength="1024"><?php if($_SESSION['biografi_mahasiswa'] != null) { echo $_SESSION['biografi_mahasiswa']; }?></textarea>
                                <div class="fs16 fclgrey">Deskripsi singkat untuk profil anda</div>
                            </div>
                        </div>
                        <div class="mb-20">
                            <div class="fcwhitesmoke fs20 mb8">Pengaturan Akun</div>
                            <hr>
                        </div>
                        <div class="mb-48">
                            <div class="fcwhitesmoke fs20 mb8">Email<span class="fclbrown">*</span></div>
                            <div><input class="stform stform-search pd8 fs16 w-100" type="email" name="email_mahasiswa" id="email_mahasiswa" value="<?php if($_SESSION['email_mahasiswa'] != null) { echo $_SESSION['email_mahasiswa']; }?>" required></div>
                        </div>
                        <div class="mb-48">
                            <!-- <span id="edit-profil" class="pointer-cursor"><a class="btn-hv fs20 fcwhitesmoke p-2 bglbrown rounded text-decoration-none" >Perbarui</a></span> -->
                            <input class="button-main mt-48 bglbrown fcbrown bx-shadow-lg" type="submit" name="upload" value="Perbarui">
                        </div>
                    </div>
                    </form>
                    <form action="updatepassword.php" method="POST">
                    <div id="div_22" class="grid-item-edit-profile navpd fadein" style="display: none; visibility: hidden;">
                        <div class="mb-20">
                            <div class="fcwhitesmoke fs20 mb8">Password Lama<span class="fclbrown">*</span></div>
                            <div><input class="stform stform-search pd8 fs16 w-100" type="password" name="pass_lama" required></div>
                        </div>
                        <div class="mb-20">
                            <div class="fcwhitesmoke fs20 mb8">Password<span class="fclbrown">*</span></div>
                            <div>
                                <input class="stform stform-search pd8 fs16 w-100" type="password" minlength="6" name="pass_baru" value="" required>
                            </div>
                            <div class="fs16 fclgrey">minimal 6 karakter</div>
                        </div>
                        <div class="mb-48">
                            <!-- <span id="edit-profil" class="pointer-cursor"><a class="btn-hv fs20 fcwhitesmoke p-2 bglbrown rounded text-decoration-none">Perbarui</a></span> -->
                            <input class="button-main mt-48 bglbrown fcbrown bx-shadow-lg" type="submit" value="Perbarui Password">
                        </div>
                    </div>
                    </form>
                </div>
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
                                    <?php
                                        $query4 = "SELECT id_project FROM project";
                                        $dewan4 = $db1->prepare($query4);
                                        $dewan4->execute();
                                        $res4 = $dewan4->get_result();
                                        $data_row = mysqli_num_rows($res4);
                                    ?>
                                    <span class="fs36 etnic-san fclbrown"><?php echo $data_row ?></span><br>
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