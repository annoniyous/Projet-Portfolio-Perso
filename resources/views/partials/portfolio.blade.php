  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$sectiontitle[3]->title}}</h2>
        <p>{{$sectiontitle[3]->text}}</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <ul id="portfolio-flters">
            @foreach ($portfolioli  as $item)
            <li data-filter="{{$item->data}}" class="{{$item->class}}">{{$item->nom}}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($portfolioimg  as $item)
        <div class="{{$item->filter}}">
          <div class="portfolio-wrap">
            <img src="{{asset($item->src)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$item->name}}</h4>
              <p>{{$item->p}}</p>
              <div class="portfolio-links">
                <a href="{{$item->href}}" data-gall="portfolioGallery" class="venobox" title="{{$item->name}}"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        @if ($loop->iteration %3==0 )
      </div>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @endif
        @endforeach

       
      </div>

    </div>
  </section><!-- End Portfolio Section -->