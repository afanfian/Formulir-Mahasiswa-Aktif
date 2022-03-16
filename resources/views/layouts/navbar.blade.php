{{-- CSS --}}
<link rel="stylesheet" href="/css/navbar.css">
{{-- Font Poppins --}}
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top" style="color: black; font-family: Poppins;">
    <div class="container">
        <!--Akhir Dark Mode-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button >
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/article">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/input">Input Formulir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/formulir">Guest Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/article">Article</a>
                    </li>
                </li>
            </div>
    </div>
</nav>
<div class="container mt-5">
    @yield('container')
</div>