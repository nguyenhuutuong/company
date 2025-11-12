@extends('layouts.app')

@section('title', 'Liên Hệ - Công Ty Xây Dựng HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Liên Hệ Với Chúng Tôi',
    'breadcrumbs' => [
        ['name' => 'Liên hệ']
    ]
])

<!-- Contact Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h2 class="section-title-underline">Gửi tin nhắn cho chúng tôi</h2>
                <form action="#" method="POST">
                    @csrf <!-- Laravel CSRF Protection -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Họ và Tên</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Địa chỉ Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Chủ đề</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Nội dung tin nhắn</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Gửi Tin Nhắn</button>
                </form>
            </div>
            <div class="col-lg-5">
                <h2 class="section-title-underline">Thông tin liên lạc</h2>
                <div class="contact-info-panel">
                    <div class="info-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <div>
                            <strong>Địa chỉ:</strong>
                            <p>123 Đường ABC, Phường 1, Quận 1, TP. Hồ Chí Minh</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-telephone-fill"></i>
                        <div>
                            <strong>Hotline 24/7:</strong>
                            <p><a href="tel:19001234">1900 1234</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-envelope-fill"></i>
                        <div>
                            <strong>Email:</strong>
                            <p><a href="mailto:info@tencongty.com">info@tencongty.com</a></p>
                        </div>
                    </div>
                     <div class="info-item">
                        <i class="bi bi-clock-fill"></i>
                        <div>
                            <strong>Giờ làm việc:</strong>
                            <p>Thứ 2 - Thứ 7: 08:00 - 17:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="container-fluid px-0">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.447171783419!2d106.69733431526019!3d10.777017992320767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4ec5b81183%3A0x864016335f69400e!2zQ2jhu6MgQuG6v24gVGjDoG5o!5e0!3m2!1svi!2s!4v1678886 бен_тхань_маркет" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection
