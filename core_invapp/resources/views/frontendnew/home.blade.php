@extends('frontendnew.layouts.master')

@section('content')
<div class="section count" style="display: none">
  <div class="container-center w-container">
      <div class="count-bg">
          <div class="light-1"></div>

          <div class="count-wrapper">
              <div style="text-align: center">
                  <h2 class="heading-2">Pre Sale starting soon.</h2>

                  <h3 class="heading-2-copy white">Follow us on Twitter for updates</h3>
              </div>

              <div class="js-clock" id="js-clock">
                  <div class="box">
                      <div class="clock-number" id="js-clock-days">00</div>

                      <div class="clock-label">Days</div>
                  </div>

                  <div class="doted">:</div>

                  <div class="box">
                      <div class="clock-number" id="js-clock-hours">00</div>

                      <div class="clock-label">Hrs</div>
                  </div>

                  <div class="doted">:</div>

                  <div class="box">
                      <div class="clock-number" id="js-clock-minutes">00</div>

                      <div class="clock-label">Min</div>
                  </div>

                  <div class="doted">:</div>

                  <div class="box">
                      <div class="clock-number" id="js-clock-seconds">00</div>

                      <div class="clock-label">SEC</div>
                  </div>
              </div>
            </div>
      </div>

      <div class="section blog" id="artists" style="display: none"></div>
  </div>
</div>
<div class="section sale">
  <noften-comps showuseraddressmodal="false"></noften-comps>
</div>

<div class="container-center w-container">
  <div class="title-container">
      <h2 class="heading-insta">Latest Celebrity Signups</h2>
  </div>
  <div class="swiper mySwiper w-layout-grid blog-grid">
      <div class="swiper-wrapper">

          <div class="swiper-slide">
              <a href="https://www.instagram.com/p/CWWCycLIRC3/" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/kara.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Kara Lina</div>
                      <div class="post-text">
                          Famous Playboy Playmate who has appeared in Maxim and FHM magazines.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/iambohemia/status/1459129540077228037" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/bohemia.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Bohemia</div>
                      <div class="post-text">
                          Known world-wide as the creator of Punjabi rap, Bohemia is a rapper and a music producer from California.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/jannat_zubair29/status/1457244757181153281" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/jannat.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Jannat Zubair Rahmani</div>
                      <div class="post-text">
                          Indian film and television actress, also a Tiktok sensation with a huge following.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/reem4you/status/1456988883195883521" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/reem.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Reem Sameer Shaikh</div>
                      <div class="post-text">
                          Indian film and television actress, renowned for several popular television shows.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/thegame/status/1457346601278590978" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/game.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">The Game</div>
                      <div class="post-text">
                          Phenomenal rapper-singer who has done extraordinary work with Dr Dre, 50 Cent, Kanye West.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/raftaarmusic/status/1452903373389271043" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/raftaar.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Raftaar</div>
                      <div class="post-text">
                          The Superstar who embraced hip-hop culture in India.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/greatkhali/status/1452236643365183490" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/khali.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">The Great Khali</div>
                      <div class="post-text">
                          Former WWE champion and Social Media Sensation the 'The Great Khali'.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/iAmitBhadana/status/1452276314015211550" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/amit.png') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Amit Bhadana</div>
                      <div class="post-text">
                          Amit Bhadana is a popular Indian Youtuber who has over 23.6 million subscribers.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/MikaSingh/status/1452574458565120002" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/mika.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Mika Singh</div>
                      <div class="post-text">
                          Mika Singh is a renown Bollywood playback singer and live performer.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/boxervijender/status/1455838695223742467" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/vijender.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Vijender Singh</div>
                      <div class="post-text">
                          The first Indian Boxer to have ever won a Medal at the Olympics.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/adam_lubna/status/1455876213180829700" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/lubna.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Lubna Adam</div>
                      <div class="post-text">
                          Leading Fashion Choreographer and Event Director.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/manpreetpawar07/status/1456603424724697091" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/mann.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Manpreet Singh</div>
                      <div class="post-text">
                          Indian field hockey player & captain of India men's national field hockey team.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/MangteC/status/1456623632176738317" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/mary.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Mary Kom</div>
                      <div class="post-text">
                          Indian Olympic Boxer, also won Gold Medal in Asian & Commonwealth Games.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="index-2.html#" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/mirabai.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Mirabai Chanu</div>
                      <div class="post-text">
                          Indian weightlifter. She won the silver medal at the 2020 Tokyo Olympics.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/LovlinaBorgohai/status/1458428950930022403" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/lovlina.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Lovlina Borgohain</div>
                      <div class="post-text">
                          Indian amateur boxer who won a bronze medal at the 2020 Summer Olympics.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/imranirampal/status/1458374859654713349" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/rani.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Rani Rampal</div>
                      <div class="post-text">
                          Indian field hockey player and Captain of the Indian Women's Field Hockey Team
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/manikabatra_TT/status/1458689188899876867" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/manika.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Manika Batra</div>
                      <div class="post-text">
                          Commonwealth Games gold medallist, a two-time Olympian, She's one of the true stars of Indian table tennis.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://www.instagram.com/p/CWI2ogDMOiI/" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/hima.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Hima Das</div>
                      <div class="post-text">
                          Indian sprinter who became the first Indian athlete to win Gold medal at IAAF World U20 Championships.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/soniyaofficial9/status/1453301634499547151" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/soniya.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Soniya Bansal</div>
                      <div class="post-text">
                          An Actress, Trending Instagram Star and Model. She has more than 1.5M followers on Instagram.
                      </div>
                  </div>
              </a>
          </div>
          <div class="swiper-slide">
              <a href="https://twitter.com/DabbooRatnani/status/1458793816756948998" target="_blank" class="post-wrapper w-inline-block">
                  <div class="post-image">
                      <img src="{{ asset('frontend-assets/artists/dabboo.jpg') }}" height="240" />
                  </div>
                  <div class="blog-content-container">
                      <div class="post-title">Daboo Ratnani</div>
                      <div class="post-text">
                          Leading Indian model photographer, famous for his annual calendar with celebrities.
                      </div>
                  </div>
              </a>
          </div>
      </div>
      <div class="swiper-pagination"></div>
  </div>
