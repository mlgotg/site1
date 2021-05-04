@extends("my")
@section('title')
    author
@endsection
@section('author info')
    <h1>{{$author->name}} {{$author->surname}} {{$author->patronymic}}</h1>
    <h3>Написав такі книги:</h3>
        @foreach ($books as $book)
        <a href="/books/{{$book->id}}">{{$book->book_name}}</a>
        <p>Видавництво: {{$book->publisher->name}} {{$book->publisher->country}}</p>
        <p>Рік: {{$book->year}}</p>
        @endforeach

@endsection
{{--@section('content')--}}
{{--    @for ($i = 0; $i < 10; $i++)--}}
{{--        The current value is {{ $i }}--}}
{{--    @endfor--}}
{{--@endsection--}}

