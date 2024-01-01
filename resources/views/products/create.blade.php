<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create  a product</title>
</head>
<body>
    
    <h1>Create a product</h1>

    <form method='post' action="{{ route('product.store') }}">
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
                <input type="text" name="name" placeholder="name" />
                <input type="text" name="qty" placeholder="qty" />
                <input type="text" name="price" placeholder="price" />
                <input type="text" name="description" placeholder="description" />              
            </div>
            <div>
                <input type="submit" value="Create product">
            </div>
        
    </form>

</body>
</html>