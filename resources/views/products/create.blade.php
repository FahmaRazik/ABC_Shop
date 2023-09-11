<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>

            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('products.store')}}" >
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name ="name" placeholder="name"/>
        </div>
        
        <div>
            <label>Category Id</label>
            <input type="text" name ="name" placeholder="category id"/>
        </div>
        <div><input type="submit" value="Save a new product" /> </div>
    </form>

</body>
</html>