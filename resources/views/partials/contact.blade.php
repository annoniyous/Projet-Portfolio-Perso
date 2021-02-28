<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$sectiontitle[5]->title}}</h2>
      </div>

      <div class="row mt-1">

        <div class="col-lg-4">
          <div class="info">
            @foreach ($contacticones as $item)
            <div class="{{$item->class}}">
              <i class="{{$item->icone}}"></i>
              <h4>{{$item->nom}}</h4>
              <p>{{$item->contenu}}</p>
            </div>
            @endforeach
          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              @foreach ($contactform as $item)
                  
              <div class="col-md-6 form-group">
                <input type="{{$tem->type}}" name="{{$tem->name}}" class="form-control" id="{{$tem->ida}}" placeholder="{{$tem->placeholder}}" data-rule="{{$tem->datarule}}" data-msg="{{$tem->datamsg}}" />
                <div class="validate"></div>
              </div>
              @if ($loop->iteration %2==0 )
            </div>
            <div class="form-row">
              @endif
              @endforeach
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>

            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->