@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M1000 500c0 233-159 429-375 484V604h107l18-125H625V369c0-36 18-56 55-56h79V196s-37-8-90-8c-120 0-180 67-180 166v125H375v125h114v396C218 994 0 772 0 500 0 224 224 0 500 0s500 224 500 500z"></path>
</svg>