</div>

<div class="section intro" id="about" style="opacity: 1">
  <div class="container-default w-container">
      <div class="title-container">
          <h2 class="heading-2">Introduction</h2>

          <div class="div-block"></div>
      </div>

      <div class="paragraph-container margin">
          <p class="paragraph">Finance Token.<br /> Finance Token BSC Network token to chain Assets Management With Blockchain Accounting Technology in WEB 3.0 Join the +minds.</p>
      </div>

      <div class="paragraph-container margin">
          <p class="paragraph">FNP is going to revolutionize the educational, health and sports aid systems, as well as humanitarian aid, regardless of borders, cultures, creeds or races. The only objective is to serve others in the most difficult and delicate moments.</p>
      </div>

      <div class="paragraph-container margin">
          <p class="paragraph-huge"><u>Health Gems</u> NFTs From the community to aid charity donations and third world countries improve thier health and wellness sectors.</p>
      </div>

      <div class="tokens-wrapper-bg margin">
          <div class="light-1"></div>

          <div class="token-supply">
              <div class="w-layout-grid grid-stats-general">
                  <div class="w-layout-grid grid-6" id="w-node-_0be9b6bb-54b7-85d5-3ff3-5be8167015f1-467759d1">
                      <div class="div-block-8"><img alt="" loading=" " sizes="(max-width: 479px) 100vw, (max-width: 767px) 77vw, 387px" 
                        src="www.financeplus.io/assets/60af5ef48864a7432a90aa74_token_supply.html" 
                        srcset="{{ asset('frontend-assets/token_supply-p-500.png 500w') }}, assets/token_supply.png 840w" width="387" /></div>

                      <div class="w-layout-grid grid-7" id="w-node-_2a1771ed-8721-57f6-5ad4-f3dfe591b8bb-467759d1">
                          <div class="graph-item-wrapper">
                              <div class="color-indicator _1"></div>

                              <div class="graph-title">23% Platform Mining</div>
                          </div>

                          <div class="graph-item-wrapper">
                              <div class="color-indicator _2"></div>

                              <div class="graph-title">25% Public Sale</div>
                          </div>

                          <div class="graph-item-wrapper">
                              <div class="color-indicator _3"></div>

                              <div class="graph-title">17% Pre Sale</div>
                          </div>

                          <div class="graph-item-wrapper">
                              <div class="color-indicator _4"></div>

                              <div class="graph-title">10% Foundation</div>
                          </div>

                          <div class="graph-item-wrapper">
                              <div class="color-indicator _5"></div>

                              <div class="graph-title">5% Reserves</div>
                          </div>

                          <div class="graph-item-wrapper">
                              <div class="color-indicator _6"></div>

                              <div class="graph-title">5% Developer Fund</div>
                          </div>

                          <div class="graph-item-wrapper">
                              <div class="color-indicator _7"></div>

                              <div class="graph-title">5% Advisors</div>
                          </div>

                          <div class="graph-item-wrapper">
                              <div class="color-indicator _8"></div>

                              <div class="graph-title">10% Marketing</div>
                          </div>
                      </div>
                  </div>

                  <div class="div-block-10" id="w-node-_71a5a9d6-c54b-f7a0-1bcb-6a5b9e62c7cb-467759d1">
                      <div class="stat-item">
                          <div class="stat-content">
                              <div class="token-title-container">
                                  <div class="stat-head red">500 000 000 (500M)</div>
                              </div>

                              <div class="stat-pre-head">Token supply</div>
                          </div>
                      </div>

                      <div class="w-layout-grid grid-stats">
                          <div class="stat-item filled">
                              <div class="stat-content">
                                  <div class="stat-head">115 000 000</div>

                                  <div class="stat-pre-head">Platform Mining</div>
                              </div>

                              <div class="info-button"><img alt="" class="info-icon" loading=" " src="{{ asset('frontend-assets/60ad2271f1964b66af570064_info_icon.svg') }}" />
                                  <div class="tooltip-wrapper" style="
                      transform: translate3d(0px, 30px, 0px)
                      scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                      rotateZ(0deg) skew(0deg, 0deg);
                      transform-style: preserve-3d;
                      display: none;
                      opacity: 0;
                      ">
                                      <div class="tooltip-container"><img alt="" class="lock-icon" loading=" " src="{{ asset('frontend-assets/60af5748861e19a9546e928b_lock.svg') }}" width="28" />
                                          <div class="tooltip-text">Tokens will be mined in platform by active users
                                              <!-- <br><a
                                                          href="https://dxsale.app/app/pages/dxlockview?id=0&amp;add=0xDbf3C4f21C7FCEC336c2074A730737De2c765581&amp;type=tokenlock&amp;chain=BSC"
                          target="_blank" class="inner-link">Locker info</a> --></div>
                                      </div>

                                      <div class="devider-tooltip"></div>

                                      <div class="tooltip-close">CLOSE</div>
                                  </div>
                              </div>
                          </div>

                          <div class="stat-item">
                              <div class="stat-content">
                                  <div class="stat-head">125 000 000</div>

                                  <div class="stat-pre-head">Public Sale &ndash; <strong class="price-title">0.05$</strong></div>
                              </div>

                              <div class="info-button"><img alt="" class="info-icon" loading=" " src="{{ asset('frontend-assets/60ad2271f1964b66af570064_info_icon.svg') }}" />
                                  <div class="tooltip-wrapper" style="
                      transform: translate3d(0px, 30px, 0px)
                      scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                      rotateZ(0deg) skew(0deg, 0deg);
                      transform-style: preserve-3d;
                      display: none;
                      opacity: 0;
                      ">
                                      <div class="tooltip-container"><img alt="" class="lock-icon" loading=" " src="{{ asset('frontend-assets/60af5748861e19a9546e928b_lock.svg') }}" width="28" />
                                          <div class="tooltip-text">Tokens tradeable after public sale finish</div>
                                      </div>

                                      <div class="devider-tooltip"></div>

                                      <div class="tooltip-close">CLOSE</div>
                                  </div>
                              </div>
                          </div>

                          <div class="stat-item filled">
                              <div class="stat-content">
                                  <div class="stat-head">85 000 000</div>

                                  <div class="stat-pre-head">Pre Sale &ndash; <strong class="price-title">0.045$</strong></div>
                              </div>

                              <div class="info-button"><img alt="" class="info-icon" loading=" " src="{{ asset('frontend-assets/60ad2271f1964b66af570064_info_icon.svg') }}" />
                                  <div class="tooltip-wrapper" style="
                      transform: translate3d(0px, 30px, 0px)
                      scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                      rotateZ(0deg) skew(0deg, 0deg);
                      transform-style: preserve-3d;
                      display: none;
                      opacity: 0;
                      ">
                                      <div class="tooltip-container"><img alt="" class="lock-icon" loading=" " src="{{ asset('frontend-assets/60af5748861e19a9546e928b_lock.svg') }}" width="28" />
                                          <div class="tooltip-text">Tokens tradeable after public sale finish</div>
                                      </div>

                                      <div class="devider-tooltip"></div>

                                      <div class="tooltip-close">CLOSE</div>
                                  </div>
                              </div>
                          </div>

                          <div class="stat-item">
                              <div class="stat-content">
                                  <div class="stat-head">50 000 000</div>

                                  <div class="stat-pre-head">Foundation</div>
                              </div>

                              <div class="info-button"><img alt="" class="info-icon" loading=" " src="{{ asset('frontend-assets/60ad2271f1964b66af570064_info_icon.svg') }}" />
                                  <div class="tooltip-wrapper" style="
                      transform: translate3d(0px, 30px, 0px)
                      scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                      rotateZ(0deg) skew(0deg, 0deg);
                      transform-style: preserve-3d;
                      display: none;
                      opacity: 0;
                      ">
                                      <div class="tooltip-container"><img alt="" class="lock-icon" loading=" " src="{{ asset('frontend-assets/60af5748861e19a9546e928b_lock.svg') }}" width="28" />
                                          <div class="tooltip-text">100% tokens locked till 01.01.2022
                                              <!-- <br><a
                                                          href="https://dxsale.app/app/pages/dxlockview?id=1&amp;add=0xDbf3C4f21C7FCEC336c2074A730737De2c765581&amp;type=tokenlock&amp;chain=BSC"
                          target="_blank" class="inner-link">Locker info</a> --></div>
                                      </div>

                                      <div class="devider-tooltip"></div>

                                      <div class="tooltip-close">CLOSE</div>
                                  </div>
                              </div>
                          </div>

                          <div class="stat-item filled">
                              <div class="stat-content">
                                  <div class="stat-head">25 000 000</div>

                                  <div class="stat-pre-head">Reserves</div>
                              </div>

                              <div class="info-button"><img alt="" class="info-icon" loading=" " src="{{ asset('frontend-assets/60ad2271f1964b66af570064_info_icon.svg') }}" />
                                  <div class="tooltip-wrapper" style="
                      transform: translate3d(0px, 30px, 0px)
                      scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                      rotateZ(0deg) skew(0deg, 0deg);
                      transform-style: preserve-3d;
                      display: none;
                      opacity: 0;
                      ">
                                      <div class="tooltip-container"><img alt="" class="lock-icon" loading=" " src="{{ asset('frontend-assets/60af5748861e19a9546e928b_lock.svg') }}" width="28" />
                                          <div class="tooltip-text">100% tokens locked till 01.01.2022
                                              <!-- <br><a
                                                          href="https://dxsale.app/app/pages/dxlockview?id=1&amp;add=0xDbf3f21C7FCEC336c2074A730737De2c765581&amp;type=tokenlock&amp;chain=BSC"
                          target="_blank" class="inner-link">Locker info</a> --></div>
                                      </div>

                                      <div class="devider-tooltip"></div>

                                      <div class="tooltip-close">CLOSE</div>
                                  </div>
                              </div>
                          </div>

                          <div class="stat-item">
                              <div class="stat-content">
                                  <div class="stat-head">25 000 000</div>

                                  <div class="stat-pre-head">Developer Fund</div>
                              </div>

                              <div class="info-button"><img alt="" class="info-icon" loading=" " src="{{ asset('frontend-assets/60ad2271f1964b66af570064_info_icon.svg') }}" />
                                  <div class="tooltip-wrapper" style="
                      transform: translate3d(0px, 30px, 0px)
                      scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                      rotateZ(0deg) skew(0deg, 0deg);
                      transform-style: preserve-3d;
                      display: none;
                      opacity: 0;
                      ">
                                      <div class="tooltip-container"><img alt="" class="lock-icon" loading=" " src="{{ asset('frontend-assets/60af5748861e19a9546e928b_lock.svg') }}" width="28" />
                                          <div class="tooltip-text">100% tokens locked till 01.01.2022
                                              <!-- <br><a
                                                          href="https://dxsale.app/app/pages/dxlockview?id=1&amp;add=0xDbf3C4f21C7FC336c2074A730737De2c765581&amp;type=tokenlock&amp;chain=BSC"
                          target="_blank" class="inner-link">Locker info</a> --></div>
                                      </div>

                                      <div class="devider-tooltip"></div>

                                      <div class="tooltip-close">CLOSE</div>
                                  </div>
                              </div>
                          </div>

                          <div class="stat-item filled">
                              <div class="stat-content">
                                  <div class="stat-head">25 000 000</div>

                                  <div class="stat-pre-head">Advisors</div>
                              </div>
                          </div>

                          <div class="stat-item">
                              <div class="stat-content">
                                  <div class="stat-head">50 000 000</div>

                                  <div class="stat-pre-head">Marketing</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="how-to-buy-wrapper" id="how">
          <div>
              <h2 class="heading-2-copy">How to buy FNP?</h2>
          </div>

          <div class="how-to-buy-container">
              <div class="w-layout-grid grid-how-to-buy-2-col">
                  <div class="buy-2" id="w-node-_6741261f-958b-0492-4855-9e0f34c51034-467759d1">
                      <ol class="list" role="list">
                          <li class="list-item">
                              <div class="list-text">Download wallet app - MetaMask</div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Purchase <strong class="list-major">ETL</strong> on <strong class="list-major">Binance or other exchange</strong></div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Go to the <a class="inner-link" href="https:///">PancakeSwap</a> website and open Exchange tab . iPhone and Android users may need to open integrated browser in MetaMask. You can also click the <strong class="list-major">Buy Now</strong>                                            button on our website if you&#39;re not on mobile</div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Click <strong class="list-major">Select a currency</strong> and enter this contract address into the search field, and you should be able to find FNP?</div>

                              <div class="code-example">
                                  <div class="list-text">0x6EDfCc01E40a8D49f6fB8666e2Fd4d5A</div>
                              </div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Before swapping, click on the cog wheel ⚙️ &nbsp;and set the slippage to between 11-12%</div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Now, set the amount you want to purchase and press the <strong class="list-major">SWAP</strong> button</div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Confirm the transaction and your all set</div>
                          </li>
                      </ol>
                  </div>

                  <div class="buy-1" id="w-node-_505a15e9-19da-bc7c-47ae-adea350aca4d-467759d1">
                      <div class="video-container">
                          <div class="w-embed-youtubevideo youtube-2" style="padding-top: 56.17021276595745%">
                              <!-- <iframe src="./assets/4nSLa3vJbOY.html" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe> --></div>

                          <div class="text-block-2">How to buy Finance Token &ndash; Web guide</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="airdrop-wrapper" id="how">
          <div>
              <h2 class="heading-2-copy">Join Our Airdrop Program</h2>

              <div class="stat-head">Get <strong class="bold-text">250 FNP</strong> coins for free</div>
          </div>

          <div class="how-to-buy-container">
              <div class="w-layout-grid grid-how-to-buy-2-col">
                  <div class="buy-2" id="w-node-_2aa3e1c2-41a1-23cd-9065-573f71ff6a90-467759d1">
                      <ol class="list" role="list">
                          <li class="list-item">
                              <div class="list-text">Follow us on <a class="inner-link" href="https://twitter.com/nOFTEN_NFT" target="_blank">Twitter</a></div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Follow us on <a class="inner-link" href="https://instagram.com/nOFTEN_NFT" target="_blank">Instagram</a></div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Join our chat on <a class="inner-link" href="https://t.me/nOFTEN" target="_blank">Telegram</a></div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Subscribe to our channel on <a class="inner-link" href="https://t.me/nOFTEN_news" target="_blank">Telegram</a></div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Follow us on <a class="inner-link" href="https://www.reddit.com/r/nOFTEN/" target="_blank">Reddit</a></div>
                          </li>
                          <li class="list-item">
                              <div class="list-text">Fill this <a class="inner-link" href="https://docs.google.com/forms/d/e/1FAIQLSeu45jDl2LaUtInjsxxERWCJ-AR1VfJBAkaXc5mwhx0_TI-7w/viewform?edit_requested=true" target="_blank">Google Form</a></div>
                          </li>
                      </ol>
                  </div>

                  <div class="airdrop" id="w-node-_2aa3e1c2-41a1-23cd-9065-573f71ff6abe-467759d1">
                      <div class="div-block-6"><img alt="" loading=" " src="{{ asset('frontend-assets/60a1c59e67b6fc023cb55a22_airdrop.png') }}" /></div>
                  </div>
              </div>
          </div>
      </div>

      <div class="intro-2">
          <div class="w-layout-grid grid-game">
              <div class="video-intro">
                  <div class="w-embed-youtubevideo" style="padding-top: 56.17021276595745%">
                      <!-- <iframe src="./assets/GiMQULZEf60.html" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe> --></div>
              </div>

              <div class="game-content-2" id="w-node-_2d08449a-e878-c9e2-5871-d7d61970c45e-467759d1">
                  <div class="paragraph-container-2">
                      <!-- <p class="paragraph grey-hover">The first version of the game will be
                                  <br>launched in a 2D runner format, in which you will be able to move around the
                                  blocks of our city, interact with the world around you and buy cars, real estate and
                                  in-game «advertisement» &nbsp;which potentially will be seen by hundreds of
                                  thousands of users. We will provide an opportunity to purchase an NFT token that
                                  will confirm your ownership of in-game digital asset.
              </p> -->
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="illustration-1"><img alt="" src="{{ asset('frontend-assets/illustration.svg') }}" /></div>
</div>

