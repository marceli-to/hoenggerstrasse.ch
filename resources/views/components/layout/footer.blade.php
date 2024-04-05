@if (!Route::is('page.privacy') && !Route::is('page.imprint'))
<x-layout.section class="relative !p-0">
  <x-misc.map />
</x-layout.section>
@endif
<footer>
  @if (!Route::is('page.privacy') && !Route::is('page.imprint'))
  <div class="bg-mist px-15 py-20 md:px-25 md:py-30">
    <x-layout.inner>
      <x-layout.grid class="leading-[1.35]">
        <x-layout.span class="md:col-span-6 lg:col-span-5">
          <h3>Kontakt</h3>
          <div class="md:flex md:gap-x-45">
            <p>
              Apleona Schweiz AG<br>
              Industriestrasse 21<br>
              8304 Wallisellen
            </p>
            <p>
              Chantal Bieri<br>
              chantal.bieri@apleona.com<br>
              044 878 77 26
            </p>
          </div>
        </x-layout.span>
      </x-layout.grid>
    </x-layout.inner>
  </div>
  @endif
  <div class="bg-pearl text-sm md:text-base tracking-wider py-10 px-15 md:px-25">
    <x-layout.inner>
      <nav>
        <ul class="flex gap-x-15 lg:gap-x-20">
          <li>
            <a href="{{ route('page.imprint') }}" title="Impressum">Impressum</a>
          </li>
          <li>
            <a href="{{ route('page.privacy') }}" title="Datenschutz">Datenschutz</a>
          </li>
          <li>
            <a href="https://stoz.ch" target="_blank" title="stoz.ch" rel="noopener">design by stoz</a>
          </li>
        </ul>
      </nav>
    </x-layout.inner>
  </div>
</footer>
@livewireScripts
@vite('resources/js/app.js')
</body>
</html>
<!-- made with ❤ by stoz.ch & marceli.to -->