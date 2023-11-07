@extends('layouts.index')

@section('title')
    
@section('content')
<p>空室・宿泊プラン検索</p>
    <form action="/hotel/booking" method="POST">
        <table>
            <tr>
                <th></th><td><input type="month" name="calendar" required></td>
                <th></th><td><input type="number" name="peoplenum" value="2"></td>
                <th></th><td><input type="number" name="roomnum" value="1"></td>
                <th></th><td><input type="submit" value="検索"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    Copyright Hotel Group. all rights reserved.
@endsection