@extends("my")
@section('title')
    book
@endsection
@section('book info')
    <p>Name of book: {{$book->book_name}}</p>
    <p>Author:
        @foreach ($authors as $author)
        <a href="/author/{{$author->id}}"> {{$author->name}} {{$author->surname}} {{$author->patronymic}}</a>
            @if ($loop->last)

            @else
                ,
            @endif
        @endforeach
    </p>
    <p>Publisher: {{$publisher->name}} {{$publisher->country}}</p>
    <p>Year: {{$book->year}}</p>

@endsection
{{--@section('content')--}}
{{--    @for ($i = 0; $i < 10; $i++)--}}
{{--        The current value is {{ $i }}--}}
{{--    @endfor--}}
{{--@endsection--}}

