<div class="table-responsive">
    <table class="table" id="pembelian1s-table">
        <thead>
            <tr>
                <th></th>
        <th>Tanggal</th>
        <th>Total</th>
        <th>Supliers Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pembelian1s as $pembelian1)
            <tr>
                <td>{{ $pembelian1->tempat }}</td>
            <td>{{ $pembelian1->tanggal }}</td>
            <td>{{ $pembelian1->total }}</td>
            <td>{{ $pembelian1->supliers_id }}</td>
                <td>
                    {!! Form::open(['route' => ['pembelian1s.destroy', $pembelian1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pembelian1s.show', [$pembelian1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pembelian1s.edit', [$pembelian1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
