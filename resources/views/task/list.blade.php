@extends('layout')

{{--タイトル--}}
@section('title')(詳細画面)@endsection

{{--メインコンテンツ--}}
@section('contets')
        <h1>タスクの登録(未実装)</h1>
            <form action="./top.html" method="post">
                タスク名:<input><br>
                期限:<input type="date"><br>
                タスク詳細:<textarea></textarea><br>
                重要度:<label for=""><input type="radio" name="priority">低い</label>
                    <label for=""><input type="radio" name="priority" checked>普通</label>
                    <label for=""><input type="radio" name="priority" checked>高い</label>
            </form>
            
            <h1>タスクの一覧(未実装)</h1>
            <a href="./top.html">CSVダウンロード(未実装)</a><br>
            <table border="1">
                <tr>
                    <th>タスク名
                    <th>期限
                    <th>重要度
                </tr>
                <tr>
                    <td>HTML formの学習</td>
                    <td>2022/01/01</td>
                    <td>普通</td>
                    <td><a href="./detail.html">詳細閲覧</a></td>
                    <td><a href="./edit.html">編集</a></td>
                    <td><form action="./top.html"><button>完了</button></form>
                </tr>
                <tr>
                    <td>PHPの学習</td>
                    <td>2022/01/15</td>
                    <td>普通</td>
                    <td><a href="./detail.html">詳細閲覧</a></td>
                    <td><a href="./edit.html">編集</a></td>
                    <td><form action="./top.html"><button>完了</button></form>
                </tr>
                <tr>
                    <td>RDBの学習</td>
                    <td>2022/02/01</td>
                    <td>普通</td>
                    <td><a href="./detail.html">詳細閲覧</a></td>
                    <td><a href="./edit.html">編集</a></td>
                    <td><form action="./top.html"><button>完了</button></form>
                </tr>
                <tr>
                    <td>Laravelの学習</td>
                    <td>2022/02/15</td>
                    <td>普通</td>
                    <td><a href="./detail.html">詳細閲覧</a></td>
                    <td><a href="./edit.html">編集</a></td>
                    <td><form action="./top.html"><button>完了</button></form>
                </tr>
            </table>
            <!--ぺーネージョン-->
            現在1ページ目<br>
            <a href="./top.html">最初のページ(未実装)</a>/
            <a href="./top.html">前に戻る(未実装)</a>/
            <a href="./top.html">次に進む(未実装)</a>
            <br>
            <hr>
            <menu label="リンク">
            <a href="./index.html">ログアウト(未実装)</a><br>
            </menu>
@endsection