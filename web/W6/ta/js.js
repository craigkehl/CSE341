$("#scriptureform").submit(function (event) {
  event.preventDefault();
  console.log("before post");
  $.ajax({
      method: "POST",
      url: "insert_scripture.php",
      data: $("#scriptureform").serialize(),
      success: function (res) {
        console.log('success');
        $("#response").html(res);
        console.log(res);
      }
    })
    .fail(function (message) {
      console.log('file');
      $("#response").text(message);
      console.log(message);
    });
});