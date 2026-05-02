<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trung Tâm Âm Nhạc')</title>
    <meta name="description" content="Giao diện demo cho trung tâm âm nhạc theo phong cách hiện đại, tinh tế và nghệ thuật.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&family=Noto+Serif+Display:wght@500;600;700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
</head>
<body>
    @include('partials.nav')

    <aside class="scroll-music-lane" aria-hidden="true" data-scroll-music-lane>
        <div class="scroll-music-rail"></div>
        <div class="scroll-music-glow"></div>
        <div class="scroll-music-progress" data-scroll-music-progress></div>
        <div class="scroll-music-notes" data-scroll-music-notes></div>
    </aside>

    <button class="scroll-music-toggle" type="button" data-scroll-music-toggle>
        Bật âm thanh scroll
    </button>

    <main>
        @yield('content')
    </main>

    <div class="floating-contact" aria-label="Liên hệ nhanh">
        <a href="https://facebook.com" class="floating-link is-facebook" target="_blank" rel="noreferrer" aria-label="Liên hệ qua Facebook">
            <span>f</span>
        </a>
        <a href="https://zalo.me" class="floating-link is-zalo" target="_blank" rel="noreferrer" aria-label="Liên hệ qua Zalo">
            <span>Z</span>
        </a>
        <a href="tel:0123456789" class="floating-link is-phone" aria-label="Gọi điện thoại">
            <span>☎</span>
        </a>
    </div>

    @include('partials.footer')

    <script src="{{ asset('assets/js/site.js') }}"></script>
</body>
</html>
