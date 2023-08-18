@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detail Pembelian1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($detailPembelian1, ['route' => ['detailPembelian1s.update', $detailPembelian1->id], 'method' => 'patch']) !!}

                        @include('detail_pembelian1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection