<div class="mb-5">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($movimentacao as $p)
            <tr>
                <th scope="row">{{ $p->id }}</th>
                <td>{{ $p->quantidade }}</td>
                <td>{{ $p->data_movimentacao }}</td>
                <td>{{ $p->tipo }}</td>
                <td>{{ $p->produto_id }}</td>
                <td>{{$p->user_id}}</td>
              
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
