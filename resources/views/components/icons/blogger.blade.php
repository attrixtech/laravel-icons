@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M1000 500c0 277-223 500-500 500S0 777 0 500 223 0 500 0s500 223 500 500zm-208-21c0-23-19-42-42-42h-31c-18 0-31-18-31-41 0-103-85-188-188-188H396c-104 0-188 85-188 188v208c0 104 83 187 188 187h208c103 0 188-83 188-187V479zm-438-83c0-23 19-42 42-42h104c23 0 42 19 42 42s-19 42-42 42H396c-23 0-42-19-42-42zm292 208c0 23-19 42-42 42H396c-23 0-42-19-42-42s19-42 42-42h208c23 0 42 19 42 42z"></path>
</svg>
