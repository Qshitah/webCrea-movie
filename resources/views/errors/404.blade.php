@extends('welcome')

@section('title', 'Error 404')

@section('content')
<div class="page-content">
    <!-- 404 Area Start -->
    <section class="block-404">
        <div class="container-fluid">
            <div class="content">
                <img src="/media/404.png" class="mb-32" alt="">
                <h4 class="h-32 font-sec-2 bold mb-32">Page Not Found</h4>
                <a href="{{url('/')}}" class="cus-btn primary">Go back to home</a>
            </div>
        </div>
    </section>
    <!-- 404 Area end -->
</div>
@endsection