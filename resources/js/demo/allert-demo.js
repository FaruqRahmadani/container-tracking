//custom allert for demo
$('#saved').click(function () {
  $.notify({
    title: "Berhasil ! <br>",
    icon: 'fa fa-check',
    message: "Data yang anda masukkan telah tersimpan",
  }, {
      type: 'success'
    })
})
$('#updated').click(function () {
  $.notify({
    title: "Berhasil ! <br>",
    icon: 'fa fa-check',
    message: "Data yang anda pilih telah diperbaharui",
  }, {
      type: 'success'
    })
})
$('#deleted').click(function () {
  $.notify({
    title: "Berhasil ! <br>",
    icon: 'fa fa-check',
    message: "Data yang anda pilih telah terhapus",
  }, {
      type: 'success'
    })
})