@extends('template.default')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 text-center">Workshop#HTML-FORM</h1>

    <form id="mainForm" action="{{ url('/result') }}" method="POST">
        @csrf <div class="row mb-2">
            <div class="col-5 text-end pe-4">ชื่อ</div>
            <div class="col-7">
                <input type="text" name="FirstName" id="FirstName" class="form-control">
                <div class="invalid-feedback">โปรดระบุชื่อ</div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-5 text-end pe-4">นามสกุล</div>
            <div class="col-7">
                <input type="text" name="LastName" id="LastName" class="form-control">
                <div class="invalid-feedback">โปรดระบุนามสกุล</div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-5 text-end pe-4">วัน/เดือน/ปีเกิด</div>
            <div class="col-7">
                <input type="date" name="BirthDay" id="BirthDay" class="form-control">
                <div class="invalid-feedback">โปรดเลือกวันเกิด</div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-5 text-end pe-4">เพศ</div>
            <div class="col-7">
                <input type="radio" name="Gender" id="m" value="m" class="form-check-input"> ชาย
                <input type="radio" name="Gender" id="w" value="w" class="form-check-input ms-2"> หญิง
                <div class="invalid-feedback">โปรดระบุเพศ</div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-5 text-end pe-4">รูป</div>
            <div class="col-7">
                <input type="file" name="Myfile" id="Myfile" class="form-control">
                <div class="invalid-feedback">โปรดเลือกรูปภาพ</div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-5 text-end pe-4">ที่อยู่</div>
            <div class="col-7">
                <textarea name="Address" id="Address" class="form-control" rows="3"></textarea>
                <div class="invalid-feedback">โปรดระบุที่อยู่</div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-5 text-end pe-4">สีที่ชอบ</div>
            <div class="col-7">
                <select name="Favoritecolor" id="Favoritecolor" class="form-select">
                    <option value="">เลือกสีที่ชอบ</option>
                    <option value="red">แดง</option>
                    <option value="blue">น้ำเงิน</option>
                    <option value="green">เขียว</option>
                </select>
                <div class="invalid-feedback">โปรดเลือกสี</div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-5 text-end pe-4">แนวเพลงที่ชอบ</div>
            <div class="col-7">
                <input type="radio" name="Genre" value="rock" class="form-check-input"> ร็อก
                <input type="radio" name="Genre" value="pop" class="form-check-input ms-2"> ป๊อป
                <div class="invalid-feedback">โปรดเลือกแนวเพลง</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-center">
                <input type="checkbox" name="Consent_Check" id="Consent_Check" class="form-check-input">
                <label for="Consent_Check" class="ms-1">ยินยอมให้เก็บข้อมูล</label>
                <div class="invalid-feedback">โปรดกดยินยอม</div>
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <button type="reset" class="btn btn-outline-dark">Reset</button>
            <button type="button" onclick="validateAndSubmit()" class="btn btn-dark px-4">Submit Data</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
let validateAndSubmit = function() {
    // ลบ 'mynumber' ออกจากรายการตรวจสอบ
    let ids = ['FirstName', 'LastName', 'BirthDay', 'Myfile', 'Address', 'Favoritecolor', 'Consent_Check'];
    let allOk = true;

    ids.forEach(id => {
        let el = document.getElementById(id);
        if (!el) return;

        let isOk = (id === 'Consent_Check') ? el.checked : el.value.trim() !== "";

        if (isOk) {
            el.classList.remove('is-invalid');
            el.classList.add('is-valid');
        } else {
            el.classList.remove('is-valid');
            el.classList.add('is-invalid');
            allOk = false;
        }
    });

    ['Gender', 'Genre'].forEach(name => {
        let radios = document.querySelectorAll(`input[name="${name}"]`);
        let isChecked = document.querySelector(`input[name="${name}"]:checked`);
        radios.forEach(r => {
            if (isChecked) {
                r.classList.remove('is-invalid');
                r.classList.add('is-valid');
            } else {
                r.classList.remove('is-valid');
                r.classList.add('is-invalid');
                allOk = false;
            }
        });
    });

    if (allOk) {
        document.getElementById('mainForm').submit();
    }
}
</script>
@endpush
