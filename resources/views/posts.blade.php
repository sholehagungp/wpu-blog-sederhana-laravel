@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="mb-3  row justify-content-center">
  <div class="col-md-6"> 
    <form action="/posts">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif 
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif 
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-secondary" type="submit">Search</button>
      </div>

    </form>
  </div>
</div>

    @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
                <div style="max-height: 400px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                </div>
                   
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                @endif
      
      <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <small class="text-muted">
        By. <a class="text-decoration-none"  href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> 
        {{ $posts[0]->created_at->diffForHumans() }}
      </small>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary" >Read more</a> 
      </div>
    </div>  
   
    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $p)
        <div class="col-md-4 mb-3">
          <div class="card" >
            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
              <a href="/posts?category={{ $p->category->slug }}" class="text-white text-decoration-none">{{ $p->category->name }}</a>
            </div>
            @if ($p->image)
            <img src="{{ asset('storage/' . $p->image) }}" alt="{{ $p->category->name }}" class="img-fluid ">
            @else
            <img src="https://source.unsplash.com/500x400?{{ $p->category->name }}" class="card-img-top" alt="{{ $p->category->name }}">
            @endif
           
            
            <div class="card-body">
              <h5 class="card-title">{{ $p->title }}</h5>
              <small class="text-muted">
                By. <a class="text-decoration-none"  href="/posts?author={{ $p->author->username }}">{{ $p->author->name }}</a> 
                {{ $posts[0]->created_at->diffForHumans() }}
              </small>
              <p class="card-text">{{ $p->excerpt }}</p>
              <a href="/posts/{{ $p->slug }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        @endforeach 
      </div>
    </div>

   {{-- @foreach ($posts->skip(1) as $p)
    <article class="mb-2 border-bottom pb-2">
       <h4>
        <a href="/posts/{{ $p->slug }}" class="text-decoration-none" >{{ $p->title }}</a>   
        </h4>
        <p>By. <a class="text-decoration-none"  href="/authors/{{ $p->author->username }}">{{ $p->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $p->category->slug }}">{{ $p->category->name }}</a> </p>
       <p>{{ $p->excerpt }}</p>
       <a href="/posts/{{ $p->slug }}" class="text-decoration-none" >Read more. .</a> 
    </article>
   @endforeach --}}
   @else
   <p class="text-center fs-4">No Post Found</p>
@endif

  {{ $posts->links() }}

@endsection