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

            <div class="series">
                <span class="detail-mini-title">Serie: </span>
                <span> {{ $comics->series }} </span>
            </div>
            <div class="price">
                <span class="detail-mini-title">Prezzo: </span>
                <span> {{ $comics->price }} </span>
            </div>
            <div class="sale-date">
                <span class="detail-mini-title">Data Saldi: </span>
                <span> {{ date('d-m-Y', strtotime($comics->sale_date)) }}</span>
            </div>
        </div>
    </section>
    
@endsection