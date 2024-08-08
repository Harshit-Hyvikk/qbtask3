<!doctype html>
<html lang="en">

<head>
    <title>Products Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center bg-secondary py-2">
                        Query Bulder CRUD
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <main>
        {{ $products}}
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-borderless table-primary align-middle">
                            <thead class="table-dark">
                                {{-- <caption>
                        Table Name
                    </caption> --}}
                                <tr>
                                    <th>Index</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Description</th>
                                    <th>Product Price</th>
                                    <th>Product City</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($products as $product)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td scope="row">{{ $i }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->city }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
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
