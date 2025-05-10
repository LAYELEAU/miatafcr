<!-- resources/views/layouts/navbar.blade.php -->

<nav class="bg-gray-800 text-white px-4 py-3">
  <div class="container mx-auto flex items-center justify-between">
    <div class="text-lg font-bold">LaravelSite</div>

    <button id="menu-btn" class="md:hidden focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>

    <ul class="hidden md:flex space-x-8">
      <li><a href="#" class="hover:text-yellow-400">Accueil</a></li>
      <li class="relative group">
        <a href="#" class="hover:text-yellow-400">Services</a>
        <ul class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow-lg w-40">
          <li class="px-4 py-2 hover:bg-gray-100"><a href="#">Dév Web</a></li>
          <li class="px-4 py-2 hover:bg-gray-100"><a href="#">Design</a></li>
        </ul>
      </li>
      <li><a href="#" class="hover:text-yellow-400">À propos</a></li>
      <li><a href="#" class="hover:text-yellow-400">Contact</a></li>
    </ul>
  </div>

  <!-- Menu Mobile -->
  <div id="mobile-menu" class="md:hidden hidden flex-col space-y-2 mt-4">
    <a href="#" class="block px-2 py-1 hover:bg-gray-700 rounded">Accueil</a>
    <div>
      <button onclick="toggleDropdown()" class="w-full text-left px-2 py-1 hover:bg-gray-700 rounded">Services</button>
      <div id="mobile-dropdown" class="hidden ml-4 mt-1 space-y-1">
        <a href="#" class="block px-2 py-1 hover:bg-gray-700 rounded">Dév Web</a>
        <a href="#" class="block px-2 py-1 hover:bg-gray-700 rounded">Design</a>
      </div>
    </div>
    <a href="#" class="block px-2 py-1 hover:bg-gray-700 rounded">À propos</a>
    <a href="#" class="block px-2 py-1 hover:bg-gray-700 rounded">Contact</a>
  </div>
</nav>

<script>
  document.getElementById('menu-btn').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });

  function toggleDropdown() {
    document.getElementById('mobile-dropdown').classList.toggle('hidden');
  }
</script>