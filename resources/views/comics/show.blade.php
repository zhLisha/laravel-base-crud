@extends('layouts.app')

{{-- Page Title --}}
@section('page_title')
    DC | Dettagli Prodotto
@endsection

@section('main_content')

    <section class="card-details">
        <div class="container">
            <div class="title">
                <h2>{{ $comics->title }}</h2>
            </div>

            <div class="main-content flex">
                <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
                <div class="description">
                    <p>
                        {{ $comics->description }}
                    </p>
                </div>
            </div>

            {{-- Un if per dire che se e' null non mettere nulla, solo se non e' null stampa --}}
            @if ($comics->series) 
                <div class="series">
                    <span class="detail-mini-title">Serie: </span>
                    <span> {{ $comics->series }} </span>
                </div>
            @endif
            @if ($comics->price)
                <div class="price">
                    <span class="detail-mini-title">Prezzo: </span>
                    <span> {{ $comics->price }} </span>
                </div>
            @endif
            @if ($comics->type)
            <div class="price">
                <span class="detail-mini-title">Tipologia: </span>
                <span> {{ $comics->type }} </span>
            </div>
            @endif
            @if ($comics->sale_date)
                <div class="sale-date">
                    <span class="detail-mini-title">Data Saldi: </span>
                    <span> {{ date('d-m-Y', strtotime($comics->sale_date)) }}</span>
                </div>
            @endif

            {{-- Edit product --}}
            <div class="edit-product">
                <a href="{{route('comics.edit', ['comic' => $comics->id])}}">Modifica </a>
            </div>
        </div>
    </section>
    
@endsection