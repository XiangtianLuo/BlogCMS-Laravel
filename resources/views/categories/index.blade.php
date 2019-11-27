@extends('layouts.app')

@section('content')
<a href="{{ route('categories.create') }}" class="btn btn-success float-right"> Add Category</a>
<div class="card card-default">
    <div class = 'card-header'>
      Categories
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <th>NAME</th>
          <th> Posts Count<th>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr>
            <td>
              {{ $category->name }}
            </td>
            <td>
              {{ $category->posts->count() }}
            </td>
            <td>
              <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-info btn-sm">Edit</a>
            </td>
            <td>
              <button id='delete' class="btn btn-danger" onclick="handleDelete({{ $category->id }})" > Delete </button>
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
      url:'/categories/'+ x,
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