<?php 
/* 
Template Name: Wedding
*/
get_header(); 

$slickGallery = [
  [
    "image" => "slider-1.png",
  ],
  [
    "image" => "slider-2.png",
  ],
  [
    "image" => "slider-3.png",
  ],
  [
    "image" => "slider-1.png",
  ]
];

$events = [
  [
    "image" => "Restaurants.png",
    "name" => "Restaurants",
    "link" => "google.com"
  ],
  [
    "image" => "Bars.png",
    "name" => "Bars",
    "link" => "google.com"
  ],
  [
    "image" => "Boutiques.png",
    "name" => "Boutiques",
    "link" => "google.com"
  ],
  [
    "image" => "Restaurants.png",
    "name" => "Restaurants",
    "link" => "google.com"
  ]
]

?>

  <main class="section__main">
    <section class="sectionBanner">
      <div class="sectionBanner__bckg" style="background-image: url(<?php echo IMG_BASE . 'img-1.png' ?>)">
        <div class="sectionBanner__content">
          <div class="pb-50 logo-joanna-marcin">
            <img src="<?php echo IMG_BASE . 'img-2.svg'?>" alt="">
          </div>

          <p class="heading--42 pb-10 color--A07F2B">14.09.24</p>
          <p class="heading--24 pb-64 color--4A4A4A">Armenia, Quindío <br> Colombia</p>

          <div class="sectionBanner__box" id="events">
            <div class="box box--default">
              <p class="heading--112 color--A07F2B">Wedding</p>
              <span class="line line-center"></span>
              <p class="heading--24 color--A07F2B pb-24">CEREMONY</p>
              <p class="heading--28 color--4A4A4A pb-10">September 14th 2024</p>
              <p class="heading--24 color--4F3747 pb-24">2:00 P.M.</p>
              <p class="heading--24 color--4A4A4A pb-10">Parroquia Nuestra <br> Señora del Café</p>
              <p class="heading--20 color--4A4A4A pb-15">Armenia, Quindio, Colombia</p>

              <div class="pb-64">
                <a href="https://maps.app.goo.gl/qQr6JtAozQry5F2q9" target="_blank" class="button button--primary button--center">
                  Location 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('location'); 
                  ?> 
                </a>
              </div>

              <p class="heading--24 color--A07F2B pb-20">RECEPTION</p>
              <p class="heading--24 color--4A4A4A pb-10">Casa Hotel El Triángulo</p>
              <p class="heading--20 color--4A4A4A pb-15">Armenia, Quindio, Colombia</p>
              
              <p class="heading--24 color--4F3747 pb-15">3:30 P.M.</p>

              <div class="pb-40">
                <a href="https://maps.app.goo.gl/KJJ3ZkG6shUUb6n98" target="_blank" class="button button--primary button--center">
                  Location 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('location'); 
                  ?> 
                </a>
              </div>

              <div class="grid grid--2 line--vertical">
                <div>
                  <p class="heading--54 pb-20">Dress Code</p>
                  <button type="button" class="button button--primary button--center" data-open-modal="modal-1">
                    Formal
                    <?php 
                    get_template_part('template-parts/content', 'icono');
                    display_icon('eye'); 
                    ?> 
                  </button>
                </div>
                <div class="">
                  <p class="heading--54 pb-20">Wishing Well</p>
                  <a href="#" target="_blank" class="button button--primary button--center">
                    Formal
                    <?php 
                    get_template_part('template-parts/content', 'icono');
                    display_icon('open'); 
                    ?> 
                  </a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sectionCountdown">
      <div class="sectionCountdown__bckg">
        <p class="heading--112 color--964F4C pb-30">Countdown!</p>
        <div id="countdown-timer" class="sectionCountdown__timer"></div>
      </div>

      <div class="sectionCountdownSlider">
        <div class="sectionCountdownSlider__container">
          <div class="slickGallery">
            <?php foreach ($slickGallery as $key => $item) { ?>
              <div class="padding">
                <div class="item">
                  <img src="<?php echo IMG_BASE . '/' . $item["image"] ?>" alt="">
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

      <div class="sectionEvents">
        <p class="heading--64 color--964F4C">EVENTS</p>
        <span class="line line-center"></span>

        <div class="flex flex--center flex--gap-68">
          <div class="box box--small box--0">
            <p class="heading--72 color--964F4C pb-5">Café Quindío</p>
            <p class="heading--20 color--4F3747 pb-20">EXPERIENCE</p>
            
            <span class="line line--center"></span>

            <p class="heading--24 color--4F3747 pb-15">September 12th 2024</p>
            <p class="heading--24 color--4F3747 pb-15">3:00 P.M.</p>
            <p class="heading--24 color--4F3747 pb-10">Salento, Quindío</p>
            <p class="heading--18 color--4F3747 pb-20">Transfer by Bus</p>

            <div class="pb-20">
              <a href="https://maps.app.goo.gl/jTaJZDvnHj7ZXPQG8" target="_blank" class="button button--primary button--center">
                Location 
                <?php 
                get_template_part('template-parts/content', 'icono');
                display_icon('location'); 
                ?> 
              </a>
            </div>

            <span class="line line--center" style="margin-bottom: 25px"></span>

            <p class="heading--54 color--964F4C pb-20">Dress Code</p>
            <button type="button" class="button button--primary button--center" data-open-modal="modal-1">
              Casual
              <?php 
              get_template_part('template-parts/content', 'icono');
              display_icon('eye'); 
              ?> 
            </button>
          </div>
          <div class="box box--small box--0">
            <p class="heading--72 color--964F4C pb-5">Cocora Valley</p>
            <p class="heading--20 color--4F3747 pb-20">EXPERIENCE</p>
            
            <span class="line line--center"></span>

            <p class="heading--24 color--4F3747 pb-15">September 13th 2024</p>
            <p class="heading--18 color--4F3747 pb-10">From 10:30 A.M. to 4:00 P.M.</p>
            <p class="heading--24 color--4F3747 pb-5">Salento, Quindío</p>
            <p class="heading--18 color--4F3747 pb-20">Transfer by Bus</p>

            <div class="pb-20">
              <div class="grid grid--2 gap">
                <a href="https://maps.app.goo.gl/jTaJZDvnHj7ZXPQG8" target="_blank" class="button button--primary button--center">
                  Location 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('location'); 
                  ?> 
                </a>
                <a href="https://maps.app.goo.gl/jTaJZDvnHj7ZXPQG8" target="_blank" class="button button--primary button--center">
                  See Info 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('open'); 
                  ?> 
                </a>
              </div>
            </div>

            <p class="heading--54 color--964F4C pb-20">Dress Code</p>
            <div class="pb-40">
              <button type="button" class="button button--primary button--center" data-open-modal="modal-1">
                Casual
                <?php 
                get_template_part('template-parts/content', 'icono');
                display_icon('eye'); 
                ?> 
              </button>
            </div>

            <p class="heading--20 color--4F3747 pb-15">WELCOME DINNER</p>
            <p class="heading--18 color--4F3747 pb-10">From 5:30 P.M. to 8:30 P.M.</p>
            <p class="heading--24 color--4F3747 pb-5">La Herencia Hotel</p>
            <p class="heading--18 color--4F3747 pb-20">Salento, Quindío</p>

            <div class="pb-20">
              <div class="grid grid--2 gap">
                <a href="https://maps.app.goo.gl/jvT7LFUVFa1hp5gp8" target="_blank" class="button button--primary button--center">
                  Location 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('location'); 
                  ?> 
                </a>
                <a href="https://maps.app.goo.gl/jTaJZDvnHj7ZXPQG8" target="_blank" class="button button--primary button--center">
                  See Info 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('open'); 
                  ?> 
                </a>
              </div>
            </div>

            <p class="heading--54 color--964F4C pb-20">Dress Code</p>
            <a href="https://maps.app.goo.gl/jTaJZDvnHj7ZXPQG8" target="_blank" class="button button--primary button--center">
              Casual Elegant 
              <?php 
              get_template_part('template-parts/content', 'icono');
              display_icon('open'); 
              ?> 
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="sectionRsvp" id="rsvp">
      <img src="<?php echo IMG_BASE . 'img-5.png'?>" alt="">
      <div class="sectionRsvp__bckg">
        <div class="sectionRsvp__text">
          <p class="heading--64 color--964F4C">R.S.V.P.</p>
          <span class="line line--default"></span>

          <p class="heading--24 color--964F4C font-bosque">Celebrate with us!</p>
          <p class="heading--24 color--964F4C font-bosque">Kindly respond by JULY 20th, 2024</p>
        </div>
      </div>

      <p class="heading--24 color--FCF0E3 numeral">#Joanna&Marcin</p>
    </section>

    <section class="sectionQuindio">
      <div class="sectionQuindio__bckg">
        <div class="sectionQuindioCity">
        <div class="sectionQuindioCity__text">
          <p class="heading--72 color--964F4C font-romes">Armenia, Quindío</p>
          <span class="line line--center"></span>
          <div class="sectionQuindio__text">
            <p class="heading--18 font-bosque color--4F3747">
              Armenia, the smallest of Colombia's coffee-growing capitals, is surrounded by lush farmland and mountains. Although it is small, the traditions of the Coffee Cultural Landscape are strongly felt. The city, with a big-town atmosphere, has friendly inhabitants who enjoy chatting over coffee. Coffee is central to Armenia's identity, evidenced by the Yipao Parade, its most iconic event. Visitors can enjoy numerous attractions in and around the city, immersing themselves in the unique coffee culture.
            </p>
          </div>
          </div>

          <div class="sectionQuindio__events-bckg">
            <div class="sectionQuindio__events">
              <div class="slickEvents">
                <?php foreach ($events as $key => $event) { ?>
                  <div class="event">
                    <img src="<?php echo IMG_BASE . $event['image'];?>" alt="">
                    <p class="heading--46 color--9F3F58"><?php echo $event['name'];?></p>
                    <a href="<?php echo $event['link'];?>">VIEW</a>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div>
            <iframe src="https://www.google.com/maps/d/embed?mid=1VoHMUuMWVaBkSwZ1IfaWJSQQL8hOYVE&ehbc=2E312F" width="100%" height="480"></iframe>
          </div>
          <p class="heading--24 color--FCF0E3 numeral">#Joanna&amp;Marcin</p>
      </div>
    </section>
  </main>

<?php 
get_footer(); 
?>
