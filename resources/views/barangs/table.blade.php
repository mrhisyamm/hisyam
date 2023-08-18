<div class="table-responsive">
    <table class="table" id="barangs-table">
        <thead>
            <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <!-- <th>Satuan</th> -->
            <!-- <th>Harga Beli</th> -->
            <th>Harga Jual</th>
            <!-- <th>Harga Diskon</th> -->
            <!-- <th>Status</th> -->
            <th>Kategori</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        @foreach($barangs as $barang)
            <tr>
            <td>{{ $no++ }}</td>
            <td><img src="{{asset('data/barang')}}/{{$barang->gambar}}" style="width: 100px" alt=""></td>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->deskripsi }}</td>
            <td>{{ $barang->stok }}</td>
            <!-- <td>{{ $barang->satuan }}</td> -->
            <!-- <td>{{ $barang->harga_beli }}</td> -->
            <td>{{ $barang->harga }}</td>
            <!-- <td>{{ $barang->harga_diskon }}</td> -->
            <!-- <td>{{ $barang->status }}</td> -->
            <td>{{ $barang->kategori->nama }}</td>
                <td>
                    {!! Form::open(['route' => ['barangs.destroy', $barang->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('barangs.show', [$barang->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('barangs.edit', [$barang->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
