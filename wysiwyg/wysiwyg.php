<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
</head>
<body>

<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>

<div class="summernote container">
  <div class="row">
    <div class="span12">
      <h2>New review</h2>

    </div>
  </div>
  <div class="row">
    <form class="span12" id="postForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
      titre: <input type="text" name="title">
      auteur: <input type="text" name="author">
      <fieldset>
        <p class="container">
          <textarea class="input-block-level" id="summernote" name="content" rows="18">
          </textarea>
        </p>
      </fieldset>
      <button type="submit" class="btn btn-primary">Save changes</button>
      <button type="button" id="cancel" class="btn">Cancel</button>
    </form>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  $('#summernote').summernote({
    height: "500px"
  });
});
var postForm = function() {
  var content = $('textarea[name="content"]').html($('#summernote').code());
}
</script>
</body>
</html>