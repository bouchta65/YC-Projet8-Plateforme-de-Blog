<?php
include "../db/config.php";
session_start();
if (isset($_SESSION["user"]) && $_SESSION["role"] == "Admin") {
   
}else{
    header("Location: ../../index.php");
}

include "statistiquesAdmin.php";
include "AddArticle.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="flex bg-gray-100 min-h-screen">
  <aside class="hidden sm:flex sm:flex-col">
    <a href="#" class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
    <img src="../../public/assets/images/Neon Green and Black Graffiti Urban Grunge Logo.png" alt="Banner Image" class="w-full h-full object-cover" />

    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
      <nav class="flex flex-col mx-4 my-6 space-y-4">
      <a href="dashboardAdmin.php" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
      <span class="sr-only">Dashboard</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </a>
        <a href="AdminUser.php" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
        <span class="sr-only">Folders</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
          </svg>
        </a>
        <a href="#" class="inline-flex items-center justify-center py-3 text-purple-600 bg-white rounded-lg">
          <span class="sr-only">Documents</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
          </svg>
        </a>
        <a href="requestArticle.php" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Messages</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </a>
        <a href="black_liste.php"  class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
            <span class="sr-only">Blacklist</span>
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v6m6-6a9 9 0 11-12 0 9 9 0 0112 0z" />
            </svg>
        </a>

        <a href="Archive.php"  class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
        <span class="sr-only">Tags</span>
        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h10M5 10h14M6 13h12m2-5a1 1 0 011 1v10a1 1 0 01-1 1H5a1 1 0 01-1-1V9a1 1 0 011-1h14z" />
        </svg>
        </a>
   
      </nav>
      <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
        <button class="p-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Settings</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </button>
      </div>
    </div>
  </aside>
  <div class="flex-grow text-gray-800">
    <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
      <button class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
        <span class="sr-only">Menu</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="relative w-full max-w-md sm:-ml-2">
        <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
        </svg>
        <input type="text" role="search" placeholder="Search..." class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
      </div>
      <div class="flex flex-shrink-0 items-center ml-auto">
        <button class="inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg">
          <span class="sr-only">User Menu</span>
          <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
            <span class="font-semibold"><?php echo $AdminName;?></span>
            <span class="text-sm text-gray-600">Admin</span>
          </div>

        </button>
        <div class="border-l pl-3 ml-3 space-x-1">
          <button class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
            
          <span class="sr-only">Log out</span>
          <a href="logout.php">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            </a>
          </button>
        </div>
      </div>
    </header>
    <main class="p-6 sm:p-10 space-y-6">
    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
          <h1 class="text-4xl font-semibold mb-2">Article List
          </h1>
          <h2 class="text-gray-600 ml-0.5">List of all the articles that are currently active</h2>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">     
          <button id="addatrticle" class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Create new Article
          </button>
        </div>
      </div>


      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php
      
        function afficheArtcile($conn){
          $sqll = "SELECT Id_User FROM User WHERE Email_User = '".$_SESSION["user"]."'";
          $resultt = mysqli_query($conn,$sqll);
          $Admindata = mysqli_fetch_row($resultt);
          $idAdmin = $Admindata[0];
        $sql = "SELECT * FROM Article a left join Archive r on a.Id_Article = r.Id_Article where a.Id_User='$idAdmin' and r.Id_Article is null";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_row($result)){
         
          echo '<div class="w-50 bg-white shadow-md rounded-lg overflow-hidden">
          <div class="relative">
            <img src="../../public/'.$row[3].'" alt="Article Image" 
                 class="w-full h-40 object-cover">
            <div class="absolute top-3 right-3 flex space-x-2">
              <form method="POST" action="" >

              <button type="submit" name="Edit" title="Edit" value="'.$row[0].'" class="bg-blue-500 hover:bg-blue-700 text-white p-2 rounded-full shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 3.487a3.375 3.375 0 014.774 4.774l-9.84 9.84a2.25 2.25 0 01-1.011.564l-3.486.873a.75.75 0 01-.91-.91l.873-3.486a2.25 2.25 0 01.564-1.011l9.84-9.84z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.25 8.25L15.75 4.75" />
                </svg>
              </button>
              <!-- Bouton Supprimer -->
              <button type="submit" name="Delete" title="Delete" value="'.$row[0].'" class="bg-red-500 hover:bg-red-700 text-white p-2 rounded-full shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 9.75l-.664 9.345A2.25 2.25 0 0116.594 21H7.406a2.25 2.25 0 01-2.242-1.905L4.5 9.75m9.75-4.5v-1.5a2.25 2.25 0 10-4.5 0v1.5m11.25 0h-18" />
                </svg>
              </button>
              </form>
            </div>
          </div>
          <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">'.$row[1].'</h2>
            <p class="text-sm text-gray-500">Publié le : '.$row[4].'</p>
          </div>
        </div>';
      }
    }
        if(isset($_POST['Delete'])){
          $id_Article = $_POST['Delete'];
          $sql1 = "SELECT * from Article where Id_Article = '$id_Article'";
          $result = mysqli_query($conn,$sql1);
          $row = mysqli_fetch_row($result);
          $sqll = "INSERT INTO Archive (Id_Article, Date_Archivage,Titre_Article, Contenu_Article, Image_Article, Article_Confirme, Id_User) VALUES ('$id_Article',  NOW(),'$row[1]', '$row[2]', '$row[3]', True, '$row[6]')";
          mysqli_query($conn,$sqll);

         
        }
        afficheArtcile($conn);

    
         if(isset($_POST['Edit'])){
          $id_Article = $_POST['Edit'];
          $sql = "SELECT * FROM Article where Id_Article = '$id_Article'";
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_row($result);
          
        echo '
        <div id="ArticleModel" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50 ">
        <form id="ArticleForm" class="bg-white rounded-lg w-full max-w-[60rem] sm:max-w-3/4 md:max-w-2/3 p-4 sm:p-6 shadow-lg overflow-y-auto" method="POST" action="AdminArticle.php" enctype="multipart/form-data" >
        <div class="flex justify-between items-center mb-4 sm:mb-6">
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">Nouvelle Article</h2>
        <button  id="closearticlemodel" class="text-gray-500 hover:text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        </button>
        </div>

        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
        <div class="w-full max-w-[50rem] sm:w-2/3 space-y-4">
        <div class="flex flex-col">
        <label for="titre_Article" class="font-medium text-gray-600 text-sm sm:text-base">Title </label>
        <input type="text" id="titre_Article" value="'.$row[1].'" name="titre_Article" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ex: First Principle of Machine Learning" >
        </div>
        <div class="flex flex-col">
          <label for="Contenu_Article" class="font-medium text-gray-600 text-sm sm:text-base">Contenu</label>
          <textarea name="Contenu_Article" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" rows="4" placeholder="Machine learning is...">'.$row[2].'</textarea>
          </div>

           <div class="flex flex-col">
        <label for="role" class="font-medium text-gray-600 text-sm sm:text-base">Change The Image</label>
        <select id="role" name="role" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="tag">tag</option>
        </select>
        </div>

        </div>

        <div class="w-full sm:w-1/3 bg-gray-100 rounded-lg p-4 space-y-4">
         <div class="flex flex-col">
          <label for="imagearticle" class="font-medium text-gray-600 text-sm sm:text-base">Image Article </label>
          <img src="../../public/'.$row[3].'" name="iamge" alt="Image Preview" class="h-34  object-cover rounded-lg" />
        </div>
          <div class="flex flex-col">
          <label for="image_Article" class="font-medium text-gray-600 text-sm sm:text-base">Change The Image</label>
          <input type="file" id="image_Article" name="image_Article" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">

        </div>
       

        </div>
        </div>

        <div class="mt-6 sm:mt-8 flex justify-between space-y-4 sm:space-y-0 sm:flex-row">
        <button id="closeModalBtn"  class="bg-red-500 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Annuler</button>
        <button id="validateForm" type="submit" value="'.$row[0].'" name="validate"  class="bg-green-600 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Valider</button>
        </div>
        </form>
        </div>
          ';
          
        }

        if(isset($_POST['validate'])){
          $id_Article = $_POST['validate'];
          $Contenu_Article = $_POST['Contenu_Article'];
          $titre_Article = $_POST['titre_Article'];

           $target_dir = "../../public/assets/images/";
          $imageFileType = strtolower(pathinfo($_FILES["image_Article"]["name"], PATHINFO_EXTENSION));
          $unique_identifier = uniqid('', true);
          $image_path = $target_dir . $unique_identifier . '.' . $imageFileType;
        
            if (move_uploaded_file($_FILES["image_Article"]["tmp_name"], $image_path)) {
                $sql = "UPDATE Article SET Titre_Article='$titre_Article', Contenu_Article='$Contenu_Article', Image_Article='$image_path' WHERE Id_Article = '$id_Article'";
                mysqli_query($conn,$sql);
                echo "<script>window.location.href = window.location.href;</script>";

            } else {
                echo "File upload failed. Error code: " . $_FILES["image_Article"]["error"];
            }
 
 
       

        }
        ?>

