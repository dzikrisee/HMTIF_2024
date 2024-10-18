<nav class="bg-green-900" x-data="{ isOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
              <div class="flex-shrink-0">
                <a href="/" class="flex items-center space-x-2">
                  <img class="h-8 w-8" src="/image/LOGO HMTIF.png" alt="Your Company">
                  <img class="h-8 w-8" src="/image/LOGO HMTIF.png" alt="Your Company">
              </a>
              
              </div>
          </div>
          <div class="hidden md:flex md:ml-auto">
              <div class="flex items-baseline space-x-4">
                  <x-nav-link href="/" :active="request()->is('/')" >Struktur</x-nav-link>
                  {{-- <x-nav-link href="/about" :active="request()->is('about')" >About</x-nav-link> --}}
                  <x-nav-link href="/posts" :active="request()->is('posts')" >Divisi</x-nav-link>
                  <x-nav-link href="/contact" :active="request()->is('contact')" >Kegiatan</x-nav-link>
              </div>
          </div>
      </div>
  </div>

  
</nav>
