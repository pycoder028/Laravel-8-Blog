@extends('layouts.master')

@section('title','Blog Setting')

@section('content')

<div class="container-fluid px-4">

    <div class="row mt-3">
        <div class="col-md-12">

            @if(session('message'))
                <h4 class="alert alert-warning">{{ session('message') }}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Website Content</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/contents') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Starter Blog</label>
                            <textarea class="form-control" name="S_blog" rows="3">@if($content) {{ $content->S_blog }} @endif</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Our Mission</label>
                            <textarea class="form-control" name="s_mission" rows="3">@if($content) {{ $content->s_mission }} @endif</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Our Vision</label>
                            <textarea class="form-control" name="S_vision" rows="3">@if($content) {{ $content->S_vision }} @endif</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Footer Blog</label>
                            <textarea class="form-control" name="f_blog" rows="3">@if($content) {{ $content->f_blog }} @endif</textarea>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection