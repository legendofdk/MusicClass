@extends('layouts.app')

@section('title', 'Đăng Ký Học Thử | Demo Trung Tâm Âm Nhạc')

@section('content')
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Đăng ký học thử</p>
        <h1>Bắt đầu hành trình âm nhạc bằng một buổi học thử.</h1>
        <p>Để lại thông tin để trung tâm liên hệ tư vấn, sắp xếp lịch phù hợp và giúp bạn chọn bộ môn phù hợp với nhu cầu học tập.</p>
    </div>
</section>

<section class="section">
    <div class="container form-layout">
        <div class="feature-panel">
            <p class="eyebrow">Tại sao phần này quan trọng</p>
            <h2>Một buổi học thử giúp bạn cảm nhận rõ môi trường học tập.</h2>
            <ul class="detail-list">
                <li>Form học thử giúp giữ lại sự quan tâm đúng thời điểm</li>
                <li>Thông tin giảng viên và khóa học làm giảm độ do dự của phụ huynh, học viên</li>
                <li>Trung tâm có thể tư vấn lộ trình phù hợp theo độ tuổi và mục tiêu học tập</li>
            </ul>
        </div>

        <form class="booking-form" data-demo-form>
            <div class="field-grid">
                <label>
                    <span>Họ và tên</span>
                    <input type="text" placeholder="Nhập họ và tên">
                </label>
                <label>
                    <span>Số điện thoại</span>
                    <input type="text" placeholder="Nhập số điện thoại">
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" placeholder="ten@example.com">
                </label>
                <label>
                    <span>Môn học quan tâm</span>
                    <select>
                        @foreach ($courses as $course)
                            <option>{{ $course['name'] }}</option>
                        @endforeach
                    </select>
                </label>
                <label>
                    <span>Khung giờ mong muốn</span>
                    <select>
                        <option>Tối trong tuần</option>
                        <option>Sáng thứ bảy</option>
                        <option>Chiều chủ nhật</option>
                    </select>
                </label>
                <label class="field-full">
                    <span>Ghi chú</span>
                    <textarea rows="5" placeholder="Chia sẻ độ tuổi, trình độ hiện tại hoặc mục tiêu học tập"></textarea>
                </label>
            </div>

            <button type="submit" class="button">Gửi đăng ký</button>
            <p class="form-success" hidden>Thông tin của bạn đã được ghi nhận. Trung tâm sẽ sớm liên hệ để tư vấn và sắp xếp lịch học thử.</p>
        </form>
    </div>
</section>
@endsection
