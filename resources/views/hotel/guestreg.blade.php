@extends('layouts.index')

@section('content')
<form action="/hotel/guestreg" method="GET"></form>
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