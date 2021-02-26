<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$sectiontitle[0]->title}}</h2>
        <p>{{$sectiontitle[0]->text}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="{{asset($aboutimg[0]->src)}} "class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>{{$aboutdescription[0]->h3}}</h3>
          <p class="font-italic">{{$aboutdescription[0]->p1}}</p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
            @foreach ($aboutli  as $item)
                  <li><i class="icofont-rounded-right"></i> <strong>{{$item->icone}}</strong> {{$item->li}}</li>
              @if (
                (count($aboutli ) % 2 === 0 && $loop->iteration == (count($aboutli)/2))||
                (count($aboutli ) % 2 != 0 && $loop->iteration == (ceil(count($aboutli)/2))))
              </ul>
              </div>
              <div class="col-lg-6">
                <ul>
              @endif
            @endforeach
              </ul>
            </div>
          </div>
          <p>{{$aboutdescription[0]->p2}}</p>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->