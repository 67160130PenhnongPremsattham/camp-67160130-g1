<!-- file: resources/views/html101.blade.php -->
<!Doctype html>

<html>
    <head>
        <title>ส่วนหัวของ HTML - @yield('title')</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #fff;
    color: #000;
    text-align: center;
}

.form-container {
    width: 450px;
    margin: auto;
    text-align: left;  /* ให้เนื้อหาในฟอร์มชิดซ้าย */
}

input, select, textarea {
    padding: 5px;
    margin-left: 10px;
}

textarea {
    width: 250px;
    height: 100px;
}

.row {
    margin-bottom: 15px;
}

button {
    padding: 5px 12px;
    margin-right: 5px;
    cursor: pointer;
}
</style>


        @stack('stylrs')
    </head>
    <body>
        <idv class="container mt-4">
            <h1>File Default</h1>
            @yield('content')
        </div>
        @stack('scripts')
        </body>
</html>

