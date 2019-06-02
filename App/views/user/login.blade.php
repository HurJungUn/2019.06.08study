@extends('layout/master')

@section('maincontent')
<br>
<form class="box" action="/login" method="POST">
<div class="jumbotron">
  <h1 class="display-4">LoginPage</h1>
  <p class="lead">input your account</p>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ID</span>
  </div>
  <input type="text" name="userid" class="form-control" placeholder="id" aria-label="Userid" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">PASSWORD</span>
  </div>
  <input type="password" name="password" class="form-control" placeholder="password" aria-label="Userpassword" aria-describedby="basic-addon1">
</div>
  <input type="submit" class="btn btn-primary btn-lg" role="button" value="Login">
</div>
</form>
@endsection