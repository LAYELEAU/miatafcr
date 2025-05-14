<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite('resources/css/app.css')
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>

        <!-- Styles -->
        
    </head>
    <body >
    <nav x-data="{ open: false }" class="bg-white shadow-md  fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center h-16">
            <img src="{{ asset('build/assets/images/miata.jpeg') }}" alt="Logo" class="w-20 h-auto">
            </div>
            </div>

            <!-- Hamburger Button -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
                <!-- Dropdown -->
            
<div class="relative group" x-data="{ dropdownOpen: false }"
     @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
    <button
        class="flex items-center gap-1 text-[#a3021b] hover:text-[#FFBE58]">
        Formation Continue
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.296l3.71-4.066a.75.75 0 111.08 1.04l-4.25 4.666a.75.75 0 01-1.08 0l-4.25-4.666a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div x-show="dropdownOpen"
         x-transition
         class="absolute mt-2 w-56 bg-white shadow-md rounded z-10">
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Nos domaines d’expertise</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Calendrier</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Inscription à une formation</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Blog formation continue</a>
    </div>
</div>


<div class="relative group" x-data="{ dropdownOpen: false }"
     @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
    <button
        class="flex items-center gap-1 text-[#a3021b] hover:text-[#FFBE58]">
      Nos Solutions
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.296l3.71-4.066a.75.75 0 111.08 1.04l-4.25 4.666a.75.75 0 01-1.08 0l-4.25-4.666a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div x-show="dropdownOpen"
         x-transition
         class="absolute mt-2 w-56 bg-white shadow-md rounded z-10">
        <a href="#inter" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Inter</a>
        <a href="#intra" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Intra</a>
        <a href="#sur-mesure" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Sur mesure</a>
        <a href="#a-distance" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">A distance</a>
    </div>
</div>


<div class="relative group" x-data="{ dropdownOpen: false }"
     @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
    <button
        class="flex items-center gap-1 text-[#a3021b] hover:text-[#FFBE58]">
      Nos Ressources
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.296l3.71-4.066a.75.75 0 111.08 1.04l-4.25 4.666a.75.75 0 01-1.08 0l-4.25-4.666a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div x-show="dropdownOpen"
         x-transition
         class="absolute mt-2 w-56 bg-white shadow-md rounded z-10">
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Financement de votre formation</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Nos experts formateurs</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Bibliothèque gratuite</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Ressources documentaires</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Ils nous font confiance</a>
    </div>
</div>


<div class="relative group" x-data="{ dropdownOpen: false }"
     @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
    <button
        class="flex items-center gap-1 text-[#a3021b] hover:text-[#FFBE58]">
      Recrutements et conseils RH
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.296l3.71-4.066a.75.75 0 111.08 1.04l-4.25 4.666a.75.75 0 01-1.08 0l-4.25-4.666a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div x-show="dropdownOpen"
         x-transition
         class="absolute mt-2 w-56 bg-white shadow-md rounded z-10">
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Nos Services</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Nos Offres</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Déposer vos CV</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Charte recrutement</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Blog recrutement</a>
    </div>
</div>


<div class="relative group" x-data="{ dropdownOpen: false }"
     @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
    <button
        class="flex items-center gap-1 text-[#a3021b] hover:text-[#FFBE58]">
      Qui sommes-nous
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.296l3.71-4.066a.75.75 0 111.08 1.04l-4.25 4.666a.75.75 0 01-1.08 0l-4.25-4.666a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div x-show="dropdownOpen"
         x-transition
         class="absolute mt-2 w-56 bg-white shadow-md rounded z-10">
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Notre cabinet</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Nos valeurs</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Nos services</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Notre équipe</a>
    </div>
</div>

               
                
               

                <a href="#"
                   class="bg-[#a3021b] text-white px-4 py-2 font-bold rounded-lg hover:bg-[#FFBE58] transition">
                    Compte
                </a>
            </div>
        </div>
    </div>

   <!-- Mobile Menu -->
<div x-show="open" class="md:hidden px-4 pb-4 pt-2 space-y-2 bg-white shadow" x-data="{ 
    openMenu: null 
}">
    <!-- Formation Continue -->
    <div>
        <button @click="openMenu === 1 ? openMenu = null : openMenu = 1"
                class="w-full text-left text-gray-700 hover:text-[#a3021b] font-semibold">
            Formation Continue
        </button>
        <div x-show="openMenu === 1" class="pl-4 mt-1 space-y-1">
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Nos domaines d’expertise</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Calendrier</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Inscription à une formation</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Blog formation continue</a>
        </div>
    </div>

    <!-- Nos Solutions -->
    <div>
        <button @click="openMenu === 2 ? openMenu = null : openMenu = 2"
                class="w-full text-left text-gray-700 hover:text-[#a3021b] font-semibold">
            Nos Solutions
        </button>
        <div x-show="openMenu === 2" class="pl-4 mt-1 space-y-1">
            <a href="#inter" class="block text-gray-600 hover:text-[#a3021b]">Inter</a>
            <a href="#intra" class="block text-gray-600 hover:text-[#a3021b]">Intra</a>
            <a href="#sur-mesure" class="block text-gray-600 hover:text-[#a3021b]">Sur mesure</a>
            <a href="#a-distance" class="block text-gray-600 hover:text-[#a3021b]">À distance</a>
        </div>
    </div>

    <!-- Nos Ressources -->
    <div>
        <button @click="openMenu === 3 ? openMenu = null : openMenu = 3"
                class="w-full text-left text-gray-700 hover:text-[#a3021b] font-semibold">
            Nos Ressources
        </button>
        <div x-show="openMenu === 3" class="pl-4 mt-1 space-y-1">
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Financement de votre formation</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Nos experts formateurs</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Bibliothèque gratuite</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Ressources documentaires</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Ils nous font confiance</a>
        </div>
    </div>

    <!-- Recrutements et conseils RH -->
    <div>
        <button @click="openMenu === 4 ? openMenu = null : openMenu = 4"
                class="w-full text-left text-gray-700 hover:text-[#a3021b] font-semibold">
            Recrutements et conseils RH
        </button>
        <div x-show="openMenu === 4" class="pl-4 mt-1 space-y-1">
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Nos Services</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Nos Offres</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Déposer vos CV</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Charte recrutement</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Blog recrutement</a>
        </div>
    </div>

    <!-- Qui sommes-nous -->
    <div>
        <button @click="openMenu === 5 ? openMenu = null : openMenu = 5"
                class="w-full text-left text-gray-700 hover:text-[#a3021b] font-semibold">
            Qui sommes-nous
        </button>
        <div x-show="openMenu === 5" class="pl-4 mt-1 space-y-1">
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Notre cabinet</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Nos valeurs</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Nos services</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Notre équipe</a>
        </div>
    </div>

    <!-- Compte -->
    <a href="#"
       class="block mt-4 bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-[#FFBE58] transition">
        Compte
    </a>
</div>

</nav>

<section class="bg-[#a3021b]">
<div class="py-20">
<div class="w-full px-4 py-6 bg-[#a3021b]">
    <p class="max-w-5xl mx-auto text-center text-white text-3xl font-bold mb-8">
  Trouve la formation idéale pour développer tes compétences et booster ta carrière. 
  Explore notre catalogue en quelques clics !
</p>

  <div class="max-w-xl mx-auto">
    <form class="flex items-center border border-gray-300 rounded-full overflow-hidden shadow-sm">
      <input 
        type="text" 
        placeholder="Rechercher une formation..." 
        class="flex-1 px-4 py-4 focus:outline-none text-gray-700 bg-white"
      />
      <button 
        type="submit" 
        class="hover:bg-[#a3021b] text-white px-4 py-4 font-semibold bg-[#ffbe58] transition"
      >
        Rechercher
      </button>
    </form>
  </div>
