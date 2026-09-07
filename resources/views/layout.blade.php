<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') | Pornnutcha Kokaew</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">
                Pornnutcha Kokaew
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto">

                    <!-- หน้าแรก -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            หน้าแรก
                        </a>
                    </li>

                    <!-- เกี่ยวกับเรา -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about2') }}">
                            เกี่ยวกับเรา
                        </a>
                    </li>

                    <!-- บทความ -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog2') }}">
                            บทความ
                        </a>
                    </li>

                    <!-- เขียนบทความ -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('form') }}">
                            เขียนบทความ
                        </a>
                    </li>

                </ul>

                <!-- ค้นหา -->
                <form class="d-flex ms-3" role="search">
                    <input class="form-control me-2"
                        type="search"
                        placeholder="ค้นหา"
                        aria-label="Search">

                    <button class="btn btn-outline-success" type="submit">
                        ค้นหา
                    </button>
                </form>

            </div>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>

</body>

</html>