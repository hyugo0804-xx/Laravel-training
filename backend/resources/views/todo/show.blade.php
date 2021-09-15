@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                詳細画面
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <th>id</th>
                        <td>{{$todos->id}}</td>
                    </tr>
                    <tr>
                        <th>title</th>
                        <td>{{$todos->title}}</td>
                    </tr>
                </table>
                <a href="{{url('todos') }}" class="btn btn-info">戻る</a>
            </div>
        </div>
    </div>
</div>
@endsection