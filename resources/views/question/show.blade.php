@extends('layouts.master')

@section('content')
    <div class="card text-white bg-success mb-3 w-75">
        <div class="card-header">Jawaban Pertanyaan</div>
        <div class="card-body">
            <h3 class="card-tittle">Judul : {{ $question->judul }}</h3>
            <p class="card-text">Isi Pertanyaan : {!! $question->isi!!}</p>
            @foreach($question->tags as $tag)
                <button class="btn btn-primary btn-sm"> {{$tag->tag_name}}</button>
            @endforeach
            <div class="card-body text-danger bg-white mt-3">
                <h2>Jawaban</h2>
                @foreach($answers as $answer)
                    <p>{!! $answer->isi!!}  Tanggal dibuat : {{ $answer->created_at}}, Tanggal Diperbaharui : {{ $answer->updated_at}}</p>
                @endforeach

                <a href="/question" class="btn btn-primary">Kembali</a>
            </div>
            
        </div>
        
    </div>

 

@endsection
