@extends('layouts.app')

@section('title', 'Новость')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($news)
                            <h2 class="text-center">{{ $news['title']}}</h2>
                            @if (!$news['isPrivate'])
                                <p class="text-center">{{ $news['text']}}</p>
                            @else
                                <p class="text-center">Зарегистрируйтесь для просмотра</p>
                            @endif
                        @else
                            <p class="text-center">Новость не найдена</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
