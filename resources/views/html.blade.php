<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML - FORM</title>

    <style>
        /* สีพรายแสงสำหรับธีม */
        :root {
            --neon-red: #ff073a;        /* แดงนีออน */
            --bg-dark: #000;            /* ดำ */
            --input-dark: #111;         /* พื้นหลังช่อง */
        }

        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: var(--bg-dark);
            color: white;
        }

        h1 {
            text-align: center;
            font-weight: bold;
            font-style: italic;
            color: var(--neon-red);
            text-shadow: 0 0 10px var(--neon-red);
        }

        .form-container {
            width: 450px;
            margin: auto;
        }

        label {
            font-weight: bold;
            font-style: italic;
        }

        /* ช่อง input / textarea / select */
        input, select, textarea {
            padding: 5px;
            margin-left: 20px;
            background-color: var(--input-dark);
            color: white;
            font-weight: bold;
            font-style: italic;

            border: 2px solid var(--neon-red);
            border-radius: 4px;

            /* เพิ่มแสงนีออน */
            box-shadow: 0 0 10px var(--neon-red);
        }

        textarea {
            width: 250px;
            height: 100px;
        }

        .row {
            margin-bottom: 15px;
        }

        /* ปุ่ม */
        button {
            font-weight: bold;
            font-style: italic;
            border: 2px solid var(--neon-red);
            padding: 7px 18px;
            border-radius: 5px;
            cursor: pointer;
            background-color: var(--input-dark);
            color: white;
            box-shadow: 0 0 10px var(--neon-red);
            transition: 0.2s;
        }

        button:hover {
            background-color: var(--neon-red);
            color: black;
            box-shadow: 0 0 20px var(--neon-red);
        }

        /* radio & checkbox ให้เรืองแสงด้วย */
        input[type="radio"], input[type="checkbox"] {
            accent-color: var(--neon-red);
            filter: drop-shadow(0 0 5px var(--neon-red));
        }
    </style>
</head>

<body>

    <h1>Workshop #HTML - FORM</h1>

    <div class="form-container">
        <form>

            <div class="row">
                <label>ชื่อ</label>
                <input type="text">
            </div>

            <div class="row">
                <label>สกุล</label>
                <input type="text">
            </div>

            <div class="row">
                <label>วัน/เดือน/ปีเกิด</label>
                <input type="date">
            </div>

            <div class="row">
                <label>อายุ</label>
                <input type="number" min="1">
            </div>

            <div class="row">
                <label>เพศ</label>
                <input type="radio" name="gender"> ชาย
                <input type="radio" name="gender"> หญิง
            </div>

            <div class="row">
                <label>รูป</label>
                <input type="file">
            </div>

            <div class="row">
                <label>ที่อยู่</label>
                <textarea></textarea>
            </div>

            <div class="row">
                <label>สีที่ชอบ</label>
                <select>
                    <option>สีแดง</option>
                    <option>สีน้ำเงิน</option>
                    <option>สีเหลือง</option>
                    <option>สีเขียว</option>
                </select>
            </div>

            <div class="row">
                <label>แนวเพลงที่ชอบ</label>
                <input type="radio" name="music"> เพื่อชีวิต
                <input type="radio" name="music"> ลูกทุ่ง
                <input type="radio" name="music"> อื่นๆ
            </div>

            <div class="row">
                <input type="checkbox"> ยินยอมให้เก็บข้อมูล
            </div>

            <div class="row">
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>

</body>
</html>
