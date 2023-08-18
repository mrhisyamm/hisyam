<div class="table-responsive">
    <table class="table" id="detailPenjualan1s-table">
        <thead>
            <tr>
                <th>Qty</th>
        <th>Subtotal</th>
        <th>Penjualan1S Id</th>
        <th>Barangs Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detailPenjualan1s as $detailPenjualan1)
            <tr>
                <td>{{ $detailPenjualan1->qty }}</td>
            <td>{{ $detailPenjualan1->subtotal }}</td>
            <td>{{ $detailPenjualan1->penjualan1s_id }}</td>
            <td>{{ $detailPenjualan1->barangs_id }}</td>
                <td>
                    {!! Form::open(['route' => ['detailPenjualan1s.destroy', $detailPenjualan1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detailPenjualan1s.show', [$detailPenjualan1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detailPenjualan1s.edit', [$detailPenjualan1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
