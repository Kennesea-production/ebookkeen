@extends('layout.read')
@section('content')

<style>
    .leftimg img{
        height: 500px;
        width: 349px;
    }
</style>

<div class="parent">
    <div class="content">
        <div class="leftimg">
            <img src="/img/{{ $read['cover_book'] }}" alt="">
        </div>
        <div class="rightdesc">
            <p>
                Judul : {{ $read['title'] }}
            </p>
            <p>
                Penulis : {{ $read['writter'] }}
            </p>
            <p>
                Penerbit : {{ $read['publisher'] }}
            </p>
            <p>
                No ISBN : {{ $read['ISBN'] }}
            </p>

            <h4>
                Sinopsis
            </h4>

            <p>

                {{ $read['synopsis'] }}
                
            </p>

            <div class="buttonn">
               <a target="_blank" href="{{ route('printPDF', $read->bookID) }}"> <div class="btn btn-warning">Download E-book</div></a>
            </div>
            <div class="buttonn">
                <a href="{{ url()->previous() }}"><div class="btn btn-danger">Back</div></a>
            </div>
        </div>
    </div>
</div>


@endsection