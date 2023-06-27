@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128">
    <path d="M64 0C28.672 0 0 28.672 0 64s28.672 64 64 64 64-28.672 64-64S99.328 0 64 0zm36.3 54.533H78.966v21.332H57.633V97.2H36.3v-64h64v21.333z"></path>
</svg>
