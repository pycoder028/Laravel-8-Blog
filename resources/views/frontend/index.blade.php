@extends('layouts.app')

@section('title', "$setting->meta_title")
@section('meta_description', "$setting->meta_description")
@section('meta_keyword', "$setting->meta_keyword")

@section('content')

<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme">
                    @foreach($all_categories as $all_cate_item)
                    <div class="item">
                        <a href="{{ url('tutorial/'.$all_cate_item->slug) }}" class="text-decoration-none">
                            <div class="card">
                                <img class="imageStyle" src="{{ asset('uploads/category/'.$all_cate_item->image) }}" alt="Image">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">{{ $all_cate_item->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-1 bg-gray">
    <div class="container">
        <div class="border text-center p-3">
            <h3>Advertise here</h3>
        </div>
    </div>
</div>

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Neurospecial Blog</h4>
                <div class="underline">

                </div>
                @php
                $content = App\Models\Content::find(1);
                @endphp
                <p class="text-justify">
                    {{ $content->S_blog }}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-4 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All Categories List</h4>
                <div class="underline">
                </div>
            </div>
            @foreach($all_categories as $all_cate_item)
                <div class="col-md-3">
                    <div class="card card-body mb-3">
                        <a href="{{url('tutorial/'.$all_cate_item->slug)}}" class="text-decoration-none">
                            <h5 class="text-dark mb-0">{{ $all_cate_item->name }}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="py-4 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Latest Posts</h4>
                <div class="underline">
                </div>
            </div>
            <div class="col-md-8">
                @foreach($latest_post as $latest_post_item)
                
                    <div class="card card-body bg-gray shadow mb-3">
                        <a href="{{url('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug)}}" class="text-decoration-none">
                            <h5 class="text-dark mb-0">{{ $latest_post_item->name }}</h5>
                        </a>
                        <h6>Posted On: {{ $latest_post_item->created_at->format('d-m-Y') }}</h6>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="card style="width: 18rem;" >
                        <h2 class="p-2">Get in touch</h2>
                        <img style="width: 200px;" src="{{ asset('uploads/category/'.$all_cate_item->image) }}" class="rounded mx-auto d-block" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#"><i class="fa-solid fa-envelopes-bulk fa-2xl" style="color: #40a2ec;"></i></a>
                          <a href="#"><i class="fa-brands fa-youtube fa-2xl" style="color: #ff0000"></i></a>
                          <a href="#"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>
                          <a href="#"><i class="fa-brands fa-square-instagram fa-2xl" style="color: #d51515;"></i></a>
                          <a href="#"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Our Mission</h4>
                <div class="underline">

                </div>
                <p class="text-justify">
                    {{ $content->s_mission }}
                </p>
            </div>
            <div class="col-md-6">
                <h4>Our Vision</h4>
                <div class="underline">

                </div>
                <p class="text-justify">
                    {{ $content->S_vision }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection