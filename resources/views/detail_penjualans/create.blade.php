@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detail Penjualan
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'detailPenjualans.store']) !!}

                        @include('detail_penjualans.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
