<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My favorite Drinks</title>
</head>
<body>
    <h1>My Favourite Drink</h1>
    <ul>
        @foreach ($drink as $drink)
            <li>
                <a href="{{route ('drink.show', $drink->id)}}">{{$drink->name}}</a>
                <form action="{{route('drink.edit', $drink->id)}}" method="GET">
                    @csrf
                   @method("GET")
                   <input type="submit" value="Edit">
               </form>
                <div>
                    <form action="{{route('drink.destroy', $drink->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="Elimina">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <a href="{{route('drink.create')}}">Add new Drink</a>
</body>
</html>