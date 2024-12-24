<?php
if (isset($_POST['validateForm'])) {
    $title = htmlspecialchars($_POST['Titre_Article']);
    $contenu = htmlspecialchars($_POST['Contenu_Article']);

    $target_dir = "../../public/assets/images/";
    $allowed_formats = ['jpg', 'jpeg', 'png'];
    $imageFileType = strtolower(pathinfo($_FILES["imagearticle"]["name"], PATHINFO_EXTENSION));

    if (in_array($imageFileType, $allowed_formats)) {
    $unique_identifier = uniqid('', true);
    
    $image_path = $target_dir . $unique_identifier . '.' . $imageFileType;
    
    move_uploaded_file($_FILES["imagearticle"]["tmp_name"], $image_path);

    if($_SESSION["role"] == "Admin"){
        $sql = "INSERT INTO Article (Titre_Article, Contenu_Article, Image_Article, Article_Confirme, Id_User) 
        VALUES ('$title', '$contenu', '$image_path', True, '$idUser')";
        mysqli_query($conn, $sql);
    }else{
            $sql = "INSERT INTO Article (Titre_Article, Contenu_Article, Image_Article, Article_Confirme, Id_User) 
            VALUES ('$title', '$contenu', '$image_path', False, '$idUser')";
            mysqli_query($conn, $sql);
    }

 
    echo '

    <div id="ArticleModel" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50 ">
<form id="ArticleForm" class="bg-white rounded-lg w-full max-w-[30rem] sm:max-w-3/4 md:max-w-2/3 p-4 sm:p-6 shadow-lg overflow-y-auto" method="POST"   >
<div class="flex justify-between items-center mb-4 sm:mb-6">
<h2 class="text-xl sm:text-2xl font-semibold text-gray-800">Nouvelle Article</h2>
<button  id="closearticlemodel" class="text-gray-500 hover:text-gray-700 focus:outline-none">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
</svg>
</button>
</div>';
 
 $sql2 = "SELECT * FROM Tags";
 $result2 = mysqli_query($conn, $sql2);
 
 if ($result2 && mysqli_num_rows($result2) > 0) {
  echo '<select name="tags[]" multiple class="w-full p-2 border rounded-md">';
  echo '<option value="">Select a Tag</option>';
    
    while ($tag = mysqli_fetch_row($result2)) {
        echo '<option value="' . $tag[0] . '">' . $tag[1] . '</option>';
    }
    
    echo '</select>';
} else {
    echo '<p>No tags available.</p>';
}
echo '
<div class="mt-6 sm:mt-8 flex justify-between space-y-4 sm:space-y-0 sm:flex-row">
<button id="closeModalBtn" class="bg-red-500 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Annuler</button>
<button type="submit" value="'.$image_path.'" name="validateTag" id="validateTag" class="bg-green-600 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Valider</button>
</div>
</form>
</div>';





} else {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')
    ;</script>";
}
}


     if(isset($_POST['validateTag'])){
    $image_path = $_POST['validateTag'];
    $sql = "SELECT * from Article where Image_Article = '$image_path'";
    $result = mysqli_query($conn,$sql);
    $Article_Info = mysqli_fetch_row($result);
    if (isset($_POST['tags'])) {
        $selectedTags = $_POST['tags']; 
        foreach ($selectedTags as $tagId) {
            $sql1 = "INSERT INTO Article_Tags (Id_Article,Id_Tags) VALUES ('$Article_Info[0]','$tagId')";
            mysqli_query($conn, $sql1);
            echo "<script>window.location.href = window.location.href</script>";
        }
    }     
 
}

?>
