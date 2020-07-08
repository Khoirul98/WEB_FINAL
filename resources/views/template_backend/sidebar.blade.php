<div class="main-sidebar sidebar-style-2">

<aside id="sidebar-wrapper">

  <div class="sidebar-brand">
    <a href="index.html">Menu Resto</a>
  </div>

  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a>
  </div>

  <ul class="sidebar-menu">
    <li class="menu-header">Asta98-Restaurant</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Pemesanan Menu</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('pesan.index') }}">Pesanan Baru</a></li>
            <li><a class="nav-link" href="{{ route('pesan.trashed') }}">Pesanan Terkirim</a></li>
          </ul>
      </li>

    <li class="menu-header">Starter</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Harga</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('category.index') }}">List Harga</a></li>
          </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Tag</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('tag.index') }}">List Tag</a></li>
          </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Post</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('post.index') }}">List Post</a></li>
            <li><a class="nav-link" href="{{ route('post.trashed') }}">List Trashed</a></li>
          </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Postm</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('postm.index') }}">List Postm</a></li>
          </ul>
      </li>

  </ul>
  </aside>
</div>