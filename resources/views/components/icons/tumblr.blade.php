@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M1000 500c0 277-223 500-500 500S0 777 0 500 223 0 500 0s500 223 500 500zM708 705s-59 17-104 17c-75 0-83-22-83-97V458h167V312H521V146H417c-15 135-77 169-167 199v105h105v217c0 120 51 187 186 187 106 0 167-41 167-41V705z"></path>
</svg>
