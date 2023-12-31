@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128">
    <path d="M128 64c0 35.35-28.65 64-64 64S0 99.35 0 64 28.65 0 64 0s64 28.65 64 64z"></path><g fill="#FFF"><path d="M43.15 93.1h-7.7V39.55h7.7V93.1zM54.45 39.55h20.8c19.8 0 28.5 14.15 28.5 26.8 0 13.75-10.75 26.801-28.4 26.801h-20.9V39.55zm7.7 46.65H74.4c17.45 0 21.45-13.25 21.45-19.85C95.85 55.6 89 46.5 74 46.5H62.15v39.7zM44.35 28.4c0 2.75-2.25 5.05-5.05 5.05s-5.05-2.3-5.05-5.05c0-2.8 2.25-5.05 5.05-5.05s5.05 2.3 5.05 5.05z"></path></g>
</svg>
