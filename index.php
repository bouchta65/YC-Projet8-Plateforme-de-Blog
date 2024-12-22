<?php
include "src/db/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Our Blog</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #f9fafb;
      font-family: 'Poppins', sans-serif;
      color: #333;
    }
    .hover-card:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease-in-out;
    }
    .bounce:hover {
      animation: bounce 0.3s infinite;
    }
    @keyframes bounce {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }
    .image-container {
      position: relative;
      overflow: hidden;
      border-radius: 50%;
    }
    .image-container img {
      transition: transform 0.3s ease;
    }
    .image-container:hover img {
      transform: scale(1.1);
    }
    .button-hover:hover {
      transform: translateY(-5px);
      transition: transform 0.3s ease-in-out;
    }
    .flex-center {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <header class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-6 md:py-8">
  <div class="container mx-auto px-6 flex justify-between items-center flex-wrap">
    <h1 class="text-3xl md:text-4xl font-extrabold flex-1 text-center md:text-left mb-4 md:mb-0">🌟 Welcome to Bruxy Blog</h1>
    
    <div class="flex flex-wrap justify-center md:justify-end w-full md:w-auto">
      <a href="src/views/loginpage.php" class="button-hover bg-white text-blue-600 px-6 py-2 rounded-md font-semibold mb-4 md:mb-0 md:ml-4 w-full md:w-auto text-center">Login</a>
      <a href="src/views/loginpage.php" class="button-hover bg-blue-500 text-white px-6 py-2 rounded-md font-semibold mb-4 md:mb-0 md:ml-4 w-full md:w-auto text-center">Sign Up</a>
    </div>
  </div>
</header>


  <section class="relative bg-cover bg-center py-36" style="background-image: url('public/assets/images/herosection.png');">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="container mx-auto text-center text-white relative z-10 px-6">
      <h2 class="text-5xl font-bold">Explore New Ideas</h2>
      <p class="text-xl mt-4 mb-8">Read, Learn, and Be Inspired.</p>
      <a href="src/views/loginpage.php" class="button-hover bg-green-500 px-8 py-3 rounded-md text-lg font-bold text-white">Join Our Community</a>
    </div>
  </section>

  <section class="bg-gradient-to-r from-teal-400 to-blue-500 text-white py-16 px-6 md:px-16 lg:px-24 relative flex flex-col lg:flex-row items-center justify-between">
  <div class="w-full lg:w-1/2 text-center lg:text-left mb-8 lg:mb-0">
    <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6">
      Hey, I'm Mohamed Bouchta
    </h2>
    <p class="text-lg md:text-xl mb-8 text-gray-200 leading-relaxed max-w-3xl mx-auto lg:mx-0">
    I’m a full stack developer passionate about building innovative web solutions. Through this blog, I aim to share my journey, insights, and experiences in web development, from front-end design to back-end architecture. Join me as I explore the latest trends, technologies, and best practices in full stack development, helping you navigate the ever-evolving world of coding and tech!
    </p>

    <div class="mb-8">
      <a href="https://www.linkedin.com/in/mohamed-bouchta-71082a286/" class="inline-block px-8 py-3 bg-gradient-to-r from-blue-400 to-teal-500 text-white rounded-full text-lg font-semibold hover:bg-teal-500 transition-all duration-300 transform hover:scale-110 shadow-lg">
        Let's Connect! ✨
      </a>
    </div>
  </div>

  <div class="w-full lg:w-1/2 flex justify-center lg:justify-end items-center mb-8 lg:mb-0">
    <div class="w-full max-w-xs md:max-w-sm relative">
      <div class="relative bg-white p-6 rounded-xl shadow-lg text-gray-800">
        <div class="flex items-center space-x-4">
          <img src="public/assets/images/me.jpg" alt="Mohamed Bouchta" class="w-24 h-24 rounded-full object-cover border-4 border-teal-500">
          <div>
            <p class="font-semibold text-xl">Mohamed Bouchta</p>
            <p class="text-sm text-gray-500">Full Stack Developer</p>
          </div>
        </div>
        <p class="mt-4 text-gray-700 leading-relaxed">
        "Building innovative web solutions for a seamless digital experience through knowledge and creativity."
        </p>
      </div>
    </div>
  </div>

  <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-r from-teal-400 to-blue-500 transform translate-y-6">
    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="white" fill-opacity="1" d="M0,160L1440,64L1440,320L0,320Z"></path>
    </svg>
  </div>
</section>
<?php  
$sql = "SELECT * from Article where Id_Article = 65";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($result);

$sql1 = "SELECT * from Article where Id_Article = 61";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_row($result1);

$sql2 = "SELECT * from Article where Id_Article = 19";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_row($result2);
?>
  <section class="bg-gray-100 py-20">
    <div class="container mx-auto px-6 text-center space-y-10">
      <h2 class="text-4xl font-extrabold">Our Featured Articles</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
        <div class="hover-card bg-white p-6 rounded-lg shadow-lg">
          <img src="<?php echo $row[3]?>" alt="Article 1" class="w-full h-48 object-cover rounded-lg mb-6">
          <h3 class="text-2xl font-bold"><?php echo $row[1]?></h3>
          <p class="text-gray-700 mt-4"><?php echo substr($row[2], 0, 120)?>...</p>
        </div>
        <div class="hover-card bg-white p-6 rounded-lg shadow-lg">
          <img src="<?php echo $row1[3]?>" alt="Article 2" class="w-full h-48 object-cover rounded-lg mb-6">
          <h3 class="text-2xl font-bold"><?php echo $row1[1]?></h3>
          <p class="text-gray-700 mt-4"><?php echo  substr($row1[2], 0, 120)?>...</p>
        </div>
        <div class="hover-card bg-white p-6 rounded-lg shadow-lg">
          <img src="h<?php echo $row2[3]?>" alt="Article 3" class="w-full h-48 object-cover rounded-lg mb-6">
          <h3 class="text-2xl font-bold"><?php echo $row2[1]?></h3>
          <p class="text-gray-700 mt-4"><?php echo substr($row2[2], 0, 120)?>...</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gradient-to-r from-blue-500 to-green-500 text-center py-16 text-white">
    <h2 class="text-4xl font-extrabold">Stay Connected</h2>
    <p class="text-lg mt-4 mb-8">Subscribe to our newsletter to receive the latest updates directly in your inbox.</p>
    <form class="flex justify-center">
    <input type="email" placeholder="Enter your email" class="w-2/3 md:w-1/3 px-4 py-2 rounded-l-md text-black">
    <button type="submit" class="bounce bg-yellow-500 px-6 py-2 rounded-r-md font-bold hover:bg-yellow-400">Subscribe</button>
    </form>
  </section>

  <footer class="bg-gray-900 py-6">
    <div class="container mx-auto px-6 text-center text-gray-300">
      <p>&copy; 2024 Bruxy Blog. All rights reserved.</p>
      <div class="mt-4 flex justify-center space-x-4">
        <a href="https://www.linkedin.com/in/mohamed-bouchta-71082a286/" target="_blank" class="text-blue-400 hover:underline">LinkedIn</a>
        <a href="https://web.facebook.com/mohammed.bouchta.581" target="_blank" class="text-blue-400 hover:underline">Facebook</a>
        <a href="https://www.instagram.com/bouchta_mohammed/" target="_blank" class="text-blue-400 hover:underline">Instagram</a>
      </div>
    </div>
  </footer>
</body>
</html>
