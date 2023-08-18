<!-- Qty Field -->
<div class="form-group">
    {!! Form::label('qty', 'Qty:') !!}
    <p>{{ $detailPenjualan->qty }}</p>
</div>

<!-- Sub Total Field -->
<div class="form-group">
    {!! Form::label('sub_total', 'Sub Total:') !!}
    <p>{{ $detailPenjualan->sub_total }}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $detailPenjualan->total }}</p>
</div>

<!-- Penjualans Id Field -->
<div class="form-group">
    {!! Form::label('penjualans_id', 'Penjualans Id:') !!}
    <p>{{ $detailPenjualan->penjualans_id }}</p>
</div>

<!-- Barangs Id Field -->
<div class="form-group">
    {!! Form::label('barangs_id', 'Barangs Id:') !!}
    <p>{{ $detailPenjualan->barangs_id }}</p>
</div>

