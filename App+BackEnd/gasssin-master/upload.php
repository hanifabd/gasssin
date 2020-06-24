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

    <title>Profil | Gasssin</title>
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
                    <form class="mt-24 dropzone-detil" id="upload2"action="proses_upload.php" method="POST"></form>
                        <form class="dropzone needsclick" id="upload" action="web/file/upload" method="POST">
                            <div class="dz-message needsclick">
                                <div>
                                    <span class="iconify" data-icon="octicon-cloud-upload" data-inline="false"></span>
                                </div> 
                                <div>
                                    <span class="fs24"><strong>Drag and drop an image</strong></span><br>
                                    <span>or <span class="fclbrown" type="file" name="foto_karya">Click</span> to choose an image</span><br>
                                    <span class="fclgrey">(1600x1200 or larger recommended, up to 10 MB)</span>
                                </div>
                            </div>
                            <div class="form-field">

                            </div>
                        </form>
                            <div class="mb-20">
                                <div class="fcbrown fs16 mb8">Judul<span class="fclbrown">*</span></div>
                                <div><input class="stform stform-search bglgrey pd8 fs16 w-100" type="text" name="judul" id="judul" form="upload2" plac required></div>
                            </div>
                            <?php date_default_timezone_set('Asia/Jakarta')?>
                            <div class="mb-20">
                                <div class="fcbrown fs16 mb8">Platform<span class="fclbrown">*</span>
                                <select class="form-control" name="id_platform" id="id_platform" form="upload2">
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
                            </select></div>
                                
                            </div>
                            <div class="mb-48">
                                <div class="fcbrown fs16 mb8">Deskripsi<span class="fclbrown"></span></div>
                                <div>
                                    <textarea class="stform stform-search bglgrey pd8 fs16 w-100" name="deskripsi" id="deskripsi" form="upload2" maxlength="1024" placeholder="Ceritakan bagaimana Proses dan bagaimana anda menyelesaikan productmu..."></textarea>
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
                        <input class="btn bglbrown fs20" type="submit" value="Publikasikan" form="upload2">
                    </div>
                </div>
            </footer>
            <!-- footer -->
            </div>
        </div>
    </div>
</body>
</html>

<script>
    var dropzone = new Dropzone('#upload', {
        previewTemplate: document.querySelector('#preview-template').innerHTML,
        parallelUploads: 2,
        thumbnailHeight: 120,
        thumbnailWidth: 120,
        maxFilesize: 3,
        filesizeBase: 1000,
        thumbnail: function(file, dataUrl) {
          if (file.previewElement) {
            file.previewElement.classList.remove("dz-file-preview");
            var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
            for (var i = 0; i < images.length; i++) {
                var thumbnailElement = images[i];
                thumbnailElement.alt = file.name;
                thumbnailElement.src = dataUrl;
            }
            setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
          }
        }
      
      });
      
      
      // Now fake the file upload, since GitHub does not handle file uploads
      // and returns a 404
      
      var minSteps = 6,
          maxSteps = 60,
          timeBetweenSteps = 100,
          bytesPerStep = 100000;
      
      dropzone.uploadFiles = function(files) {
        var self = this;
      
        for (var i = 0; i < files.length; i++) {
      
          var file = files[i];
          totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));
      
          for (var step = 0; step < totalSteps; step++) {
            var duration = timeBetweenSteps * (step + 1);
            setTimeout(function(file, totalSteps, step) {
              return function() {
                file.upload = {
                  progress: 100 * (step + 1) / totalSteps,
                  total: file.size,
                  bytesSent: (step + 1) * file.size / totalSteps
                };
      
                self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
                if (file.upload.progress == 100) {
                  file.status = Dropzone.SUCCESS;
                  self.emit("success", file, 'success', null);
                  self.emit("complete", file);
                  self.processQueue();
                  //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
                }
              };
            }(file, totalSteps, step), duration);
          }
        }
      }
</script>