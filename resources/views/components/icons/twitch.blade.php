@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
    <path d="M500 0c276.142 0 500 223.858 500 500s-223.858 500-500 500S0 776.142 0 500 223.858 0 500 0zm335 206H230l-45 118v473h163v89h88l89-89h133l177-177V206zM672 693H510l-89 89v-89H288V265h487v325L672 693zM510 383h-59v177h59V383zm162 0h-59v177h59V383z"></path>
</svg>
