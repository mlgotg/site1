@extends("my")
@section('title')
    publisher
@endsection
@section('publisher info')
    <h1>{{$publisher->name}}</h1>
    <h3>Видало такі книги:</h3>
        @foreach ($books as $book)
        <a href="/books/{{$book->id}}">{{$book->book_name}}</a>
        <div>
            @foreach ($book->authors as $author)
                <a href="/author/{{$author->id}}"> {{$author->name}} {{$author->surname}} {{$author->patronymic}}</a>
                @if ($loop->last)

                @else
                   ,
                @endif
            @endforeach
        </div>
        <p>Рік: {{$book->year}}</p>
        @endforeach
@endsection
{{--@section('content')--}}
{{--    @for ($i = 0; $i < 10; $i++)--}}
{{--        The current value is {{ $i }}--}}
{{--    @endfor--}}
{{--@endsection--}}

