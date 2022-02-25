@extends('../layouts/default')

@section ('content')


<h1>Search result</h1>
        <h2>List of Owners</h2>

        <form action=" {{ action('OwnerController@search') }}" method="post">
                <label for="">Owner's name</label>
                <input type="text" name="name" >
        </form>

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