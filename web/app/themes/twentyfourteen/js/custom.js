jQuery(document).ready(function ($) {
  $("#submissionForm").submit(function (e) {
    e.preventDefault();

    var $submitBtn = $("#submitBtn");
    var $spinner = $("#spinner");
    var $submitText = $("#submitText");

    // Show the spinner and disable the button
    $submitBtn.prop("disabled", true);
    $spinner.show();
    $submitText.text("Submitting...");

    var postData = {
      action: "submit_form",
      form_nonce: $(this).find('input[name="form_nonce"]').val(),
      name: $(this).find('input[name="name"]').val(),
      email: $(this).find('input[name="email"]').val(),
      phone: $(this).find('input[name="phone"]').val(),
    };

    $.post(ajax_params.ajax_url, postData, function (response) {
      // Hide the spinner and re-enable the button
      $submitBtn.prop("disabled", false);
      $spinner.hide();
      $submitText.text("Submit");

      if (response.success) {
        $("#successModal").modal("show");
        $("#successOkButton").click(function () {
          window.location.href = response.data;
        });
      } else {
        $("#errorModal").modal("show");
        $("#errorModal .modal-body").text("Error: " + response.data);
      }
    });
  });
});
