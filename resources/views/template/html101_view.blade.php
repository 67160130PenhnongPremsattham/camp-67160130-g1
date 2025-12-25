@extends('template.default')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm p-4">
        <h1 class="mb-4">Result Page</h1>

        <p><strong>ชื่อ:</strong> {{ $FirstName }}</p>
        <p><strong>สกุล:</strong> {{ $LastName }}</p>
        <p><strong>วัน/เดือน/ปีเกิด:</strong> {{ $BirthDay }}</p>
        <p><strong>เพศ:</strong> {{ $Gender == 'm' ? 'ชาย' : 'หญิง' }}</p>
        <p><strong>รูปไฟล์:</strong> {{ $Myfile }}</p>
        <p><strong>ที่อยู่:</strong> {{ $Address }}</p>
        <p><strong>สีที่ชอบ:</strong> {{ $Favoritecolor }}</p>
        <p><strong>แนวเพลงที่ชอบ:</strong> {{ $Genre }}</p>

        <div class="mt-4">
            <a href="{{ url('/html101') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection
