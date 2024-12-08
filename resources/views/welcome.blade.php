<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GEXSIN Esports</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .slider {
      white-space: nowrap;
      overflow: hidden;
    }

    .slide {
      display: inline-block;
      width: 100%;
      position: relative;
    }

    .slide h1, .slide p {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .active h1, .active p {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-black text-white p-4 flex justify-between items-center">
    <div class="text-2xl font-bold tracking-wider">GEXSIN Esports</div>
    <nav class="space-x-6">
      <a href="#" class="hover:text-blue-500 transition duration-300">Home</a>
      <a href="#" class="hover:text-blue-500 transition duration-300">About</a>
      <a href="#" class="hover:text-blue-500 transition duration-300">Contact</a>
    </nav>
  </header>

  <!-- Banner Section -->
  <div class="relative w-full slider overflow-hidden">
    <div id="slider" class="flex transition-transform duration-700 ease-in-out">
      <!-- Slide 1 -->
      <div class="slide flex-none w-full bg-blue-500 text-white flex items-center justify-center h-96">
        <img src="image/banergxn.jpg" alt="EVOS" class="absolute inset-0 w-full h-full object-cover opacity-80">
        <div class="relative z-10 text-center">
          <h1 class="text-5xl font-bold mb-4"></h1>
          <p class="text-lg"></p>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="slide flex-none w-full bg-gradient-to-r from-purple-600 to-blue-500 text-white flex items-center justify-center h-96">
        <div class="text-center">
        <img src="image/banergxn2.jpg" alt="EVOS" class="absolute inset-0 w-full h-full object-cover opacity-80">
          <h1 class="text-5xl font-bold mb-4"></h1>
          <p class="text-lg"></p>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="slide flex-none w-full bg-blue-700 text-white flex items-center justify-center h-96">
        <div class="text-center">
        <img src="image/baner1.jpg" alt="EVOS" class="absolute inset-0 w-full h-full object-cover opacity-80">
          <h1 class="text-5xl font-bold mb-4">Join the GEXSIN Family</h1>
          <p class="text-lg">Experience the world of esports</p>
        </div>
      </div>
    </div>
  </div>


    <!-- Partner Section -->
    <div class="bg-gray-800 text-white p-10 text-center">
      <h2 class="text-3xl font-bold mb-8">Our Partners</h2>
      <div class="flex justify-center space-x-12">
        <div class="transition transform hover:scale-110">
      <img src="image/galaxy.png" alt="Axis" class="h-16 mx-auto">
          <p class="mt-2">GALAXY ESPORT</p>
        </div>
        <div class="transition transform hover:scale-110">
          <img src="image/ixsa.png" alt="Pop Mie" class="h-16 mx-auto">
          <p class="mt-2">IXSARUS TEAM</p>
        </div>
        <div class="transition transform hover:scale-110">
          <img src="image/raven.png" alt="Itel" class="h-16 mx-auto">
          <p class="mt-2">RAVEN ESPORT</p>
        </div>
      </div>
    </div>
  

  <!-- Meet the Squad Section -->
  <div class="bg-blue-900 text-white py-12">
    <div class="max-w-7xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">DAFTAR KE Squad</h2>
      <button 
        onclick="window.location.href='https://example.com/team-profile';" 
        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded font-semibold transition duration-300">
        Explore
      </button>
    </div>
  
<!-- Team Profiles Section -->
<div class="relative mt-12 overflow-hidden max-w-7xl mx-auto px-4">
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 justify-center items-center">
    <!-- Image 1 -->
    <a href="{{ route('player.list') }}" target="_blank" class="flex justify-center">
      <img src="image/team.jpg" alt="Team PUBG Mobile" class="rounded-lg shadow-md hover:scale-105 transform transition duration-300 cursor-pointer">
    </a>
    <!-- Image 2 -->
    <a href="{{ url('/opmem') }}" target="_blank" class="flex justify-center">
      <img src="image/opmem.jpg" alt="Team Free Fire" class="rounded-lg shadow-md hover:scale-105 transform transition duration-300 cursor-pointer">
    </a>
    <!-- Navigation Arrows -->
    <button id="prevTeam" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 hover:bg-gray-700 text-white rounded-full p-3 shadow-lg">
      &#9664;
    </button>
    <button id="nextTeam" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 hover:bg-gray-700 text-white rounded-full p-3 shadow-lg">
      &#9654;
    </button>
  </div>
</div>


<!-- News Section -->
<div class="bg-blue-900 text-white py-12">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">Latest Updates</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      <!-- News Item 1 -->
      <a href="{{ route('berita1.news1') }}" class="text-blue-500 hover:underline"
      target="_blank" class="block hover:scale-105 transform transition duration-300">
     <div class="bg-white text-black rounded-lg overflow-hidden shadow-md">
       <img src="image/kok.jpg" alt="GEXSIN Gaalaxy" class="w-full h-48 object-cover">
       <div class="p-4">
         <h3 class="text-lg font-semibold"> GEXSIN Galaxy</h3>
         <p class="text-sm mt-2">Kings Of Kings season 10</p>
       </div>
     </div>
   </a>
   
      <!-- News Item 2 -->
      <a href="{{ route('berita2.news1') }}" target="_blank" class="block hover:scale-105 transform transition duration-300">
        <div class="bg-white text-black rounded-lg overflow-hidden shadow-md">
          <img src="image/metacojaktim.jpg" alt="MPLID Playoffs" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">GEXSIN LEGENDS</h3>
            <p class="text-sm mt-2">Metaco x Jaktim tournament offline champphions #1</p>
          </div>
        </div>
      </a>
      
      





{{-- footer --}}
    <footer class="bg-black text-white py-8">
        <div class="container mx-auto px-4">
            <!-- Logo and Title -->
            <div class="flex flex-col md:flex-row items-center justify-between mb-6 text-center md:text-left">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <img src="image/gexsinlogo.jpg" alt="Evos Logo" class="h-10">
                    <span class="text-lg font-semibold">GEXSIN ESPORTS</span>
                </div>
                <div>
                    <span class="text-sm uppercase font-medium">Join Our Newsletter</span>
                    <div class="flex mt-2">
                        <input 
                            type="email" 
                            placeholder="Type your email" 
                            class="px-4 py-2 w-full md:w-auto border border-gray-600 bg-black text-white focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-l-lg"
                        >
                        <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-r-lg">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Social Media Icons -->
            <div class="flex justify-center md:justify-start space-x-4 mb-6">
                <a href="#" target="_blank" class="text-xl hover:text-blue-500"><i class="fab fa-whatsapp"></i></a>
                <a href="#" target="_blank" class="text-xl hover:text-blue-500"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank" class="text-xl hover:text-blue-500"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank" class="text-xl hover:text-blue-500"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="text-xl hover:text-blue-500"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="text-xl hover:text-blue-500"><i class="fab fa-tiktok"></i></a>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col md:flex-row justify-between items-center text-sm mb-6">
                <a href="mailto:gexsinesport.co@gmail.com " class="text-blue-500 hover:underline mb-2 md:mb-0"></gexsinesport.co@gmail.com></a>
                <span class="text-white">| +62 21 3950 2225</span>
            </div>

            <!-- Copyright -->
            <div class="text-center text-xs">
                &copy; Since 2019 GEXSIN ESPORT, From esport pandeglang banten 
            </div>
        </div>
    </footer>
</body>





<!-- java script -->

<script src='/script.js'></script>

</body>
</html>