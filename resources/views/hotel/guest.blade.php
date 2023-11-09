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
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>ご住所</th>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
            <th>電話番号</th>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="登録"></td>
            </tr>
        </table>
        <table>
            <tr>
                <th>登録内容</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->getData()}}</td>
                </tr>
            @endforeach
        </table>
    </form>
@endsection

@yield('footer')