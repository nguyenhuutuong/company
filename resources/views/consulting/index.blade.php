@extends('layouts.app')

@section('title', 'Tư Vấn Xây Dựng - HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Dịch Vụ Tư Vấn',
    'breadcrumbs' => [
        ['name' => 'Tư vấn']
    ]
])

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Hỗ Trợ Toàn Diện Cho Ngôi Nhà Của Bạn</h2>
            <p class="text-muted">Từ quy trình, pháp lý đến phong thủy, chúng tôi luôn sẵn sàng đồng hành.</p>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Quy Trình Làm Việc</h5>
                        <p class="card-text">Tìm hiểu các bước làm việc chuyên nghiệp, minh bạch của chúng tôi để đảm bảo dự án thành công tốt đẹp.</p>
                        <a href="{{ route('consulting.process') }}" class="btn btn-danger">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Tư Vấn Phong Thủy</h5>
                        <p class="card-text">Áp dụng các yếu tố phong thủy vào thiết kế để mang lại vượng khí, tài lộc và sự an tâm cho gia chủ.</p>
                        <a href="{{ route('consulting.feng-shui') }}" class="btn btn-danger">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
