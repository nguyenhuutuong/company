@extends('layouts.app')

@section('title', 'Thiết Kế & Thi Công Nội Thất - HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Thiết Kế & Thi Công Nội Thất',
    'breadcrumbs' => [
        ['name' => 'Dịch vụ', 'url' => route('services.index')],
        ['name' => 'Thiết kế & thi công nội thất']
    ]
])

<!-- Service Detail Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3">Kiến Tạo Không Gian Sống Đẳng Cấp</h2>
                <p class="text-muted">Nội thất không chỉ là sắp đặt đồ đạc, mà là nghệ thuật kiến tạo không gian sống, thể hiện phong cách và cá tính của gia chủ. Dịch vụ thiết kế và thi công nội thất của HTcons cam kết mang đến cho bạn một không gian sống hoàn hảo, tối ưu công năng và đậm chất thẩm mỹ.</p>

                <h4 class="fw-bold mt-5 mb-3">Các Hạng Mục Chính</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Thiết kế nội thất chung cư, nhà phố, biệt thự.</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Thi công đồ gỗ nội thất: tủ bếp, tủ quần áo, giường, kệ...</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Cải tạo và làm mới không gian nội thất.</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Cung cấp và lắp đặt thiết bị, đồ trang trí.</li>
                </ul>

                 <h4 class="fw-bold mt-5 mb-3">Phong Cách Đa Dạng</h4>
                <p>Từ Hiện đại, Tối giản đến Cổ điển hay Indochine, đội ngũ kiến trúc sư của chúng tôi luôn sẵn sàng lắng nghe và biến những ý tưởng của bạn thành hiện thực, tạo ra một không gian sống độc đáo và đầy cảm hứng.</p>

            </div>
            <div class="col-lg-4">
                <div class="card sticky-top" style="top: 20px;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Các Dịch Vụ Khác</h5>
                        <ul class="list-group list-group-flush">
                            <a href="{{ route('services.full-package-construction') }}" class="list-group-item list-group-item-action">Xây Nhà Trọn Gói</a>
                            <a href="{{ route('services.exterior-design') }}" class="list-group-item list-group-item-action">Thiết Kế & Thi Công Ngoại Thất</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
