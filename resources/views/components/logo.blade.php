<!-- Simpan sebagai: resources/views/components/logo.blade.php -->
@props(['class' => 'h-8 w-auto'])

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 50" {{ $attributes->merge(['class' => $class]) }}>
    <!-- Elegant wave background -->
    <path d="M20,25 Q40,5 60,25 T100,25 T140,25 T180,25" fill="none" stroke="url(#gradient-line)" stroke-width="2.5"
        opacity="0.6" />

    <!-- Gradient definitions -->
    <defs>
        <linearGradient id="gradient-line" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#8B5CF6" />
            <stop offset="100%" style="stop-color:#C084FC" />
        </linearGradient>

        <linearGradient id="text-gradient-1" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#4F46E5" />
            <stop offset="100%" style="stop-color:#818CF8" />
        </linearGradient>

        <linearGradient id="text-gradient-2" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#6366F1" />
            <stop offset="100%" style="stop-color:#A5B4FC" />
        </linearGradient>

        <filter id="glow">
            <feGaussianBlur stdDeviation="2" result="coloredBlur" />
            <feMerge>
                <feMergeNode in="coloredBlur" />
                <feMergeNode in="SourceGraphic" />
            </feMerge>
        </filter>
    </defs>

    <!-- Logo text with gradient -->
    <text x="20" y="32" font-family="'Helvetica Neue', Arial, sans-serif" font-weight="bold" font-size="24"
        fill="url(#text-gradient-1)" style="letter-spacing: 0.5px;">
        Pulse<tspan fill="url(#text-gradient-2)">Forge</tspan>
    </text>

    <!-- Animated circle with glow -->
    <circle cx="175" cy="25" r="6" fill="url(#gradient-line)" opacity="0.9" filter="url(#glow)">
        <animate attributeName="r" values="6;8;6" dur="2s" repeatCount="indefinite" calcMode="spline"
            keySplines="0.4 0 0.2 1; 0.4 0 0.2 1" />
        <animate attributeName="opacity" values="0.9;0.7;0.9" dur="2s" repeatCount="indefinite" calcMode="spline"
            keySplines="0.4 0 0.2 1; 0.4 0 0.2 1" />
    </circle>
</svg>
