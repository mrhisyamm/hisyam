@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Penjualan
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('penjualans.show_fields')
                    <a href="{{ route('penjualans.index') }}" class="btn btn-default">Back</a>
                    <a href="{{action('PenjualanController@pdf', $penjualan->id)}}" target="_blank"><b><button>Print</button></b></a>
                </div>
            </div>
        </div>
    </div>
@endsection
