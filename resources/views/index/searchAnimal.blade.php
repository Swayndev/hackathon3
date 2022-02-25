@extends('../layouts/default')

@section ('content')


<h1>Search result</h1>
        <h2>List of Pets</h2>
        <ul>
                @foreach ($animals as $animal)
                    <li>
                        {{$animal->name}}
                    </li>
                    <li>
                        {{ $animal->image_id }}
                    </li>
                @endforeach
        </ul>
        <form action="" method="GET">
            <button type="submit">Detail</button>
        </form>


@endsection