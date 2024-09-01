@extends('layouts.app')

@section('content')

@section('title', "Neurospecial Blogging Website")
@section('meta_description', "Neurospecial Blogging Website")
@section('meta_keyword', "Neurospecial Blogging Website")


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
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae error beatae eligendi ab aspernatur qui expedita ipsam. Deserunt suscipit voluptate quis. Vel voluptatibus nisi at, magni nesciunt aspernatur nobis provident!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio reprehenderit porro, doloribus tempore consectetur eius rem ut voluptatem at ipsam pariatur consequuntur. Pariatur exercitationem doloremque adipisci perferendis, qui quos eligendi?
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
                <div class="border text-center p-3">
                    <h3>Advertise here</h3>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection