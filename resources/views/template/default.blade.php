<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Workshop FORM')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            /* ใช้ฟอนต์ Sarabun เป็นหลัก */
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            /* ใช้ Flexbox เพื่อจัดวางเนื้อหา (กล่องฟอร์ม) ให้อยู่กึ่งกลางหน้าจอเสมอ */
            display: flex;
            justify-content: center; /* จัดกึ่งกลางแนวนอน */
            align-items: center;     /* จัดกึ่งกลางแนวตั้ง */
            min-height: 100vh;      /* ให้ความสูงของพื้นหลังครอบคลุมทั้งหน้าจอ */

            /* พื้นหลังสีรุ้ง (Rainbow) แบบไล่เฉดสีทำมุม -45 องศา */
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            /* ขยายขนาดพื้นหลังเป็น 400% เพื่อให้สามารถทำอนิเมชั่นเลื่อนสีได้ */
            background-size: 400% 400%;
            /* สั่งให้อนิเมชั่นชื่อ gradient ทำงานวนซ้ำตลอด 15 วินาที */
            animation: gradient 15s ease infinite;
            /* ระยะห่างจากขอบจอ กันกรอบชนขอบเวลาเปิดในมือถือ */
            padding: 20px;
        }

        /* กำหนดการเคลื่อนที่ของพื้นหลัง (เลื่อนตำแหน่งสีไปมา) */
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* กล่องหลักสำหรับใส่ฟอร์ม */
        .black-container {
            border: 10px solid #000000; /* เส้นขอบสีดำ หนา 10px ตามที่คุณต้องการ */
            padding: 40px;             /* ระยะห่างจากเส้นขอบเข้ามาหาตัวหนังสือข้างใน */
            background-color: rgba(255, 255, 255, 0.98); /* พื้นหลังสีขาว (โปร่งแสงนิดเดียว 2%) */
            width: 100%;               /* กว้างเต็มพื้นที่แต่ไม่เกิน max-width */
            max-width: 550px;          /* ล็อคความกว้างสูงสุดไว้ที่ 550px */
            border-radius: 30px;       /* ทำมุมกล่องให้โค้งมนดูทันสมัย */
            box-shadow: 0 20px 40px rgba(0,0,0,0.3); /* ใส่เงาฟุ้งๆ ให้กล่องดูลอยขึ้นมาจากพื้นหลัง */
        }

        /* ตกแต่งช่อง Input ทุกประเภทให้มีเส้นขอบดำหนาขึ้นเพื่อให้เข้ากับดีไซน์กรอบนอก */
        .form-control, .form-select, .form-check-input {
            border: 2px solid #000000 !important; /* บังคับให้เป็นเส้นดำ 2px */
        }

        /* กำหนดให้หัวข้อตัวหนังสือ (Label) เป็นตัวหนา */
        label { font-weight: bold; }

        /* ระยะห่างระหว่างบรรทัดแต่ละแถวในฟอร์ม */
        .row { margin-bottom: 15px; }

        /* สีตัวหนังสือสำหรับข้อความแจ้งเตือนเมื่อกรอก "ถูกต้อง" (สีเขียว) */
        .valid-feedback { color: #198754; font-weight: bold; }

        /* สีตัวหนังสือสำหรับข้อความแจ้งเตือนเมื่อ "กรอกผิด/ลืมกรอก" (สีแดง) */
        .invalid-feedback { color: #dc3545; font-weight: bold; }
    </style>
</head>
<body>
    <div class="black-container">
        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>

