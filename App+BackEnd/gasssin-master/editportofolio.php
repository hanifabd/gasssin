<?php
    session_start();
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

    <title>Edit Portofolio | Gasssin</title>
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
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="profil.php">Profil Anda</a></div>
                            <hr>
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="edit-profile.php">Edit Profil</a></div>
                            <div><a class="profile-opt fcwhitesmoke text-decoration-none" href="editportofolio.php">Edit Portfolio</a></div>
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
                                </span><span> / Edit Portofolio</span>
                            </div>
                            <div class="fs16 fcwhitesmoke">
                                <span>Kamu bisa mengedit hasil karyamu</span>
                            </div>
                            <div class="w-100 mt-24">
                            </div>
                        </div>
                    </div>
                    <form enctype="multipart/form-data">
                    <div id="div_21" class="grid-item-edit-profile navpd fadein" style="display: block; visibility: visible;">
                        <div class="mb-20">
                            <div class="fcwhitesmoke fs20 mb8">
                            <table>
                                <thead>
                                    <tr>
                                    <th>Foto Karya</th>
                                    <th>Judul</th>
                                    <th>ID platform</th>
                                    <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <?php include('koneksi.php');?>
                                <?php
                                $id_mahasiswa=$_SESSION['id_mahasiswa'];
                                    $sql="SELECT * FROM project WHERE id_mahasiswa=$id_mahasiswa";
                                    
                                    $query=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_array($query) )
                                    {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['foto_karya'] ?></td>
                                                <td><?php echo $row['judul'] ?></td>
                                                <td><?php echo $row['id_platform'] ?></td>
                                                <td><?php echo $row['deskripsi'] ?></td>
                                                <td>
                                                    <?php echo "<a href= 'proses_edit_port.php?id_project=".$row['id_project']." ' class='btn btn-3d btn-primary'>Edit</a>";?>   
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                            </table>
                            </div>
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
