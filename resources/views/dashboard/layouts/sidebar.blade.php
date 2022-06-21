<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
 
       
 
        <li class="menu-sidebar"><a href="{{ url('/dashboard') }}"><span class="fa fa-calendar-minus-o"></span> Beranda Dashboard</span></a></li>
 
        <li class="menu-sidebar"><a href="{{ url('/biodata') }}"><span class="fa fa-cart-plus"></span> Biodata</span></a></li>
 
        <li class="menu-sidebar"><a href="{{ url('/pesan') }}"><span class="fa fa-check-circle"></span> Kirim Pesan</span></a></li>
 
        @if(\Auth::user()->role == 1)
        <li class="menu-sidebar"><a href="{{ url('/verifikasi') }}"><span class="fa fa-coffee"></span> Verifikasi</span></a></li>
 
        <li class="menu-sidebar"><a href="{{ url('/peserta') }}"><span class="fa fa-exclamation"></span> Data Peserta</span></a></li>
 
        <li class="menu-sidebar"><a href="{{ url('/profile-kampus') }}"><span class="fa fa-exclamation-circle"></span> Update Profile Kampus</span></a></li>
        @endif
 
        <li class="header">OTHER</li>
 
        @if(\Auth::user()->name == 'Admin')
        <li class="menu-sidebar"><a href="{{ url('/reset-password') }}"><span class="glyphicon glyphicon-log-out"></span> Reset Password</span></a></li>
        @endif
 
        <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>
 
 
      </ul>
    </section>