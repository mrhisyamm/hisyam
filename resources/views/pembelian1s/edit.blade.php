@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Retur Pembelian
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pembelian1, ['route' => ['pembelian1s.update', $pembelian1->id], 'method' => 'patch']) !!}

                        @include('pembelian1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection