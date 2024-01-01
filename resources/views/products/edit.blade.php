<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit product</title>
</head>
<body>
    
    <h1>Edit product</h1>

    <form method='put' action="{{ route('product.update', [Product -> $product]) }}">
        @csrf
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
           
                
            @endif

            <div>
                <input type="text" name="name" placeholder="name" value=" {{ $product->id }}" />
                <input type="text" name="qty" placeholder="qty" value=" {{ $product->qty }}"/>
                <input type="text" name="price" placeholder="price" value=" {{ $product->price }}"/>
                <input type="text" name="description" placeholder="description" value=" {{ $product->description }}" />              
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        
    </form>

</body>
</html>