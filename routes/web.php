<?php

use Illuminate\Support\Facades\Route;

$courses = [
    [
        'slug' => 'piano',
        'name' => 'Piano',
        'tagline' => 'Nền tảng cổ điển với cách thể hiện đầy cảm xúc',
        'level' => 'Cơ bản đến nâng cao',
        'description' => 'Xây dựng kỹ thuật, cảm thụ âm nhạc và tư duy luyện tập bài bản thông qua lộ trình piano có cấu trúc rõ ràng.',
        'image' => 'assets/images/course-piano.jpg',
        'cta_label' => 'Đăng ký học thử',
        'benefits' => [
            'Lộ trình học từ nền tảng đến trình diễn',
            'Rèn kỹ thuật ngón, cảm âm và khả năng biểu đạt',
            'Phù hợp cho học viên muốn đi từ cơ bản đến biểu diễn bài bản',
        ],
    ],
    [
        'slug' => 'violin',
        'name' => 'Violin',
        'tagline' => 'Độ chính xác, tư thế đẹp và kiểm soát cảm xúc',
        'level' => 'Cơ bản đến trung cấp',
        'description' => 'Rèn luyện cao độ, kiểm soát vĩ và sự tự tin khi trình diễn trong môi trường học tập chỉn chu.',
        'image' => 'assets/images/course-violin.jpg',
        'cta_label' => 'Đăng ký học thử',
        'benefits' => [
            'Xây nền tảng cao độ, tư thế và cách cầm vĩ đúng',
            'Luyện khả năng nghe, hòa tấu và biểu diễn tự tin',
            'Phù hợp cho học viên yêu thích sự tinh tế và kỷ luật',
        ],
    ],
    [
        'slug' => 'guitar',
        'name' => 'Guitar',
        'tagline' => 'Tiết mục hiện đại trên nền tảng kỹ thuật vững chắc',
        'level' => 'Cơ bản đến nâng cao',
        'description' => 'Kết hợp bài hát hiện đại, rèn tiết tấu và luyện kỹ thuật trong một lộ trình linh hoạt và thực tế.',
        'image' => 'assets/images/course-guitar.jpg',
        'cta_label' => 'Đăng ký học thử',
        'benefits' => [
            'Kết hợp đệm hát, tiết tấu và kỹ thuật ngón linh hoạt',
            'Học qua bài hát gần gũi nhưng vẫn giữ nền tảng chắc',
            'Phù hợp với học viên yêu thích sự hiện đại và thực hành cao',
        ],
    ],
    [
        'slug' => 'vocal',
        'name' => 'Thanh nhạc',
        'tagline' => 'Hơi thở, độ vang và thần thái sân khấu',
        'level' => 'Cơ bản đến trung cấp',
        'description' => 'Rèn luyện hơi thở, xử lý bài hát và sự tự tin sân khấu thông qua hướng dẫn trình diễn có định hướng.',
        'image' => 'assets/images/course-vocal.jpg',
        'cta_label' => 'Đăng ký học thử',
        'benefits' => [
            'Luyện hơi thở, khẩu hình và cách xử lý bài hát',
            'Tăng sự tự tin khi thể hiện trước người khác',
            'Phù hợp cho học viên muốn phát triển giọng hát và phong thái',
        ],
    ],
];

$teachers = [
    [
        'name' => 'Elena Tran',
        'instrument' => 'Piano',
        'experience' => '12 năm kinh nghiệm',
        'bio' => 'Chuyên về tác phẩm cổ điển, cảm xúc biểu đạt và huấn luyện trình diễn cho học viên trẻ.',
    ],
    [
        'name' => 'Minh Hoang',
        'instrument' => 'Violin',
        'experience' => '10 năm kinh nghiệm',
        'bio' => 'Tập trung vào kỷ luật kỹ thuật, khả năng nghe trong hòa tấu và phong thái sân khấu tinh tế.',
    ],
    [
        'name' => 'Anna Vu',
        'instrument' => 'Thanh nhạc',
        'experience' => '8 năm kinh nghiệm',
        'bio' => 'Đồng hành cùng học viên trong việc kiểm soát hơi thở và kể chuyện bằng giọng hát một cách tự tin.',
    ],
];

$gallery = [
    ['title' => 'Đêm biểu diễn piano', 'type' => 'Hình ảnh'],
    ['title' => 'Lớp masterclass violin', 'type' => 'Video'],
    ['title' => 'Khoảnh khắc học tại phòng tập', 'type' => 'Hình ảnh'],
    ['title' => 'Buổi tập hòa tấu', 'type' => 'Video'],
    ['title' => 'Buổi showcase cho phụ huynh', 'type' => 'Hình ảnh'],
    ['title' => 'Khoảnh khắc lớp học cá nhân', 'type' => 'Video'],
];

$events = [
    [
        'slug' => 'recital-mua-he',
        'date' => '25.05.2026',
        'title' => 'Recital mùa hè của học viên piano',
        'description' => 'Một buổi biểu diễn nơi học viên chia sẻ thành quả luyện tập trước phụ huynh và khách mời trong không gian ấm cúng.',
        'image' => 'assets/images/event-recital.jpg',
        'cta_label' => 'Đăng ký học thử',
        'highlights' => [
            'Biểu diễn các tiết mục piano chọn lọc theo từng độ tuổi',
            'Không gian gần gũi để học viên rèn sự tự tin trên sân khấu',
            'Phụ huynh có thể theo dõi rõ hành trình tiến bộ của con',
        ],
    ],
    [
        'slug' => 'workshop-violin',
        'date' => '01.06.2026',
        'title' => 'Workshop violin cho học viên mới',
        'description' => 'Buổi trải nghiệm giúp học viên làm quen với tư thế, cách cầm vĩ và cảm giác đầu tiên khi học violin.',
        'image' => 'assets/images/event-workshop.jpg',
        'cta_label' => 'Đăng ký học thử',
        'highlights' => [
            'Làm quen với nhạc cụ và nền tảng kỹ thuật cơ bản',
            'Gặp gỡ giảng viên để được hướng dẫn trực tiếp',
            'Phù hợp cho học viên mới bắt đầu hoặc đang cân nhắc theo học',
        ],
    ],
    [
        'slug' => 'ngay-mo-cua',
        'date' => '08.06.2026',
        'title' => 'Ngày mở cửa lớp học thử',
        'description' => 'Phụ huynh và học viên có thể ghé thăm không gian học tập, trò chuyện với giảng viên và nghe tư vấn lộ trình.',
        'image' => 'assets/images/event-open-day.jpg',
        'cta_label' => 'Đăng ký học thử',
        'highlights' => [
            'Tham quan không gian học tập và khu vực biểu diễn',
            'Nghe tư vấn lộ trình học theo độ tuổi và mục tiêu',
            'Trải nghiệm trực tiếp bầu không khí của trung tâm',
        ],
    ],
];

Route::view('/', 'pages.home', [
    'courses' => $courses,
    'teachers' => $teachers,
    'gallery' => $gallery,
])->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/courses', 'pages.courses', ['courses' => $courses])->name('courses');
Route::view('/events', 'pages.events', ['events' => $events])->name('events');
Route::view('/teachers', 'pages.teachers', ['teachers' => $teachers])->name('teachers');
Route::view('/gallery', 'pages.gallery', ['gallery' => $gallery])->name('gallery');
Route::view('/booking', 'pages.booking', ['courses' => $courses])->name('booking');
