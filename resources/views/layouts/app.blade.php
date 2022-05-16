<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.1/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-4RjTy+ihDlYQqAQJodVMv1QuiX0mRlR0xtuKKu1P8I2TxVdGPXaW+VxJ6PirwMm4" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    @include('layouts.header')
    @include('layouts.sidebar')

    <main class="py-4">
        <div class="container">
        @yield('content')
        </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.1/dist/js/coreui.bundle.min.js" integrity="sha384-PXOm0LjM7kBY7at2HNqu2pAJsTVQUPRzpJSwQD0V//zsjFAcv61qjiZj3ELesLb1" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and CoreUI for Bootstrap JS -->
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.1/dist/js/coreui.min.js" integrity="sha384-85mv4P1wdLGe7AOAJKs31hW8LZHApEb3/mOieV4JbvF2v99+TmYLrpvmlj9edI/C" crossorigin="anonymous"></script>

  </body>
</html>
