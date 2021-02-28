<div class="container">
    <h3>{{$headtitle[0]->name}}</h3>
    <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
    <div class="social-links">
      @foreach ($socialicone as $item)
      <a href="{{$item->href}}" class="{{$item->class}}"><i class="{{$item->icone}}"></i></a>
      @endforeach
    <div class="copyright mt-3">
      &copy; Copyright by <strong><span>{{$headtitle[0]->name}}</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     
      Designed by {{$headtitle[0]->name}}
    </div>
  </div>