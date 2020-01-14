<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sample</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Oswald|Playfair+Display|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
    <!--slick-->
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>
    <!--modal-->
    <link rel="stylesheet" href="Modaal-master/dist/css/modaal.min.css">
    <!--aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

  </head>
  <body>
    <!--header-->
    <header id="header" class="flex js-float-header">
      <div class="c-container flex site-width">
        <a class="c-top-logo flex" href="index.php">
          <h1>
              SampleSite
          </h1>
        </a>
        <ul class="c-menu flex">
          <li class="c-mune__item"><a class="c-mune__link" href="#topics">Topics</a></li>
          <li class="c-mune__item"><a class="c-mune__link" href="#pictures">Pictures</a></li>
          <li class="c-mune__item"><a class="c-mune__link" href="#menu">Menu</a></li>
          <li class="c-mune__item"><a class="c-mune__link" href="#drink">Drink</a></li>
          <li class="c-mune__item"><a class="c-mune__link" href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="c-humberger js-trigger-menu">
        <span class="c-humberger__top"></span>
        <span class="c-humberger__middle"></span>
        <span class="c-humberger__bottom"></span>
      </div>
        <ul class="c-menu-res flex js-slide-menu">
          <li class="c-mune-res__item"><a class="c-mune__link js-slide-link" href="#topics">Topics</a></li>
          <li class="c-mune-res__item"><a class="c-mune__link js-slide-link" href="#pictures">Pictures</a></li>
          <li class="c-mune-res__item"><a class="c-mune__link js-slide-link" href="#menu">Menu</a></li>
          <li class="c-mune-res__item"><a class="c-mune__link js-slide-link" href="#drink">Drink</a></li>
          <li class="c-mune-res__item"><a class="c-mune__link js-slide-link" href="#contact">Contact</a></li>
        </ul>
    </header>

    <main id="main">

      <!--HERO-->
      <section id="hero" class="flex js-float-menu-target">
          <h1 class="c-hero-text__container">
              welcome to...
          </h1>
          <div class="c-hero-logo flex">
            <div data-aos="flip-left"
             data-aos-easing="ease-out-cubic"
             data-aos-duration="2000">
             <h1 class="c-hero-logo__container">
                 SampleSite
             </h1>
             </div>
          </div>
      </section>

      <!--TOPICS-->
      <section id="topics" class="flex">
        <div class="site-width">
          <h2 class="c-section-title">
            <span class="c-setion-title__char">TOPICS</span>
          </h2>
          <ul class="p-topic-panel">
            <a class="p-topic-panel__link" href="#">
              <li class="p-topic-panel__item">
                  <span class="p-topic-panel__time">2019.11.10</span>
                  <span class="p-topic-panel__text">新作発売！</span>
              </li>
            </a>
            <a class="p-topic-panel__link" href="#">
              <li class="p-topic-panel__item">
                  <span class="p-topic-panel__time">2019.11.10</span>
                  <span class="p-topic-panel__text">新作発売！</span>
              </li>
            </a>
            <a class="p-topic-panel__link" href="#">
              <li class="p-topic-panel__item">
                  <span class="p-topic-panel__time">2019.11.10</span>
                  <span class="p-topic-panel__text">新作発売！</span>
              </li>
            </a>
            <a class="p-topic-panel__link" href="#">
              <li class="p-topic-panel__item">
                  <span class="p-topic-panel__time">2019.11.10</span>
                  <span class="p-topic-panel__text">新作発売！</span>
              </li>
            </a>
            <a class="p-topic-panel__link" href="#">
              <li class="p-topic-panel__item">
                  <span class="p-topic-panel__time">2019.11.10</span>
                  <span class="p-topic-panel__text">新作発売！</span>
              </li>
            </a>
            <a class="p-topic-panel__link" href="#">
              <li class="p-topic-panel__item">
                  <span class="p-topic-panel__time">2019.11.10</span>
                  <span class="p-topic-panel__text">新作発売！</span>
              </li>
            </a>
          </ul>
        </div>
        <div class="c-float-img iori">
          <img class="c-float-img__img img100" src="dist/images/glass-apple.png" alt="p-iori">
        </div>
      </section>

      <!--PICTURES-->
      <section id="pictures" class="flex">
        <div class="site-width">
          <h2 class="c-section-title">
            <span class="c-setion-title__char music">Pictures</span>
          </h2>
          <div class="c-scroll">
            <ul class="c-scroll__panel slider">
              <li class="c-scroll__item">
                <a href="#modal" class="c-scroll__link modal">
                      <img class="c-scroll__img" src="dist/images/cd-ame.jpg" alt="cd-ame">
                </a>
              </li>
              <li class="c-scroll__item">
                <a href="#modal" class="c-scroll__link modal">
                      <img class="c-scroll__img" src="dist/images/cd-koinokakera.jpg" alt="cd-koinokakera">
                </a>
              </li>
              <li class="c-scroll__item">
                <a href="#modal" class="c-scroll__link modal">
                      <img class="c-scroll__img" src="dist/images/cd-butterfly.png" alt="cd-butterfly">
                </a>
              </li>
              <li class="c-scroll__item">
                <a href="#modal" class="c-scroll__link modal">
                      <img class="c-scroll__img" src="dist/images/cd-tamaki.png" alt="cd-tamaki.png">
                </a>
              </li>
              <li class="c-scroll__item">
                <a href="#modal" class="c-scroll__link modal">
                      <img class="c-scroll__img" src="dist/images/cd-sogo.jpg" alt="cd-sogo">
                </a>
              </li>
            </ul>
          </div>

          <!--modal-->
          <!--GOODSと同じモーダル-->
          <div id="modal" class="p-modal" style="display:none;">
            <div class="p-modal__container flex">
              <div class="p-modal__img-block">
                <img class="p-modal__img" src="dist/images/cd-tamaki.png" alt="">
              </div>

              <div class="p-modal__info">
                <div class="p-modal__text">
                  <h3 class="p-modal__title" >タイトル</h3>
                  サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                </div>
                <p class="p-modal__price">定価：<span>1,600円</span></p>
                <div class="p-modal-btn flex">
                  <div class="p-modal-btn__fav">
                    <i class="fas fa-heart p-modal-btn__heart js-click-fav"></i>
                  </div>
                  <form class="p-modal-btn__form" action="" method="post">
                    <input class="p-modal-btn__button" type="submit" name="" value="購入">
                  </form>
                </div>
              </div>

            </div>
          </div>


        </div>
      </section>

      <!--MENU-->
      <section id="menu" class="flex">
        <div class="site-width">
          <h2 class="c-section-title">
            <span class="c-setion-title__char">MENU</span>
          </h2>
          <div class="p-member flex">

            <div class="p-member__item">
              <a href="#modal-member" class="p-member__link modal">
                <h3 class="p-member__name">Drink</h3>
              </a>
            </div>
            <div class="p-member__item">
                <a href="#modal-member" class="p-member__link modal">
                <h3 class="p-member__name">+</h3>
              </a>
            </div>
            <div class="p-member__item">
                <a href="#modal-member" class="p-member__link modal">
                <h3 class="p-member__name">Food</h3>
              </a>
            </div>

          </div>

          <!--modal-->
          <div id="modal-member" class="p-modal" style="display:none;">
            <div class="p-modal__container flex">
              <div class="p-modal__img-block">
                <img class="p-modal__img" src="dist/images/cd-sogo.jpg" alt="">
              </div>

              <div class="p-modal__info">
                <div class="p-modal__text">
                  <h3 class="p-modal__title" >タイトル</h3>
                  サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                </div>
              </div>
            </div>
          </div>

          <!--float character-->
          <div class="c-float-img yamato">
            <img class="c-float-img__img img100" src="dist/images/glass-apple2.png" alt="p-yamato">
          </div>
          <div class="c-float-img mitsuki">
            <img class="c-float-img__img img100" src="dist/images/float-img03.png" alt="p-mitsuki">
          </div>

        </div>
      </section>

      <!--DRINK-->
      <section id="drink" class="flex">
        <div class="site-width">
          <h2 class="c-section-title">
            <span class="c-setion-title__char goods">DRINK</span>
          </h2>

          <div class="p-goods">

            <div class="p-goods__item-line flex">
              <a href="#modal" class="p-goods__item modal">
                <div>
                  <img class="p-goods__img" src="dist/images/float-img01.png" alt="p-tamaki">
                </div>
              </a>
              <a href="#modal" class="p-goods__item modal">
                <div>
                  <img class="p-goods__img" src="dist/images/float-img02.png" alt="p-tamaki">
                </div>
              </a>
              <a href="#modal" class="p-goods__item modal">
                <div>
                  <img class="p-goods__img" src="dist/images/float-img01.png" alt="p-tamaki">
                </div>
              </a>
              <a href="#modal" class="p-goods__item modal">
                <div>
                  <img class="p-goods__img" src="dist/images/float-img02.png" alt="p-tamaki">
                </div>
              </a>
            </div>

            <div class="p-goods__item-line flex">
              <a href="#modal" class="p-goods__item modal">
                <div>
                  <img class="p-goods__img" src="dist/images/float-img03.png" alt="p-sogo">
                </div>
              </a>
              <a href="#modal" class="p-goods__item modal">
                <div>
                  <img class="p-goods__img" src="dist/images/float-img04.png" alt="p-sogo">
                </div>
              </a>
              <a href="#modal" class="p-goods__item modal">
                <div>
                  <img class="p-goods__img" src="dist/images/float-img03.png" alt="p-sogo">
                </div>
              </a>
              <a href="#modal" class="p-goods__item modal">
                <div>
                  <img class="p-goods__img" src="dist/images/float-img04.png" alt="p-sogo">
                </div>
              </a>
            </div>

            <!--modal-->
            <!--MUSICと同じモーダル-->

          </div>
        </div>
      </section>
      <!--CONTACT-->
      <section id="contact" class="flex">
        <div class="site-width">
          <h2 class="c-section-title">
            <span class="c-setion-title__char">Contact</span>
          </h2>
          <form class="c-form flex" action="" method="post">
            <input class="c-form__text" type="text" name="" value="" placeholder="name">
            <input class="c-form__text" type="text" name="" value="" placeholder="email">
            <textarea class="c-form__textarea" name="" rows="8" cols="80" placeholder="お問い合わせ内容"></textarea>
            <input class="c-form__submit" type="submit" name="" value="送信">
          </form>

          <!--float character-->
          <div class="c-float-img nagi">
            <img class="c-float-img__img img100" src="dist/images/float-img04.png" alt="p-nagi">
          </div>
          <div class="c-float-img riku">
            <img class="c-float-img__img img100" src="dist/images/float-img05.png" alt="p-riku">
          </div>

        </div>
      </section>

    </main>

    <!--footer-->
    <footer id="footer">
      <div class="">
        Copyright© Tomomi , 2019 All Rights Reserved.
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
    <script src="Modaal-master/dist/js/modaal.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="dist/build.js"></script>


<!--menu/slideIn-->
    <script type="text/javascript">
      $('.js-trigger-menu').on('click',function(){
        $(this).toggleClass('is-menu-active');
        $('.js-slide-menu').toggleClass('is-menu-active');
      });
    </script>

<!--menu/slideOut-->
    <script type="text/javascript">
      $('.js-slide-link').on('click',function(){
        $(this).parents('.js-slide-menu').toggleClass('is-menu-active');
        $('.js-trigger-menu').toggleClass('is-menu-active');
      });
    </script>

<!--header/float-->
    <script type="text/javascript">
    var targetHeight = $('.js-float-menu-target').height();
    $(window).on('scroll',function(){
      $('.js-float-header').toggleClass('is-float-active', $(this).scrollTop() > targetHeight );
    });

    </script>


  </body>
</html>
