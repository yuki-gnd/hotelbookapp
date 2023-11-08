@extends('layouts.index')

@section('title')
    
@section('content')
<p>宿泊予約</p>
    <form action="/hotel/guest" method="POST">
        <table>
            <tr>
                <th>お名前</th><td><input type="text" name="name" required></td>
                <th>ご住所</th><td><input type="text" name="address"></td>
                <th>電話番号</th><td><input type="number" name="phone"></td>
                <th></th><td><input type="submit" value="宿泊予約へ進む"></td>
            </tr>
        </table>
    </form>
    
@endsection

@section('footer')
    Copyright Hotel Group. all rights reserved.
@endsection