<div class="section game" style="opacity: 1">
  <div class="container-default w-container">
      <div class="w-layout-grid grid-game">
          <div class="game-logo">
              <div class="div-block-4"><img alt="" height="" loading=" " src="{{ asset('frontend-assets/logo.gif') }}" /></div>
          </div>

          <div class="game-content" id="w-node-_5d375ad7-be23-c68d-949e-6ff17213a38f-467759d1">
              <h1 class="heading-3">Ready for Gems?<br /> Join +Minds&nbsp;</h1>

              <div class="_1-button">
                  <div class="button-content">
                      <div class="text-block-6"><a class="button-primary w-inline-block" href="https://noften.medium.com/noften-a-celeb-fan-centric-nft-marketplace-717e8f958cb7">learn more</a></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="section roadmap" id="roadmap" style="opacity: 1">
  <div class="container-default w-container">
      <div class="title-container margin">
          <h2 class="heading-2">Roadmap</h2>

          <div class="div-block"></div>
      </div>

      <div class="roadmap-wrapper">
          <div class="roadmap-progressline"><img alt="" sizes="(max-width: 991px) 100vw, 96vw" src="{{ asset('frontend-assets/Roadmapline.png') }}" srcset="
          ./assets/Roadmapline-p-500.png') }}   500w,
          ./assets/Roadmapline-p-800.png') }}   800w,
          ./assets/Roadmapline-p-1080.png') }} 1080w,
          ./assets/Roadmapline-p-1600.png') }} 1600w,
          ./assets/Roadmapline-p-2000.png') }} 2000w,
          ./assets/Roadmapline.png') }}        2498w
          " /></div>

          <div class="roadmap-items-container">
              <div class="w-layout-grid grid-3">
                  <div class="road-item" id="w-node-_29f14d6a-c6b6-846d-90a0-64424aad884d-467759d1">
                      <div class="road-dot"><img alt="" loading=" " src="{{ asset('frontend-assets/607cb17b7d6fe02f3fa5fae2_Dot-grey.png') }}" /></div>

                      <div class="item-content">
                          <div class="item-title">Jul 2021</div>

                          <div class="item-text">- Website and official social networks launch (Instagram, Twitter)<br /> - Platform development starts</div>
                      </div>
                  </div>

                  <div class="road-item">
                      <div class="road-dot"><img alt="" loading=" " src="{{ asset('frontend-assets/607cb17b7d6fe02f3fa5fae2_Dot-grey.png') }}" /></div>

                      <div class="item-content">
                          <div class="item-title">Aug-Sep 2021</div>

                          <div class="item-text">- Celebs/Artists Onboarding Begins<br /> - Social Media and PR campaign launch<br /> - Developing on Etherlite Blockchain</div>
                      </div>
                  </div>

                  <div class="road-item">
                      <div class="road-dot"><img alt="" loading=" " src="{{ asset('frontend-assets/607cb02f9e04a86ff52db70a_Dot.png') }}" /></div>

                      <div class="item-content">
                          <div class="item-title red">Oct - Nov 2021</div>

                          <div class="item-text">ICO/IBCO/IDO<br /> - New partnerships<br /> - Exclusive Drops &amp; Giveway Contests<br /> - Marketing - Phase 1</div>
                      </div>
                  </div>

                  <div class="road-item" id="w-node-_29f14d6a-c6b6-846d-90a0-64424aad886b-467759d1">
                      <div class="road-dot"><img alt="" loading=" " src="{{ asset('frontend-assets/607cb17b7d6fe02f3fa5fae2_Dot-grey.png') }}" /></div>

                      <div class="item-content">
                          <div class="item-title">Dec 2021</div>

                          <div class="item-text">- Listing on CoinMarketCap, CoinGecko, Blockfolio etc.<br /> - Crypto exchanges listing<br /> - 100+ celebs on Platform<br /> - Marketing - Phase 2</div>
                      </div>
                  </div>

                  <div class="road-item" id="w-node-_29f14d6a-c6b6-846d-90a0-64424aad8873-467759d1">
                      <div class="road-dot"><img alt="" loading=" " src="{{ asset('frontend-assets/607cb17b7d6fe02f3fa5fae2_Dot-grey.png') }}" /></div>

                      <div class="item-content">
                          <div class="item-title">Nov 2022</div>

                          <div class="item-text">- Team scaling<br /> - Staking and Yields to NOF holders<br /> - Crosschain integrations NFT<br /> - Implementation of community initiatives<br /> - Marketing - Phase 3</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="section blog" id="blog" style="opacity: 1">
  <div class="container-center w-container">
      <div class="title-container">
          <h2 class="heading-insta">More interesting updates on</h2>
          <a class="tag" href="https://noften.medium.com/" target="_blank">Medium.com</a></div>

      <div id="news-carousel">
          <div class="w-layout-grid blog-grid">
              <div class="post-image" style="height: 100%">
                  <a class="post-wrapper w-inline-block" href="https://theprint.in/ani-press-releases/nft-marketplace-noften-to-associate-with-leading-celebrities-artists/747576/" target="_blank"><img src="{{ asset('frontend-assets/news-print.jpg') }}" style="height: 100%; max-height: 220px" /> </a>
              </div>

              <div class="post-image" style="height: 100%">
                  <a class="post-wrapper w-inline-block" href="https://www.mid-day.com/lifestyle/infotainment/article/nft-marketplace-noften-to-associate-with-leading-celebrities-artists-23195809" target="_blank"><img src="{{ asset('frontend-assets/news-mid.jpg') }}" style="height: 100%; max-height: 220px" /> </a>
              </div>

              <div class="post-image" style="height: 100%">
                  <a class="post-wrapper w-inline-block" href="https://www.business-standard.com/content/press-releases-ani/nft-marketplace-noften-to-associate-with-leading-celebrities-artists-121100800525_1.html" target="_blank"><img src="{{ asset('frontend-assets/news-bs.jpg') }}" style="height: 100%; max-height: 220px" /> </a>
              </div>
          </div>

          <div class="w-layout-grid blog-grid">
              <div class="post-image" style="height: 100%">
                  <a class="post-wrapper w-inline-block" href="https://finance.yahoo.com/news/noften-set-launch-exclusive-celebrities-180000228.html" target="_blank"><img src="{{ asset('frontend-assets/news-yahoo.jpg') }}" style="height: 100%; max-height: 220px" /> </a>
              </div>

              <div class="post-image" style="height: 100%">
                  <a class="post-wrapper w-inline-block" href="https://markets.financialcontent.com/wss/news/read/41912073" target="_blank"><img src="{{ asset('frontend-assets/news-wall.jpg') }}" style="height: 100%; max-height: 220px" /> </a>
              </div>

              <div class="post-image" style="height: 100%">
                  <a class="post-wrapper w-inline-block" href="http://finance.dailyherald.com/dailyherald/news/read/41912073/nOFTEN_Set_to_launch_Exclusive_Celebrities_NFTs_for_Fans_Across_the_Globe" target="_blank"><img src="{{ asset('frontend-assets/news-herald.jpg') }}" style="height: 100%; max-height: 220px" /> </a>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="section how-to-buy" id="team" style="opacity: 1">
  <div class="container-center w-container">
      <div class="title-container center">
          <h2 class="heading-2">Our team</h2>

          <div class="div-block"></div>
      </div>

      <div class="roadmap-wrapper">
          <div class="w-layout-grid team-grid">
              <div class="team-item-wrapper">
                  <div class="member-photo"><img alt="" loading=" " src="{{ asset('frontend-assets/team-constantin.png') }}" /></div>

                  <div class="team-name">
                      <div class="item-title">Constantin Clemens Aurin</div>
                      <a class="linkedin w-inline-block" href="https://www.linkedin.com/in/constantin-clemens-aurin-505380223" target="_blank"><img alt="" loading=" " src="assets/60b56e55137444ecbef79e5e_linkedin.svg" width="24" /> </a>
                  </div>

                  <div class="item-text">Team Member</div>
              </div>

              <div class="team-item-wrapper">
                  <div class="member-photo"><img alt="" loading=" " src="{{ asset('frontend-assets/team-oliver.png') }}" /></div>

                  <div class="team-name">
                      <div class="item-title">Oliver Moser</div>
                      <a class="linkedin w-inline-block" href="https://www.linkedin.com/in/christian-oliver-moser-1989a0223" target="_blank"><img alt="" class="linkedin-icon" loading=" " src="assets/60b56e55137444ecbef79e5e_linkedin.svg" width="28" /> </a>
                  </div>

                  <div class="item-text">Team Member</div>
              </div>
              <!-- <div class="team-item-wrapper">
                          <div class="member-photo">
                              <img src="./assets/60918a0738ba872d98f6be16_Robot.png') }}" loading=" " alt="">
                          </div>
                          <div class="team-name">
                              <div class="item-title">Iaroslav</div>
                              <a href="https://www.linkedin.com/in/zhmak" target="_blank" class="linkedin w-inline-block">
                                  <img src="./assets/60b56e55137444ecbef79e5e_linkedin.svg" loading=" " width="24" alt="">
                              </a>
                          </div>
                          <div class="item-text">Product Manager</div>
                      </div>
                      <div class="team-item-wrapper">
                          <div class="member-photo">
                              <img src="./assets/60918a0738ba872d98f6be16_Robot.png') }}" loading=" " alt="">
                          </div>
                          <div class="item-title">Mr.robot</div>
                          <div class="item-text">Blockchain Developer</div>
                      </div>
                      <div class="team-item-wrapper">
                          <div class="member-photo">
                              <img src="./assets/60918a0738ba872d98f6be16_Robot.png') }}" loading=" " alt="">
                          </div>
                          <div class="item-title">MArty</div>
                          <div class="item-text">Developer</div>
                      </div>
                      <div class="team-item-wrapper">
                          <div class="member-photo">
                              <img src="./assets/60918a0738ba872d98f6be16_Robot.png') }}" loading=" " alt="">
                          </div>
                          <div class="item-title">Travis</div>
                          <div class="item-text">Developer</div>
          </div> --></div>
      </div>
  </div>
