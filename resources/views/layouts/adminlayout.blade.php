<!doctype html>
<html>

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('css.admin.style')
    @livewireStyles
</head>

<body class="container-fluid g-0">
    <div class="row g-0">
        <header class="col-2 bg-black fixed-top">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <livewire:admin.nav-link name='HOME' route="dashboard" />
                {{-- <livewire:admin.nav-link name="DATA MACAU" route="macaus.index" /> --}}
                <livewire:admin.nav-link name="DAFTAR EVENT LOMBA" route="events.index" />
                <livewire:admin.nav-link name="DAFTAR SITUS" route="sites.index" />
                <livewire:admin.nav-link name="DAFTAR PASARAN" route="predicts.index" />
                @if (Auth::user()->role_id == 1)
                    <livewire:admin.nav-link name="SEO PAGES" route="seos.index" />
                    <livewire:admin.nav-link name="DAFTAR STATUS LOMBA" route="statuses.index" />
                    <livewire:admin.nav-link name="NAVIGATION" route="navigations.index" />
                    <livewire:admin.nav-link name="HALAMAN" route='page.edit' routeProp='1' />
                    <livewire:admin.nav-link name="ADMIN HISTORY" route="histories.index" />
                    <livewire:admin.nav-link name="USER LIST" route="users.index" />
                @endif
                <livewire:admin.nav-link name="LOGOUT" route="logout" />
            </div>
        </header>
        <main class="col-10 ms-auto">
            @yield('content')
        </main>
    </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>

    @livewireScripts
</body>

</html>
