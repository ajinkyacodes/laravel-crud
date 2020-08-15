@extends('blogs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="btn pull-left pl-0">
                <h2>List of Blogs</h2>
            </div>
            <div class="btn pull-right pl-0">
                <a class="btn btn-sm btn-success mb-2" href="{{ route('blogs.create') }}"> Create Blog</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th width="5%" class="text-center">No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="250px" class="text-center">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td class="text-center">
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $blogs->links() !!}
      
@endsection