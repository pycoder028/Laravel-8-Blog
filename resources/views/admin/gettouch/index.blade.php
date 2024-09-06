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
                    <form action="{{ url('admin/gettouch') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="@if($gettouch) {{ $gettouch->name }} @endif">
                        </div>
                        <div class="mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control" value="@if($gettouch) {{ $gettouch->slug }} @endif">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="5" class="form-control">@if($gettouch) {{ $gettouch->description }} @endif</textarea>
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