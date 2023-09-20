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
    <form method="post" action="{{route('product.update', ['product' => $product])}}" >
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name ="name" placeholder="name" value="{{$product->name}}"/>
        </div>
        
        <div>
            <label>Category Id</label>
            <input type="text" name ="name" placeholder="category id" value="{{$product->category_id}}"/>
        </div>
        <div><input type="submit" value="Update" /> </div>
    </form>

</body>
</html>