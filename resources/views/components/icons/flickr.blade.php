@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M1000 500c0 277-223 500-500 500S0 777 0 500 223 0 500 0s500 223 500 500zm-542 0c0-91-75-167-167-167s-166 76-166 167c0 93 74 167 166 167s167-74 167-167zm417 0c0-91-75-167-167-167s-167 76-167 167c0 93 75 167 167 167s167-74 167-167z"></path>
</svg>
