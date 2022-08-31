@extends('layouts.app')

@section('page_title')
    DC | Crea Personaggio
@endsection

@section('main_content')
    <section class="create-comics-form container">
        <h2>Crea il tuo fumetto</h2>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            {{-- Title --}}
            <div>
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" class="@error('title') is-invalid @enderror">
            </div>

            @error('title')
                <div class="alert alert-danger">Errore: Per favore, ricontrolla </div>
            @enderror

            {{-- THumb --}}
            <div>
                <label for="thumb">Copertina</label>
                <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}" class="@error('thumb') is-invalid @enderror">
            </div>
            @error('thumb')
                <div class="alert alert-danger">Errore: Per favore, ricontrolla </div>
            @enderror
            
            {{-- Type --}}
            <div>
                <label for="type">Tipologia</label>
                <input type="text" id="type" name="type" value="{{ old('type') }}" class="@error('type') is-invalid @enderror">
            </div>
            @error('type')
                <div class="alert alert-danger">Errore: Per favore, ricontrolla </div>
            @enderror

            {{-- Price --}}
            <div>
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price" value="{{ old('price') }}" class="@error('price') is-invalid @enderror">
            </div>
            @error('price')
                <div class="alert alert-danger">Errore: Per favore, ricontrolla </div>
            @enderror

             {{-- Series --}}
             <div>
                <label for="series">Serie</label>
                <input type="text" id="series" name="series" value="{{ old('series') }}" class="@error('series') is-invalid @enderror">
            </div>

            @error('series')
                <div class="alert alert-danger">Errore: Per favore, ricontrolla </div>
            @enderror
            
            {{-- Sale_date --}}
            <div>
                <label for="sale_date">Data Saldi</label>
                <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            </div>

             {{-- Description --}}
             <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="15"></textarea>
            </div>

            <button>
                Invia
            </button>
        </form>
    </section>
@endsection