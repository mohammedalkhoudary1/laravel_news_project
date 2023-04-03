@extends('admin.layout.master')

@section('title')
Edit-Post
@endsection

@section('page_title')
Edit-Post
@endsection

@section('content')
<!-- Main content -->
<section class="content">
  <form action="{{ route('post.update', $post) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Title</label>
              <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}">
            </div>
            <div class="form-group">
              <label for="inputDescription">Post body</label>
              <textarea id="body" name="body" class="form-control" rows="4">
                {{ $post->body }}
              </textarea>
            </div>
            <div class="form-group">
              <label for="inputStatus">Category</label>
              <select id="category_id" name="category_id" class="form-control custom-select">
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $post->category_id==$category->id? 'selected': ' ' }}>{{ $category->title }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href{="#"} class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Update Post" class="btn btn-success float-right">
      </div>
    </div>
  </form>
</section>
<!-- /.content -->
@endsection