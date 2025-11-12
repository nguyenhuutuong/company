@extends('layouts.app')

@section('title', 'Mẫu Nhà Đẹp - Công Ty Xây Dựng HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Thư Viện Mẫu Nhà',
    'breadcrumbs' => [
        ['name' => 'Mẫu nhà']
    ]
])

<style>
    .model-card {
        background-color: #fff;
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px S12px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        overflow: hidden;
        height: 100%;
    }
    .model-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    }
    .model-card-img {
        height: 250px;
        object-fit: cover;
    }
    .model-card .card-body {
        padding: 25px;
    }
    .model-card .card-title {
        font-weight: 700;
        color: #333;
    }
    .model-card .card-text {
        color: #666;
    }
</style>

<!-- House Models Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Khám Phá Các Mẫu Nhà Ưa Chuộng</h2>
            <p class="text-muted">Từ hiện đại đến cổ điển, chúng tôi mang đến những thiết kế nhà ở đáp ứng mọi nhu cầu và phong cách.</p>
        </div>

        <div class="row">
            <!-- Sample Model 1: Townhouse -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                <a href="{{ route('models.townhouse') }}" class="text-decoration-none w-100">
                    <div class="model-card">
                        <img src="https://images.unsplash.com/photo-1588880331179-bc9b93a8cb5e?q=80&w=1974&auto=format&fit=crop" class="model-card-img" alt="Mẫu nhà phố hiện đại">
                        <div class="card-body">
                            <h5 class="card-title">Mẫu Nhà Phố Hiện Đại</h5>
                            <p class="card-text">Thiết kế thông minh, tối ưu diện tích và ánh sáng, phù hợp với cuộc sống đô thị năng động.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Sample Model 2: Villa -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                <a href="{{ route('models.villa') }}" class="text-decoration-none w-100">
                    <div class="model-card">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop" class="model-card-img" alt="Biệt thự sân vườn">
                        <div class="card-body">
                            <h5 class="card-title">Biệt Thự Sân Vườn</h5>
                            <p class="card-text">Không gian sống sang trọng, gần gũi với thiên nhiên, mang lại sự thư thái và đẳng cấp.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Sample Model 3: Single-Story -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                <a href="{{ route('models.single-story') }}" class="text-decoration-none w-100">
                    <div class="model-card">
                        <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=80&w=2070&auto=format&fit=crop" class="model-card-img" alt="Nhà cấp 4 mái Thái">
                        <div class="card-body">
                            <h5 class="card-title">Nhà Cấp 4 Mái Thái</h5>
                            <p class="card-text">Thiết kế truyền thống kết hợp hiện đại, ấm cúng, phù hợp với gia đình nhiều thế hệ.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
