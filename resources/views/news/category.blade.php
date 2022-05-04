@extends('layouts.app')

@section('title')
    @parent Категория
@endsection

@section ('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Новости категории {{ $category }}</h2>
                        <ul class="list-group">
                        @forelse($news as $item)
                            <li class="list-group-item"><a href="{{ route('news.one', $item['id']) }}"> {{ $item['title'] }}</a></li>
                        @empty
                            <li><p class="text-center">Нет новостей</p></li>
                        @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
