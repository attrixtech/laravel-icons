@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M1000 500c0 277-223 500-500 500-50 0-97-7-143-21 20-30 41-68 52-106 5-22 34-138 34-138 17 34 69 62 123 62 161 0 269-147 269-342 0-148-126-287-316-287-238 0-357 170-357 312 0 87 32 163 102 191 11 5 22 0 25-12 2-9 8-30 11-40 3-12 1-17-9-28-19-24-32-54-32-98 0-126 95-240 247-240 134 0 207 82 207 193 0 143-64 264-159 264-52 0-91-42-79-95 16-64 44-133 44-178 0-41-22-75-66-75-54 0-97 56-97 130 0 47 17 79 17 79s-56 231-65 273c-9 37-11 80-8 115C123 881 0 705 0 500 0 223 223 0 500 0s500 223 500 500z"></path>
</svg>