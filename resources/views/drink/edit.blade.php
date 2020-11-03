<form action="{{route('drink.update', $drink->id)}}" method="POST">
    
    @csrf
    @method("PUT")
        

        <input type="text" name="name" placeholder="name" value="{{$drink->name}}">
        <input type="gradation" step="0.01" name="gradation" placeholder="gradation" value="{{$drink->gradation}}">
        <input type="text" name="category" placeholder="category" value="{{$drink->category}}">
        <input type="text" name="glass" placeholder="glass" value="{{$drink->glass}}">
        <input type="text" name="ingredients" placeholder="ingredients" value="{{$drink->ingredients}}">
        <input type="price" step="0.01" name="price" placeholder="price" value="{{$drink->price}}">
        <input type="text" name="garnish" placeholder="garnish" value="{{$drink->garnish}}">
        <input type="text" name="preparation" placeholder="preparation" value="{{$drink->preparation}}">
        <input type="submit" value="Send">
    
</form>
    
@if ($errors->any())    
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
        </ul>
    </div>
@endif