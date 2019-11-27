@extends('layouts.app')

@section('content')

<div  class='d-flex justify-content-end mb-2' >
  <a href="{{ route('posts.create') }}" class='btn btn-success'> Add Post</a>
</div>
<div class="card card-default">
  <div class="card-header">POSTS</div>
  <div class="card-body">
    <table class="table">
      <thead>
        <th>Image</th>
        <th>Title</th>
        <th>Category</th>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <td>
            <img src="{{ asset('storage/' . $post->image) }}" width="60px" height="60px" alt="" >
          </td>
          <td>
            {{ $post->title }}
          </td>
          <td>
            <a href="{{ route('categories.edit', $post->category->id) }}">
              {{ $post->category->name }}
            </a>
          </td>
          @if(!$post->trashed())
          <td>
            <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-sm btn-primary">EDIT</a>
          </td>
          @else
          <td>
            <form action="{{route('restore-posts', $post->id)}}" method="POST">
              @csrf
              @method('PUT')
                <button class="btn btn-sm btn-primary">RESTORE</button>
            </form>
          </td>
          @endif
          <td>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-warning" type='submit'> {{ $post->trashed() ? 'DELETE':'TRASHED' }} </button>
            </form>
          </td>
        </tr>
        @endforeach

      </tbody>

    </table>
  </div>    

</div>
@endsection