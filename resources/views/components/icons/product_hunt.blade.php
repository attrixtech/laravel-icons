@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} width="1000" height="1000" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
    <path d="M500 1000c276.15 0 500-223.85 500-500S776.15 0 500 0 0 223.85 0 500s223.85 500 500 500zM375 300v400h75V575h113.5c75.375-2 136.5-63.125 136.5-137.5 0-76.375-61.125-137.5-136.5-137.5H375zm189.425 200H450V375h114.425c33.45 0 60.575 28 60.575 62.5S597.875 500 564.425 500z" fill-rule="evenodd"></path>
</svg>
