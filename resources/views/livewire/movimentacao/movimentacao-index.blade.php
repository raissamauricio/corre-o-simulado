{{-- <div class="mb-5">

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Data da Movimentação</th>
                    <th scope="col">Quantidade movimentada</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movimentacaos as $p)
                    <tr>
                        <th scope="row">{{ $p->id }}</th>
                        <td>{{ $p->produto_id }}</td>
                        <td>{{ $p->user_id }}</td>
                        <td>{{ $p->data_movimentacao }}</td>
                        <td>{{ $p->quantidade }}</td>
                        <td>{{ $p->tipo }}</td>

                        <td>
                            <button wire:click='delete({{ $p->id }})'
                                class="btn btn-sm btn-danger">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div> --}}

<div class="card">
    <div class="card-header">
        <h5>Movimentação de Produtos</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>produto</th>
                    <th>tipo</th>
                    <th>quantidade</th>
                    <th>usuario</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movimentacaos as $movimentacao)
                    <tr>
                        <td>{{ $movimentacao->data_movimentacao }}</td>
                        <td>{{ $movimentacao->produto->nome }}</td>
                        <td>@if( $movimentacao->tipo == 'entrada' )
                            <span class="badge bg-primary">entrada</span>
                            @else 
                            <span class="badge bg-danger">saida</span>
                            @endif   
                        </td>
                        <td>{{ $movimentacao->quantidade }}</td>
                        <td>{{ $movimentacao->user->name}}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
