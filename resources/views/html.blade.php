<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop #HTML - FORM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        h1 {
            text-align: center;
        }
        .form-container {
            width: 450px;
            margin: auto;
        }
        label {
            font-weight: bold;
        }
        .row {
            margin-bottom: 10px;
        }
        input, select, textarea {
            padding: 5px;
            margin-left: 20px;
        }
        textarea {
            width: 250px;
            height: 100px;
        }
        .buttons {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Workshop #HTML - FORM</h1>

<div class="form-container">
<form>

    <div class="row">
        <label>ชื่อ</label>
        <input type="text" name="fname">
    </div>

    <div class="row">
        <label>สกุล</label>
        <input type="text" name="lname">
    </div>

    <div class="row">
        <label>วัน/เดือน/ปีเกิด</label>
        <input type="date" name="birthday">
    </div>

    <div class="row">
        <label>อายุ</label>
        <input type="number" name="age" style="width: 80px;">
    </div>

    <div class="row">
        <label>เพศ</label>
        <input type="radio" name="gender" value="ชาย"> ชาย
        <input type="radio" name="gender" value="หญิง"> หญิง
    </div>

    <div class="row">
        <label>รูป</label>
        <input type="file" name="photo">
    </div>

    <div class="row">
        <label>ที่อยู่</label>
        <textarea name="address"></textarea>
    </div>

    <div class="row">
        <label>สีที่ชอบ</label>
        <select name="color">
            <option>สีแดง</option>
            <option>สีน้ำเงิน</option>
            <option>สีเขียว</option>
            <option>สีเหลือง</option>
        </select>
    </div>

    <div class="row">
        <label>แนวเพลงที่ชอบ</label>
        <input type="radio" name="music" value="เพื่อชีวิต"> เพื่อชีวิต
        <input type="radio" name="music" value="ลูกทุ่ง"> ลูกทุ่ง
        <input type="radio" name="music" value="อื่นๆ"> อื่นๆ
    </div>

    <div class="row">
        <input type="checkbox" name="agreement"> ยินยอมให้เก็บข้อมูล
    </div>

    <div class="buttons">
        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
    </div>

</form>
</div>

</body>
</html>
