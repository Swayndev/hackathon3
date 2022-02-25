@extends('../layouts/default')

@section ('content')


<h1>Search result</h1>
        <h2>List of Owners</h2>
        <ul>
                @foreach ($owners as $owner)
                    <li>
                        {{$owner->first_name}}
                    </li>
                    <li>
                        {{ $owner->surname }}
                    </li>
                @endforeach
        </ul>
        <form action="" method="GET">
            <button type="submit">Detail</button>
        </form>


@endsection