<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/images/logo.jpg') }}">

    <style>
    html, body {
        height: 100%;
    }

    #app {
        display: flex;
        flex-direction: column;
        min-height: 100%;
    }

    #main {
        flex: 1 0 auto; /* isi utama akan tumbuh dan mendorong footer */
    }

    footer {
        flex-shrink: 0; /* footer tetap di bawah */
    }
</style>