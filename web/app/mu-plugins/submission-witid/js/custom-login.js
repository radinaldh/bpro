document.addEventListener("DOMContentLoaded", function () {
  const token = localStorage.getItem("loginToken");
  if (token) {
    // Example of adding the token to an AJAX request
    jQuery.ajaxSetup({
      beforeSend: function (xhr) {
        xhr.setRequestHeader("Authorization", token);
      },
    });
  }
});
