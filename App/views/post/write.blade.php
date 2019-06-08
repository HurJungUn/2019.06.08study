@extends('layout/master')

@section('scriptsection')
    <script src="/js/editor.js"></script>
@endsection

@section('maincontent')
<div class="wraper">
    <div class="boardtitle">
        게시물 작성
    </div>
    <form class="board" action="/post" method="POST">
    <input type="text" name="title" placeholder="TITLE" class="title">
        <div class="borderline"></div>
        <textarea id="editor" placeholder="contents" class="contents" name="content" aria-label="With textarea"></textarea>
        <br>
        <input type="submit" value="작성">
    </form>
</div>
@endsection