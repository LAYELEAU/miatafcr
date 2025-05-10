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
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Inter</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Intra</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">Sur mesure</a>
        <a href="#" class="block px-4 py-2 hover:bg-[#a3021b] hover:text-white">A distance</a>
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
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Inter</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Intra</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">Sur mesure</a>
            <a href="#" class="block text-gray-600 hover:text-[#a3021b]">À distance</a>
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
  
      <div class="w-full md:w-1/3 sticky top-24 ">
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
  <div class=" max-w-7xl mx-auto text-white py-20 flex gap-20 ">
    <div class="w-1/2">
         <div class="">
             <a href="" class="hover:underline">Formation inter entreprise</a><span> > </span>
             <a href="" class="hover:underline">Formation inter entreprise</a>
         </div>
            <p class="">Gestion de la diversité et inclusion en milieu professionnel</p>
           
         <div class="flex py-4 gap-2">
             <div class="border border-white rounded px-2 w-fit"><p>debutant</p></div>
             <div class="border border-white rounded px-2 w-fit"><p>date formation</p></div>
             <div class="border border-white rounded px-2 w-fit"> <p>prix formation</p></div>
         </div>
         <h1 class="font-bold text-4xl">Gestion de la diversité et inclusion en milieu professionnel</h1>
         <p>Formateur : MIATA FCR</p>
         <div class=" mt-8">
          <a href="#"
              class="inline-block text-[#a3021b] bg-white hover:text-[#a3021b] text-sm sm:text-base px-6 py-3 sm:px-8 sm:py-4 font-bold rounded-lg hover:bg-white transition">
              Voir Plus
          </a>
  </div>
    
    </div>
    <div class="w-1/2">
            <img src="{{ asset('build/assets/images/formation3.jpg') }}" alt="" class="w-full h-80  object-cover rounded-lg">
    </div>
   


  </div>
  <div class="bg-[#f1f5f9] py-20">

  <div class="max-w-7xl mx-auto  flex gap-8 ">
    <div class="w-2/3 flex flex-col gap-8 ">
      <div class="border rounded-lg bg-white p-8 ">
        <h2 class="font-bold text-2xl pb-4">Objectif de la formation</h2>
         <ul> 
           <li>S’approprier le cadre juridique et le contexte sociétal.</li>
           <li>Identifier les conditions favorables à une politique diversité..</li>
           <li>Mettre en place et déployer une culture inclusive. </li>
           <li> Piloter la démarche : acteurs et indicateurs</li>
         </ul>
      </div>

      <div class="border rounded-lg bg-white p-8 ">
        <h2 class="font-bold text-2xl pb-4">programme</h2>
         
          <p class="font-bold py-4">COMPRENDRE LE FONCTIONNEMENT D’UN CONFLIT EN ENTREPRISE</p>
            <ul>
              <li>Retour sur les expériences vécues : identifier et comprendre les causes possibles d’un conflit interne
              <li>Appréhender la notion de conflits dans une entreprise, qu’est-ce qu’un conflit professionnel ?</li>
              <li>Focus sur le principe de conflit et compétition</li>
              <li>Focus sur le principe de conflit et coopération</li>
              <li>Focus sur les différents types de conflit : intrapsychiques, interpersonnels et inter- groupes, extrinsèques et émotionnels, conflits d’intérêts et d’opinions, conflits fonctionnels et dysfonctionnels, conflits constructifs et destructifs</li>
            </li>
            </ul>
        
      </div>
        
    </div>
    <div class="w-1/3  h-fit border bg-white p-4 rounded-lg">
      <p>date formati</p>
      <p>formation date</p>

       <div class=" mt-8">
          <a href="#"
              class="inline-block bg-[#a3021b]  w-full text-white text-center hover:text-white text-sm sm:text-base px-6 py-3 sm:px-8 sm:py-4 font-bold rounded-lg hover:bg-[#a3021b] transition">
              Voir Plus
          </a>
        </div>
    </div>
    
  </div>

  </div>

</section>

<section>

</section>











    </body>
</html>
