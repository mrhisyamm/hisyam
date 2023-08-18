<div class="table-responsive">
    <table class="table" id="pembelians-table">
        <thead>
            <tr>
        <th>Tanggal</th>
        <th>Total</th>
        <!-- <th>Tempat</th> -->
        {{-- <th>Supliers Id</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pembelians as $pembelian)
            <tr>
            <td>{{ $pembelian->tanggal }}</td>
            <td>Rp. {{number_format ($pembelian->total,2,",",".") }}</td>
            <!-- <td>{{ $pembelian->tempat }}</td> -->
            {{-- <td>{{ $pembelian->supliers ['name'] }}</td> --}}
            
                <td>
                    {!! Form::open(['route' => ['pembelians.destroy', $pembelian->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pembelians.show', [$pembelian->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <!-- <a href="{{ route('pembelians.edit', [$pembelian->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> -->
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
