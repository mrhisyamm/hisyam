@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Retur Pembelian
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pembelian1s.show_fields')
                    <a href="{{ route('pembelian1s.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
