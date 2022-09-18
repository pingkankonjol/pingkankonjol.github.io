$(document).ready(function () {
  $("#peringatan").hide();
  $("#fPass").hide();
  $("#login").hide();
  $("#username").keyup(function (event) {
    event.preventDefault();
    $("#fPass").slideDown(500);
  });
  $("#password").keyup(function (event) {
    event.preventDefault();
    $("#login").slideDown(500);
  });

  // $("#login").click(function (e) {
  //   e.preventDefault();
  //   let userName = $("#username").val();
  //   let passWord = $("#password").val();
  //   if(userName !== "pingkan" && passWord !== "pk2002") {
  //     $("#peringatan").show(500);
  //     $("#username").val(null);
  //     $("#password").val(null);
  //   }else{
  //     document.location.href = 'utama.html';
  //   }
  // });

});

