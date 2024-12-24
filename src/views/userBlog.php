<?php
include "../db/config.php";
session_start();
if (isset($_SESSION["user"])) {
   
}else{
    header("Location: loginpage.php");
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
    <style>
        @media (min-width: 1200px) {
            .xl-custom {
                display: block; 
            }
        }

        @media (max-width: 1199px) {
            .xl-custom {
                display: none; 
            }
        }
    </style>

</head>
<body class="flex bg-gray-100 min-h-screen">
<?php if($_SESSION["role"] == "Admin"){?>
<aside class="hidden sm:flex sm:flex-col fixed top-0 left-0 h-full w-20 z-50">
  <a href="userBlog.php" class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
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
        <a href="AdminArticle.php" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Documents</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
          </svg>
        </a>
        <a href="Tages.php" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
        <span class="sr-only">Tags</span>
        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7L14 14M5 12l7-7 7 7-7 7-7-7z" />
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
        <span class="sr-only">Archives</span>
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

 <?php  }else{ ?>
    <aside class="hidden sm:flex sm:flex-col fixed top-0 left-0 h-full w-20 z-50">
  <a href="userBlog.php" class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
  <img src="../../public/assets/images/Neon Green and Black Graffiti Urban Grunge Logo.png" alt="Banner Image" class="w-full h-full object-cover" />

    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
      <nav class="flex flex-col mx-4 my-6 space-y-4">

        <a href="AdminArticle.php" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Documents</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
          </svg>
        </a>
    
        <a href="Archive.php"  class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
        <span class="sr-only">Archives</span>
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
  <?php  }?>

  <div class="flex-grow text-gray-800 lg:ml-20 md:ml-20 sm:ml-20">
    <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
      <button class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
        <span class="sr-only">Menu</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="relative w-full max-w-md sm:-ml-2">
    <form method="POST" class="flex">
        <div class="relative w-full">
            <select name="selected_tag" class="py-2 pl-4 pr-12 w-full border-2 border-black placeholder-gray-400 focus:bg-gray-50 focus:outline-none rounded-lg" role="search">
                <option value="" disabled selected>Filter by tag...</option>
                <?php
                    $sql2 = "SELECT * FROM Tags";
                    $result2 = mysqli_query($conn, $sql2);
                    
                    if ($result2 && mysqli_num_rows($result2) > 0) {
                        while ($tag = mysqli_fetch_row($result2)) {
                            echo '<option value="' . $tag[0] . '">' . $tag[1] . '</option>';
                        }
                    } else {
                        echo '<option>No tags available.</option>';
                    }
                ?>
            </select>

            <button type="submit" class="absolute inset-y-0 right-5 px-3 py-1.5 bg-transparent text-black  text-sm border-2 border-transparent">Filter</button>
        </div>
    </form>
</div>
      <div class="flex flex-shrink-0 items-center ml-auto">
        <button class="inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg">
          <span class="sr-only">User Menu</span>
          <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
            <span class="font-semibold"><?php echo $UserName;?></span>
            <span class="text-sm text-gray-600"><?php echo $RolesUser;?></span>
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
          <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
          <h2 class="text-gray-600 ml-0.5">Welcome to your Blog Dashboard</h2>
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
    <?php 
    if (isset($_POST['selected_tag'])) {
      $selectedTag = $_POST['selected_tag'];

      $sql1 = "SELECT * FROM Article a LEFT JOIN Archive r ON a.Id_Article = r.Id_Article
      INNER JOIN Article_Tags at ON a.Id_Article = at.Id_Article WHERE r.Id_Article IS NULL AND a.Article_Confirme = TRUE AND at.Id_Tags = '$selectedTag'
      ORDER BY a.Id_Article DESC";    
      $result1 = mysqli_query($conn,$sql1);
    }else{
      $sql1 = "SELECT * FROM Article a left join Archive r on a.Id_Article = r.Id_Article where  r.Id_Article is null and a.Article_Confirme = TRUE order by a.Id_Article desc";
      $result1 = mysqli_query($conn,$sql1);
    }
   

while ($row1 = mysqli_fetch_row($result1)) {
    $sql2 = "SELECT * from User where Id_User = '$row1[6]'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_row($result2);

    $nameUsers = explode(' ', $row2[1]);
    $first = '';
    foreach ($nameUsers as $nameUser) {
        $first .= strtoupper($nameUser[0]);
    }

    $email_User = $_SESSION['user'];
    $sql5 = "SELECT * from User where Email_User = '$email_User'";
    $result5 = mysqli_query($conn,$sql5);
    $row5 = mysqli_fetch_row($result5);
    $Id_User = $row5[0];

    $sql6="SELECT COUNT(*) from Likes where Id_Article='$row1[0]' ";
    $result6 = mysqli_query($conn,$sql6);
    $row6 = mysqli_fetch_row($result6);

    $sql8 = "SELECT COUNT(id_Article) from Likes where Id_User='$Id_User' and Id_Article='$row1[0]'";
    $result7 = mysqli_query($conn,$sql8);
    $row7 = mysqli_fetch_row($result7);

    echo '
<a href="articledetails.php?id='.$row1[0].'">
    <section>
    
      <div class="container mx-auto px-4 py-6 space-y-8 bg-gray-100 rounded-lg ">
        <div class="flex flex-col lg:flex-row space-y-8 lg:space-x-10 lg:space-y-0">
          <div class="article-section bg-white p-6 rounded-lg shadow-md max-w-4xl w-full lg:max-w-5xl">
            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 rounded-full bg-gray-300 flex items-center justify-center">
                <span class="text-gray-500 font-semibold">'.$first.'</span>
              </div>
              <div>
                <p class="font-semibold text-gray-800">'.$row2[1].'</p>
                <p class="text-sm text-gray-500">Published on '.$row1[4].'</p>
              </div>
            </div>
            <br>
            <h1 class="text-2xl font-bold text-gray-800 mb-4">'.$row1[1].'</h1>
            <div class="mb-6">
              <img src="'.$row1[3].'" alt="Minimalism" class="w-full object-cover rounded-lg shadow-md" style="height: 350px;" />
            </div>
            <p class="text-gray-700 leading-relaxed mb-6">' . substr($row1[2], 0, 500) . '...<a href="articledetails.php?id=' . $row1[0] . '" class="text-blue-500 hover:underline">Read More</a></p>
             </a>
            <form method="POST">';

              if($row7[0]>0){
                echo '
                  
                  <button type="submit" name="likebutton" value="'.$row1[0].'" class="flex items-center text-blue-500 hover:text-blue-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7 7 7-7M5 10l7-7 7 7"></path>
                </svg>
                <span class="ml-2 text-sm font-semibold">'.$row6[0].'</span>
              </button>
                </form>
                ';
              }else{
                  echo '
            <button type="submit" name="likebutton" value="'.$row1[0].'" class="flex items-center text-gray-500 hover:text-blue-500 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7 7 7-7M5 10l7-7 7 7"></path>
              </svg>
              <span class="ml-2 text-sm font-semibold">'.$row6[0].'</span>
            </button>
            
                  ';
              }
            echo '
          </form>
         </div>
     
            </section>
           


            ';


}


    if(isset($_POST['likebutton'])){
      $id_Article=$_POST['likebutton'];
      $sql8 = "SELECT COUNT(id_Article) from Likes where Id_User='$Id_User' and Id_Article='$id_Article'";
      $result7 = mysqli_query($conn,$sql8);
      $row7 = mysqli_fetch_row($result7);

      echo $row7[0];
      if($row7[0]>0){
        $sql7="DELETE from Likes where Id_Article = '$id_Article' and Id_User = '$Id_User'";
        mysqli_query($conn,$sql7);
        echo "<script>window.location.href = window.location.href;</script>";

      }else{
        $sql9="INSERT into Likes(Id_Article,Id_User) values('$id_Article','$Id_User')";
        mysqli_query($conn,$sql9);
        echo "<script>window.location.href = window.location.href;</script>";
      }
    
    }


    ?>
<div class="hidden lg:block lg:absolute lg:top-48 lg:right-14 lg:w-60">
    <script src="https://static.elfsight.com/platform/platform.js" async></script>
    <div class="elfsight-app-11a66b3b-6fff-4cbd-b222-d18784854b10" data-elfsight-app-lazy></div>
</div>

    </main>
  </div>


  <div id="ArticleModel" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50 hidden">
  <form id="ArticleForm" class="bg-white rounded-lg w-full max-w-[60rem] sm:max-w-3/4 md:max-w-2/3 p-4 sm:p-6 shadow-lg overflow-y-auto" method='POST' action='#' enctype="multipart/form-data" >
    <div class="flex justify-between items-center mb-4 sm:mb-6">
      <h2 class="text-xl sm:text-2xl font-semibold text-gray-800"> New Article</h2>
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
          <label for="Titre_Article" class="font-medium text-gray-600 text-sm sm:text-base ">Title</label>
          <input type="text" id="Titre_Article" name="Titre_Article" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required  placeholder="Ex: First Principle of Machine Learning">
        </div>
        <div class="flex flex-col">
          <label for="Contenu_Article" class="font-medium text-gray-600 text-sm sm:text-base">Contenu</label>
          <textarea name="Contenu_Article" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" rows="4" required placeholder="Machine learning is..."></textarea>
          </div>
 
      </div>

      <!-- Right Side Inputs -->
      <div class="w-full sm:w-1/3 bg-gray-100 rounded-lg p-4 space-y-4">
        <div class="flex flex-col">
          <label for="imagearticle" class="font-medium text-gray-600 text-sm sm:text-base">Article Image</label>
          <input type="file" id="imagearticle" name="imagearticle" required class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
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