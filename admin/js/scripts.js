$(document).ready(function() {
  $(".modal_thumbnails").click(function() {
    var user_hrerf;
    var user_href_splitted;
    var user_id;

    $("#set_user_image").prop("disabled", false);
    user_href = $("#user-id").prop("href");
    user_href_splitted = user_href.split("=");
    user_id = user_href_splitted[user_href_splitted.length - 1];

    alert(user_id);
  });

  tinymce.init({ selector: "textarea" });
});
