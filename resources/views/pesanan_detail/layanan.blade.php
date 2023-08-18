<form action="{{url('/pesanan_details/layanan', $pesanan_details)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="_method" value="PUT">
    <div class="modal fade text-left" id="Modaledit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg-sm-6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Pilih Nama Layanan')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>

                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                <div class="col-lg-6">
                    @if($array_result)
                    <select name="layanan" class="form-control">
                            <option value="" holder>--Pilih Layanan--</option>
                    <?php for($i=0; $i<count($array_result["rajaongkir"]["results"][0]["costs"]); $i++){ ?>
                               <!-- isi data base nnti -->
                    <option value="<?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["cost"][0]["value"] ?>">
                                <!-- tampilan -->
                    <?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["service"] ?> | 
                            <?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["cost"][0]["value"] ?> | 
                            <?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["cost"][0]["etd"] ?>
                    </option>
                    
                    <?php } ?>
                    
                    </select>

                   
                <br>

                <div class="mb-3">
                    <br>
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                </div>
                @else

                @endif
            </div>
        </div>
    </div>
    </div>
    </div>
</form>