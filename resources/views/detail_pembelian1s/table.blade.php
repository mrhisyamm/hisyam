<div class="table-responsive">
    <table class="table" id="detailPembelian1s-table">
        <thead>
            <tr>
                <th>Subtotal</th>
        <th>Pembelians1 Id</th>
        <th>Barangs Id</th>
        <th>Qty</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detailPembelian1s as $detailPembelian1)
            <tr>
                <td>{{ $detailPembelian1->subtotal }}</td>
            <td>{{ $detailPembelian1->pembelians1_id }}</td>
            <td>{{ $detailPembelian1->barangs_id }}</td>
            <td>{{ $detailPembelian1->qty }}</td>
                <td>
                    {!! Form::open(['route' => ['detailPembelian1s.destroy', $detailPembelian1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detailPembelian1s.show', [$detailPembelian1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detailPembelian1s.edit', [$detailPembelian1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
