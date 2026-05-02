@extends('layouts.app')

@section('title', 'Khóa Học | Demo Trung Tâm Âm Nhạc')

@section('content')
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Khóa học</p>
        <h1>Lộ trình học có cấu trúc rõ ràng cho một trung tâm âm nhạc hiện đại.</h1>
        <p>Mỗi bộ môn được xây dựng với lộ trình rõ ràng để học viên tiến bộ đều đặn, tự tin biểu diễn và nuôi dưỡng tình yêu với âm nhạc.</p>
    </div>
</section>

<section class="section">
    <div class="container card-grid card-grid-2">
        @foreach ($courses as $course)
            <article class="feature-panel course-card">
                <div class="course-card-media">
                    <img src="{{ asset($course['image']) }}" alt="{{ $course['name'] }}">
                </div>
                <p class="card-kicker">{{ $course['level'] }}</p>
                <h2>{{ $course['name'] }}</h2>
                <p class="course-tagline">{{ $course['tagline'] }}</p>
                <p>{{ $course['description'] }}</p>
                <ul class="detail-list">
                    @foreach ($course['benefits'] as $benefit)
                        <li>{{ $benefit }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('booking') }}" class="text-link">{{ $course['cta_label'] }}</a>
            </article>
        @endforeach
    </div>
</section>
@endsection
