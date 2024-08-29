@extends('layouts.app')

@section('content')

<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="category-heading">
                    <h4 class="mb-0">{!! $post->name !!}</h4>
                </div>

                <div class="mt-2">
                    <h6>{{ $post->category->name.' / '.$post->name }}</h6>
                </div>

                <div class="card card-shadow mt-4">
                    <div class="card-body">
                        <span class="text-justify">{!! $post->description !!}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="border p-2 my-2">
                    <h4>Advertising Area</h4>
                </div>
                <div class="border p-2 my-2">
                    <h4>Advertising Area</h4>
                </div>
                <div class="border p-2 my-2">
                    <h4>Advertising Area</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection