 <!-- ======= Home Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{$headtitle[0]->name}}</h1>
      <p>{{$secondtitle[0]->text}}<span class="typed" data-typed-items="Special, Developer, Freelancer, SuperStar"></span></p>
      <div class="social-links">
        @foreach ($socialicone as $item)
        <a href="{{$item->href}}" class="{{$item->class}}"><i class="{{$item->icone}}"></i></a>
        @endforeach
      </div>
    </div>
  </section><!-- End Home -->
  
 
  