<!DOCTYPE html>
<html>
<head>
    <title>Workshop FORM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center; /* จัดกลางแนวนอน */
            align-items: center;     /* จัดกลางแนวตั้ง */
            min-height: 100vh;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            padding: 20px; /* กันกรอบชนขอบจอ */
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .black-container {
            border: 10px solid #000000; /* เพิ่มความเข้ม/หนาตามสั่ง */
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.98);
            width: 95%;            /* ลดขนาดเพื่อไม่ให้ชนขอบ */
            max-width: 550px;      /* ขนาดเท่าเดิม */
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        .form-control, .form-select, .form-check-input {
            border: 2px solid #000000 !important; /* เส้นขอบช่องกรอกเข้มเข้ากับกรอบนอก */
        }
        label { font-weight: bold; }
        .row { margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="black-container">
        @yield('content')
    </div>
    @stack('scripts')
</body>
</html>

