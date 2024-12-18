<?php
if (isset($_POST['validateForm'])) {
    $title = $_POST['Titre_Article'];
    $contenu = $_POST['Contenu_Article'];

    $target_dir = "../../public/assets/images/";
    $imageFileType = strtolower(pathinfo($_FILES["imagearticle"]["name"], PATHINFO_EXTENSION));
    $unique_identifier = uniqid('', true);
    $image_path = $target_dir . $unique_identifier . '.' . $imageFileType;

    if (move_uploaded_file($_FILES["imagearticle"]["tmp_name"], $image_path)) {
        $sql = "INSERT INTO Article (Titre_Article, Contenu_Article, Image_Article, Article_Confirme, Id_User) 
                VALUES ('$title', '$contenu', '$image_path', True, '$idAdmin')";
        mysqli_query($conn, $sql);
        header("Location: AdminArticle.php" );
        
    } else {
        echo "Error uploading the image file.";
        
    }
}
?>
