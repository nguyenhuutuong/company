@extends('layouts.app')

@section('title', 'Mẫu Nhà Phố - HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Mẫu Nhà Phố Đẹp',
    'breadcrumbs' => [
        ['name' => 'Mẫu nhà', 'url' => route('models.index')],
        ['name' => 'Nhà phố']
    ]
])

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-4">Chi Tiết Mẫu Nhà Phố</h2>
                <p>Nội dung chi tiết về các mẫu nhà phố đang được cập nhật. Vui lòng quay lại sau!</p>
                 <!-- Placeholder for gallery -->
                <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 400px; border-radius: 8px;">
                    <p>Khu vực ảnh/gallery sẽ hiển thị ở đây</p>
                </div>
            </div>
            <div class="col-lg-4">
                <h4>Thông tin dự án</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Phong cách:</strong> Hiện đại</li>
                    <li class="list-group-item"><strong>Diện tích:</strong> 80m²</li>
                    <li class="list-group-item"><strong>Số tầng:</strong> 3</li>
                    <li class="list-group-item"><strong>Chi phí dự kiến:</strong> 1.2 tỷ</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
