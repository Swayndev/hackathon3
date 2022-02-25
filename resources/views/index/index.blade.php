@extends('../layouts/default')

@section ('content')

<h1>Welcome to Hector's vet clinic</h1>

<h2>The best vetclinic in the area we love taking care of your animals</h2>

<form action="{{ action() }}" method="get">
    <label for="owners">
        Search an owner:
    </label>
    <input type="submit" name="owners" value="search">
</form>


<form action="" method="get">
    <label for="animals">
         Search a pet:
    </label>
    <input type="submit" name="animals" value="search">
</form>


@endsection




{{-- <h2>Owners Form</h2>
<form action="" method="GET">
    <input type="text" name="owner" id="owner">
    <button type="submit">Submit</button>
</form>

<h2>Owner list: </h2>
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


<h2>Animals Form</h2>
<form action="" method="GET">
    <input type="text" name="animal" id="animal" >
    <button type="submit">submit</button>
</form>

<h2>Anmial list: </h2>
<ul>
        @foreach ($animals as $animal)

            <li>
                {{$animal->name}} 
            </li>

            <li>
                {{ $animal->species }}
            </li>

            <li>
                {{ $animal->breed }}
            </li>
            <li>
                {{ $animal->breed }}
            </li>

        @endforeach
    </ul> --}}