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
                <h2>Edit Blog</h2>
            </div>            
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('blogs.update',$blog->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $blog->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary mb-5">Update</button>
            </div>
        </div>
   
    </form>
@endsection