</div>

<div class="section blog" id="follow" style="opacity: 1">
  <div class="container-center w-container">
      <div class="title-container center">
          <h2 class="heading-2">Official Partners</h2>

          <div class="div-block"></div>
      </div>

      <div class="roadmap-wrapper">
          <!-- w-layout-grid team-grid -->
          <div class="w-layout-grid team-grid">
              <!-- <div class="team-item-wrapper">
                      <div class="member-photo xl">
                          <a href="https://kdmworld.com" target="_blank">
                              <img src="./assets/partners-kdm.png') }}" loading=" " alt="">
                          </a>
                      </div>
                      <div class="team-name">
                          <div class="item-title">KDM World</div>
                      </div>
                      <div class="item-text">USA</div>
          </div> -->
              <div class="team-item-wrapper">
                  <div class="member-photo xl">
                      <a href="http://iosindia.com/" target="_blank"><img alt="" loading=" " src="{{ asset('frontend-assets/partners-ios.png') }}" /> </a>
                  </div>

                  <div class="team-name">
                      <div class="item-title">iOS Sports &amp; Entertainment</div>
                  </div>

                  <div class="item-text">APAC (Asia Pacific)</div>
              </div>

              <div class="team-item-wrapper">
                  <div class="member-photo xl">
                      <a href="https://ysevents.co.in/" target="_blank"><img alt="" loading=" " src="{{ asset('frontend-assets/partners-ys.png') }}" /> </a>
                  </div>

                  <div class="team-name">
                      <div class="item-title">YS Events</div>
                  </div>

                  <div class="item-text">APAC (Asia Pacific)</div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="section faq how-to-buy" id="faq" style="opacity: 1">
  <div class="container-center w-container">
      <div class="title-container center">
          <h2 class="heading-2">Frequently Asked Questions</h2>

          <div class="div-block"></div>
      </div>

      <div class="faq-wrapper">
          <div class="dropdown w-dropdown" data-delay="0" data-hover="" data-w-id="7b74ef8f-d7f6-5b0b-a498-d5f5ca63753f">
              <div class="dropdown-toggle w-dropdown-toggle">
                  <div class="faq-icon" data-animation-type="lottie" data-autoplay="0" data-default-duration="1" data-direction="1" data-duration="0" data-is-ix2-target="1" data-ix2-initial-state="0" data-loop="0" data-renderer="svg" data-w-id="7b74ef8f-d7f6-5b0b-a498-d5f5ca637541"></div>

                  <div class="text-block">What is nOFTEN?</div>
              </div>

              <nav class="dropdown-list w-dropdown-list">
                  <div class="faq-body-cont">
                      <p class="faq-answer">nOFTEN is an emerging NFT Marketplace following a through Celeb-Fan centric theme, celebrating the free spirit of artists, turning it into valuable digital assets. Artists of every genre, offering discrete collections and
                          personal interaction opportunities are a part of nOFTEN. Right from creating NFTs, regulating its sale through multiple channels, showcasing easy tracking of artist collection and most significantly empowering the artists
                          with reasonable returns can be done on the nOFTEN platform.</p>
                  </div>
              </nav>
          </div>

          <div class="dropdown w-dropdown" data-delay="0" data-hover="" data-w-id="29926b5e-0ef5-57be-d476-90481c1d3c80">
              <div class="dropdown-toggle w-dropdown-toggle">
                  <div class="faq-icon" data-animation-type="lottie" data-autoplay="0" data-default-duration="1" data-direction="1" data-duration="0" data-is-ix2-target="1" data-ix2-initial-state="0" data-loop="0" data-renderer="svg" data-w-id="29926b5e-0ef5-57be-d476-90481c1d3c82"></div>

                  <div class="text-block">What is an Artist getting from this?</div>
              </div>

              <nav class="dropdown-list w-dropdown-list">
                  <div class="faq-body-cont">
                      <p class="faq-answer">a. Probability of generating a 6-figure revenue.<br />
                          <br /> b. Exposure to the different fan communities on one platform<br />
                          <br /> c. Option of Selling through Bidding Wards<br />
                          <br /> d. Earn Royalties with future sales of your artworks</p>
                  </div>
              </nav>
          </div>

          <div class="dropdown w-dropdown" data-delay="0" data-hover="" data-w-id="a6e5f5db-ad6e-b01a-0b05-a4e3957b77a6">
              <div class="dropdown-toggle w-dropdown-toggle">
                  <div class="faq-icon" data-animation-type="lottie" data-autoplay="0" data-default-duration="1" data-direction="1" data-duration="0" data-is-ix2-target="1" data-ix2-initial-state="0" data-loop="0" data-renderer="svg" data-w-id="a6e5f5db-ad6e-b01a-0b05-a4e3957b77a8"></div>

                  <div class="text-block">What&#39;s there for nOFTEN in it?</div>
              </div>

              <nav class="dropdown-list w-dropdown-list">
                  <div class="faq-body-cont">
                      <p class="faq-answer">nOFTEN is a celeb-centric platform and gives a major part of revenue to the artist. A small commission is forwarded through the sale of your NFT artworks to support the operations of nOFTEN.</p>
                  </div>
              </nav>
          </div>

          <div class="dropdown w-dropdown" data-delay="0" data-hover="" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc14">
              <div class="dropdown-toggle w-dropdown-toggle">
                  <div class="faq-icon" data-animation-type="lottie" data-autoplay="0" data-default-duration="1" data-direction="1" data-duration="0" data-is-ix2-target="1" data-ix2-initial-state="0" data-loop="0" data-renderer="svg" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc16"></div>

                  <div class="text-block">I am anyway generating revenue by selling my arts normally,<br /> so how will NFT bring me better revenue?</div>
              </div>

              <nav class="dropdown-list w-dropdown-list">
                  <div class="faq-body-cont">
                      <p class="faq-answer">a. Blockchain is the future, and with global players entering in 2020, it is going to see more heights and valuation.<br />
                          <br /> b. Your current approach to sell artworks needs to be primarily in-person. NFTs get sold digitally and create a revenue stream for you in the future sales too.<br />
                          <br /> c. Your current audiences are very limited, geographically restricted. With NFTs, your artworks get a global exposure and to the community who value your artworks from future perspective<br />
                          <br /> d. Probability of generating 4x-10x revenue in comparison to your current revenue. Honestly, we are being very modest here.</p>
                  </div>
              </nav>
          </div>

          <div class="dropdown w-dropdown" data-delay="0" data-hover="" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc14">
              <div class="dropdown-toggle w-dropdown-toggle">
                  <div class="faq-icon" data-animation-type="lottie" data-autoplay="0" data-default-duration="1" data-direction="1" data-duration="0" data-is-ix2-target="1" data-ix2-initial-state="0" data-loop="0" data-renderer="svg" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc16"></div>

                  <div class="text-block">I am already creating and selling my own NFTs, so why should I<br /> go ahead with you? What&#39;s unique with nOFTEN?</div>
              </div>

              <nav class="dropdown-list w-dropdown-list">
                  <div class="faq-body-cont">
                      <p class="faq-answer">a. Indeed you have been doing it, however you still have a reach to a limited audience considering the existing fan-base, your marketing plans.<br />
                          <br /> b. nOFTEN has a reach on the global level where they can partner with the Big Media agencies around the world to have a far better exposure than one can do alone.</p>
                  </div>
              </nav>
          </div>

          <div class="dropdown w-dropdown" data-delay="0" data-hover="" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc14">
              <div class="dropdown-toggle w-dropdown-toggle">
                  <div class="faq-icon" data-animation-type="lottie" data-autoplay="0" data-default-duration="1" data-direction="1" data-duration="0" data-is-ix2-target="1" data-ix2-initial-state="0" data-loop="0" data-renderer="svg" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc16"></div>

                  <div class="text-block">These arts will be sold in crypto, and I don&#39;t want to keep crypto.<br /> I would want money in my local currency.</div>
              </div>

              <nav class="dropdown-list w-dropdown-list">
                  <div class="faq-body-cont">
                      <p class="faq-answer">You can simply trade them in the exchanges and convert the crypto-earnings into your native currency.</p>
                  </div>
              </nav>
          </div>

          <div class="dropdown w-dropdown" data-delay="0" data-hover="" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc19">
              <div class="dropdown-toggle w-dropdown-toggle">
                  <div class="faq-icon" data-animation-type="lottie" data-autoplay="0" data-default-duration="1" data-direction="1" data-duration="0" data-is-ix2-target="1" data-ix2-initial-state="0" data-loop="0" data-renderer="svg" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc19"></div>

                  <div class="text-block">How much fees will be charged from creators?</div>
              </div>

              <nav class="dropdown-list w-dropdown-list">
                  <div class="faq-body-cont">
                      <p class="faq-answer">nOFTEN has a transparent fee structure of flat 15% fee.</p>
                  </div>
              </nav>
          </div>

          <div class="dropdown w-dropdown" data-delay="0" data-hover="" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc14">
              <div class="dropdown-toggle w-dropdown-toggle">
                  <div class="faq-icon" data-animation-type="lottie" data-autoplay="0" data-default-duration="1" data-direction="1" data-duration="0" data-is-ix2-target="1" data-ix2-initial-state="0" data-loop="0" data-renderer="svg" data-w-id="30d65c13-6061-bb1a-0277-6ccb5aadfc16"></div>

                  <div class="text-block">How will I know how many copies of my arts have been sold?</div>
              </div>

              <nav class="dropdown-list w-dropdown-list">
                  <div class="faq-body-cont">
                      <p class="faq-answer">You can track every sale of your NFT&#39;s easily on our platform backed on Etherlite blockchain.</p>
                  </div>
              </nav>
          </div>
      </div>
  </div>
</div>
<div class="section contact" id="contact" style="opacity: 1">
  <div class="container-default w-container">
      <div class="contacts-wrapper-bg">
          <div class="figure-1"><img alt="" loading=" " src="{{ asset('frontend-assets/607cbb6b134b1e14647c3f9e_Speachbubble.png') }}" /></div>

          <div class="contact-wrapper">
              <div class="contact-title-wrapper">
                  <p class="contact-title-1">Any other questions?</p>

                  <p class="contact-title-2">We will be happy to answer them.</p>
                  <a class="email-link" href="mailto:hello@financeplus.io">hello@financeplus.io</a></div>
          </div>
      </div>
  </div>
</div>
@endsection