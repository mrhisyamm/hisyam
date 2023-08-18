<div class="table-responsive">
    <table class="table" id="penjualan1s-table">
        <thead>
            <tr>
                <th>Tanggal</th>
        <th>Total</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($penjualan1s as $penjualan1)
            <tr>
                <td>{{ $penjualan1->tanggal }}</td>
            <td>{{ $penjualan1->total }}</td>
                <td>
                    {!! Form::open(['route' => ['penjualan1s.destroy', $penjualan1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('penjualan1s.show', [$penjualan1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('penjualan1s.edit', [$penjualan1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
