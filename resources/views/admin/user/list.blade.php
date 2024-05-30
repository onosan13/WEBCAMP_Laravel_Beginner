@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ユーザー一覧</h1>
        <table border="1">
            <tr>
                <th>ユーザID</th>
                <th>ユーザ名</th>
                <th>タスク件数</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}
                    <td>{{ $user->name }}
                    <td>{{ $user->task_num }}
                </tr>
            @endforeach
        </table>
@endsection