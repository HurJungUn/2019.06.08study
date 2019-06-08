@extends('layout/master')

@section('maincontent')
<div class="wraper">
    <div class="boardtitle">
        게시물 작성
    </div>
    <form class="board" action="/login" method="POST">
    <input type="text" placeholder="TITLE" class="title">
        <div class="borderline"></div>
        <textarea placeholder="contents" class="contents"  aria-label="With textarea"></textarea>
    </form>
</div>
@endsection