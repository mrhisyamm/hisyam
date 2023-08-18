<li class="{{ Request::is('homes*') ? 'active' : '' }}">
    <a href="{!! url('home') !!}"><i class="fa fa-home"></i><span>Home</span></a>
</li>

<li class="{{ Request::is('P\profile*') ? 'active' : '' }}">
    <a href="{{ route('Profile.index') }}"><i class="fa fa-user"></i><span>Profile</span></a>
    </li>

<li class="{{ Request::is('slide_show*') ? 'active' : '' }}">
    <a href="{{ route('Slide_Show.index') }}"><i class="fa fa-image"></i><span>Slide Show</span></a>
</li>

<li class="{{ Request::is('barangs*') ? 'active' : '' }}">
    <a href="{{ route('barangs.index') }}"><i class="fa fa-truck"></i><span>Barang</span></a>
</li>

<li class="{{ Request::is('kategori*') ? 'active' : '' }}">
    <a href="{{ route('kategori.index') }}"><i class="fa fa-book"></i><span>Kategori Barang</span></a>
</li>


<li class="treeview <?php if( 'active' == "" || 'active' == "" ) echo 'active'; ?>">
            <a href="#">
              <i class="fa fa-bar-chart"></i> <span>Transaksi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ (Request::segment(1) == 'pembelians') ? 'active' : '' }}"><a href="{{ url('/pembelians') }}"><i class="fa fa-shopping-cart fa fa-shopping-car"></i> Pembelian</span></a></li>       

              
               
        </ul>
</li>

<li class="{{ Request::is('pesanan_details*') ? 'active' : '' }}">
    <a href="{{ route('pesanan_detail.index') }}"><i class="fa fa-shopping-cart"></i><span>Pesanan</span></a>  
</li>
<!--<li class="treeview <?php if( 'active' == "" || 'active' == "" ) echo 'active'; ?>">
            <a href="#">
              <i class="fa fa-book"></i> <span>Retur</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ (Request::segment(1) == 'penjualan1s') ? 'active' : '' }}"><a href="{{ url('/penjualan1s') }}"><i class="fa fa-fw fa-suitcase"></i> Penjualan</span></a></li>
            </li>
               <li class="{{ (Request::segment(1) == 'pembelian1s') ? 'active' : '' }}"><a href="{{ url('/pembelian1s') }}"><i class="fa fa-fw fa-suitcase"></i> Pembelian</span></a></li>       
          
        </ul>-->
<li class="treeview <?php if( 'active' == "" || 'active' == "" ) echo 'active'; ?>">
            <a href="#">
              <i class="fa fa-book"></i> <span>Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              {{-- <li class="{{ (Request::segment(1) == 'laporan') ? 'active' : '' }}"><a href="{{ url('/laporan') }}"><i class="fa fa-fw fa-suitcase"></i> Penjualan</span></a></li>
            </li> --}}
               <li class="{{ (Request::segment(1) == 'laporanp') ? 'active' : '' }}"><a href="{{ url('/laporanp') }}"><i class="fa fa-fw fa-suitcase"></i> Pembelian</span></a></li>

               <li class="{{ (Request::segment(1) == 'laporan_laba') ? 'active' : '' }}"><a href="{{ route('Laporan_laba.laba') }}"><i class="fa fa-fw fa-suitcase"></i> Laba Rugi</span></a></li>
          
        </ul>
        <li class="{{ Request::is('supliers*') ? 'active' : '' }}">
          <a href="{{ route('supliers.index') }}"><i class="fa fa-male"></i><span>Suplier</span></a>
          <a href="{{ url('downloadd') }}">
            <i class="fa fa-question-circle"></i>Petunjuk Penggunaan
          </a>
          <a href="{{ route('about.index') }}">
            <span><i class="fa fa-info-circle"></i>  About</span>
          </a>
          </li>
          
          
          

      {{-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>User</span></a>  
    </li> --}}

    
     
    

      <!-- <li class="treeview <?php if( 'active' == "" || 'active' == "" ) echo 'active'; ?>">
            <a href="#">
              <i class="fa fa-book"></i> <span>Beban</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ (Request::segment(1) == 'gaji_karyawan') ? 'active' : '' }}"><a href="{{ route('gaji_karyawan.index') }}"><i class="fa fa-fw fa-book"></i> Gaji Karyawan</span></a></li>
            </li>
               <li class="{{ (Request::segment(1) == 'pembayaran_listrik') ? 'active' : '' }}"><a href="{{ route('pembayaran_listrik.index') }}"><i class="fa fa-fw fa-suitcase"></i> Pembayaran Listrik</span></a></li>       
               <li class="{{ (Request::segment(1) == 'pembayaran_air') ? 'active' : '' }}"><a href="{{ route('pembayaran_air.index') }}"><i class="fa fa-fw fa-suitcase"></i> Pembayaran Air</span></a></li>       
          
        </ul>
</li> -->
<!-- <li class="{{ Request::is('beban*') ? 'active' : '' }}">
    <a href="{{ route('beban.index') }}"><i class="fa fa-book"></i><span>Beban</span></a>
</li>




    



