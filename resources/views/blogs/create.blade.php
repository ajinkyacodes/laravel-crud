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
            <h2>Create Blog</h2>
        </div>        
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('blogs.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea id="article-ckeditor" class="form-control" style="height:280px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mb-5">Create</button>
        </div>
    </div>
   
</form>
@endsection