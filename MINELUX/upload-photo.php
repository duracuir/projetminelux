<!DOCTYPE html>

<?php
session_start();
require 'connexionBD.php';
if (isset($_POST['btn_upload']))
  {
    $filetmp   = $_FILES["file_img"]["tmp_name"];
    $filename  = $_FILES["file_img"]["name"];
    $filetype  = $_FILES["file_img"]["type"];
    $filepath  = "images/" . $filename;
    $filetitle = $_POST['img_title'];
    
    move_uploaded_file($filetmp, $filepath);
    
    $stmt = $pdo->prepare("INSERT INTO tbl_photos (img_name, username, img_type, img_path, img_title) VALUES (:iname, :username, :itype, :ipath, :ititle) ");

    $stmt->bindValue(':iname', $filename);
    $stmt->bindValue(':username', $_SESSION['username']);
    $stmt->bindValue('itype', $filetype);
    $stmt->bindValue('ipath', $filepath);
    $stmt->bindValue('ititle', $filetitle);
    if ($stmt->execute())
      {
        header('Location: gallery.php?success=yes&title=' . $filetitle);
      }
    else
      {
        header('Location: gallery.php?success=no');
      }
  }
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chargement Photo</title>
</head>
<body>
	<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" data-abide>
	<div class="photo-field">
	<input type="file" name="file_img" pattern="^.+?\.(jpg|JPG|png|PNG)$" required>
	<small class="error">Charger uniquement les JPG ou PNG.</small>
	</div>
	<div class="title-field">
	<input type="text" name="img_title" placeholder="Titre de l'image" required>
	<small class="error">Le titre de l'image est obligatoire.</small>
	</div>
	<input type="submit" value="Charger Image" name="btn_upload" class="button">
	</form>
</body>
<a class="close-reveal-modal">&#215;</a>
</html>