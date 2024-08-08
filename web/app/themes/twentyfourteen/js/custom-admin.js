jQuery(document).ready(function ($) {
  $(".send-email").on("click", function () {
    var post_id = $(this).data("post-id");
    var $button = $(this);

    $.ajax({
      url: ajax_params.ajax_url,
      type: "POST",
      data: {
        action: "send_email",
        post_id: post_id,
      },
      success: function (response) {
        if (response.success) {
          alert("Email sent successfully.");
          location.reload(); // Reload the page to show the success notice
        } else {
          alert("Failed to send email.");
        }
      },
    });
  });
});
