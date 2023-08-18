<form action="{{route('pesanan_details.update', $pesanan_details->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="_method" value="PATCH">
    <div class="modal fade text-left" id="Modaledit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg-sm-6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Upload Bukti Pembayaran')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>

                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                    {!! Form::label('b_pembayaran', 'Gambar:') !!}
                    <input type="file" name="file" value="" class="form-control">
                    </div>

                <div class="mb-3">
                    <br>
                    {!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>
    </div>
</form>