</div>

</div>

</section>

<section class="bg-white px-4 sm:px-6 lg:px-8">
  <div class="py-20 max-w-6xl mx-auto">
    <h1 class="text-center font-bold text-2xl sm:text-3xl lg:text-4xl text-[#a3021b]">
      Une multitude de formations, pour de nouvelles compétences
    </h1>
    <div class="text-center mt-8">
      <a href="#"
         class="inline-block bg-[#a3021b] text-white text-sm sm:text-base px-6 py-3 sm:px-8 sm:py-4 font-bold rounded-lg hover:bg-[#FFBE58] transition">
        Consulter notre catalogue de formation
      </a>
    </div>
  </div>
</section>


<!-- AlpineJS et Tailwind doivent être chargés -->
<section class="w-full px-4 py-8 bg-gray-100 bg-cover bg-center relative" 
    style="background-image: url('/build/assets/images/home2.jpg');"
    x-data="{
        currentIndex: 0,
        cardsPerView: 3,
        cards: [
            { title: 'Formation Web', description: 'Créez des sites modernes avec HTML/CSS/JS.', image: '/build/assets/images/formation1.jpg', link: '#' },
            { title: 'Cybersécurité', description: 'Protégez les systèmes et les données sensibles.', image: '/build/assets/images/formation2.jpg', link: '#' },
            { title: 'Data Science', description: 'Analysez les données pour prédire le futur.', image: '/build/assets/images/formation3.jpg', link: '#' },
            { title: 'DevOps', description: 'Automatisez le déploiement et l’intégration.', image: '/build/assets/images/formation4.jpg', link: '#' },
            { title: 'UX/UI Design', description: 'Créez des interfaces intuitives.', image: '/build/assets/images/formation5.jpg', link: '#' },
            { title: 'Mobile Dev', description: 'Développez des applis Android/iOS.', image: '/build/assets/images/formation6.jpg', link: '#' },
            { title: 'Machine Learning', description: 'Apprenez les bases de l’IA.', image: '/build/assets/images/formation7.jpg', link: '#' },
            { title: 'AR/VR', description: 'Explorez la réalité augmentée.', image: '/build/assets/images/formation8.jpg', link: '#' },
            { title: 'Blockchain', description: 'Comprenez la technologie.', image: '/build/assets/images/formation9.jpg', link: '#' }
        ],
        updateCardsPerView() {
            if (window.innerWidth < 640) {
                this.cardsPerView = 1;
            } else if (window.innerWidth < 1024) {
                this.cardsPerView = 2;
            } else {
                this.cardsPerView = 3;
            }
        },
        getVisibleSlides() {
            const chunks = [];
            for (let i = 0; i < this.cards.length; i += this.cardsPerView) {
                chunks.push(this.cards.slice(i, i + this.cardsPerView));
            }
            return chunks;
        },
        init() {
            this.updateCardsPerView();
            window.addEventListener('resize', () => {
                this.updateCardsPerView();
                this.currentIndex = 0;
            });
            setInterval(() => {
                this.next()
            }, 4000);
        },
        next() {
            const total = Math.ceil(this.cards.length / this.cardsPerView);
            this.currentIndex = (this.currentIndex + 1) % total;
        },
        prev() {
            const total = Math.ceil(this.cards.length / this.cardsPerView);
            this.currentIndex = (this.currentIndex - 1 + total) % total;
        }
    }"
    x-init="init"
>
    <div class="max-w-7xl mx-auto relative overflow-hidden px-4 sm:px-6 lg:px-16">
        <h1 class="text-white font-bold text-center py-8 text-2xl">
            LE CABINET MIATA FCR (FORMATION CONSULTING ET RECRUTEMENT)
        </h1>
        <p class="text-white font-bold text-center text-base md:text-lg px-4 md:px-40">
            MIATA FCR est un organisme de formation continue ouvert sur l’environnement professionnel. <br>
            L’entreprise est créatrice de ses propres savoirs.
        </p>

        <!-- Carousel -->
        <div class="flex transition-transform duration-500 ease-in-out w-full py-4"
             :style="'transform: translateX(-' + (currentIndex * 100) + '%)'">
            <template x-for="(slide, index) in getVisibleSlides()" :key="index">
                <div class="min-w-full grid gap-6 px-3"
                     :class="{
                         'grid-cols-1': cardsPerView === 1,
                         'grid-cols-2': cardsPerView === 2,
                         'grid-cols-3': cardsPerView === 3
                     }">
                    <template x-for="card in slide" :key="card.title">
                        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
                            <img :src="card.image" alt="" class="h-48 w-full object-cover rounded-md mb-4">
                            <h2 class="text-xl font-semibold mb-2" x-text="card.title"></h2>
                            <p class="text-sm mb-4" x-text="card.description"></p>
                            <a :href="card.link" class="mt-auto bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-red-700">
                                En savoir plus
                            </a>
                        </div>
                    </template>
                </div>
            </template>
        </div>

        <!-- Navigation -->
        <div class="absolute top-1/2 left-0 transform -translate-y-1/2">
            <button @click="prev" class="bg-[#FFBE58] text-white p-4 px-5 rounded-full shadow hover:bg-yellow-500">
                &#10094;
            </button>
        </div>
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2">
            <button @click="next" class="bg-[#FFBE58] text-white p-4 px-5 rounded-full shadow hover:bg-yellow-500">
                &#10095;
            </button>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center gap-2 mt-4">
            <template x-for="(slide, i) in getVisibleSlides()" :key="i">
                <button @click="currentIndex = i"
                        class="w-3 h-3 rounded-full"
                        :class="{
                            'bg-[#a3021b]': currentIndex === i,
                            'bg-white border border-gray-400': currentIndex !== i
                        }">
                </button>
            </template>
        </div>

        <!-- Voir toutes les formations -->
        <div class="text-center mt-8">
          <a href="#"
              class="inline-block bg-white text-[#a3021b] hover:text-white text-sm sm:text-base px-6 py-3 sm:px-8 sm:py-4 font-bold rounded-lg hover:bg-[#a3021b] transition">
              Voir tous les formations
          </a>
    </div>
    </div>
</section>






<section class="w-full bg-white py-8 overflow-hidden relative">
  <div class="max-w-7xl mx-auto text-center mb-6">
    <h2 class="text-2xl font-bold text-gray-700">Ils nous font confiance</h2>
  </div>

  <div class="relative overflow-hidden w-full">
    <div 
     class="flex items-center animate-slide whitespace-nowrap min-w-[10000px]"
         x-data="{ logos: [
        '/build/assets/images/logo1.png',
        '/build/assets/images/logo2.png',
        '/build/assets/images/logo3.png',
        '/build/assets/images/logo4.png',
        '/build/assets/images/logo5.png',
        '/build/assets/images/logo6.jpeg',
        '/build/assets/images/logo7.png',
        '/build/assets/images/logo8.png',
        '/build/assets/images/logo9.png',
        '/build/assets/images/logo10.png',
        '/build/assets/images/logo11.png',
        '/build/assets/images/logo12.png',
        '/build/assets/images/logo13.png',
        '/build/assets/images/logo14.png',
        '/build/assets/images/logo15.png',
        '/build/assets/images/logo16.png',
        '/build/assets/images/logo17.png',
        '/build/assets/images/logo18.png',
        '/build/assets/images/logo19.png',
        '/build/assets/images/logo20.png',
        '/build/assets/images/logo21.JPG',
        '/build/assets/images/logo22.png',
        '/build/assets/images/logo23.png',
        '/build/assets/images/logo24.png',
        '/build/assets/images/logo25.jpg',
        '/build/assets/images/logo26.jpg',
        '/build/assets/images/logo27.png',
        '/build/assets/images/logo28.png',
        '/build/assets/images/logo29.png',
        '/build/assets/images/logo30.png',
        '/build/assets/images/logo31.png',
        '/build/assets/images/logo32.png',
       
           
         ] }">
      <template x-for="logo in logos.concat(logos)" :key="logo + Math.random()">
        <img :src="logo" class="h-16 mx-8 w-auto object-contain inline-block" />
      </template>
    </div>
  </div>

  <style>
    .animate-slide {
      animation: slide-left 30s linear infinite;
    }

    @keyframes slide-left {
      0% { transform: translateX(0%); }
      100% { transform: translateX(-50%); }
    }
  </style>
