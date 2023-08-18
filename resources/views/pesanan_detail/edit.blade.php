<form action="{{route('pesanan_details.status', $pesanan_details->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="_method" value="PUT">
    <div class="modal fade text-left" id="Modaledit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg-sm-6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Ubah Status')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>

                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                    <select name="status_pembayaran" class="form-control">
                    <option selected>--ubah status--</option>
                    <option value="1">DiProses</option>
                    <option value="2">DiKirim</option>
                </select>
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