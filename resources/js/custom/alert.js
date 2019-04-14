$("#logout").click(function (e) {
  e.preventDefault();
  swal({
    title: "Logout",
    text: "Apakah anda yakin ingin keluar ?",
    icon: "warning",
    buttons: [
      "Batal",
      "Logout",
    ],
  })
  .then((logout) => {
    if (logout) window.location = $(this).attr('href')
  })
})

$('.dataTable').on("click", ".btn-delete", function(e){
  e.preventDefault()
  var form = $(this).parents('form')
  var status = $(this).parents('form').attr('status')
  if (!status) {
    swal({
      title   : "Hapus",
      text    : "Yakin Ingin Hapus Data?",
      icon    : "warning",
      buttons : [
        "Batal",
        "Hapus",
      ],
    })
    .then((hapus) => {
      if (hapus) form.submit()
      else return false
    })
  }else{
    swal({
      title   : "Hapus",
      text    : status,
      icon    : "warning",
      buttons : "OK",
    })
  }
})

window.notif = function (tipe, judul, pesan, ikon='check') {
  jQuery.notify({
    title: judul + "<br>",
    icon: 'fa fa-' + ikon,
    message: pesan,
  }, {
    type: tipe
  })
}
