@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M500 0C223 0 0 223 0 500s223 500 500 500 500-223 500-500S777 0 500 0zm-94.8 229h187.5v140.6H405.2V229zM749 729H249V447.8h156.2v140.6h187.5V447.8H749V729z"></path>
</svg>
