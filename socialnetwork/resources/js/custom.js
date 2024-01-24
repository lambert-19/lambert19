$(document).ready(function () {
  load_comments();
  function load_comments() {
    $.ajax({
      type: "POST",
      url: "code.php",
      data: {
        comment_load_data: true
      },
      success: function (response) {
        $(".comment-container").html("");
        $([".comment-container"]).append(
          '<div class="post post1 comment-container">\
                            <div class="com-reply">\
                                <div class="topcom">\
                                    <div class="propic">image</div>\
                                    <div class="postname">Hello worlld</div>\
                                    <div class="com-time">time</div>\
                                </div>\
                                <p class="para">hey you there</p>\
                                <button class="style_button">Reply</button>\
                                <button class="style_button">View replies</button>\
                            </div>\
            </div>\
            '
        );
      }
    });
  }

  $(".add_comment_button").click(function (e) {
    e.preventDefault();

    var content_comment = $(".comment_textbox").val();
    if ($.trim(content_comment).length === 0) {
      error_msg = "Please type comment";
      $("#error_status").text(error_msg);
    } else {
      error_msg = "";
      $("#error_status").text(error_msg);
    }
    if (error_msg !== "") {
      return false;
    } else {
      var data = {
        content_comment: content_comment,
        add_comment: true
      };
      $.ajax({
        type: "POST",
        url: "code.php",
        data: data,
        datatype: "",
        success: function (response) {
          alert(response);
          $(".comment_textbox").val("");
        }
      });
    }
  });
});
