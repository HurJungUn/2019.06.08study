@extends('layout/master')

@section('maincontent')
<br>
<form class="box" action="/login" method="POST">
        <h2>로그인 해주세요</h2>
        <ul>
            <li><input type="text" name="userid" placeholder="id" class="idbox"></li>
            <li><input type="password" name="password" placeholder="password" class="psbox"></li>
            <li><input type="submit" value="LOGIN" class="submitbox"></li>
        </ul>
    </form>
@endsection