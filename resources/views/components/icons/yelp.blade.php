@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M1000 500c0 276-224 500-500 500S0 776 0 500 224 0 500 0s500 224 500 500zm-739 99l154-34c19-5 29-17 29-33 0-14-8-23-23-30l-141-72c-15-7-23-11-34-11-17 0-26 12-28 35l-9 113c-2 24 0 38 16 38 11-1 22-3 36-6zm24-411c0 12 5 22 15 35l136 186c12 17 23 25 36 25 20 0 30-14 30-46l-1-223c0-41-15-58-36-58-6 0-17 4-26 7l-124 46c-19 7-30 16-30 28zm217 436c1-15-8-27-25-27-10 0-18 5-27 15L335 740c-7 8-12 15-12 27 0 15 9 24 29 30l98 31c11 3 18 5 25 5 18 0 25-9 25-30l2-179zm54-145c0 15 9 25 26 25 8 0 17-3 25-5l144-42c28-9 40-18 40-34 0-13-5-21-17-35l-66-78c-11-13-17-18-27-18-12 0-18 9-24 19l-93 147c-5 7-8 13-8 21zm236 163c0-11-8-18-24-23l-162-52c-7-2-13-4-20-4-14 0-25 12-25 25 0 7 3 14 5 18l85 143c14 23 22 31 36 31 12 0 21-5 30-18l66-95c6-9 9-15 9-25z"></path>
</svg>