</section>


<section class="w-full bg-white p-8">
  <div class="max-w-7xl mx-auto relative overflow-hidden">

    <!-- Slides container -->
    <div id="carousel" class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0%)">
      
      <!-- Slide 1 -->
      <div class="min-w-full flex flex-col md:flex-row bg-[#54D1F6] rounded-lg">
        <div class="p-8 md:w-2/3 w-full flex flex-col gap-4 justify-center text-center md:text-left">
          <h3 class="bg-white text-xs uppercase tracking-wider w-fit mx-auto md:mx-0 lg:text-sm rounded-md font-medium px-2 py-1">short cours</h3>
          <h2 class="text-black text-2xl font-bold">Achats - Logistique - Supply Chain</h2>
          <p class="text-black font-semibold">
            Face à la mondialisation et à une concurrence de plus en plus vive, les entreprises doivent pour augmenter leur compétitivité réduire leurs coûts.
            Les achats et les coûts d’approvisionnement représentent une part significative du chiffre d’affaires des entreprises.
          </p>
          <a href="#" class="mx-auto md:mx-0 bg-white text-black text-sm sm:text-base px-4 py-3 sm:px-6 sm:py-4 font-bold rounded-lg hover:bg-gray-50 w-fit">Voir plus →</a>
        </div>
        <div class="p-8 md:w-1/3 hidden md:block">
          <img src="{{ asset('build/assets/images/miata.jpeg') }}" alt="Logo" class="w-full h-auto">
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="min-w-full flex flex-col md:flex-row bg-[#7851ce] rounded-lg">
        <div class="p-8 md:w-2/3 w-full flex flex-col gap-4 justify-center text-center md:text-left">
          <h3 class="bg-white text-xs uppercase tracking-wider w-fit mx-auto md:mx-0 lg:text-sm rounded-md font-medium px-2 py-1">short cours</h3>
          <h2 class="text-white text-2xl font-bold">Gestion de projet - Organisation</h2>
          <p class="text-white font-semibold">
            Apprenez à organiser, piloter et réussir vos projets en maîtrisant les outils modernes de planification et de suivi.
          </p>
          <a href="#" class="mx-auto md:mx-0 bg-white text-black text-sm sm:text-base px-4 py-3 sm:px-6 sm:py-4 font-bold rounded-lg hover:bg-gray-50 w-fit">Voir plus →</a>
        </div>
        <div class="p-8 md:w-1/3 hidden md:block">
          <img src="{{ asset('build/assets/images/miata.jpeg') }}" alt="Logo" class="w-full h-auto">
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="min-w-full flex flex-col md:flex-row bg-[#f3f3f3] rounded-lg">
        <div class="p-8 md:w-2/3 w-full flex flex-col gap-4 justify-center text-center md:text-left">
          <h3 class="bg-white text-xs uppercase tracking-wider w-fit mx-auto md:mx-0 lg:text-sm rounded-md font-medium px-2 py-1">short cours</h3>
          <h2 class="text-black text-2xl font-bold">Marketing Digital</h2>
          <p class="text-black font-semibold">
            Maîtrisez les leviers du marketing digital pour booster votre visibilité et vos ventes : SEO, SEA, réseaux sociaux, etc.
          </p>
          <a href="#" class="mx-auto md:mx-0 bg-white text-black text-sm sm:text-base px-4 py-3 sm:px-6 sm:py-4 font-bold rounded-lg hover:bg-gray-50 w-fit">Voir plus →</a>
        </div>
        <div class="p-8 md:w-1/3 hidden md:block">
          <img src="{{ asset('build/assets/images/miata.jpeg') }}" alt="Logo" class="w-full h-auto">
        </div>
      </div>

    </div>
  </div>

  <!-- Navigation buttons OUTSIDE the slides -->
  <div class="flex justify-between mt-6 max-w-7xl mx-auto px-4">
    <button onclick="prevSlide()" class="bg-[#54D1F6] text-black px-4 py-2 rounded-full shadow hover:bg-[#3dbede]">&larr; Précédent</button>
    <button onclick="nextSlide()" class="bg-[#54D1F6] text-black px-4 py-2 rounded-full shadow hover:bg-[#3dbede]">Suivant &rarr;</button>
  </div>





<script>
  let currentSlide = 0;
  const totalSlides = 3;
  const carousel = document.getElementById("carousel");

  function updateSlidePosition() {
    carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlidePosition();
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlidePosition();
  }
</script>

</section>

<section class="bg-[#f1f5f9] py-20">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
    
    <div class="rounded-lg bg-white overflow-hidden shadow hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
      <a href="">
        <img src="{{ asset('build/assets/images/formation2.jpg') }}" alt="" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="bg-[#f1f5f9] text-xs uppercase tracking-wider w-fit mx-auto md:mx-0 lg:text-sm rounded-md font-medium px-2 py-1 my-4">
            12 avril 2025
          </h3>
          <h2 class="text-2xl font-bold pb-4">Risque client et contentieux</h2>
          <p>Dans les entreprises, la gestion du risque client est du ressort du service administratif et financier...</p>
        </div>
      </a>
    </div>

    <div class="rounded-lg bg-white overflow-hidden shadow hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
      <a href="">
        <img src="{{ asset('build/assets/images/formation4.jpg') }}" alt="" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="bg-[#f1f5f9] text-xs uppercase tracking-wider w-fit mx-auto md:mx-0 lg:text-sm rounded-md font-medium px-2 py-1 my-4">
            12 avril 2025
          </h3>
          <h2 class="text-2xl font-bold pb-4">Risque client et contentieux</h2>
          <p>Dans les entreprises, la gestion du risque client est du ressort du service administratif et financier...</p>
        </div>
      </a>
    </div>

    <div class="rounded-lg bg-white overflow-hidden shadow hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
      <a href="">
        <img src="{{ asset('build/assets/images/formation3.jpg') }}" alt="" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="bg-[#f1f5f9] text-xs uppercase tracking-wider w-fit mx-auto md:mx-0 lg:text-sm rounded-md font-medium px-2 py-1 my-4">
            12 avril 2025
          </h3>
          <h2 class="text-2xl font-bold pb-4">Risque client et contentieux</h2>
          <p>Dans les entreprises, la gestion du risque client est du ressort du service administratif et financier...</p>
        </div>
      </a>
    </div>

  </div>

  <div class="text-center mt-12">
          <a href="#"
              class="inline-block bg-[#a3021b] text-white hover:text-[#a3021b] text-sm sm:text-base px-6 py-3 sm:px-8 sm:py-4 font-bold rounded-lg hover:bg-white transition">
              Voir Plus
          </a>
  </div>
</section>

