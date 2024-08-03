jQuery(document).ready(function ($) {
  $("#submissionForm").submit(function (e) {
    e.preventDefault();
    var postData = {
      action: "submit_form",
      form_nonce: $(this).find('input[name="form_nonce"]').val(),
      name: $(this).find('input[name="name"]').val(),
      email: $(this).find('input[name="email"]').val(),
      phone: $(this).find('input[name="phone"]').val(),
    };

    $.post(ajax_params.ajax_url, postData, function (response) {
      if (response.success) {
        alert("Submission successful!");
        window.location.href = response.data;
      } else {
        alert("Error: " + response.data);
      }
    });
  });
});
