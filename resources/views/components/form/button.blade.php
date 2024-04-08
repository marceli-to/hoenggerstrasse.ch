@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'bg-mist rounded-sm font-sans-bold font-bold flex text-navy uppercase pt-10 pb-13 px-20 hover:bg-white transition-all']) }}>
  {{ $slot}}
</button>