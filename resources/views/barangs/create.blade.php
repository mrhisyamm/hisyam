@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Barang
        </h1>
    </section>
    <form action="{{route('barangs.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('barangs.index') }}">
        @csrf
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                   

                        @include('barangs.fields')

                 
                </div>
            </div>
        </div>
    </div>
@endsection
