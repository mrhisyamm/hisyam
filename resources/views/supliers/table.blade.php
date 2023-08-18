<div class="table-responsive">
    <table class="table" id="supliers-table">
        <thead>
            <tr>
            <th>No</th>
                <th>Name</th>
        <th>Alamat</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        @foreach($supliers as $suplier)
            <tr>
            <td>{{ $no++ }}</td>
                <td>{{ $suplier->name }}</td>
            <td>{{ $suplier->alamat }}</td>
                <td>
                    {!! Form::open(['route' => ['supliers.destroy', $suplier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('supliers.show', [$suplier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('supliers.edit', [$suplier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
