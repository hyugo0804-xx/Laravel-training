@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                編集画面
            </div>
            <div class="card-body">
                <form method="POST" action="/todos/{{ $todos->id }}" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id" class="control-label">ID</label>
                    <div>{{ $todos->id }}</div>
                </div>
                <div class="form-group">
                    <label for="title" class="control-label">タイトル</label>
                    <input type="text" name="title"  class="form-control" value="{{ $todos->title }}">
                </div>
                <button class="btn btn-primary" type="submit">更新</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection