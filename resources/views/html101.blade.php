@extends('template.default')

@section('content')
<h1 class="mb-4 text-center">Workshop #HTML-FORM</h1>

<form id="mainForm">
    <div class="row">
        <div class="col-5">ชื่อ</div>
        <div class="col-7">
            <input type="text" id="fname" class="form-control">
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
            <div class="valid-feedback">ถูกต้อง</div>
        </div>
    </div>

    <div class="row">
        <div class="col-5">สกุล</div>
        <div class="col-7">
            <input type="text" id="lname" class="form-control">
            <div class="invalid-feedback">โปรดระบุนามสกุล</div>
            <div class="valid-feedback">ถูกต้อง</div>
        </div>
    </div>

    <div class="row">
        <div class="col-5">วัน/เดือน/ปีเกิด</div>
        <div class="col-7">
            <input type="date" id="dateofbirth" class="form-control">
            <div class="invalid-feedback">โปรดเลือกวันเกิด</div>
        </div>
    </div>

    <div class="row">
        <div class="col-5">เพศ</div>
        <div class="col-7">
            <input type="radio" name="gender" id="m" value="m" class="form-check-input"> ชาย
            <input type="radio" name="gender" id="w" value="w" class="form-check-input ms-2"> หญิง
            <div class="invalid-feedback" id="gender-err">โปรดระบุเพศ</div>
        </div>
    </div>

    <div class="row">
        <div class="col-5">สีที่ชอบ</div>
        <div class="col-7">
            <select id="favoritecolor" class="form-select">
                <option value="">เลือกสีที่ชอบ</option>
                <option value="red">แดง</option>
                <option value="blue">น้ำเงิน</option>
            </select>
            <div class="invalid-feedback">โปรดเลือกสีที่ชอบ</div>
        </div>
    </div>

    <div class="row">
        <div class="col-5">แนวเพลง</div>
        <div class="col-7">
            <input type="radio" name="genre" value="rock" class="form-check-input"> ร็อก
            <input type="radio" name="genre" value="pop" class="form-check-input ms-2"> ป๊อป
            <div class="invalid-feedback" id="genre-err">โปรดเลือกแนวเพลง</div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <input type="checkbox" id="consent_check" class="form-check-input">
            <label for="consent_check">ยินยอมให้เก็บข้อมูล</label>
            <div class="invalid-feedback">โปรดกดยินยอม</div>
        </div>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <button type="reset" class="btn btn-outline-dark">Reset</button>
        <button type="button" onclick="clickMe()" class="btn btn-dark px-4">Submit</button>
    </div>
</form>
@endsection

@push('scripts')
<script>
let clickMe = function() {
    let ids = ['fname', 'lname', 'dateofbirth', 'favoritecolor', 'consent_check'];

    // ตรวจสอบช่องทั่วไป
    ids.forEach(id => {
        let el = document.getElementById(id);
        let isOk = (id === 'consent_check') ? el.checked : el.value.trim() !== "";
        if (isOk) {
            el.classList.remove('is-invalid');
            el.classList.add('is-valid');
        } else {
            el.classList.remove('is-valid');
            el.classList.add('is-invalid');
        }
    });

    // ตรวจสอบ Radio (เพศ และ เพลง)
    ['gender', 'genre'].forEach(name => {
        let radios = document.querySelectorAll(`input[name="${name}"]`);
        let isChecked = document.querySelector(`input[name="${name}"]:checked`);
        radios.forEach(r => {
            if (isChecked) { r.classList.remove('is-invalid'); r.classList.add('is-valid'); }
            else { r.classList.remove('is-valid'); r.classList.add('is-invalid'); }
        });
    });
}
</script>
@endpush
