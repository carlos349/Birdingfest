<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="sonar-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <?php include('views/modules/header.php') ?>

    <section style="background-image: url(views/images/bg-img/slide3.jpg); height: 10vh;" class="hero-area">
        
        </section>

        <div class="containerTime">
            
            <div class="timeline">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=11" data-year="Dia 1">
                    <div class="swiper-slide-content"><span class="timeline-year">Dia 1</span>
                      <h4 class="timeline-title">Our nice super title</h4>
                      <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                  <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=12" data-year="Dia 2">
                    <div class="swiper-slide-content"><span class="timeline-year">Dia 2</span>
                      <h4 class="timeline-title">Our nice super title</h4>
                      <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                  <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=13" data-year="Dia 3">
                    <div class="swiper-slide-content"><span class="timeline-year">Dia 3</span>
                      <h4 class="timeline-title">Our nice super title</h4>
                      <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                  <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=14" data-year="Dia 4">
                    <div class="swiper-slide-content"><span class="timeline-year">Dia 4</span>
                      <h4 class="timeline-title">Our nice super title</h4>
                      <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                  <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=15" data-year="Dia 5">
                    <div class="swiper-slide-content"><span class="timeline-year">Dia 5</span>
                      <h4 class="timeline-title">Our nice super title</h4>
                      <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                  <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=16" data-year="Dia 5">
                    <div class="swiper-slide-content"><span class="timeline-year">Dia 6</span>
                      <h4 class="timeline-title">Our nice super title</h4>
                      <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
          <div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=ASy-KW8vpXnf6s2xG6W_4VoEJ3Ub-1PobuQHhLD_qp-wu3rtKYb18mGa7mVwyW_N7l9WnyEjXQDImRif&currency=EUR" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'black',
          layout: 'horizontal',
          label: 'buynow',
          
      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '1'
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>


          
    <!-- ***** Portfolio Area Start ***** -->
    <div class="portfolio-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-title">
                        <img src="views/images/core-img/mediterranean.png" alt="">
                        
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-5">
                    <div class="single-portfolio-item mt-100 portfolio-item-1 wow fadeIn">
                        <div class="backend-content">
                            
                            <h2 style="margin-right: -160%;">Mediterranean</h2>
                            <img class="dots" style="margin-top: 200px;" src="views/images/core-img/logoMediterranean.png" alt="">
                        </div>
                        <div class="portfolio-thumb">
                            <p style="font-size: 2em;text-align: center !important;">Giro Mediterraneo del Birding Fest.</p>
                            <p style="font-size: 1.5em;text-align: justify;">Il Giro Mediterraneo del BirdingFest é un incontro annuale che raggiunge la più importante Birdfairs nell'Europa meridionale e passare attraverso i progetti ornitologici più interessanti e innovatorie le stazioni ornitologiche,insieme ai direttori di uffici d'inanellamento, accanto ai leader del birding a livello internazionale. Sempre, anche, con ospiti provenienti da altri continenti. <br><br>
                                Il MBR, riceve partecipanti internazionali, viene fatto ogni anno in settembre e ogni due anni in aprile-maggio. <br><br>
                                In entrambe le epoche, tutto si svolge nel bacino del Mediterraneo. <br><br>
                                L'edizione di settembre, inizia in Italia e termina in  Catalogna,nel delta dell' Ebro (Delta Birding Fest) e nell'edizione di primavera, il circuito si svolge in direzione opposta, ha origine nel delta dell'Ebro, passando poi attraverso il Festival del Oiseau (che si svolge da circa 30 anni nella regione del Hauts-de-France) e terminando in Italia, nel delta del Po (Po Delta Birdwatching Fair). <br><br>
                                Se vuoi partecipare puoi scriverci: mediterraneo@birdingfest.net 
                            </p> 
                        </div>
                        <!-- <div class="portfolio-meta">
                            <p class="portfolio-date">May 16 - 18, 2020</p>
                            <h2>Birding Fest</h2>
                        </div> -->
                    </div>
                </div>
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-6">
                    <div class="single-portfolio-item mt-230 portfolio-item-2 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="views/images/core-img/logoMediterranean.png" alt="">
                        </div>
                        <div class="portfolio-thumb">
                            <p style="font-size: 2em;text-align: center !important;">Mediterranean BirdingFest Round.</p>
                            <p style="font-size: 1.5em;text-align: justify;">The Mediterranean BirdingFest Round is an annual call that covers the Birdfairs of southern Europe and the most interesting and innovative bird projects, along with the directors of ringing offices, ornithological stations, birding leaders and international initiatives. Always, also, with guests from other continents. <br><br>
                                It takes place every year in September and biannually also in April-May. <br><br>
                                In both cases, it covers part of the Mediterranean basin. In the September edition it starts in Italy and ends in Catalonia, at the Delta Birding Fest (Ebro Delta). <br><br>
                                In the spring edition the circuit is in the opposite direction. It begins in the Ebro Delta, passes through the Festival de l’Oiseau, which has been held for about 30 years, in the Hauts-de-France region and ends in Italy at the Po Delta Birdwatching Fair. <br><br>
                                If you want to participate you can write us: mediterraneo@birdingfest.net
                                 
                            </p>
                        </div>
                        <!-- <div class="portfolio-meta">
                            <p class="portfolio-date">Sep 21 - 24, 2020</p>
                            <h2>Birding Fest</h2>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-5">
                    <div class="single-portfolio-item mt-100 portfolio-item-1 wow fadeIn">
                        <div class="backend-content">
                            
                            <h2 style="margin-right: -25 0%;">Round</h2>
                            <img class="dots" style="margin-top: 200px;" src="views/images/core-img/logoMediterranean.png" alt="">
                        </div>
                        <div class="portfolio-thumb">
                            <p style="font-size: 2em;text-align: center !important;">Tour Méditerranée du BirdingFest.</p>
                            <p style="font-size: 1.5em;text-align: justify;">Le Tour Méditerranée du BirdingFestest un appel annuel qui couvre les Birdfairs du sud de l'Europe et les projets d'oiseaux les plus intéressants et innovants, ainsi que les directeurs des bureaux de baguage, les stations ornithologiques, les chefs du birding et les initiatives internationales. Toujours aussi avec des invités d'autres continents. <br><br>
                                Il a lieu chaque année en septembre et tous les deux ans également en avril-mai. <br><br>
                                Dans les deux cas, il couvre une partie du bassin méditerranéen. Dans l'édition de septembre, il commence en Italie et se termine en Catalogne, au Delta Birding Fest (Delta de l'Èbre). <br><br>
                                Dans l'édition de printemps, le circuit est dans la direction opposée. Il commence dans le delta de l'Èbre, passe par le Festival de l'Oiseau, qui se déroule depuis 30 ans, dans la région des Hauts-de-France et se termine en Italie à laPô Delta Birdwatching Fair. <br><br>
                                Si vous souhaitez participer, vous pouvez nous écrire: mediterraneo@birdingfest.net
                                
                            </p> 
                        </div>
                        <!-- <div class="portfolio-meta">
                            <p class="portfolio-date">May 16 - 18, 2020</p>
                            <h2>Birding Fest</h2>
                        </div> -->
                    </div>
                </div>
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-6">
                    <div class="single-portfolio-item mt-230 portfolio-item-2 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="views/images/core-img/logoMediterranean.png" alt="">
                        </div>
                        <div class="portfolio-thumb">
                            <p style="font-size: 2em;text-align: center !important;">Volta Mediterrània del BirdingFest.</p>
                            <p style="font-size: 1.5em;text-align: justify;">
                                La Volta Mediterrània del BirdingFest és una convocatòria anual que recorre les Birdfairs del sud d'Europa i els projectes ornitològics més interessants i innovadors i les estacions ornitològiques, amb els directors d'oficines d'anellatge i els líders del birding i iniciatives internacionals. Sempre, a més, amb convidats d'altres continents. <br><br>
                                Es realitza cada any al setembre i bianualment també a l'abril-maig. <br><br>
                                Recorre, en ambdós casos, part de la conca de la Mediterrània. En l'edició de setembre s'inicia a Itàlia i finalitza a Catalunya, al Delta Birding Fest (Delta de l'Ebre). <br><br>
                                En l'edició de primavera el circuit és en direcció oposada. Inicia al Delta de l'Ebre, passa pel Festival de l'Oiseau, que se celebra des de fa uns 30 anys, a la regió Hauts-de-France i finalitza a Itàlia a la Po Delta Birdwatching Fair.
                                Si vols participar pots escriure: mediterraneo@birdingfest.net
                                
                            </p>
                        </div>
                        <!-- <div class="portfolio-meta">
                            <p class="portfolio-date">Sep 21 - 24, 2020</p>
                            <h2>Birding Fest</h2>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-10">
                    <div class="single-portfolio-item mt-100 portfolio-item-3 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="views/images/core-img/dots.png" alt="">
                            <h2 style="margin-top:25px;">Birding</h2>
                        </div>
                        <div class="portfolio-thumb">
                            <img src="views/images/img-dates/imgBird7.jpeg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Sep 21 - 18 Oct, 2020</p>
                            <h2>Birding Fest</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row justify-content-end">
                
                <div class="col-12 col-md-6" style="margin-top:120px;">
                    <div class="single-portfolio-item portfolio-item-4 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="views/images/core-img/dots.png" alt="">
                        </div>
                        <div class="portfolio-thumb">
                            <img src="views/images/img-dates/imgBird4.jpeg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Oct 9 - 10 - 11, 2020</p>
                            <h2>Birding Fest</h2>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row">
                
                <div class="col-12 col-md-5">
                    <div class="single-portfolio-item portfolio-item-5 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="views/images/core-img/dots.png" alt="">
                            <h2>Fest</h2>
                        </div>
                        <div class="portfolio-thumb">
                            <img src="views/images/img-dates/imgBird5.jpeg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">May 25 - 26, 2020</p>
                            <h2>Birding Fest</h2>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row justify-content-center">
               
                <div class="col-12 col-md-4">
                    <div class="single-portfolio-item portfolio-item-6 wow fadeIn">
                        <div class="portfolio-thumb">
                            <img src="views/images/img-dates/imgBird6.jpeg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">May 27 - 28, 2020</p>
                            <h2>Birding Fest</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end">
                
                <div class="col-12 col-md-4">
                    <div class="single-portfolio-item portfolio-item-7 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="views/images/core-img/dots.png" alt="">
                            <h2>Birding</h2>
                        </div>
                        <div class="portfolio-thumb">
                            <img src="views/images/img-dates/imgBird7.jpeg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Sep 21 - Oct 18, 2020</p>
                            <h2>Birding Fest</h2>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Call to Action Area Start ***** -->
    <div class="sonar-call-to-action-area section-padding-0-100">
        <div class="backEnd-content">
            <h2>Fest</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content wow fadeInUp" data-wow-delay="0.5s">
                        <h2>We are experienced birding</h2>
                        
                        <a href="#" class="btn sonar-btn mt-100">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Call to Action Area End ***** -->

    <?php include('views/modules/footer.php') ?>

</body>