</div>
</div>





    </main>
  </div>




  <div id="ArticleModel" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50 hidden">
  <form id="ArticleForm" class="bg-white rounded-lg w-full max-w-[60rem] sm:max-w-3/4 md:max-w-2/3 p-4 sm:p-6 shadow-lg overflow-y-auto" method='POST' action='#' enctype="multipart/form-data" >
    <div class="flex justify-between items-center mb-4 sm:mb-6">
      <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">Nouvelle Article</h2>
      <button  id="closearticlemodel" class="text-gray-500 hover:text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
      <!-- Left Side Inputs -->
      <div class="w-full max-w-[50rem] sm:w-2/3 space-y-4">
      <div class="flex flex-col">
          <label for="Titre_Article" class="font-medium text-gray-600 text-sm sm:text-base">Title</label>
          <input type="text" id="Titre_Article" name="Titre_Article" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ex: First Principle of Machine Learning">
        </div>
        <div class="flex flex-col">
          <label for="Contenu_Article" class="font-medium text-gray-600 text-sm sm:text-base">Contenu</label>
          <textarea name="Contenu_Article" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" rows="4" placeholder="Machine learning is..."></textarea>
          </div>
 
      </div>

      <!-- Right Side Inputs -->
      <div class="w-full sm:w-1/3 bg-gray-100 rounded-lg p-4 space-y-4">
        <div class="flex flex-col">
          <label for="imagearticle" class="font-medium text-gray-600 text-sm sm:text-base">Image d'Article</label>
          <input type="file" id="imagearticle" name="imagearticle" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
          <label for="status" class="font-medium text-gray-600 text-sm sm:text-base">Tage</label>
          <select id="status" name="status" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="En Parc">tage1</option>
            <option value="Sous Location">tage2</option>
          </select>
        </div>
     
      </div>
    </div>

    <div class="mt-6 sm:mt-8 flex justify-between space-y-4 sm:space-y-0 sm:flex-row">
      <button id="closeModalBtn" class="bg-red-500 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Annuler</button>
      <input type="submit" value="Valider" name="validateForm" id="validateForm" class="bg-green-600 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
    </div>
  </form>
</div>
</body>
<script src="../../public/assets/js/pages.js"></script>

</html>