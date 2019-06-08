@extends('layout/master')

@section('maincontent')
<section id="slider" class="mt-4">
        <div class="container">
            <div class="slider">
                <div class="btn-div">
                    <button class="btn btn-outline-light">&lt;</button>
                    <button class="btn btn-outline-light">&gt;</button>
                </div>
                <div class="slide-image" style="background-image: url('/imgs/image.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>슬라이드 제목</h1>
                    <p>슬라이드의 내용을 여기다가 표기</p>
                    </div>
                </div>
                <div class="slide-image" style="background-image: url('/imgs/image.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>슬라이드 제목</h1>
                    <p>슬라이드의 내용을 여기다가 표기</p>
                    </div>
                </div>
                <div class="slide-image" style="background-image: url('/imgs/image.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>슬라이드 제목</h1>
                    <p>슬라이드의 내용을 여기다가 표기</p>
                </div>
                </div>
            </div>
            <div class="indicator">
                <ul>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container mt-4">
        <section id="editorPick">
            @foreach($list as $item)
            <div class="item">
                <div class="img-box">
                {!! $item->thumbnail !!}
                </div>
                <div class="info-box">
                    <h3><a href="/view?id={{ $item->id }}">{{ $item->title }}</a></h3>
                    <p>{{ date("Y년 m월 d일", strtotime($item->wdate)) }}</p>
                    <p>{{ $item->content }}</p>
                </div>
            </div>
            @endforeach
        </section>
        <ul class="pagination justify-content-center mt-5">
        @if(!$p->prev && $p->start != 1)
        <li class="page-item"><a href="/?p={{$p->start - 1}}" class="page-link">이전</a></li>
        @endif
            @for($i = $p->start; $i <= $p->end; $i++)
            @if($i == $p->current)
            <li class="page-item" style="background-color: #ef9a9a;">
            @else
            <li class="page-item">
            @endif
                <a href="/?p={{$i}}" class="page-link">{{ $i }}</a>
            </li>
            @endfor
            @if(!$p->prev)
        <li class="page-item"><a href="/?p={{$p->end + 1}}" class="page-link">다음</a></li>
        @endif
        </ul>        
    </div>
@endsection