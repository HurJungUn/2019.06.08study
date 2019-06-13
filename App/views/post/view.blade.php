@extends('layout/master')

@section('maincontent')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <div class="card">
                <form action="/update" method="post">
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="card-header">
                    <input type="text" name="title" value="{{$data->title}}">
                    <span class="badge badge-light">
                        {{ $data->writer }}
                    </span>
                    <span class="badge badge-primary">
                        {{ $data->wdate }}
                    </span>
                    <input type="submit" class="btn btn-success" value="수정">
                    <a href="/delete?id={{ $data->id }}">
                        <span class="btn btn-danger">
                            삭제
                        </span>
                    </a>
                </div>
                <div class="card-body">
                    <textarea name="content" cols="122" rows="10">{!! $data->content !!}
                    </textarea>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection