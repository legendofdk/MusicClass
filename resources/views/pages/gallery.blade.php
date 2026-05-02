@extends('layouts.app')

@section('title', 'Thư Viện | Demo Trung Tâm Âm Nhạc')

@section('content')
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Thư viện</p>
        <h1>Sự kết hợp giữa hình ảnh và video để tạo bằng chứng cảm xúc.</h1>
        <p>Những hình ảnh và thước phim ngắn giúp phụ huynh và học viên cảm nhận rõ hơn bầu không khí học tập, biểu diễn và trưởng thành qua từng chặng đường.</p>
    </div>
</section>

<section class="section">
    <div class="container gallery-grid">
        <article class="gallery-card gallery-card-large">
            <div class="video-embed">
                <iframe
                    src="https://www.youtube-nocookie.com/embed/7p8ZY7mfwW8"
                    title="HIMARI - Curtis Recital"
                    loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>
            <h3>Violin recital học viện âm nhạc</h3>
            <p>Một màn trình diễn violin trong không gian học viện, rất hợp để gợi cảm giác đào tạo bài bản và đẳng cấp biểu diễn.</p>
        </article>
        <article class="gallery-card gallery-card-large">
            <div class="video-embed">
                <iframe
                    src="https://www.youtube-nocookie.com/embed/BBFhjbpb6RM"
                    title="Faculty Student Recital Highlights"
                    loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>
            <h3>Khoảnh khắc biểu diễn thầy và trò</h3>
            <p>Video highlight recital phù hợp để thể hiện môi trường học tập có biểu diễn thật, tạo cảm giác gần với trung tâm âm nhạc thực tế.</p>
        </article>
        <article class="gallery-card gallery-card-large">
            <div class="video-embed">
                <iframe
                    src="https://www.youtube-nocookie.com/embed/lnkwwUGBZTY"
                    title="HIMARI Berliner Philharmoniker Excerpt"
                    loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>
            <h3>Biểu diễn violin truyền cảm hứng</h3>
            <p>Một video có chất lượng trình diễn rất mạnh, phù hợp để nâng cảm xúc và độ sang cho phần thư viện.</p>
        </article>
        @foreach ($gallery as $item)
            <article class="gallery-card gallery-card-large">
                <div class="gallery-media {{ strtolower($item['type']) === 'video' ? 'is-video' : '' }}">
                    <span>{{ $item['type'] }}</span>
                </div>
                <h3>{{ $item['title'] }}</h3>
                <p>Nội dung mẫu cho buổi biểu diễn, lớp học hoặc sự kiện, sẵn sàng thay bằng media thực tế.</p>
            </article>
        @endforeach
    </div>
</section>
@endsection
