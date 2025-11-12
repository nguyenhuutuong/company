@extends('layouts.app')

@section('title', 'Quy Trình Làm Việc - HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Quy Trình Làm Việc Chuyên Nghiệp',
    'breadcrumbs' => [
        ['name' => 'Tư vấn', 'url' => route('consulting.index')],
        ['name' => 'Quy trình làm việc']
    ]
])

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Minh Bạch & Rõ Ràng</h2>
            <p class="text-muted">Chúng tôi tin rằng một quy trình làm việc rõ ràng là nền tảng cho một dự án thành công.</p>
        </div>
        <!-- Content will be added later -->
        <p class="text-center">Nội dung đang được cập nhật...</p>
    </div>
</section>

@endsection
