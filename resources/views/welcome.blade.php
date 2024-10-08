<!doctype html>
<html lang="en">

<head>
    <title>Product Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <h1 class="text-center">
            Product All Actions</h1>
    </header>
    <main>

        <div class="container">
            <div class="row">
                <div class="col-8">
                    <a href="{{ route('product.index') }}" class=" btn btn-secondary btn-sm">All Products</a>
                    <a href="{{ route('product.store') }}" class=" btn btn-warning btn-sm">Add New Product</a>
                    <form action="{{ route('contact.store') }}" method="post" class="mt-3">
                        @csrf
                    <button type="submit" class=" btn btn-primary btn-sm">Add contact details</button>
                </form>

                    {{-- <a href=""></a>
                    <a href=""></a> --}}
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
