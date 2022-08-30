@extends('layouts.app')

@section('main_content')
    {{-- Products --}}
    <section class="cards">
        <div class="container">
            <ul class="flex">
                @foreach ($comics as $comic)
                    <li>
                        <a href="#">
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection