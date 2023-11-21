@extends('layouts.index')

@section('title')
    
@section('content')
@parent
<div class="mainNav">
    <ul>
        <li><a href="#">利用者登録一覧</a></li>
        <li><a href="#">予約一覧</a></li>
    </ul>
</div>
<div class="guestsList"></div>
<h3>利用者登録一覧</h3>
    <table>
        <th>お名前</th><th>ご住所</th><th>電話番号</th>
        @foreach ($guests as $guest)
            <tr>
                <td>{{$guest->name}}</td>
                <td>{{$guest->address}}</td>
                <td>{{$guest->tel}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    Copyright Hotel Group. all rights reserved.
@endsection