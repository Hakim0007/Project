$(document).on("click", "#signup", function () {
  var response = grecaptcha.getResponse();
  if (response.length == 0) {
    alert("Please verify you are a human!");
    return false;
  }
});
