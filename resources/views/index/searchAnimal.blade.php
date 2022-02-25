@extends('../layouts/default')

@section ('content')


<h1>Search result</h1>
        <h2>List of Pets</h2>
        <form action=" {{ action('AnimalController@searchAnimal') }}" method="get">
            <label for="">Pet's name</label>
            <input type="text" name="name" >
        </form>

        <ul>
                @foreach ($animals as $animal)
                         <li>Name: 
                            {{$animal->name}}
                        </li>
                        <li> Species:
                            {{ $animal->species }}
                        </li>
                        <li> Breed:
                            {{ $animal->breed }}
                        </li>
                
                        <a href="animals/detail/{{ $animal->id}}">Detail</a>
                @endforeach
        </ul>





@endsection