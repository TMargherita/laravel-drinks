  
<form action="{{route('drink.store')}}" method="POST">
    @csrf
    @method("POST")
        <input type="text" name="name" placeholder="name">
        <input type="gradation" step="0.01" name="gradation" placeholder="gradation">
        <input type="category" name="category" placeholder="category">
        <input type="glass" name="glass" placeholder="glass">
        <input type="ingredients" name="ingredients" placeholder="ingredients">
        <input type="price" step="0.01" name="price" placeholder="price">
        <input type="garnish" name="garnish" placeholder="garnish">
        <input type="preparation" name="preparation" placeholder="preparation">
  
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