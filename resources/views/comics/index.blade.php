@extends('layouts.app')

{{-- Page Title --}}
@section('page_title')
    DC | Lista Prodotti
@endsection

@section('main_content')
    {{-- Products --}}
    <section class="cards">
        <div class="container">
            <ul class="flex">
                @foreach ($comics as $comic)
                    <li>
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        </a>
                        {{-- Edit product --}}
                        <div class="edit-product">
                            <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica </a>
                        </div>

                        {{-- Delete --}}
                        <div>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Cancella">
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection