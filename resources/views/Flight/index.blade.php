@extends('template.default')

@section('content')
    <h1>Flights Create</h1>
    <form action="{{ url('/flights') }}" method="post">
        @csrf

        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name">

        <label for="airline">Airline</label>
        <input class="form-control" type="text" name="airline" id="airline">

        <label for="number_of_seats">Number of Seats</label>
        <input class="form-control" type="number" name="number_of_seats" id="number_of_seats">

        <label for="price">Price</label>
        <input class="form-control" type="number" name="price" id="price">

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

    <h1>Flights Lists</h1>
    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>airline</td>
            <td>number_of_seats</td>
            <td>price</td>
            <td></td>
        </tr>
        </thead>

        <?php foreach ($flights as $item) {?>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->airline }}</td>
                <td>{{ $item->number_of_seats }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    <a href="{{ url('/flights/' . $item->id . '/edit') }}">แก้ไข
                    </a> / ลบ</a>
            </tr>
        <?php } ?>
    </table>
@endsection
