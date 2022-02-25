@extends('../layouts/default')


@section ('content')

    
    <h1><strong>{{ $animal->name }}</strong></h1>
    <p><i>{{ $animal->species }}</i></p>
    <p><i>{{ $animal->breed }}</i></p>

    <img src="https://hips.hearstapps.com/wdy.h-cdn.co/assets/17/39/1506709524-cola-0247.jpg?crop=1.00xw:0.750xh;0,0.226xh&resize=980:*" alt="animal_profile_picture">
    
    <ul>
       <li> age: {{ $animal->age }} years </li>
       <li>weight: {{ $animal->weight }}</li>
    </ul>    



@endsection