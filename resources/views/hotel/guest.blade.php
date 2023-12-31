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
                <td><input type="tel" name="tel"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="登録"></td>
            </tr>
        </table>
    </form>

        <h3>※ご登録内容</h3>
        <table>
            <th>お名前</th><th>ご住所</th><th>電話番号</th>
            @foreach($guests as $guest)
            <tr>
                <td>{{$guest->name}}</td>
                <td>{{$guest->address}}</td>
                <td>{{$guest->tel}}</td>
            </tr>
            @endforeach
        </table>
@endsection

@yield('footer')