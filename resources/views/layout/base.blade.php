<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HEARTBREAK CLUB</title>
    <meta name="description" content="Interactive NFT on Cardano" />
    <meta
      name="keywords"
      content="Heartbreak Club, NFT, developer, cardano, studio, team"
    />

    <link rel="stylesheet" href="{{ asset('heart-break-club-main/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('heart-break-club-main/assets/css/title.css') }}" />
    <link rel="stylesheet" href="{{ asset('heart-break-club-main/assets/css/button.css') }}" />
    <link rel="stylesheet" href="{{ asset('heart-break-club-main/assets/css/nav.css') }}">

    <!-- OG meta tags that improve the look of your post on social media -->
    <meta property="og:site_name" content="Heartbreak Club" />
    <!--website name-->
    <meta property="og:site" content="https://www.heartbreakclub.io/" />
    <!--website link-->
    <meta property="og:title" content="Home" />
    <!--Post title-->
    <meta
      property="og:description"
      content="Heartbreak NFT on Cardano Blockchain"
    />
    <!--Post description-->
    <meta property="og:image" content="{{ asset('heart-break-club-main/assets/images/main.jpg') }}">
    <!-- Image link (jpg only)-->
    <meta property="og:url" content="https://www.heartbreakclub.io/" />
    <!--where do you want your post to link to-->
    <meta property="og:type" content="article" />

    <!-- Favicon and Apple Icons -->
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="{{ asset('heart-break-club-main/assets/images/favicon/apple-icon-57x57.png') }}"
    />
    <link
      rel="apple-touch-icon"
      sizes="60x60"
      href="{{ asset('heart-break-club-main/assets/images/favicon/apple-icon-60x60.png') }}"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="{{ asset('heart-break-club-main/assets/images/favicon/apple-icon-72x72.png') }}"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{ asset('heart-break-club-main/assets/images/favicon/apple-icon-76x76.png') }}"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="{{ asset('heart-break-club-main/assets/images/favicon/apple-icon-114x114.png') }}"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="{{ asset('heart-break-club-main/assets/images/favicon/apple-icon-120x120.png') }}"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="{{ asset('heart-break-club-main/assets/images/favicon/apple-icon-144x144.png') }}"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="{{ asset('heart-break-club-main/assets/images/favicon/apple-icon-152x152.png') }}"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="{{ asset('heart-break-club-main/assets/images/favicon/apple-icon-180x180.png') }}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="{{ asset('heart-break-club-main/assets/images/favicon/android-icon-192x192.png') }}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="{{ asset('heart-break-club-main/assets/images/favicon/favicon-32x32.png') }}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="{{ asset('heart-break-club-main/assets/images/favicon/favicon-96x96.png') }}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset('heart-break-club-main/assets/images/favicon/favicon-16x16.png') }}"
    />
  </head>

  <!--COVER-->
  <header>
    <div class="triangle left">
      <h1>Heartbreak Club</h1>
    </div>
    <div class="triangle right">
      <h1>Heartbreak Club</h1>
    </div>
    <button></button>
  </header>
  <!--END OF COVER-->

  <!--NAV-->
  <nav>
    <div class="navwords">
      <h2>
        Follow <br />
        our <br />socials
      </h2>
    </div>

    <div class="dividerVertical"></div>
    <ul>
      <a href="https://discord.gg/RYzZUTCGX3">discord</a
      ><br />
      <a href="https://twitter.com/THBC_">twitter</a
      ><br />
      <a href="https://www.instagram.com/heartbreakclub_ada/?hl=en">instagram</a
      ><br />
      <a href="https://www.facebook.com/profile.php?id=100077890636691"
        >facebook</a
      ><br />
    </ul>
    <div id="nav-close">
      <i class="fas fa-times"></i>
    </div>
    <div class="dividerVertical"></div>
    <div class="BuyButton">
      <a href="pages/Buying.html"> <h2>Buy Now</h2></a>
    </div>
    <br />
    <div class="BuyButton">
        <a href="{{ route('test') }}"><h2>Test</h2></a>
    </div>
    
        
    
  </nav>
  <!--END OF NAV-->

  <!--BODY-->
  <body>
    <div class="bodywhole">
      <div class="content">
        <!--AREA ONE-->

        <section>
          <div class="areaone">
            <img src="{{ asset('heart-break-club-main/assets/images/heartwithout.png" alt="Logo" width="370" /') }}>
          </div>
        </section>
        <!--END OF AREA ONE-->

        <!--AREA TWO-->

        <div class="areatwo">
          <div class="title">
            <div class="lines"></div>
            <h1>the club</h1>
            <div class="lines"></div>
          </div>
          <!--content area two-->
          <div class="about">
            <div class="imageone">
              <img src="{{ asset('heart-break-club-main/assets/images/output265.png" width="300" alt="" /') }}>
            </div>
            <div class="words">
              <div class="smalltitle">
                <h1>welcome</h1>
                <div class="smalllines"></div>
              </div>
              <p>
                The HeartBreak Club is a collection of 2,000 hand-drawn,
                algorithmically generated NFT???s on the Cardano blockchain that
                combine the experience of HeartBreak with the expressive and
                individualistic nature of fashion.
              </p>
            </div>
          </div>
        </div>
        <!--END OF AREA TWO-->

        <!--AREA THREE-->
        <div class="areathree">
          <!--HEARTBREAK CLUB -->

          <div class="HBCabout">
            <div class="wholesmalltitle blue">
              <h1>
                <strong>heartbreak <span>club</span></strong>
              </h1>
              <div class="wholesmalllines"></div>
            </div>
            <div class="HBCcontent">
              <p>
                <strong> <span class="lightblue">2000</span></strong> unique
                NFTs
                <span class="divide">|</span>
                <strong> <span class="lightblue">500</span></strong> plus
                attributes <span class="divide">|</span>

                <strong> <span class="lightblue">Cardano</span></strong>
                blockchain <br />
              </p>
            </div>
          </div>
          <!--END OF HEARTBREAK CLUB -->
        </div>
        <!--GALLERY-->

        <div class="grid">
          <div class="gallery">
            <figure class="gallery-item">
              <div class="galleryimg">
                <img
                  src="{{ asset('heart-break-club-main/assets/images/output18.png') }}"
                  alt=""
                  class="imgGallery"
                />
              </div>
            </figure>
            <figure class="gallery-item">
              <div class="galleryimg">
                <img
                  src="{{ asset('heart-break-club-main/assets/images/output35.png') }}"
                  alt=""
                  class="imgGallery"
                />
              </div>
            </figure>
            <figure class="gallery-item">
              <div class="galleryimg">
                <img
                  src="{{ asset('heart-break-club-main/assets/images/output77.png') }}"
                  alt=""
                  class="imgGallery"
                />
              </div>
            </figure>
            <figure class="gallery-item">
              <div class="galleryimg">
                <img
                  src="{{ asset('heart-break-club-main/assets/images/output41.png') }}"
                  alt=""
                  class="imgGallery"
                />
              </div>
            </figure>
            <figure class="gallery-item">
              <div class="galleryimg">
                <img
                  src="{{ asset('heart-break-club-main/assets/images/output47.png') }}"
                  alt=""
                  class="imgGallery"
                />
              </div>
            </figure>
            <figure class="gallery-item">
              <div class="galleryimg">
                <img
                  src="{{ asset('heart-break-club-main/assets/images/output34.png') }}"
                  alt=""
                  class="imgGallery"
                />
              </div>
            </figure>
          </div>
        </div>
        <!--END OF GALLERY-->
      </div>
      <!--END OF AREA THREE-->

      <!--AREA FOUR-->

      <div class="areafour">
        <!--MEMBER-->

        <div class="areafour">
          <div class="about">
            <div class="words">
              <div class="wholesmalltitle">
                <h1>become a <span>member</span></h1>
                <div class="wholesmalllines"></div>
              </div>
              <p>
                As a member of the HeartBreak Club, you???ll be a part of a
                dedicated team of developers, builders, curators, and
                influencers who share a passion for the intersection of
                blockchain technology, high-end streetwear and fashion, and the
                loves that got away???
              </p>
            </div>
          </div>
          <!--END OF MEMBER -->

          <!--pearks-->

          <div class="about">
            <div class="imagetwo">
              <img src="{{ asset('heart-break-club-main/assets/images/output71.png" width="300" alt="" /') }}>
            </div>
            <div class="words">
              <div class="smalltitle">
                <h1>
                  perks of becoming a <br />
                  <span>member</span>
                </h1>
                <div class="smalllines"></div>
              </div>
              <p>
                In addition you will also have exclusive access to the
                Heartbreak Club clothing line, comprised of custom-made shirts,
                hoodies, jackets, hats, accessories, and more, all designed by
                hand and printed in the U.S.A.
              </p>
            </div>
          </div>
          <!--end of pearks-->
        </div>
        <!--END OF AREA FOUR-->

        <!--FUTURE-->

        <div class="future">
          <div class="RIGHTwholesmalltitle">
            <div class="LEFTwholelonglines"></div>
            <h1>the <span>future</span></h1>
          </div>
          <div class="about">
            <p>
              In the near future we will be airdopping a token which will be the
              digital ticket to access "seasons" of the heartbreak club clothing
              line. The line will be available to purchase exclusively for
              holders of the tickets. The more tickets, the more exclusive the
              tiers of the line they can access. Higher tiers can be embroidered
              jackets, merch with personalized and numbered HBC NFT's, pins,
              hats, and access to our team's upcoming Cardano in-person events.
            </p>
          </div>
        </div>
        <!--END OF FUTURE-->

        <!--THE TEAM-->

        <div class="theteam">
          <div class="future">
            <div class="wholesmalltitle">
              <h1>the <span>team</span></h1>
              <div class="wholelonglines"></div>
            </div>
            <div class="about">
              <p>
                The team behind the HeartBreak Club are the next generation of
                Cardano Enthusiasts who are being advised by well respected
                members of the Cardano Community. These members include skilled
                developers, Cardano experts, designers, and visionaries who want
                to make HeartBreak Club into something both unique and
                innovative. We have collaborated with FragMint who also
                collaborated on Worlds Within the first VR NFT on Cardano and
                Minting is being handled by Tygar
              </p>
            </div>
          </div>
          <div class="grid">
            <div class="gallery">
              <figure class="gallery-item">
                <div class="galleryimg">
                  <img
                    src="{{ asset('heart-break-club-main/assets/images/output72.png') }}"
                    alt=""
                    class="imgGallery2"
                  />
                </div>
              </figure>
              <figure class="gallery-item">
                <div class="galleryimg">
                  <img
                    src="{{ asset('heart-break-club-main/assets/images/output33.png') }}"
                    alt=""
                    class="imgGallery2"
                  />
                </div>
              </figure>
              <figure class="gallery-item">
                <div class="galleryimg">
                  <img
                    src="{{ asset('heart-break-club-main/assets/images/output261.png') }}"
                    alt=""
                    class="imgGallery2"
                  />
                </div>
              </figure>
              <figure class="gallery-item">
                <div class="galleryimg">
                  <img
                    src="{{ asset('heart-break-club-main/assets/images/output476.png') }}"
                    alt=""
                    class="imgGallery2"
                  />
                </div>
              </figure>
              <figure class="gallery-item">
                <div class="galleryimg">
                  <img
                    src="{{ asset('heart-break-club-main/assets/images/output443.png') }}"
                    alt=""
                    class="imgGallery2"
                  />
                </div>
              </figure>
              <figure class="gallery-item">
                <div class="galleryimg">
                  <img
                    src="{{ asset('heart-break-club-main/assets/images/output246.png') }}"
                    alt=""
                    class="imgGallery2"
                  />
                </div>
              </figure>
            </div>
          </div>
        </div>
        <!--END OF THE TEAM-->
      </div>
    </div>
  </body>
  <footer>
    <div class="leftside">
      <a href="https://www.heartbreakclub.io/">
        <img src="{{ asset('heart-break-club-main/assets/images/HBC.png" alt="" width="150px') }}"/></a>
    </div>
    <div class="rightside">
      Copyright &#169; 2022 Heartbreak Club. All Rights Reserved.
    </div>
  </footer>

  <!--END OF BODY-->

  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
  ></script>
  <script src="{{ asset('heart-break-club-main/assets/java/script.js') }}"></script>
  <script src="{{ asset('heart-break-club-main/assets/java/button.js') }}"></script>
  <script src="{{ asset('heart-break-club-main/assets/java/cover.js') }}"></script>
  <script
    src="https://kit.fontawesome.com/2550a92b94.js"
    crossorigin="anonymous"
  ></script>
</html>
