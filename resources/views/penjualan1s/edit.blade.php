@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Retur Penjualan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($penjualan1, ['route' => ['penjualan1s.update', $penjualan1->id], 'method' => 'patch']) !!}

                        @include('penjualan1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection