@extends('app')
@section('content')

<x-layout.section class="bg-white !p-0">
  <x-swiper>
    <x-swiper.slide :image="'wohnen-felsengrund-visualisierung-aussen-nord'" :alt="'Visualisierung Aussen Nord'" />
    <x-swiper.slide :image="'wohnen-felsengrund-visualisierung-aussen-sued'" :alt="'Visualisierung Aussen Süd'" />
    <x-swiper.slide :image="'wohnen-felsengrund-visualisierung-attika-essen'" :alt="'Visualisierung Attika Essen'" />
    <x-swiper.slide :image="'wohnen-felsengrund-visualisierung-attika-schlafzimmer'" :alt="'Visualisierung Attika Schlafzimmer'" />
    <x-swiper.slide :image="'wohnen-felsengrund-visualisierung-wohnzimmer-eg'" :alt="'Visualisierung Wohnzimmer EG'" />
  </x-swiper>
</x-layout.section>

<x-layout.section class="bg-mist">
  <x-layout.inner>
    <div class="max-w-4xl">
      <h1>Wohnen in Zürich-Wipkingen</h1>
      <h2>Erstvermietung</h2>
      <p>An Toplage an der <a href="https://maps.app.goo.gl/PSQvWiU4U7BrjfXR7" target="_blank" title="Auf Googlemaps anzeigen" class="underline hover:no-underline underline-offset-4 decoration-1">Hönggerstrasse 146/148 in 8037 Zürich-Wipkingen</a> entsteht per Frühling 2026 ein attraktives Neubauprojekt mit modernen 1- bis 4.5-Zimmerwohnungen.</p>
      <p><strong>Interessiert?</strong><br>Gerne senden wir Ihnen weitere Informationen, sobald die Vermietung startet. Bitte füllen Sie dazu das Kontaktformular aus.</p>
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="bg-pearl">
  <x-layout.inner>
    <h1>Kontaktformular</h1>
    @livewire('create-inquiry')
  </x-layout.inner>
</x-layout.section>

@endsection