@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>
@if (session()->has('success')) 
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif
<div class="table-responsive col-lg-8">
  <a class="btn btn-primary mb-3" href="/dashboard/posts/create">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td>
                  <a class="badge bg-info" href="/dashboard/posts/{{ $post->slug }}"><span data-feather="eye"></span></a>

                  <a class="badge bg-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit"></span></a>

                  <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                  </form>
                  
              </td>
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>
@endsection