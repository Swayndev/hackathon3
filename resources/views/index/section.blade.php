@extends('../layouts/default')

@include('../includes/header.blade.php')
@section

<h1>Welcome to Hector's vet clinic</h1>

<h2>Owners Form</h2>
<form action="{{ }}" method="GET">
    <input type="text" name="search" id="search">
    <button type="submit"></button>
</form>


<h2>Owner list: </h2>
<ul>
        <?php foreach ($owners as $owner) : ?>

            <li>
                <?= $owner->first_name ?>
            </li>
            <li>
                <?= $owner->surname ?>
            </li>

        <?php endforeach; ?>
    </ul>


<h2>Animals Form</h2>
<form action="{{ }}" method="GET">
    <input type="text" name="search" id="search">
    <button type="submit"></button>
</form>

<h2>Pets list: </h2>

<ul>
        <?php foreach ($animals as $animal : ?>

        <h3><?= $animal->name ?></h3>
            
            <ul>
                <li>
                    <?= $animal->species ?>
                </li>
                <li>
                    <?= $animal->breed ?>
                </li>
                <li>
                    <?= $animal->age ?>
                </li>
                <li>
                    <?= $animal->weight ?>
                </li>

            </ul>   
        <?php endforeach; ?>
    </ul>


@endsection