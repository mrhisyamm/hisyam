<form action="{{route('pesanan_details.update', $pesanan_details->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="_method" value="PATCH">
    <div class="modal fade text-left" id="Modaledit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Ubah Status')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>

                    </button>
                </div>
                <div class="modal-body">
                <form>
                        <div class="form-group col-sm-6">
                        {!! Form::label('file', 'Bukti Pembayaran:') !!}
                        <input type="file" name="file" class="form-control">
                            
                        </div>
                        <div class="mb-3">
                    <br>
                <button type="submit" class="btn btn-primary">Ubah</button>

                 </form>
                </div>
            </div>
        </div>
    </div>
</form>