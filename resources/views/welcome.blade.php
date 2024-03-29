<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laravel x10</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                Post
            </div>
            <div class="card-body">
                <form method="post" action="/user">
                    @csrf
                    <input type="submit" value="Post method" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
        {{--  --}}
        <div class="card mt-5">
            <div class="card-header">
                PUT Method
            </div>
            <div class="card-body">
                <form method="post" action="/post">
                    @csrf
                    @method('PUT')
                    <input type="submit" value="PUT method" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
        {{--  --}}
        <div class="card mt-5">
            <div class="card-header">
                pathch Method
            </div>
            <div class="card-body">
                <form method="post" action="/slider">
                    @csrf
                    @method('patch')
                    <input type="submit" value="patch method" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
        {{--  --}}
        <div class="card mt-5">
            <div class="card-header">
                delete Method
            </div>
            <div class="card-body">
                <form method="post" action="/order">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete method" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
        {{--  --}}
        <div class="card mt-5">
            <div class="card-header">
                options Method
            </div>
            <div class="card-body">
                <form method="post" action="/product">
                    @csrf
                    @method('options')
                    <input type="submit" value="options method" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
