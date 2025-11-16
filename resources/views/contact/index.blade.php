@extends('layouts.app')

@section('title', 'Liên hệ - HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Liên Hệ Với Chúng Tôi',
    'breadcrumbs' => [
        ['name' => 'Liên hệ']
    ]
])

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="card-title mb-4">Thông tin liên hệ</h3>
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-3">
                                        <i class="fas fa-map-marker-alt fa-2x me-3 text-primary"></i>
                                        <div>
                                            <strong>Địa chỉ:</strong><br>
                                            {{ setting('site.address') }}
                                        </div>
                                    </li>
                                    <li class="d-flex mb-3">
                                        <i class="fas fa-phone-alt fa-2x me-3 text-primary"></i>
                                        <div>
                                            <strong>Điện thoại:</strong><br>
                                            {{ setting('site.phone') }}
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-envelope fa-2x me-3 text-primary"></i>
                                        <div>
                                            <strong>Email:</strong><br>
                                            {{ setting('site.email') }}
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.630623349635!2d106.68112831474883!3d10.76291199233079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c0a5a5d7b%3A0x8c7c0b4b3c3b3d3b!2sHTCons!5e0!3m2!1svi!2s!4v1678886482563!5m2!1svi!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="card-title mb-4">Gửi yêu cầu của bạn</h3>
                                <p class="text-muted mb-4">Chúng tôi sẽ trả lời bạn trong thời gian sớm nhất.</p>
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên của bạn">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Chủ đề</label>
                                        <input type="text" class="form-control" id="subject" placeholder="Nhập chủ đề">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Nội dung</label>
                                        <textarea class="form-control" id="message" rows="5" placeholder="Nhập nội dung yêu cầu"></textarea>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg">Gửi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
@endpush
