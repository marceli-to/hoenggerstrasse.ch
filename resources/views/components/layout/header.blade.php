<header class="relative aspect-[16/8] md:aspect-[16/6] after:bg-white after:block lg:after:block after:w-full after:h-20 2xl:after:h-15 after:top-0 after:left-0 after:absolute after:z-40 before:bg-white before:block lg:before:block before:w-[calc((100%_-_1024px)/2)] 2xl:before:w-[calc((100%_-_1152px)/2)] before:h-100 2xl:before:h-100 before:top-0 before:left-0 before:absolute before:z-30">
  <img src="/media/img/hoenggerstrasse-header.jpg" alt="Hönggerstrasse" class="block absolute z-10 w-full h-full object-cover" />
  <x-layout.inner class="relative z-50 w-full h-50 sm:h-60 md:h-80 lg:h-100">
    <a 
      href="{{ route('page.home') }}"
      title="Startseite"
      class="h-30 sm:h-45 md:h-55 lg:h-60 w-auto absolute left-15 md:left-25 lg:left-15 xl:left-0 top-10 sm:top-15 lg:top-25 2xl:top-20 z-20 block">
      <x-icons.logo-scala class="w-auto h-full" />
    </a>
    <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-6 relative">
      <div class="bg-white col-span-1 h-50 sm:h-70 md:h-80 lg:h-100 2xl:h-100"></div>
      <div class="bg-white col-span-1 h-35 sm:h-55 md:h-65 lg:h-80 2xl:h-85"></div>
      <div class="bg-white col-span-1 h-20 sm:h-40 md:h-50 lg:h-60 2xl:h-60"></div>
      <div class="bg-white hidden sm:block col-span-1 sm:h-25 md:h-35 lg:h-40 2xl:h-45"></div>
      <div class="bg-white hidden lg:block col-span-1 lg:h-20 2xl:h-30"></div>
      <div class="bg-white hidden 2xl:block col-span-1 2xl:h-15"></div>
    </div>
  </x-layout.inner>
</header>