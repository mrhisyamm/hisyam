@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Barang {{ $barang->nama }}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    
                   
                    <table class="table table-bordered" >
                        <tr>
                            <td>Qty</td>
                            <td>Keterangan</td>
                        </tr>
                        @foreach($det as $item)
                            <tr>
                                
                                <td>{{$item->qty - $item->qty_terjual}}</td>
                                  <td>
                                    <?php 
                                        if ($item->keterangan>=$mytime) {
                                            echo "Stok Baru";
                                            
                                        } 
                                        elseif ($item->keterangan<=$mytime) {
                                            echo "Stok Lama";
                                        }
                                    ?>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
