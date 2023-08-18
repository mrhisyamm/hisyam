@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detail Penjualan1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($detailPenjualan1, ['route' => ['detailPenjualan1s.update', $detailPenjualan1->id], 'method' => 'patch']) !!}

                        @include('detail_penjualan1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection