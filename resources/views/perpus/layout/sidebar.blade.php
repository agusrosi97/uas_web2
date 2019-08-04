<div class="sidebar" data-color="orange" data-active-color="danger">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../paper/assets/img/logo-small.png">
          </div>
        </a>
        <a href="./" class="simple-text logo-normal">
          SIBASAH
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="@yield('profile')">
            <a href="nasabah">
              <i class="nc-icon nc-single-02"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="@yield('buku')">
          <a href="/nasabah">
              <i class="nc-icon nc-bank"></i>
              <p>Nasabah</p>
            </a>
          </li>

          <li class="@yield('kategori')">
            <a href="/sampah">
              <i class="nc-icon nc-tile-56"></i>
              <p>Sampah</p>
            </a>
          </li>
          <li class="@yield('kategori')">
            <a href="/nasabah">
              <i class="nc-icon nc-tile-56"></i>
              <p>Tabungan</p>
            </a>
          </li>
          <li class="@yield('kategori')">
            <a href="nasabah">
              <i class="nc-icon nc-tile-56"></i>
              <p>Transaksi</p>
            </a>
          </li>
          

        </ul>
      </div>
</div>