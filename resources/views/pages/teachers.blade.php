@extends('layouts.app')

@section('title', 'Giảng Viên | Demo Trung Tâm Âm Nhạc')

@section('content')
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Giảng viên</p>
        <h1>Hồ sơ giảng viên được thiết kế để xây dựng độ tin cậy nhanh.</h1>
        <p>Mỗi giảng viên đều mang đến một thế mạnh riêng, đồng hành cùng học viên bằng chuyên môn vững vàng và sự tận tâm trong giảng dạy.</p>
    </div>
</section>

<section class="section">
    <div class="container card-grid card-grid-3">
        @foreach ($teachers as $teacher)
            <article class="profile-card">
                <div class="profile-portrait"></div>
                <h3>{{ $teacher['name'] }}</h3>
                <p class="card-kicker">{{ $teacher['instrument'] }}</p>
                <p>{{ $teacher['experience'] }}</p>
                <p>{{ $teacher['bio'] }}</p>
            </article>
        @endforeach
    </div>
</section>
@endsection
