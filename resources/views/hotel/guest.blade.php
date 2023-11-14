@extends('layouts.index')

@section('content')
@parent
<h2>利用者登録</h2>
<p>利用者登録をしてから予約に進んでください。</p>
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

    <form action="/hotel/guest" method="POST">
        <table>
            @csrf
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>ご住所</th>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
            <th>電話番号</th>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="登録"></td>
            </tr>
        </table>

    </form>
            <table>
            <tr>
                <th>※登録内容※</th>
            </tr>
            <tr>
                <th>お名前</th><th>ご住所</th><th>電話番号</th>
                @foreach($param as $item)
                <td>{{$item['name']}}</td><td>{{$item['address']}}</td><td>{{$item['phone']}}</td>
            </tr>
        </table>
@endsection

@yield('footer')