<?php include 'config/head.php'; ?>
  <body>
   
    <div class="outer homepage">
      <div id="scrollContent" class="inner scrollContent scrollSwipe">
        <section class="section section--0"></section>
        <section class="section section--1">
          <div class="section__background">
            <img
              alt=""
              data-src="images/bg/home-f1.jpg"
              src="images/bg/f1.jpg"
              class="desktop lazyload"
            /><img
              alt=""
              data-src="images/bg/home-f1-mb.jpg"
              src="images/bg/f1-mb.jpg"
              class="mobile lazyload"
            />
            <video
              width="2000"
              height="auto"
              autoplay=""
              loop=""
              muted=""
              poster=""
              id="bgvid"
              class="desktop"
              style="
                position: absolute;
                left: 0;
                top: 0;
                width: 1915px;
                height: 1000px;
              "
            >
              <source src="images/clip.mp4" type="video/mp4" />
            </video>
          </div>

          <img
            alt=""
            data-src="images/tagline.png"
            class="tagline lazyload vn"
          />

          <img
            alt=""
            data-src="images/18.jpg"
            class="tag18 vn lazyload"
          />
          <a class="btn btn-scroll mobile" href="javascript:void(0)"
            ><span class="hidden">app icon</span></a
          >
          <a
            class="btn btn-download mobile"
            href="/taigame"
            data-ios="/taigame"
            data-android="/taigame"
            ><span class="hidden">app icon</span></a
          >
		  <!--
		  <a
            class="btn btn-play"
            data-fancybox
            href="https://www.youtube.com/embed/bAqv6aAY0IE"
            ><span class="hidden">play</span></a
          >
		  -->
		  <a class="logo mobile vn" href="javascript:void(0)"></a>
          <div class="section--1__content flex desktop">
            <img
              alt=""
              data-src="images/bg/home-f1-cta.png"
              class="imgBg desktop lazyload"
            />
            <a
              href="/napatm"
              class="btn btn-topup vn on"
            ></a>
            <img
              alt=""
              data-src="https://group-qr.zdn.vn/2/10b70fa38bf062ae3be1"
              class="qrcode lazyload"
            />
            <div class="flex">
              <a
                href="/taive/HSOLangNam.apk"
                class="btn btn-ios vn"
                target="_blank"
              >
                <img alt="" data-src="images/apk.png" class="vn lazyload"
              /></a>
              <a
                target="_blank"
                href="/taigame"
                class="btn btn-ios vn"
              >
                <img alt="" data-src="images/java.png" class="vn lazyload"
              /></a>
              <a
                target="_blank"
                href="https://www.mediafire.com/file/rrpwdatmlnb4wi9/HSOLangNam.rar/file"
                class="btn btn-gg vn"
              >
                <img alt="" data-src="images/pc.png" class="vn lazyload"
              /></a>
              <a
                target="_blank"
                href="/gifcode"
                class="btn btn-gg vn"
              >
                <img alt="" data-src="images/gifcode.png" class="vn lazyload"
              /></a>
            </div>
          </div>
        </section>
        <section class="section section--2">
          <div class="section__background">
            <img
              alt=""
              data-src="images/bg/home-f2.jpg"
              class="desktop lazyload"
            />
            <img
              alt=""
              data-src="images/bg/home-f2-mb.jpg"
              class="mobile lazyload"
            />
          </div>
          <div class="section--2__content">
            <div class="main-content">
              <h2 class="title">
                <img
                  alt=""
                  data-src="/images/layout/vn/title-frame2.png"
                  class="desktop lazyload"
                />
                <img
                  alt=""
                  data-src="/images/layout/vn/title-frame2-mb.png"
                  class="mobile lazyload"
                />
              </h2>
              <main>
                <section class="banner">
                  <div id="banner-event" class="banner-event">
                    <div class="swiper-container swiperNews">
                      <ul class="swiper-wrapper">
                        <li class="swiper-slide">

                            <img
                              class="lazyload"
                              src="images/hso.jpg"
                              alt="hdnap"
                              width="725"
                              height="352"
                            />
                         
                        </li>
                      </ul>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                </section>
                <section class="posts">
                  <img
                    alt=""
                    data-src="images/bg/bg-news.png"
                    class="desktop imgBg lazyload"
                  />
                  <img
                    alt=""
                    data-src="images/bg/bg-news-mb.png"
                    class="mobile imgBg lazyload"
                  />
                  <ul class="posts__tab" id="posts__tab">
                    <li>
                   
                    <li>
                      <a
                        href="/sukien"
                        data-target="/sukien"
                        data-block-name="home-event"
                        data-category=""
                        data-shorturl="/sukien"
                        >Sự kiện</a
                      >
                    </li>
                  
                   
                  </ul>
                  <a
                    class="posts__view"
                    id="posts__view-all"
                    href="/sukien"
                    title="Xem thêm"
                    >Xem thêm</a
                  >
                  <ul class="posts__list" id="posts__list">
                    <li>
                      <a
                        class="posts__post-title"
                        href="/top-sen"
                        title="Sự kiện đua top đèn lồng"
                      >
                        <span>Sự kiện đua top đèn lồng</span
                        ><time datetime="2023-12-27">15/6</time></a
                      >
                    </li>
                    <li>
                      <a
                        class="posts__post-title"
                        href="/top-lv-m"
                        title="Đua top chuyển sinh sắp bắt đầu"
                        ><span
                          >Đua top level cho tài khoản mới </span
                        ><time datetime="2023-10-31">20/6</time></a
                      >
                    </li>
                    <li>
                      <a
                        class="posts__post-title"
                        href="/top-dg"
                        title="Đua top đại gia"
                      >
                        <span>Đua top đại gia</span
                        ><time datetime="2023-10-11">15/6</time></a
                      >
                    </li>
                   
                  
                  </ul>
                </section>
              </main>
              <ul class="btn-container flex">
                <li>
                  <a
                    class="btn-img btn-topup on"
                    href="/webshop-free"
                    ><span>Nhận mề đay +15</span></a
                  >
                </li>
                <li>
                  <a
                    class="btn-img btn-beginner"
                    href="/webshop"
                    ><span>Mua đồ Vip</span></a
                  >
                </li>
                <li>
                  <a
                    class="btn-img btn-policy"
                    href="/quatop"
                    ><span>Quà đua top</span></a
                  >
                </li>
                <li>
                  <a
                    class="btn-img btn-feature"
                    href="/huongdan"
                    ><span>Hướng dẫn tân thủ</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="section section--3">
          <div class="section__background">
            <img
              alt=""
              data-src="images/bg/home-f3.jpg"
              class="desktop lazyload"
            /><img
              alt=""
              data-src="images/bg/home-f3-mb.jpg"
              class="mobile lazyload"
            />
          </div>

          <h2 class="title">
            <img
              alt=""
              data-src="/images/layout/vn/title-frame3.png"
              class="desktop lazyload"
            />
            <img
              alt=""
              data-src="/images/layout/vn/title-frame3-mb.png"
              class="mobile lazyload"
            />
          </h2>
          <div class="section--3__content">
            <div id="character">
              <img
                data-src="images/bg/bg_content.png"
                class="deschar-img lazyload desktop"
              />
              <div class="swiper-container classSwiper">
                <div class="swiper-wrapper">
                  <div
                    class="swiper-slide swiperChar active"
                    data-name="Chiến Binh"
                    data-bullet="images/char/bullet/warrior.png"
                  >
                    <div class="main-container">
                      <div class="char-description">
                        <img
                          data-src="images/char/swordman/symbol.png"
                          class="lazyload swiper-lazy symbolclass"
                        />
                        <h1>Chiến Binh</h1>
                        <p class="sub-title">Chí mạng, thể lực</p>
                        <p class="linedecor"></p>
                        <p class="des-char">
                          Chiến Binh với 2 loại hình là chiến binh vật lý và
                          chiến binh lửa, chiến binh lửa có sức sát thương cao,
                          chí mạng cực mạnh, rất thích hợp khi cày cấp, PK số
                          đông, ngược lại chiến binh vật lý lại có lượng HP cao,
                          khả năng chịu đòn trâu bò như 1 cái bao cát đúng
                          nghĩa.
                        </p>
                        <div class="tab-wrapper" id="typeChar">
                          <div class="tab-content">
                            <div class="tab-item" id="tab-warrior1">
                              <img
                                data-src="images/char/swordman/ability.png"
                                class="lazyload swiper-lazy"
                              />
                            </div>
                            <div class="tab-item" id="tab-warrior2">
                              <img
                                data-src="images/char/swordman/ability.png"
                                class="lazyload swiper-lazy"
                              />
                            </div>
                          </div>
                          <ul class="tab flex">
                            <li class="tab-name">
                              <a href="#tab-warrior1">Chiến Binh Lửa</a>
                            </li>
                            <li class="tab-name">
                              <a href="#tab-warrior2">Chiến Binh Vật Lý</a>
                            </li>
                          </ul>
                        </div>
						<!--
                        <a
                          class="btn btn-play-char"
                          data-fancybox=""
                          href="https://www.youtube.com/embed/h3OugVN5g50"
                          ><span class="hidden">play</span></a
                        >
						-->
                      </div>
                      <div class="tab-wrapper" id="genderChar">
                        <div class="tab-content">
                          <div
                            class="tab-item"
                            id="tab-warriornam"
                            style="right: -200px"
                          >
                            <img
                              data-src="images/char/swordman/nam.png"
                              class="lazyload swiper-lazy"
                            />
                          </div>
                        </div>
                        <ul class="tab flex">
                          <li class="tab-name">
                            <a class="btn" href="#tab-warriornam"></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div
                    class="swiper-slide swiperChar active"
                    data-name="Pháp Sư"
                    data-bullet="images/char/bullet/mage.png"
                  >
                    <div class="main-container">
                      <div class="char-description">
                        <img
                          data-src="images/char/mage/symbol.png"
                          class="lazyload swiper-lazy symbolclass"
                        />
                        <h1>Pháp Sư</h1>
                        <p class="sub-title">Sát thương toàn thể</p>
                        <p class="des-char">
                          Pháp Sư với khả năng đánh tầm xa, kỹ năng gây sát
                          thương nhiều mục tiêu, thích hợp đứng sau đội hình để
                          thi triển kỹ năng gây cho kẻ địch lượng sát thương lớn
                          để dành ưu thế. 
                        </p>
                        <div class="tab-wrapper" id="typeChar">
                          <div class="tab-content">
                            <div class="tab-item" id="tab-mage1">
                              <img
                                data-src="images/char/mage/ability.png"
                                class="lazyload swiper-lazy"
                              />
                            </div>
                            <div class="tab-item" id="tab-mage2">
                              <img
                                data-src="images/char/mage/ability.png"
                                class="lazyload swiper-lazy"
                              />
                            </div>
                          </div>
                          <ul class="tab flex">
                            <li class="tab-name">
                              <a href="#tab-mage1">Ma Pháp Sư</a>
                            </li>
                            <li class="tab-name">
                              <a href="#tab-mage2">Pháp Sư Vật Lý</a>
                            </li>
                          </ul>
                        </div>
						<!--
                        <a
                          class="btn btn-play-char"
                          data-fancybox=""
                          href="https://www.youtube.com/embed/oey9oaNU9Is"
                          ><span class="hidden">play</span></a
                        >
						-->
                      </div>
                      <div class="tab-wrapper" id="genderChar">
                        <div class="tab-content">
                          <div class="tab-item" id="tab-magenam"></div>
                          <div class="tab-item" id="tab-magenam">
                            <img
                              data-src="images/char/mage/nu.png"
                              class="lazyload swiper-lazy"
                            />
                          </div>
                        </div>
                        <ul class="tab flex"></ul>
                      </div>
                    </div>
                  </div>
                  <div
                    class="swiper-slide swiperChar active"
                    data-name="xạ thủ"
                    data-bullet="images/char/bullet/archer.png"
                  >
                    <div class="main-container">
                      <div class="char-description">
                        <img
                          data-src="images/char/archer/symbol.png"
                          class="lazyload swiper-lazy symbolclass"
                        />
                        <h1>Xạ Thủ</h1>
                        <p class="sub-title">Sát thương liên tục</p>
                        <p class="des-char">
                          Xạ thủ phạm vi đánh tầm xa, độ linh hoạt cao, gây cho
                          mục tiêu địch một lượng sát thương cao liên tục, khả năng xuyên giáp lớn.
                        </p>
                        <div class="tab-wrapper" id="typeChar">
                          <div class="tab-content">
                            <div class="tab-item" id="tab-archer1">
                              <img
                                data-src="images/char/archer/ability.png"
                                class="lazyload swiper-lazy"
                              />
                            </div>
                            <div class="tab-item" id="tab-archer2">
                              <img
                                data-src="images/char/archer/ability.png"
                                class="lazyload swiper-lazy"
                              />
                            </div>
                          </div>
                          <ul class="tab flex">
                            <li class="tab-name">
                              <a href="#tab-archer2">Lôi Xạ</a>
                            </li>
                            <li class="tab-name">
                              <a href="#tab-archer2">Thần Xạ Thủ</a>
                            </li>
                          </ul>
                        </div>
						<!--
                        <a
                          class="btn btn-play-char"
                          data-fancybox=""
                          href="https://www.youtube.com/embed/K4aufWnpb9o"
                          ><span class="hidden">play</span></a
                        >
						-->
                      </div>

                      <div class="tab-wrapper" id="genderChar">
                        <div class="tab-content">
                          <div class="tab-item" id="tab-archernam">
                            <img
                              data-src="images/char/archer/nu.png"
                              class="lazyload swiper-lazy"
                            />
                          </div>
                          <div class="tab-item" id="tab-archernu">
                            <img
                              data-src="images/char/archer/nu.png"
                              class="lazyload swiper-lazy"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="swiper-slide swiperChar active"
                    data-name="Sát Thủ"
                    data-bullet="images/char/bullet/rogue.png"
                  >
                    <div class="main-container">
                      <div class="char-description">
                        <img
                          data-src="images/char/rogue/symbol.png"
                          class="lazyload swiper-lazy symbolclass"
                        />
                        <h1>Sát Thủ</h1>
                        <p class="sub-title">Linh hoạt,sát thương cao</p>
                        <p class="des-char">
                          Sát Thủ với khả năng di chuyển linh hoạt, phạm vi đánh
                          cận chiến, cùng với kỹ năng ẩn thân thoát ẩn thoát
                          hiện, đặc biệt né tránh cao gây sát thương lớn lên kẻ
                          địch, dễ dàng trấn áp kẻ địch và là nổi ám ảnh cực kỳ
                          cao đối với Pháp Sư
                        </p>
                        <div class="tab-wrapper" id="typeChar">
                          <div class="tab-content">
                            <div class="tab-item" id="tab-rogue1">
                              <img
                                data-src="images/char/rogue/ability.png"
                                class="lazyload swiper-lazy"
                              />
                            </div>
                            <div class="tab-item" id="tab-rogue2">
                              <img
                                data-src="images/char/rogue/ability.png"
                                class="lazyload swiper-lazy"
                              />
                            </div>
                          </div>
                          <ul class="tab flex">
                            <li class="tab-name">
                              <a href="#tab-rogue1">Độc Tố</a>
                            </li>
                            <li class="tab-name">
                              <a href="#tab-rogue2">Đoạt Mệnh</a>
                            </li>
                          </ul>
                        </div>
						<!--
                        <a
                          class="btn btn-play-char"
                          data-fancybox=""
                          href="https://www.youtube.com/embed/vwOIrrsf0QM"
                          ><span class="hidden">play</span></a
                        >
						-->
                      </div>
                      <div class="tab-wrapper" id="genderChar">
                        <div class="tab-content">
                          <div class="tab-item" id="tab-roguenam">
                            <img
                              data-src="images/char/rogue/nam.png"
                              class="lazyload swiper-lazy"
                            />
                          </div>
                        </div>
                        <ul class="tab flex">
                          <li class="tab-name">
                            <a class="btn" href="#tab-roguenam"></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination" id="tabNameChar"></div>
              </div>
            </div>
          </div>
        </section>
        <section class="section section--4">
          <div class="section__background">
            <img
              alt=""
              data-src="images/bg/home-f4.jpg"
              class="desktop lazyload"
            />
            <img
              alt=""
              data-src="images/bg/home-f4-mb.jpg"
              class="mobile lazyload"
            />
          </div>
          <h2 class="title">
            <img
              alt=""
              data-src="/images/layout/vn/title-frame4.png"
              class="desktop lazyload"
            /><img
              alt=""
              data-src="/images/layout/vn/title-frame4-mb.png"
              class="mobile lazyload"
            />
          </h2>
          <div class="section--4__content">
            <div class="pet-container">
              <img
                alt=""
                data-src="images/bg/bg-pet.png"
                class="lazyload desktop bg-board"
              />
              <img
                alt=""
                data-src="images/bg/bg-pet-mb.png"
                class="imgBg lazyload mobile bg-board"
              />
              <div class="swiper-container petSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" data-name="Đất" data-img="land">
                    <div class="tab-item" id="tab-land">
                      <div class="tab-wrapper" id="detailPet">
                        <div class="tab-content">
						
						
                          <div class="tab-item" id="tab-dragon">
                            <img
                              alt=""
                              data-src="images/pet/dat/daibang.png"
                              class="petthumb petthumb-lg lazyload swiper-lazy"
                            />
							<!-- <img
                              alt=""
                              data-src="https://global-mainsite.mto.zing.vn/cs/skin-2021/dist/main/images/char/dragon/name.png"
                              class="symbolpet lazyload swiper-lazy"
                            /> -->
                            <div class="main-content">
                              <h1>Đại Bàng<br><br>Sa Mạc</h1><br>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                              Với sức mạnh to lớn vừa có thể tấn công quái vật, vừa có thể hỗ trợ chủ nhân đánh quái rớt vàng.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1211</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Vật Công:104</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:48</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-sweetfur">
                            <img
                              alt=""
                              data-src="images/pet/dat/hacma.png"
                              class="petthumb lazyload swiper-lazy"
                            />

                           
                            <div class="main-content">
                              <h1>Hắc Mã</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                               Thể lực dồi dào, với lương buff sát thương cùng phòng thủ cân bằng tăng khả năng chịu đựng cho chủ nhân
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1168</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Vật Công:104</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-bunny">
                            <img
                              alt=""
                              data-src="images/pet/dat/decon.png"
                              class="petthumb lazyload swiper-lazy"
                            />
                            <div class="main-content">
                              <h1>Dê Con</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                               Với sức mạnh đến từ vùng thảo nguyên, tạo khiên bảo vệ
                                giúp chủ nhân miễn nhiễm trước mọi sát thương từ những kẻ hiếu chiến.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1224</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Pháp Công:103</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-spirit">
                            <img
                              alt=""
                              data-src="images/pet/dat/soixam.png"
                              class="petthumb lazyload swiper-lazy"
                            />
                            <div class="main-content">
                              <h1>Sói Xám</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Sát thương mạnh mẽ được rèn luyện từ vùng thảo nguyên, đem đến cho chủ nhân tốc độ và sức mạnh đáng nể.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1186</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Pháp Công:105</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:48</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-mono">
                            <img
                              alt=""
                              data-src="images/pet/dat/sleketon.png"
                              class="petthumb lazyload swiper-lazy"
                            />
                            <div class="main-content">
                              <h1>Hắc Mã Sleketon</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Quái thú được hồi sinh từ cõi chết, đem đến nguồn sức mạnh, thể lực và tốc độ mạnh mẽ cho chủ nhân.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 905</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Vật Công:86</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:3</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:3</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
						  
                        </div>
                        <ul class="tab flex">
                          <li class="tab-name">
                            <a href="#tab-dragon"
                              ><img
                                data-src="images/pet/dat/daibang-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Đại Bàng Sa Mạc</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-sweetfur"
                              ><img
                                data-src="images/pet/dat/hacma-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype sr"></p>
                              <h2>Hắc Mã</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-bunny"
                              ><img
                                data-src="images/pet/dat/decon-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Dê Con</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-spirit"
                              ><img
                                data-src="images/pet/dat/soixam-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Sói Xám</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-mono"
                              ><img
                                data-src="images/pet/dat/sleketon-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Sleketon</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a
                              href="/taigame"
                              target="_blank"
                              ><span>Chiến Ngay</span
                              >
							  <!--
							  <img
                                data-src="https://global-mainsite.mto.zing.vn/cs/skin-2021/dist/main/images/char/dragon/bullet.png"
                                class="lazyload swiper-lazy"
                            />
							-->
							</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide" data-name="Băng" data-img="wind">
                    <div class="tab-item" id="tab-wind">
                      <div class="tab-wrapper" id="detailPet">
                        <div class="tab-content">
                          <div class="tab-item" id="tab-cyclone">
                            <img
                              alt=""
                              data-src="images/pet/bang/phuonghoang.png"
                              class="petthumb petthumb-lg lazyload swiper-lazy"
                            />
                            <div class="main-content">
                              <h1>Phượng <br><br>Hoàng Băng</h1><br>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Mang sức mạnh của băng lạnh vùng bắc cực, có khả năng gây sát thương chuẩn liên tục lên mục tiêu.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1394</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Vật Công:109</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                              <!-- <p class="linedecor"></p><div class="bottom-line"><ul class="star-container flex"><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li></ul><span>Nature +90%</span></div><div class="bottom-line"><ul class="star-container flex"><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li></ul><span>Nature +120%</span></div><div class="bottom-line"><ul class="star-container flex"><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li></ul><span>Nature +90%</span></div> -->
                            </div>
                          </div>
                          <div class="tab-item" id="tab-panda">
                            <img
                              alt=""
                              data-src="images/pet/bang/soixam.png"
                              class="petthumb petthumb-high lazyload swiper-lazy"
                            />
                            <div class="main-content">
                              <h1>Sói <br><br>Lãnh Nguyên</h1><br>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                               Có thể gây sát thương liên tục và khả năng giảm khống chế cho chủ nhân.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1186</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Vật Công:105</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-stormbird">
                            <img
                              alt=""
                              data-src="images/pet/bang/chuottuyet.png"
                              class="petthumb lazyload swiper-lazy"
                              style="bottom: -200px; left: -200px"
                            />
                            <div class="main-content">
                              <h1>Chuột tuyết</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Tấn công mục tiêu bằng sát thương băng và có tỉ lệ khiến cho mục tiêu bị tê cóng
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1155</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Vật Công:106</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-lil">
                            <img
                              alt=""
                              data-src="images/pet/bang/soituyet.png"
                              class="petthumb lazyload swiper-lazy"
                              style="bottom: -100px; left: -50px"
                            />
                            <div class="main-content">
                              <h1>Sói Băng</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Cưỡi trên băng sương nhảy đến vị trí mục tiêu,
                                gây cho địch sát thương băng,
                                khiến mục tiêu bị Đóng Băng 1.5s.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 868</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Vật Công:87</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:3</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:3</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-phantom">
                            <img
                              alt=""
                              data-src="images/pet/bang/soisamset.png"
                              class="petthumb lazyload swiper-lazy"
                              style="bottom: 00px; left: -120px"
                            />
                            <div class="main-content">
                              <h1>Sói <br><br>Sấm Sét</h1><br>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Tăng mạnh sát thương điện, sát thương băng và tốc độ cực lớn cho chủ nhân.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1186</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Vật Công:105</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <ul class="tab flex">
                          <li class="tab-name">
                            <a href="#tab-cyclone"
                              ><img
                                data-src="images/pet/bang/phuonghoang-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Phượng Hoàng</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-panda"
                              ><img
                                data-src="images/pet/bang/soixam-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype sr"></p>
                              <h2>Sói Lãnh Nguyên</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-stormbird"
                              ><img
                                data-src="images/pet/bang/chuottuyet-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Chuột Tuyết</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-lil"
                              ><img
                                data-src="images/pet/bang/soituyet-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Sói Băng</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-phantom"
                              ><img
                                data-src="images/pet/bang/soisamset-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Sói Sấm Sét</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a
                              href="/taigame"
                              target="_blank"
                              ><span>Chiến Ngay</span
                              ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide" data-name="Lửa" data-img="fire">
                    <div class="tab-item" id="tab-fire">
                      <div class="tab-wrapper" id="detailPet">
                        <div class="tab-content">
                          <div class="tab-item" id="tab-pyro">
                            <img
                              alt=""
                              data-src="images/pet/lua/sutu.png"
                              class="petthumb petthumb-lg lazyload swiper-lazy"
                            />
                            <div class="main-content">
                              <h1>Hỏa Sư Tử</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Ngưng tụ sức mạnh của lửa, tấn công vào khu vực
                                chỉ định, gây cho mục tiêu trong khu vực 448%
                                sát thương ma pháp, mục tiêu cứ mất 5% HP, kỹ
                                năng này sẽ gây thêm 10% sát thương.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1162</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Pháp Công:114</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                              <!-- <p class="linedecor"></p><div class="bottom-line"><ul class="star-container flex"><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li></ul><span>Nature +90%</span></div><div class="bottom-line"><ul class="star-container flex"><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li></ul><span>Nature +120%</span></div><div class="bottom-line"><ul class="star-container flex"><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li><li class="star "></li></ul><span>Nature +90%</span></div> -->
                            </div>
                          </div>
                          <div class="tab-item" id="tab-anubis">
                            <img
                              alt=""
                              data-src="images/pet/lua/soilua.png"
                              class="petthumb lazyload swiper-lazy"
                              style="bottom: 0px; left: 50px"
                            />
                            <div class="main-content">
                              <h1>Sói Lửa</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Thi triển sức mạnh của lửa bao trùm khu vực nhất
                                định, gây cho mục tiêu trong khu vực sát
                                thương. Di chuyển và mức nhận trị liệu đều giảm
                                50%.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1186</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Pháp Công:105</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-cele">
                            <img
                              alt=""
                              data-src="images/pet/lua/hoalan.png"
                              class="petthumb lazyload swiper-lazy"
                            />
                            <div class="main-content">
                              <h1>Hỏa Lân</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Bộc phát sức mạnh hỏa diệm gây cho địch 280%
                                sát thương ma pháp và có 30% làm Choáng mục
                                tiêu.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1125</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Pháp Công:106</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-scarlet">
                            <img
                              alt=""
                              data-src="images/pet/lua/kilan.png"
                              class="petthumb lazyload swiper-lazy"
                            />
                            <div class="main-content">
                              <h1>Hỏa Kì Lân</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Thi triển 1 Hỏa Viêm Liệt Diệm gây cho mục tiêu trong khu vực 560% sát
                                thương ma pháp và tạo 1 vùng lửa cháy duy trì
                                3.5s, mỗi 0.5s gây cho mục tiêu trong phạm vi
                                112% sát thương ma pháp.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 1131</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Pháp Công:108</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:7</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:48</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-item" id="tab-vanessa">
                            <img
                              alt=""
                              data-src="images/pet/lua/sieuxe.png"
                              class="petthumb lazyload swiper-lazy"
                            />
                            <div class="main-content">
                              <h1>Siêu Xe</h1>
                              <ul class="star-container flex">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                              </ul>
                              <p class="linedecor"></p>
                              <p>
                                Giúp chủ nhân thêm Sát thương lửa, duy trì
                                10 giây, tấn công tăng 24%, tỉ lệ bạo kích tăng
                                10%.
                              </p>
                              <p class="linedecor"></p>
                              <ul class="system-number">
                                <li>
                                  <p><span class="hp"></span>HP: 882</p>
                                </li>
                                <li>
                                  <p><span class="matk"></span>Pháp Công:88</p>
                                </li>
                                <li>
                                  <p><span class="pdef"></span>Vật Phòng:3</p>
                                </li>
                                <li>
                                  <p><span class="mdef"></span>Pháp Phòng:3</p>
                                </li>
                                <li>
                                  <p><span class="crit"></span>Bạo kích:41</p>
                                </li>
                                <li>
                                  <p><span class="crit2"></span>Kháng bạo:41</p>
                                </li>
                                <li>
                                  <p><span class="hit"></span>Chính Xác:85</p>
                                </li>
                                <li>
                                  <p><span class="dodge"></span>Né tránh:68</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <ul class="tab flex">
                          <li class="tab-name">
                            <a href="#tab-pyro"
                              ><img
                                data-src="images/pet/lua/sutu-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Hỏa Sư Tử</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-anubis"
                              ><img
                                data-src="images/pet/lua/soilua-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Sói Lửa</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-cele"
                              ><img
                                data-src="images/pet/lua/hoalan-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype sr"></p>
                              <h2>Hỏa Lân</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-scarlet"
                              ><img
                                data-src="images/pet/lua/kilan-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Hỏa Kì Lân</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a href="#tab-vanessa"
                              ><img
                                data-src="images/pet/lua/sieuxe-2.png"
                                class="lazyload swiper-lazy"
                            /></a>
                            <div class="info-pet">
                              <p class="pettype ssr"></p>
                              <h2>Siêu Xe</h2>
                              <ul class="star-container flex">
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                                <li class="star white"></li>
                              </ul>
                            </div>
                          </li>
                          <li class="tab-name">
                            <a
                              href="/taigame"
                              target="_blank"
                              ><span>Chiến Ngay</span
                              ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination" id="tabPetName"></div>
              </div>
            </div>
          </div>
        </section>
        <section class="section section--5">
          <div class="section__background">
            <img
              alt=""
              data-src="images/bg/home-f5.jpg"
              class="desktop lazyload"
            /><img
              alt=""
              data-src="images/bg/home-f5-mb.jpg"
              class="mobile lazyload"
            />
          </div>
          <h2 class="title">
            <img
              alt=""
              data-src="/images/layout/vn/title-frame5.png"
              class="desktop lazyload"
            /><img
              alt=""
              data-src="/images/layout/vn/title-frame5-mb.png"
              class="mobile lazyload"
            />
          </h2>
          <div class="section--5__content">
            <!-- Slider main container -->
            <div class="swiper-container swiper-frame-5">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <img
                    alt=""
                    data-src="images/bg/bg-library.png"
                    class="imgBg lazyload swiper-lazy"
                  /><img
                    alt=""
                    data-src="images/upload/1.png"
                    class="mainImg lazyload swiper-lazy"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    alt=""
                    data-src="images/bg/bg-library.png"
                    class="imgBg lazyload swiper-lazy"
                  /><img
                    alt=""
                    data-src="images/upload/2.png"
                    class="mainImg lazyload swiper-lazy"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    alt=""
                    data-src="images/bg/bg-library.png"
                    class="imgBg lazyload swiper-lazy"
                  /><img
                    alt=""
                    data-src="images/upload/3.png"
                    class="mainImg lazyload swiper-lazy"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    alt=""
                    data-src="images/bg/bg-library.png"
                    class="imgBg lazyload swiper-lazy"
                  /><img
                    alt=""
                    data-src="images/upload/4.png"
                    class="mainImg lazyload swiper-lazy"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    alt=""
                    data-src="images/bg/bg-library.png"
                    class="imgBg lazyload swiper-lazy"
                  /><img
                    alt=""
                    data-src="images/upload/5.png"
                    class="mainImg lazyload swiper-lazy"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    alt=""
                    data-src="images/bg/bg-library.png"
                    class="imgBg lazyload swiper-lazy"
                  /><img
                    alt=""
                    data-src="images/upload/6.png"
                    class="mainImg lazyload swiper-lazy"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    alt=""
                    data-src="images/bg/bg-library.png"
                    class="imgBg lazyload swiper-lazy"
                  /><img
                    alt=""
                    data-src="images/upload/7.png"
                    class="mainImg lazyload swiper-lazy"
                  />
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </section>
<?php include 'config/foot.php'; ?>		