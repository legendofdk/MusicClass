@extends('layouts.app')

@section('title', 'Sự Kiện | Demo Trung Tâm Âm Nhạc')

@section('content')
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Sự kiện</p>
        <h1>Nơi cập nhật những hoạt động nổi bật của trung tâm.</h1>
        <p>Từ recital học viên, workshop chuyên đề đến các buổi học thử và chương trình biểu diễn, mọi tin tức quan trọng đều được tổng hợp tại đây.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">Tin nổi bật</p>
            <h2>Những điểm hẹn đáng chú ý trong thời gian tới.</h2>
        </div>
        <div class="card-grid card-grid-3">
            @foreach ($events as $event)
                <article class="feature-panel event-card">
                    <div class="course-card-media">
                        <img src="{{ asset($event['image']) }}" alt="{{ $event['title'] }}">
                    </div>
                    <p class="card-kicker">{{ $event['date'] }}</p>
                    <h3>{{ $event['title'] }}</h3>
                    <p>{{ $event['description'] }}</p>
                    <ul class="detail-list">
                        @foreach ($event['highlights'] as $highlight)
                            <li>{{ $highlight }}</li>
                        @endforeach
                    </ul>
                    <a class="text-link" href="{{ route('booking') }}">{{ $event['cta_label'] }}</a>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container card-grid card-grid-2">
        <article class="feature-panel">
            <p class="eyebrow">Tin tức trung tâm</p>
            <h2>Không khí học tập được duy trì qua từng hoạt động nhỏ.</h2>
            <p>Bên cạnh các buổi biểu diễn, trung tâm thường xuyên tổ chức hoạt động nội bộ để học viên thêm tự tin, kết nối với bạn học và gần gũi hơn với âm nhạc.</p>
        </article>
        <article class="feature-panel">
            <p class="eyebrow">Cập nhật nhanh</p>
            <ul class="detail-list">
                <li>Lịch recital và showcase theo mùa</li>
                <li>Workshop chuyên đề theo từng bộ môn</li>
                <li>Thông báo lớp học thử và lịch tham quan trung tâm</li>
                <li>Những khoảnh khắc đáng nhớ của học viên và giảng viên</li>
            </ul>
        </article>
    </div>
</section>
@endsection
