$(document).ready(function() {
  $(".modal_thumbnails").click(function() {
    $("#set_user_image").prop("disabled", false);
  });

  tinymce.init({ selector: "textarea" });
});
