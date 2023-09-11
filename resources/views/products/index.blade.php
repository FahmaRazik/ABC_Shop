<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif

    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category Id</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->category_id}}</td>
            <td>
                <a href="{{route('products.edit',['product' => $product])}}">Edit</a>
            </td>
            <td>
                <form method="post" action="{{route('product.destroy',['product' => $product])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" />
                </form>


            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>