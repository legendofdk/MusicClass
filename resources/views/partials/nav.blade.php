<header class="site-header" data-header>
    <div class="container nav-shell">
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-mark">M</span>
            <span class="brand-copy">
                <strong>Maison de Musique</strong>
                <small>Nghệ thuật. Kỷ luật. Trình diễn.</small>
            </span>
        </a>

        <button class="nav-toggle" type="button" aria-label="Mở menu điều hướng" data-nav-toggle>
            <span></span>
            <span></span>
        </button>

        <nav class="nav-links" data-nav-menu>
            <a href="{{ route('home') }}">Trang chủ</a>
            <a href="{{ route('about') }}">Giới thiệu</a>
            <a href="{{ route('courses') }}">Khóa học</a>
            <a href="{{ route('events') }}">Sự kiện</a>
            <a href="{{ route('teachers') }}">Giảng viên</a>
            <a href="{{ route('gallery') }}">Thư viện</a>
            <a href="{{ route('booking') }}" class="button button-sm">Đăng ký học thử</a>
        </nav>
    </div>
</header>
