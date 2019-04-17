$(".dataTable").on("click", ".modalKirim", function(){
  url = $(this).attr('href')
  form = $("#modalKirim").find('form')
  form.attr('action', url)
})
