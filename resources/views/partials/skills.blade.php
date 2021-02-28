<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>{{$sectiontitle[4]->title}}</h2>
        <p>{{$sectiontitle[4]->text}}</p>
      </div>
      <div class="row skills-content">

        @foreach ($skills  as $item)
        <div class="col-lg-6">
          <div class="progress">
            <span class="skill">{{$item->nom}}<i class="val">{{$item->pourcent}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$item->airav}}" aria-valuemin="0" aria-valuemax="{{$item->airavm}}"></div>
            </div>
          </div>
        </div>
        @if ($loop->iteration %2==0 )
      </div>
      <div class="row skills-content">
        @endif
        @endforeach
      </div>
    </div>
  </section><!-- End Skills Section -->
