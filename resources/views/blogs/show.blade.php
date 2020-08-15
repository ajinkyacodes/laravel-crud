@extends('blogs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">            
            <div>
                <a class="btn btn-sm btn-secondary mb-3" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div>
                <h2 class="mb-4">Show Blog</h2>
            </div>            
        </div>
    </div>
   
    <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $blog->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $blog->description }}
            </div>
        </div>
    </div>
@endsection