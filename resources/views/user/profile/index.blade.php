@extends('Layouts.user')
@section('content')
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-5">Profile</h3>
            </div>
        </div>
    <div class="row">
    @foreach($profile as $item)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h5 class="mb-0">Emma Roberts</h5>
                                <h6 class="text-info">UI Designer</h6> -->
                                <h5><a href="#" class="text-dark font-weight-bold">Visi</h5>
                                <p>{{$item->visi}}</p>

                                <h5><a href="#" class="text-dark font-weight-bold">Misi</h5>
                                <p>{{$item->tentang_kami}}</p>
          
                                <a href="" class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg> WhatsApp</a>
                            </div>
                            @endforeach
                        </div>  
                    </div>
                    <div class="col-md-6">
                 <div class="card" style="height: 400px; width: 550px;">
                 <div class="card-header text-dark font-weight-bold">Maps</div>
                    <div class="card-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1301.3820444278413!2d117.259856710508!3d-0.571362442549433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df42b83c7df88ff%3A0x63d2423917af21f8!2sTb.%20Hidayah!5e0!3m2!1sid!2sid!4v1678454782821!5m2!1sid!2sid" width="100%" height="295" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    
                </div>
            </div>
           
        </div>
    </div>
</div>
</div>
</section>
@endsection