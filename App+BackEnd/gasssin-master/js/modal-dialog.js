function showDialog(pp, judul, nama, gambar, platform, tgl, desc) {
    doc = document.getElementById('view-shot');
    doc.style.display = "block";
    doc.style.visibility = "visible";
    document.body.classList = "noscroll";

    // document.getElementById('mv-judul').innerHTML = judul;
    // document.getElementById('mv-nama').innerHTML = nama;
    // document.getElementById('ov-gambar').src = 'upload/upload_foto_karya/'+gambar;
    // document.getElementById('ov-platform').innerHTML = platform;
    // document.getElementById('ov-tgl').innerHTML = tgl;
    // document.getElementById('ov-desc').innerHTML = desc;

    $('#ov-pp').attr('src','upload/profile_pict/'+pp);
    $('#ov-judul').html(judul);
    $('#ov-nama').html(nama);
    $('#ov-gambar').attr('src','upload/upload_foto_karya/'+gambar);
    $('#ov-platform').html(platform);
    $('#ov-tgl').html(tgl);
    $('#ov-desc').html(desc);
  };

function closeDialog() {
  doc = document.getElementById('view-shot');
  doc.style.display = "none";
  doc.style.visibility = "hidden";
  document.body.classList = "scroll";
};