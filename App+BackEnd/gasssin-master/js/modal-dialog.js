function showDialog(pp, judul, nama, gambar, platform, tgl, desc, mail) {
    doc = document.getElementById('view-shot');
    doc.style.display = "block";
    doc.style.visibility = "visible";
    document.body.classList = "noscroll";

    $('#ov-pp').attr('src','upload/profile_pict/'+pp);
    $('#ov-judul').html(judul);
    $('#ov-nama').html(nama);
    $('#ov-gambar').attr('src','upload/upload_foto_karya/'+gambar);
    $('#ov-platform').html(platform);
    $('#ov-tgl').html(tgl);
    $('#ov-desc').html(desc);
    var mailto_link = 'mailto:'+mail;
    $('#mailto').attr('href', mailto_link);
  };

function closeDialog() {
  doc = document.getElementById('view-shot');
  doc.style.display = "none";
  doc.style.visibility = "hidden";
  document.body.classList = "scroll";
};