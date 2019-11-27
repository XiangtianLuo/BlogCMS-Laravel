@extends('layouts.app')

@section('content')
<a href="{{ route('tags.create') }}" class="btn btn-success float-right"> Add tag</a>
<div class="card card-default">
    <div class = 'card-header'>
      tags
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <th>NAME</th>
          <th> Posts Count<th>
        </thead>
        <tbody>
          @foreach($tags as $tag)
          <tr>
            <td>
              {{ $tag->name }}
            </td>
            <td>
              {{ $tag->posts->count()}}
            </td>
            <td>
              <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-info btn-sm">Edit</a>
            </td>
            <td>
              <button id='delete' class="btn btn-danger" onclick="handleDelete({{ $tag->id }})" > Delete </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>

@endsection

@section('scripts')

<script>
  function handleDelete(x) {
    $.ajax({
      type:'DELETE',
      url:'/tags/'+ x,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:()=>{
        location.reload();
      }
    })
  }
</script>

@endsection