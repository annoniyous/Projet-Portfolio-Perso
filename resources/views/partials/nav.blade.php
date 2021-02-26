 <!-- ======= Header ======= -->
 <header id="header" class="d-flex flex-column justify-content-center">
  <nav class="nav-menu">
    <ul>
      @foreach ($navlink as $item)
      <li><a href="#{{$item->href}}"><i class="{{$item->icone}}"></i> <span>{{$item->span}}</span></a></li>
      @endforeach
    </ul>
  </nav><!-- .nav-menu -->
</header><!-- End Header -->