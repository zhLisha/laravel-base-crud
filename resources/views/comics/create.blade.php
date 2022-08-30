@extends('layouts.app')

@section('page_title')
    DC | Crea Personaggio
@endsection

@section('main_content')
    <section class="create-comics-form container">
        <h2>Crea il tuo fumetto</h2>

        <form action="">
            @csrf

            {{-- Title --}}
            <div>
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title">
            </div>

            {{-- THumb --}}
            <div>
                <label for="thumb">Copertina</label>
                <input type="text" id="thumb" name="thumb">
            </div>
            
            {{-- Type --}}
            <div>
                <label for="type">Tipologia</label>
                <input type="text" id="type" name="type">
            </div>

             {{-- Description --}}
             <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <button>
                Invia
            </button>
        </form>
    </section>
@endsection