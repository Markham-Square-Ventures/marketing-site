<footer class="bg-footer w-full">
  <div class="py-12 sm:py-24 px-6 sm:px-12 lg:px-24">
    <div class="flex flex-col lg:flex-row lg:justify-between">
      <div class=>
        <img class="mx-auto lg:mx-0 w-40 lg:w-60" src="../assets/images/logo-inverted.svg" alt="Markham Square's Logo"/>
        <nav class="mt-2 lg:mt-8 flex justify-center lg:justify-start">
          <a class="p2 leading-relaxed text-white hover:text-gray-100 underline-grow-white transition-sm outline-primary" href="/work">Work</a>
          <a class="p2 leading-relaxed text-white hover:text-gray-100 underline-grow-white transition-sm outline-primary ml-12" href="/about">About</a>
          <a class="p2 leading-relaxed text-white hover:text-gray-100 underline-grow-white transition-sm outline-primary ml-12" href="/contact">Contact</a>
        </nav>
      </div>
      <div class="hidden lg:inline-block md:text-right">
        <p class="p1 text-white ">Looking for exceptional results?</p>
        <div class="mt-3">
          <x-button url="/contact" message="Let's talk"/>
        </div>
      </div>
    </div>
    <div class="flex flex-col-reverse lg:flex-row justify-between items-center mt-8 lg:mt-12">
      <p class="p3 leading-snug text-white mt-8 lg:mt-0 text-center lg:text-left">&copy; {{ date('Y') }} Markham Square. <br class="sm:hidden"/> All Rights Reserved.</p>
      <div class="flex md:justify-end">
        {{-- LinkedIn --}}
        <a href="" target="_blank" rel="noopener noreferrer" class="text-white hover:text-orange-500 transition-sm outline-primary">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:h-10 lg:w-10" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none"></rect>
            <rect x="36" y="36" width="184" height="184" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
            <line x1="120" y1="112" x2="120" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
            <line x1="88" y1="112" x2="88" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
            <path d="M120,140a28,28,0,0,1,56,0v36" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
            <circle cx="88" cy="80" r="12"></circle>
          </svg>
        </a>
        {{-- Dribbble --}}
        <a href="" target="_blank" rel="noopener noreferrer" class="ml-8 text-white hover:text-orange-500 transition-sm outline-primary">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:h-10 lg:w-10" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none"></rect>
            <circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></circle>
            <path d="M71,205.3A160.1,160.1,0,0,1,208,128c5.4,0,10.7.3,16,.8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
            <path d="M188,53.1A159.8,159.8,0,0,1,64,112a165.2,165.2,0,0,1-30.1-2.8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
            <path d="M85.9,41.7a160.5,160.5,0,0,1,74.3,176.8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
          </svg>
        </a>
        {{-- Twitter --}}
        <a href="" target="_blank" rel="noopener noreferrer" class="ml-8 text-white hover:text-orange-500 transition-sm outline-primary">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:h-10 lg:w-10" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none"></rect>
            <path d="M128,88c0-22,18.5-40.3,40.5-40a40,40,0,0,1,36.2,24H240l-32.3,32.3A127.9,127.9,0,0,1,80,224c-32,0-40-12-40-12s32-12,48-36c0,0-64-32-48-120,0,0,40,40,88,48Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
          </svg>
        </a>
        {{-- Instagram --}}
        <a href="https://www.instagram.com/team_markhamsq/" target="_blank" rel="noopener noreferrer" class="ml-8 text-white hover:text-orange-500 transition-sm outline-primary">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="h-8 w-8 lg:h-10 lg:w-10">
            <rect width="256" height="256" fill="none"></rect>
            <circle cx="128" cy="128" r="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
            <rect x="36" y="36" width="184" height="184" rx="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
            <circle cx="180" cy="76" r="12"></circle>
          </svg>
        </a>
      </div>
    </div>
  </div>
</footer>