<section>
  <h2 class="text-2xl font-bold text-gray-700 text-center py-12">Nos Ressources</h2>

  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 pb-20">
    
    <!-- Carte 1 -->
    <div class="rounded-lg bg-white overflow-hidden shadow hover:shadow-lg ">
      <img src="{{ asset('build/assets/images/1645724689.webp') }}" alt=""  class=" h-64 object-cover">
      <div class="p-4">
        <h2 class="text-2xl font-bold pb-4">Risque client et contentieux</h2>
        <p>Dans les entreprises, la gestion du risque client est du ressort du service administratif et financier...</p>
      </div>
      <div class="max-w-xl mx-auto px-4 pb-6">
        <form action="#" method="POST"  class="flex flex-col md:flex-row gap-2 md:gap-0 items-stretch border border-gray-300 rounded-lg overflow-hidden shadow-sm bg-white">
          <input 
            type="email" 
            name="email" 
            placeholder="Entrer votre email..." 
            required
            class="flex-1 px-4 py-2 focus:outline-none text-gray-700"
          />
          <button 
            type="submit" 
            class="hover:bg-[#a3021b] text-white px-4 py-2 font-semibold bg-[#ffbe58] transition"
          >
            Télécharger
          </button>
        </form>
      </div>
    </div>

    <!-- Répéter pour les autres cartes -->
    <div class="rounded-lg bg-white overflow-hidden shadow hover:shadow-lg ">
      <img src="{{ asset('build/assets/images/c2dd5a24183597cb1727c1a6ea3d64d8.webp') }}" alt="" class=" h-64 object-cover">
      <div class="p-4">
        <h2 class="text-2xl font-bold pb-4">Risque client et contentieux</h2>
        <p>Dans les entreprises, la gestion du risque client est du ressort du service administratif et financier...</p>
      </div>
      <div class="max-w-xl mx-auto px-4 pb-6">
        <form action="#" method="POST"  class="flex flex-col md:flex-row gap-2 md:gap-0 items-stretch border border-gray-300 rounded-lg overflow-hidden shadow-sm bg-white">
          
          <input 
            type="email" 
            name="email" 
            placeholder="Entrer votre email..." 
            required
            class="flex-1 px-4 py-2 focus:outline-none text-gray-700"
          />
          <button 
            type="submit" 
            class="hover:bg-[#a3021b] text-white px-4 py-2 font-semibold bg-[#ffbe58] transition"
          >
            Télécharger
          </button>
        </form>
      </div>
    </div>

    <!-- Troisième carte identique -->
    <div class="rounded-lg bg-white overflow-hidden shadow hover:shadow-lg ">
      <img src="{{ asset('build/assets/images/formation3.jpg') }}" alt="" class="w-full h-64 object-cover">
      <div class="p-4">
        <h2 class="text-2xl font-bold pb-4">Risque client et contentieux</h2>
        <p>Dans les entreprises, la gestion du risque client est du ressort du service administratif et financier...</p>
      </div>
      <div class="text-center pb-6">
          <a href="#"
              class="inline-block bg-[#ffbe58] text-white hover:text-white text-sm sm:text-base px-6 py-2 sm:px-8 sm:py-2 font-bold rounded-lg hover:bg-[#a3021b] transition">
              Voir Plus
          </a>
  </div>
     

  </div>
</section>



