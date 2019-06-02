@extends('layout/master')

@section('maincontent')
<div class="row d-flex justify-content-center mt-5">
    <div class="col-10">
        <form action="/post" method="POST">
        <div class="jumbotron">
  <h1 class="display-4">Make Post</h1>
  <p class="lead">Making Your Self!</p>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">title</span>
  </div>
  <input type="text" name="title" class="form-control" placeholder="title" aria-label="Userid" aria-describedby="basic-addon1">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">content</span>
  </div>
  <textarea class="form-control" name="content" aria-label="With textarea" placeholder="contents"></textarea>
</div>
<br>
  <input type="submit" class="btn btn-primary btn-lg" role="button" value="Writing">
</div>
        </form>
    </div>
</div>
@endsection