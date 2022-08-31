@extends('layouts.app')

@section('page_title')
    D | Modifica
@endsection

@section('main_content')
    <section>
        <div class="container">
            <section class="create-comics-form">
                <h2>Crea il tuo fumetto</h2>
        
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
                    @csrf
                    @method('PUT')
        
                    {{-- Title --}}
                    <div>
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" value="{{ $comic->title }}">
                    </div>
        
                    {{-- THumb --}}
                    <div>
                        <label for="thumb">Copertina</label>
                        <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                    </div>
                    
                    {{-- Type --}}
                    <div>
                        <label for="type">Tipologia</label>
                        <input type="text" id="type" name="type" value="{{ $comic->type }}">
                    </div>
        
                    {{-- Price --}}
                    <div>
                        <label for="price">Prezzo</label>
                        <input type="text" id="price" name="price" value="{{ $comic->price }}">
                    </div>

                    {{-- Series --}}
                    <div>
                        <label for="series">Serie</label>
                        <input type="text" id="series" name="series" value="{{ $comic->series }}">
                    </div>
                    
                    {{-- Sale_date --}}
                    <div>
                        <label for="sale_date">Data Saldi</label>
                        <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                    </div>
        
                     {{-- Description --}}
                     <div>
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="15">
                            {{ $comic->description }}
                        </textarea>
                    </div>
        
                    <button>
                        Invia
                    </button>
                </form>
            </section>
        </div>
    </section>
@endsection