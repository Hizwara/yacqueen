@props(['color' => 'primary', 'type' => 'button', 'label' => 'Button'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => ' bg-' . $color . '-500 hover:bg-' . $color . '-700
  text-white font-bold py-2 px-4 rounded']) }}>
  {{ $label }}
</button>