@extends('layouts.app')

@section('title', 'Giới Thiệu | Demo Trung Tâm Âm Nhạc')

@section('content')
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Giới thiệu</p>
        <h1>Một trung tâm âm nhạc được trình bày như một trải nghiệm, không chỉ là trang giới thiệu.</h1>
        <p>Câu chuyện thương hiệu, triết lý giảng dạy và không gian học tập được kể một cách tinh tế để tạo cảm giác tin cậy và gần gũi.</p>
    </div>
</section>

<section class="section">
    <div class="container artistic-story artistic-story-reverse">
        <div class="story-composition story-composition-about">
            <div class="composition-main composition-main-about"></div>
            <div class="composition-note composition-note-wide">
                <p class="quote-mark">“</p>
                <p>Âm nhạc cần một không gian đủ tinh tế để học viên cảm thấy mình được lắng nghe, được nâng đỡ và được trưởng thành theo nhịp riêng.</p>
            </div>
        </div>
        <div class="story-copy">
            <p class="eyebrow">Triết lý giảng dạy</p>
            <h2>Chúng tôi xem việc học nhạc là một hành trình nuôi dưỡng nội lực.</h2>
            <p>Kỹ thuật, sự đều đặn và chiều sâu cảm xúc luôn song hành trong quá trình học, giúp học viên phát triển bền vững và biết cách thể hiện bản thân qua âm nhạc.</p>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container about-atmosphere">
        <div class="section-heading">
            <p class="eyebrow">Không gian học tập</p>
            <h2>Một bầu không khí ấm áp, chỉn chu và giàu cảm hứng.</h2>
        </div>
        <div class="about-grid">
            <article class="about-panel about-panel-image about-panel-image-one">
                <div class="about-panel-copy">
                    <h3>Không gian chạm vào cảm xúc</h3>
                    <p>Chất liệu trầm, ánh sáng dịu và nhịp điệu thị giác cân bằng giúp mỗi buổi học trở nên gần gũi mà vẫn giữ được sự trang trọng.</p>
                </div>
            </article>
            <article class="feature-panel about-panel-image about-panel-image-two">
                <div class="about-panel-copy">
                    <h3>Sự đồng hành bền bỉ</h3>
                    <p>Mỗi học viên được hướng dẫn bằng sự quan sát kỹ lưỡng, nhịp học phù hợp và mục tiêu rõ ràng để tiến bộ tự nhiên qua từng giai đoạn.</p>
                </div>
            </article>
            <article class="feature-panel about-panel-image about-panel-image-three">
                <div class="about-panel-copy">
                    <h3>Những khoảnh khắc đáng nhớ</h3>
                    <p>Từ buổi học đầu tiên đến những lần trình diễn trước khán giả, trung tâm luôn tạo điều kiện để học viên cảm nhận niềm vui và sự tự tin lớn dần.</p>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
