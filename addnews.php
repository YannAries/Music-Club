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

<?php require_once 'inc/config.php';


if(!empty($_SESSION) && ($_SESSION['user_type'] == 1)){


if(!empty($_POST)){
$query= $db->prepare('INSERT INTO news SET title= :title, author= :author, content= :content, picture= :picture, creation_date= NOW()');
$query->bindValue(':title', $_POST['title']);
$query->bindValue(':author', $_POST['author']);
$query->bindValue(':content', $_POST['content']);
$query->bindValue(':picture', $_FILES['cover']['name']);
$query->execute();
}
?>

<div class="summernote container">
  <div class="row">
    <div class="span12">
      <h2>Fresh news</h2>

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
      <input type="file" name="cover">
      <button type="submit" class="btn btn-primary">Send</button>

    </form>
  </div>

<!--   <div class="row">
 <form method="post" action="" enctype="multipart/form-data">
   <input type="file" name="cover" />
   <input type="submit" name="submit" value="Envoyer" />
 </form>
 </div>

</div> -->

<?php
if(!empty($_POST)){
$tmp_name = $_FILES["cover"]["tmp_name"];
$name = $_FILES["cover"]["name"];
$uploads_dir = 'images/news';


move_uploaded_file($tmp_name,"$uploads_dir/$name");

}




?>




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

<?php }

else{
  echo 'Vous n\'êtes pas autorisé à voir cette page';
}

 ?>

</body>
</html>
