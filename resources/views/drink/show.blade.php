  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drink list</title>
</head>
<body> 
        <ul>
            <li>{{$drink->name}}</li>
            <li>{{$drink->gradation}}</li>
            <li>{{$drink->category}}</li>
            <li>{{$drink->glass}}</li>
            <li>Ingredients: {{$drink->ingredients}}</li>
            <li>Price: {{$drink->price}} €</li>
            <li>@if($drink->garnish == 0)
                {{"No garnish"}}
                @else
                {{"Garnish:"}}
                @endif
            </li>
            <li>Preparation: {{$drink->preparation}}</li>
        </ul>
        <form action="{{route('drink.edit', $drink->id)}}" method="POST">
            @csrf
           @method("PUT")
           <input type="submit" value="Edit">
       </form>
        <form action="{{route('drink.destroy', $drink->id)}}" method="POST">
             @csrf
            @method("DELETE")
            <input type="submit" value="Delete">
        </form>
    
    <a href="{{route('drink.index')}}">Back</a>

</body>
</html>