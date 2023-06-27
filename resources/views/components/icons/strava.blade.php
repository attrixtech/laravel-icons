@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M500 0C224 0 0 224 0 500s224 500 500 500 500-224 500-500S776 0 500 0zM246 553l207-411 208 410H538l-85-165-83 166H246zm354 305L444 552h92l63 124 63-124h92L600 858z"></path>
</svg>