<section>

  <div class="flex flex-col-reverse md:flex-row max-w-7xl mx-auto gap-8 px-4 py-10">
    <div class="flex flex-col items-center justify-center w-full md:w-2/3 text-center md:text-left">
      <h1 class="font-bold text-3xl">Nos formations par domaines</h1>
      <p class="pt-8 text-gray-600">
        Découvrez nos formations spécialisées, conçues pour vous offrir des compétences solides et actualisées dans divers domaines. Chaque programme est adapté à vos besoins professionnels, qu'il s'agisse d'une initiation ou d'une expertise approfondie.
      </p>
    </div>
    <div class="w-full md:w-1/3 flex justify-center">
      <img src="{{ asset('build/assets/images/courses-hero.webp') }}" alt="Formations" class="w-full max-w-sm object-cover rounded-lg">
    </div>
  </div>


  <div class="bg-[#f1f5f9] py-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-12 px-4">
  
      <div class="w-full md:w-1/3  ">
        <div class="space-y-8">
       
          <form class="flex border border-gray-300 rounded overflow-hidden shadow-sm">
            <input type="text" placeholder="Rechercher une formation..." class="flex-1 px-4 py-2 focus:outline-none text-gray-700 bg-white">
            <button type="submit" class="hover:bg-[#a3021b] text-white px-4 py-2 font-semibold bg-[#ffbe58] transition">
              Rechercher
            </button>
          </form>

       
          <div class="border-r-2 pr-4">
            <h2 class="font-bold mb-4">Filtrer par domaine :</h2>
            <form class="space-y-4">
              <div class="flex items-center">
                <input id="option1" type="checkbox" value="Achats" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option1" class="ml-2 text-sm text-gray-700">Achats - Logistique - Supply Chain</label>
              </div>
              <div class="flex  items-center">
                <input id="option2" type="checkbox" value="Banque" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option2" class="ml-2 text-sm text-gray-700">Banque - Assurances</label>
              </div>
              <div class="flex items-center">
                <input id="option3" type="checkbox" value="Bureautique" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option3" class="ml-2 text-sm text-gray-700">Bureautique, Informatique, Sciences et Technologies</label>
              </div>
            </form>

            <h2 class="font-bold my-4">Filtrer par domaine :</h2>
            <form class="space-y-4">
              <div class="flex items-center">
                <input id="option1" type="checkbox" value="Achats" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option1" class="ml-2 text-sm text-gray-700">Achats - Logistique - Supply Chain</label>
              </div>
              <div class="flex items-center">
                <input id="option2" type="checkbox" value="Banque" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option2" class="ml-2 text-sm text-gray-700">Banque - Assurances</label>
              </div>
              <div class="flex items-center">
                <input id="option3" type="checkbox" value="Bureautique" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option3" class="ml-2 text-sm text-gray-700">Bureautique, Informatique, Sciences et Technologies</label>
              </div>
            </form>

            <h2 class="font-bold my-4">Filtrer par domaine :</h2>
            <form class="space-y-4">
              <div class="flex items-center">
                <input id="option1" type="checkbox" value="Achats" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option1" class="ml-2 text-sm text-gray-700">Achats - Logistique - Supply Chain</label>
              </div>
              <div class="flex items-center">
                <input id="option2" type="checkbox" value="Banque" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option2" class="ml-2 text-sm text-gray-700">Banque - Assurances</label>
              </div>
              <div class="flex items-center">
                <input id="option3" type="checkbox" value="Bureautique" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option3" class="ml-2 text-sm text-gray-700">Bureautique, Informatique, Sciences et Technologies</label>
              </div>
            </form>

            <h2 class="font-bold my-4">Filtrer par domaine :</h2>
            <form class="space-y-4">
              <div class="flex items-center">
                <input id="option1" type="checkbox" value="Achats" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option1" class="ml-2 text-sm text-gray-700">Achats - Logistique - Supply Chain</label>
              </div>
              <div class="flex items-center">
                <input id="option2" type="checkbox" value="Banque" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option2" class="ml-2 text-sm text-gray-700">Banque - Assurances</label>
              </div>
              <div class="flex items-center">
                <input id="option3" type="checkbox" value="Bureautique" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="option3" class="ml-2 text-sm text-gray-700">Bureautique, Informatique, Sciences et Technologies</label>
              </div>
            </form>
          </div>
        </div>
      </div>

   
      <div class="w-full md:w-2/3 space-y-6">
     
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
          <h2 class="font-semibold text-lg">Formations</h2>
          <div class="flex items-center gap-2">
            <p class="text-gray-600">Trier par :</p>
            <select class="border rounded px-4 py-2 bg-white w-48">
              <option value="nouveau">Nouveau</option>
              <option value="ancien">Ancien</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
          <a href="#" class="p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
            <h3 class="bg-sky-200 text-xs tracking-wider w-fit px-2 py-1 rounded font-medium mb-2">Nouveau</h3>
            <h2 class="font-bold mb-2">Techniques informatiques développement logiciel SGBD réseaux</h2>
            <ul class="text-gray-600 text-sm list-disc pl-5 space-y-1">
              <li>Système d’exploitation</li>
              <li>Réseaux et Sécurité informatique</li>
              <li>Développement logiciel</li>
              <li>Serveurs d’application</li>
              <li>SGBD et Aide à la décision</li>
            </ul>
          </a>

          <a href="#" class="p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
            <h3 class="bg-sky-200 text-xs tracking-wider w-fit px-2 py-1 rounded font-medium mb-2">Nouveau</h3>
            <h2 class="font-bold mb-2">Techniques informatiques développement logiciel SGBD réseaux</h2>
            <ul class="text-gray-600 text-sm list-disc pl-5 space-y-1">
              <li>Système d’exploitation</li>
              <li>Réseaux et Sécurité informatique</li>
              <li>Développement logiciel</li>
              <li>Serveurs d’application</li>
              <li>SGBD et Aide à la décision</li>
            </ul>
          </a>

          <a href="#" class="p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
            <h3 class="bg-[#ffbe58] text-xs tracking-wider w-fit px-2 py-1 rounded font-medium mb-2">Ancien</h3>
            <h2 class="font-bold mb-2">Techniques informatiques développement logiciel SGBD réseaux</h2>
            <ul class="text-gray-600 text-sm list-disc pl-5 space-y-1">
              <li>Système d’exploitation</li>
              <li>Réseaux et Sécurité informatique</li>
              <li>Développement logiciel</li>
              <li>Serveurs d’application</li>
              <li>SGBD et Aide à la décision</li>
            </ul>
          </a>

          <a href="#" class="p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
            <h3 class="bg-sky-200 text-xs tracking-wider w-fit px-2 py-1 rounded font-medium mb-2">Nouveau</h3>
            <h2 class="font-bold mb-2">Techniques informatiques développement logiciel SGBD réseaux</h2>
            <ul class="text-gray-600 text-sm list-disc pl-5 space-y-1">
              <li>Système d’exploitation</li>
              <li>Réseaux et Sécurité informatique</li>
              <li>Développement logiciel</li>
              <li>Serveurs d’application</li>
              <li>SGBD et Aide à la décision</li>
            </ul>
          </a>

          <a href="#" class="p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
            <h3 class="bg-[#ffbe58] text-xs tracking-wider w-fit px-2 py-1 rounded font-medium mb-2">Ancien</h3>
            <h2 class="font-bold mb-2">Techniques informatiques développement logiciel SGBD réseaux</h2>
            <ul class="text-gray-600 text-sm list-disc pl-5 space-y-1">
              <li>Système d’exploitation</li>
              <li>Réseaux et Sécurité informatique</li>
              <li>Développement logiciel</li>
              <li>Serveurs d’application</li>
              <li>SGBD et Aide à la décision</li>
            </ul>
          </a>

       

        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-[#a3021b]">
 
  <div class="max-w-7xl mx-auto text-white py-20 flex flex-col lg:flex-row gap-10 lg:gap-20 px-4">
  
    <div class="w-full lg:w-1/2">
      <div class="text-sm pb-4">
        <a href="#" class="hover:underline">Formation inter entreprise</a><span> > </span>
        <a href="#" class="hover:underline">Formation intra entreprise</a>
      </div>
      <p class="text-lg font-semibold">Gestion de la diversité et inclusion en milieu professionnel</p>

      <div class="flex flex-wrap py-4 gap-2">
        <div class="border border-white rounded px-2 py-1 w-fit"><p>débutant</p></div>
        <div class="border border-white rounded px-2 py-1 w-fit"><p>date formation</p></div>
        <div class="border border-white rounded px-2 py-1 w-fit"><p>prix formation</p></div>
      </div>

      <h1 class="font-bold text-3xl sm:text-4xl mb-4">Gestion de la diversité et inclusion en milieu professionnel</h1>
      <p class="mb-4">Formateur : MIATA FCR</p>

      <a href="#"
         class="inline-block text-[#a3021b] bg-white text-sm sm:text-base px-6 py-3 font-bold rounded-lg hover:bg-white transition">
         Voir Plus
      </a>
    </div>

    
    <div class="w-full lg:w-1/2">
      <img src="{{ asset('build/assets/images/formation3.jpg') }}" alt=""
           class="w-full h-64 sm:h-80 object-cover rounded-lg">
    </div>
  </div>

  <div class="bg-[#f1f5f9] py-20">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-8">
    
    
      <div class="w-full lg:w-2/3 flex flex-col gap-8">
        <div class="border rounded-lg bg-white p-6 sm:p-8">
          <h2 class="font-bold text-xl sm:text-2xl pb-4">Objectif de la formation</h2>
          <ul class="list-disc pl-5 space-y-2 text-sm sm:text-base">
            <li>S’approprier le cadre juridique et le contexte sociétal.</li>
            <li>Identifier les conditions favorables à une politique diversité.</li>
            <li>Mettre en place et déployer une culture inclusive.</li>
            <li>Piloter la démarche : acteurs et indicateurs.</li>
          </ul>
        </div>

        <div class="border rounded-lg bg-white p-6 sm:p-8">
          <h2 class="font-bold text-xl sm:text-2xl pb-4">Programme</h2>
          <p class="font-bold py-4">COMPRENDRE LE FONCTIONNEMENT D’UN CONFLIT EN ENTREPRISE</p>
          <ul class="list-disc pl-5 space-y-2 text-sm sm:text-base">
            <li>Retour sur les expériences vécues : identifier et comprendre les causes possibles d’un conflit interne.</li>
            <li>Appréhender la notion de conflits dans une entreprise : qu’est-ce qu’un conflit professionnel ?</li>
            <li>Focus sur le principe de conflit et compétition.</li>
            <li>Focus sur le principe de conflit et coopération.</li>
            <li>Focus sur les différents types de conflit : intrapsychiques, interpersonnels, intergroupes, extrinsèques, émotionnels, conflits d’intérêts et d’opinions, fonctionnels et dysfonctionnels, constructifs et destructifs.</li>
          </ul>
        </div>
      </div>

      
      <div class="w-full lg:w-1/3 h-fit border bg-white p-6 sm:p-8 rounded-lg">
        <p class="mb-2">Date formation</p>
        <p class="mb-6">Formation date</p>
        <a href="#"
           class="inline-block bg-[#a3021b] w-full text-white text-center text-sm sm:text-base px-6 py-3 font-bold rounded-lg hover:bg-[#a3021b] transition">
           Voir Plus
        </a>
      </div>
    </div>
  </div>
</section>


<section class="bg-white">
  <article id="inter" class="scroll-mt-20">
 <!-- Première section -->
 <div  class="max-w-7xl mx-auto text-black py-20 flex flex-col lg:flex-row gap-10 lg:gap-20 items-center justify-center px-4">
    <!-- Texte -->
    <div class="w-full lg:w-1/2">
      <h1 class="font-bold text-2xl sm:text-3xl pb-4 text-center lg:text-left">
        Formation continue : <br> Former en inter et en intra
      </h1>
      <div class="space-y-4 text-sm sm:text-base">
        <p>MIATA FCR, organisme de formation à Dakar et en régions</p>
        <p>MIATA FCR est l’organisme de formation qui propose l’offre la plus complète à Dakar et en régions en présentiel ou à distance.</p>
        <p>Découvrez la formation professionnelle chez MIATA FCR.</p>
        <p>Les centres de formations MIATA FCR respectent un protocole sanitaire strict pour vous accueillir en toute sécurité.</p>
        <p>Un large choix vous est proposé dans les domaines clés tels que le management, le développement personnel, la vente, la négociation commerciale, le marketing… à travers plusieurs formats : formations présentielles, formations mixtes, Full Digital, classes à distance…</p>
        <p>En vous formant avec MIATA FCR, vous bénéficiez d’une pédagogie innovante avec des solutions « mixtes », présentielles, e-learning et à distance.</p>
      </div>
    </div>

    <!-- Image -->
    <div class="w-full lg:w-1/2">
      <img src="{{ asset('build/assets/images/formation3.jpg') }}" alt="" class="w-full h-64 sm:h-80 object-cover rounded-lg">
    </div>
  </div>
  </article>
  <article id="intra" class="scroll-mt-20"> 
 <!-- Deuxième section -->
 <div  class="max-w-7xl mx-auto text-black  flex flex-col-reverse lg:flex-row gap-10 lg:gap-20 px-4 items-center justify-center pb-10">
    <!-- Image -->
    <div class="w-full lg:w-1/2">
      <img src="{{ asset('build/assets/images/formation3.jpg') }}" alt="" class="w-full h-64 sm:h-80 object-cover rounded-lg">
    </div>

    <!-- Texte -->
    <div x-data="{ showMore: false }" class="w-full lg:w-1/2 space-y-4 text-sm sm:text-base">
  <h2 class="font-bold text-2xl sm:text-3xl pb-4 text-center lg:text-left">La Formation intra entreprise</h2>

  <!-- Partie toujours visible -->
  <h3 class="font-bold">Toutes les réponses aux questions que vous vous posez sur la formation intra entreprise.</h3>
  <p>
    Avec la formation intra entreprise, organisez chez vous, pour plusieurs collaborateurs et à la date de votre choix
    la formation qui vous convient. Chez MIATA FCR, organisme de formation leader, chacune des 900 formations du catalogue est disponible en intra entreprise.
  </p>

  <h4 class="font-bold text-center lg:text-left">Définition : qu’est-ce qu’une formation intra entreprise ?</h4>
    <p>
      La formation intra entreprise est une formation issue du catalogue MIATA FCR mise en place au sein de votre organisation. À la différence de la formation inter entreprise qui est dispensée dans nos centres pour plusieurs organisations, la formation intra entreprise se déroule dans vos locaux, dans le lieu de votre choix ou à distance. Coût réduit, souplesse, cohésion interne… la formation intra entreprise présente de nombreux avantages.
    </p>

  <!-- Partie cachée / affichée -->
  <div x-show="showMore" x-transition.duration.300ms>
   
    <p>
      Si vous souhaitez un programme de formation sur-mesure, MIATA FCR met son expertise au service de cette solution. Pour en savoir plus, retrouvez toutes les infos sur les solutions sur-mesure ici.
    </p>
    <h4 class="font-bold text-center lg:text-left py-4">Formations inter ou intra : les avantages des formations intra entreprise ?</h4>
    <p>Les formations intra disposent de 4 avantages clés en termes de coût, de souplesse, de rapidité de mise en œuvre et de renforcement de la cohésion interne.</p>
    <h4 class="font-bold text-center lg:text-left py-4"> Coût réduit</h4>
    <p>Ce sont les clients qui le disent : le premier avantage de la formation intra est financier. Pas de mauvaise surprise : le coût de la formation est indiqué sur notre site web. Seuls les frais de déplacement éventuels du formateur sont à prévoir en plus. A partir de 4 collaborateurs et dans la limite de 12, la formation intra entreprise s’impose comme la solution la plus économique.</p>
    <h4 class="font-bold text-center lg:text-left py-4">Souplesse d’organisation</h4>
    <p>Vous choisissez la date, le lieu et l’horaire de la formation en fonction de vos contraintes.</p>
    <h4 class="font-bold text-center lg:text-left py-4">    Rapidité de mise en œuvre</h4>
    <p>Le programme, développé par les experts MIATA FCR, est livré « clé en main ». La formation est dispensée selon les standards qualité d’exigence propres à toutes les formations MIATA FCR. Un devis, des dates ainsi qu’un consultant-vous sont proposés dans les meilleurs délais.</p>
    <h4 class="font-bold text-center lg:text-left py-4">Renforcement de la cohésion interne</h4>
    <p>Parce que les participants viennent de la même organisation, ils partagent une même culture d’entreprise. La possibilité de réunir ensemble des collaborateurs d’une même organisation permet aussi de renforcer les liens, les synergies sur un projet par exemple, et bien sûr la cohésion interne. En intra, il est plus facile de contextualiser la formation avec les enjeux propres à l’entreprise.</p>
   <h3 class="font-bold">Pourquoi faire appel à MIATA FCR pour votre formation intra entreprise ?</h3>
   
    <h4 class="font-bold text-center lg:text-left py-4 underline">Un tarif clair pour une solution intra clé en main</h4>
    <p>Les formations intra entreprise de MIATA FCR sont proposées à un tarif forfaitaire, clairement prouvé. Ce tarif comprend :</p>
    <ul class="list-disc pl-8">
    
      <li>Une session de formation dans vos locaux ou à distance ou dans nos locaux</li>
      <li>La possibilité de former jusqu’à 12 personnes par session</li>
      <li>L’animation de la formation intra par un formateur habilité</li>
      <li>L’ensemble des supports de la formation au format électronique</li>
      <li>L’évaluation dématérialisée de la satisfaction à l’issue de la formation.</li>
      <li>La liste d’émargement dématérialisée.</li>
    </ul>
    <p>Si vous souhaitez aller plus loin et adapter davantage la formation à votre contexte, les ingénieurs commerciaux sur-mesure vous accompagnent pour étudier votre besoin.</p>
    <h4 class="font-bold text-center lg:text-left py-4 underline">Votre devis en 1 clic</h4>
     <p>Demandez votre devis en ligne via l’onglet <strong>“Intra”</strong> des programmes de formation. Le devis est gratuit et sans engagement.</p>
    <h4 class="font-bold text-center lg:text-left py-4 underline">Une réponse commerciale sous 48 h</h4>
    <p>Une fois reçu votre devis, un ingénieur commercial vous rappelle sous 48 heures pour affiner votre demande (choix de la date, modalité présentielle ou distancielle, le lieu, options complémentaires…) et finaliser votre commande. La possibilité de fixer un rendez-vous téléphonique vous est proposée dès l’envoi de votre devis.</p>
    <h4 class="font-bold text-center lg:text-left py-4 underline">Le choix des formats de formations en intra aussi</h4>
    <p>L’ensemble des 550 formations MIATA FCR est disponible en intra entreprise dans tout le Sénégal.  95% des formations MIATA FCR sont disponibles en distanciel. MIATA FCR propose plusieurs formats de formations digitales en intra entreprise :</p>
    <ul class="list-disc pl-8">
      <li>Les <strong>classes Intra</strong>dans vos locaux, nos locaux ou un hôtel de la place</li>
      <li>Les <strong>classes à distance </strong> : interactives, elles recréent en digital l’environnement du présentiel. Durée et qualité pédagogique identique.</li>
      <li>Les formations <strong>Full Digital </strong> : une formation de 12 h sur 2 journées en groupe avec 2 classes virtuelles et des séquences d’entraînements</li>
      <li>Les parcours #Up : un parcours personnalisable pour se former aux « soft skills ».</li>
    </ul>
    <h4 class="font-bold text-center lg:text-left py-4 underline">La garantie qualité d’un réseau de formateurs unique</h4>
    <p>Avec plus de 105 formateurs externes, MIATA FCR dispose du plus grand réseau de formateurs réguliers et habilités pour animer des formations intra entreprises. En plus de l’expertise acquise par chaque formateur, le sérieux du processus de recrutement, d’habilitation et de formation des formateurs vous garantit un niveau de qualité élevé et homogène.</p>
    <p>...</p>
  </div>

  <!-- Bouton -->
   <div class="">
   <button
    @click="showMore = !showMore"
    class="mt-4 inline-block bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-[#880015] transition"
    x-text="showMore ? 'Voir moins' : 'Voir plus'"
  ></button>
   </div>
 
</div>

  </div>
  </article>

  <article id="sur-mesure" class="scroll-mt-20">
     <!-- troisième section -->
  <div  x-data="{ showMore: false }" class="max-w-7xl mx-auto text-black  flex flex-col lg:flex-row gap-10 lg:gap-20 items-center justify-center px-4 pb-10">
    <!-- Texte -->
    <div class="w-full lg:w-1/2">
      <h1 class="font-bold text-2xl sm:text-3xl pb-4 text-center lg:text-left">
        Formation Sur Mesure - Formation en intreprise </h1>
     
        <p>« Plus digitale, plus transverse, plus ouverte… Tout comme son environnement, votre organisation est toujours en mouvement. Dans ce contexte, l’adaptation rapide des équipes devient un facteur clé de compétitivité. Pour réussir, votre enjeu est double. D’abord, faire de la formation un investissement stratégique au service de la professionnalisation des équipes et donc de la réussite de votre organisation. Ensuite, prouver son efficacité et sa rentabilité. »</p>
        <p><strong>Aissatou NDIAYE</strong>, Directrice conseil et formation en entreprise, membre du Directoire, MIATA FCR.</p>
        <h4 class="font-bold text-center lg:text-left py-4 underline">Vos besoins de formation</h4>
        <p>Chaque formation sur-mesure MIATA FCR est adaptée à la <strong>juste mesure des enjeux de votre entreprise </strong> et se met plus que jamais au service de la stratégie des dirigeants. Nous nous attachons à <strong> faire vivre aux apprenants des expériences originales et innovantes</strong>, pour les rendre acteurs de leur formation et leur permettre de s’approprier parfaitement les nouvelles pratiques.</p>
        
        
        <div x-show="showMore" x-transition.duration.300ms>
        <p><strong>Proposer une learning expérience stimulante et créatrice de valeur</strong></p>
        <p> <strong>Réussir la transformation de votre organisation</strong></p>
        <p><strong>Préparer les évolutions des métiers pour servir la performance</strong></p>
        <h4>Je souhaite que MIATA FCR m’accompagne</h4>
        <p>Vous souhaitez mettre en place une formation issue de notre catalogue au sein de votre organisation, c’est possible. Retrouvez toutes les informations sur la formation intra entreprise ici. </p>

        <p><strong>Les points forts du sur-mesure MIATA FCR</strong></p>
        <ul class="pl-8">
          <li>Nous vous simplifions la mise en œuvre de votre projet sur mesure <strong>en vous accompagnant tout au long de la chaîne de valeur de la formation </strong>: ingénierie, contenu, pédagogie, pilotage, communication interne, logistique…</li>
          <li>Spécialiste de la montée en compétences des collaborateurs, nous avons la juste réponse à vos besoins pour <strong>valoriser votre investissement.</strong></li>
          <li>Co-Production : Vos attentes et nos convictions au service de votre projet</li>
          <li>Pédagogie Innovante : Nous proposons des expériences originales et multimodales</li>
          <li>Performance Learning : Des projets efficaces et mesurables avec un plan global d’évaluation</li>
          <li>Pilotage de Projet : Nous avons l’expertise du pilotage avec toutes les parties prenantes</li>
        </ul>

        </div>

         <!-- Bouton -->
   <div class="">
   <button
    @click="showMore = !showMore"
    class="mt-4 inline-block bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-[#880015] transition"
    x-text="showMore ? 'Voir moins' : 'Voir plus'"
  ></button>
   </div>
      
    </div>

    <!-- Image -->
    <div class="w-full lg:w-1/2">
      <img src="{{ asset('build/assets/images/formation3.jpg') }}" alt="" class="w-full h-64 sm:h-80 object-cover rounded-lg">
    </div>
  </div>
  </article>

  <article id="a-distance" class="scroll-mt-20">
<!-- Quatrième section -->
<div  class="max-w-7xl mx-auto text-black  flex flex-col-reverse lg:flex-row gap-10 lg:gap-20 px-4 items-center justify-center pb-10">
    <!-- Image -->
    <div class="w-full lg:w-1/2">
      <img src="{{ asset('build/assets/images/formation3.jpg') }}" alt="" class="w-full h-64 sm:h-80 object-cover rounded-lg">
    </div>

    <!-- Texte -->
    <div x-data="{ showMore: false }" class="w-full lg:w-1/2 space-y-4 text-sm sm:text-base">
  <h2 class="font-bold text-2xl sm:text-3xl pb-4 text-center lg:text-left">Formations 100% à Distance</h2>

  <!-- Partie toujours visible -->
  
  <p>Retrouvez toutes nos formations</p>
  <p>95% de nos formations sont disponibles en classe à distance</p>
  <p>Vous former n’importe où, n’importe quand, en gardant de l’interaction avec votre formateur, c’est possible ! Pour répondre à vos besoins, MIATA FCFR a transformé de nombreuses sessions de formation en distanciel !</p>
  <p>Découvrez toutes nos formations à distance</p>
  <p>Découvrez comment fonctionnent nos formations à distance</p>
  <h4 class="font-bold text-center lg:text-left">Des formations interactives, même à distance !</h4>
  <p><strong> Nos formateurs sont formés à l’animation à distance</strong> et adaptent leurs approches pour favoriser un maximum <strong> d’interaction au sein du groupe </strong>: activités brise-glace, temps de partage d’expériences, exercices de groupe, sondage, tableau blanc, etc.</p>
  
Les échanges à distance deviennent paradoxalement plus libres et plus faciles !</p>
  <!-- Partie cachée / affichée -->
  <div x-show="showMore" x-transition.duration.300ms>
  <p>La formation en distanciel permet également de se libérer des contraintes du présentiel : distanciation physique, gestes barrières, port du masque…</p>
 
    <p> Les échanges à distance deviennent paradoxalement plus libres et plus faciles !</p>
    <h4 class="font-bold text-center lg:text-left py-4">Une expérience apprenante unique !</h4>
    <p>Les formations prévoient une alternance de temps de connexion en groupe et de séquences de déconnexion pour des travaux de mise en pratique individuels : vous n’aurez pas besoin de rester connecté</p>
    <p>7h d’affilée par jour !</p>
    <h4>Un prix qui inclut les services du distanciel !</h4>
    <p>Il n’y a pas de différence de prix pour une même formation, qu’elle soit délivrée en présentiel ou à distance. Dans chaque cas, le prix de la formation inclut :</p>
    <ul class="pl-4">
      <li>l’animation d’un formateur expert, l’ouverture d’une salle physique ou virtuelle,</li>
      <li>l’ensemble des ressources mises à disposition dans l’espace apprenant et toute la gestion administrative liée à votre formation.</li>
    </ul>
    <p>Pour les formations à distance, nous prenons également à notre charge la mise à disposition quotidienne d’une hotline technique ainsi que l’adaptation pédagogique de la formation pour rendre votre expérience la plus fluide possible</p>
  </div>

  <!-- Bouton -->
   <div class="">
   <button
    @click="showMore = !showMore"
    class="mt-4 inline-block bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-[#880015] transition"
    x-text="showMore ? 'Voir moins' : 'Voir plus'"
  ></button>
   </div>
 
</div>

  </div>

  </article>
 
</section>


<section class="bg-[#f1f5f9] py-20"> 
  <div class="max-w-7xl mx-auto px-4">
  <h1 class="font-bold text-4xl text-center pb-4">Recrutement & conseils RH</h1>
  <p>Notre cabinet de recrutement et de conseil RH, MIATA FCR, mobilise toute son expertise pour l’élaboration de votre stratégie RH. Il vous accompagne dans vos prochains recrutements ainsi que dans la formation et le développement de vos équipes.</p>
  <p>Nous partageons avec vous l’ADN du réseau, à savoir la bienveillance, le Leader Jardinier (autonomie et responsabilisation des collaborateurs comme facteur d’engagement et de performance).
  Vous souhaitez affiner votre stratégie RH, optimiser l’organisation de vos équipes et gagner en efficacité ?</p>
  <div class="text-cen mt-4">
          <a href="#"
              class="inline-block bg-[#a3021b] text-white hover:bg-[#ffbe58] text-sm sm:text-base px-6 py-3 sm:px-8 sm:py-4 font-bold rounded-lg transition">
              Contactez-nous au +221 33 827 70 01
          </a>
  </div>
 <h2 class="font-bold text-3xl py-4">NOS SERVICES</h2>
 <h3 class="font-bold text-2xl">Recrutement de cadres et de talents</h3>
 <p>MIATA vous propose un service de recrutement personnalisé, parce que les bons talents font la vraie réussite </p>

 <div class="flex flex-col md:flex-row gap-8 py-12 ">
  <!-- Carte 1 -->
  <div class="flex-1 bg-white rounded-lg shadow hover:shadow-lg transition flex flex-col items-center text-center p-4">
    <div class="flex flex-col items-center flex-1">
      <img src="{{ asset('build/assets/images/analyse-besoin.png') }}" class="w-20 h-20 mb-4" alt="">
      <h4 class="font-bold mb-2">Analyse du besoin</h4>
      <ul class="list-disc list-inside text-left">
        <li>Étude préalable</li>
        <li>Création du profil candidat</li>
        <li>Définition du mode de sourcing</li>
      </ul>
    </div>
  </div>

  <!-- Carte 2 -->
  <div class="flex-1 bg-white rounded-lg shadow hover:shadow-lg transition flex flex-col items-center text-center p-4">
    <div class="flex flex-col items-center flex-1">
      <img src="{{ asset('build/assets/images/sourcing-definition.png') }}" class="w-20 h-20 mb-4" alt="">
      <h4 class="font-bold mb-2">Sourcing et sélection de candidats</h4>
      <ul class="list-disc list-inside text-left">
        <li>Recherche via nos différents outils</li>
        <li>Pré-sélection par entretiens téléphoniques</li>
        <li>Rencontre des candidats présélectionnés</li>
        <li>Réalisation de tests métiers ou de personnalité optionnels</li>
      </ul>
    </div>
  </div>

  <!-- Carte 3 -->
  <div class="flex-1 bg-white rounded-lg shadow hover:shadow-lg transition flex flex-col items-center text-center p-4">
    <div class="flex flex-col items-center flex-1">
      <img src="{{ asset('build/assets/images/suivi-finalisation.png') }}" class="w-20 h-20 mb-4" alt="">
      <h4 class="font-bold mb-2">Suivi et finalisation</h4>
      <ul class="list-disc list-inside text-left">
        <li>Transmission des dossiers candidats qualifiés</li>
        <li>Préparation des entretiens</li>
        <li>Suivi du processus de recrutement</li>
        <li>Accompagnement pendant toute la période d’intégration</li>
      </ul>
    </div>
  </div>
</div>

<h3 class="font-bold text-2xl">Recrutement de cadres et de talents</h3>
<p>Notre cabinet vous accompagne dans la transformation et l’optimisation de l’ensemble de vos processus RH</p>

<div class="flex flex-col md:flex-row gap-8 py-12">
  <!-- Carte 1 -->
  <div class="flex-1 bg-white rounded-lg shadow hover:shadow-lg transition flex flex-col items-center text-center p-4">
    <div class="flex flex-col items-center flex-1">
      <img src="{{ asset('build/assets/images/seduire.png') }}" class="w-20 h-20 mb-4" alt="">
      <h4 class="font-bold mb-2">Séduire</h4>
      <ul class="list-disc list-inside text-left">
        <li>Audit et transformation des processus de recrutement</li>
        <li>Développement de la marque employeur</li>
        <li>Réussite de l’intégration des collaborateurs</li>
      </ul>
    </div>
  </div>

  <!-- Carte 2 -->
  <div class="flex-1 bg-white rounded-lg shadow hover:shadow-lg transition flex flex-col items-center text-center p-4">
    <div class="flex flex-col items-center flex-1">
      <img src="{{ asset('build/assets/images/fideliser.png') }}" class="w-20 h-20 mb-4" alt="">
      <h4 class="font-bold mb-2">Fidéliser</h4>
      <ul class="list-disc list-inside text-left">
        <li>Benchmark salariaux</li>
        <li>Favorisation de la proximité managériale</li>
        <li>Process d’évaluation 360°</li>
        <li>Team building</li>
      </ul>
    </div>
  </div>

  <!-- Carte 3 -->
  <div class="flex-1 bg-white rounded-lg shadow hover:shadow-lg transition flex flex-col items-center text-center p-4">
    <div class="flex flex-col items-center flex-1">
      <img src="{{ asset('build/assets/images/developper.png') }}" class="w-20 h-20 mb-4" alt="">
      <h4 class="font-bold mb-2">Développer</h4>
      <ul class="list-disc list-inside text-left">
        <li>Ateliers de codéveloppement</li>
        <li>Bilan de compétences et Outplacement</li>
        <li>Gestion prévisionnelle des emplois et des compétences (GPEC)</li>
      </ul>
    </div>
  </div>
</div>

<h2 class="font-bold text-3xl py-4 uppercase">Nos offres</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 py-8">
  <!-- Carte -->
  <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
    <img src="{{ asset('build/assets/images/formation1.jpg') }}" alt="" class="h-48 w-full object-cover rounded-md mb-4">
    <h2 class="font-semibold mb-2">01 ASSISTANT RESSOURCES HUMAINES (H/F) – Dakar, SN</h2>
    <a href="#" class="mt-auto bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-red-700">Postuler</a>
  </div>

  <!-- Carte -->
  <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
    <img src="{{ asset('build/assets/images/formation2.jpg') }}" alt="" class="h-48 w-full object-cover rounded-md mb-4">
    <h2 class="font-semibold mb-2">01 RESPONSABLE COMMERCIAL (H/F) – Dakar, SN</h2>
    <a href="#" class="mt-auto bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-red-700">Postuler</a>
  </div>

  <!-- Carte -->
  <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
    <img src="{{ asset('build/assets/images/formation1.jpg') }}" alt="" class="h-48 w-full object-cover rounded-md mb-4">
    <h2 class="font-semibold mb-2">03 COMMERCIAUX (H/F) – Dakar, SN</h2>
    <a href="#" class="mt-auto bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-red-700">Postuler</a>
  </div>

  <!-- Carte -->
  <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
    <img src="{{ asset('build/assets/images/formation1.jpg') }}" alt="" class="h-48 w-full object-cover rounded-md mb-4">
    <h2 class="font-semibold mb-2">01 COMMUNITY MANAGER (H/F) – Dakar, SN</h2>
    <a href="#" class="mt-auto bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-red-700">Postuler</a>
  </div>

  <!-- Carte -->
  <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
    <img src="{{ asset('build/assets/images/formation1.jpg') }}" alt="" class="h-48 w-full object-cover rounded-md mb-4">
    <h2 class="font-semibold mb-2">01 ASSISTANTE DE DIRECTION – Dakar, SN</h2>
    <a href="#" class="mt-auto bg-[#a3021b] text-white px-4 py-2 rounded hover:bg-red-700">Postuler</a>
  </div>
</div>

<h2 class="font-bold text-3xl py-4 uppercase">Charte de recrutement</h2>



  


</section>










    </body>
</html>
