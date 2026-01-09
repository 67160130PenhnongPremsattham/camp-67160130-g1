<h1>Pokedex Table</h1>
    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>type</td>
            <td>species</td>
            <td>height</td>
            <td>weight</td>
            <td>hp</td>
            <td>attack</td>
            <td>defense</td>
            <td>image_url</td>
        </tr>
        </thead>

        <?php foreach ($pokedexs as $item) {?>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->species }}</td>
                <td>{{ $item->height }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->attack }}</td>
                <td>{{ $item->defense }}</td>
                <td>{{ $item->image_url }}</td>

                <td>
                    <a class="btn btn-warning" href="{{ url('/pokedexs/' . $item->id . '/edit') }}">
                        แก้ไข
                    </a>
                    <form style="display:inline" action="{{ url('/pokedexs/' . $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">ลบ</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
