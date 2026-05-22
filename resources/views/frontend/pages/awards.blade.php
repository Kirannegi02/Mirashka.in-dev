
@extends('frontend.layouts.app')

@section('content')


<!----page header----->


<div class="page_header_default style_one ">
   <div class="parallax_cover">
      <img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax">
   </div>
   <div class="page_header_content">
       <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     Awards & Partnerships                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="index.html">Home</a> </li>
                     <li class="active"> Awards & Partnerships                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!----page header----->   

        <!---about--->
<section class="about-section bg_white">
   <!--===============spacing==============-->
   <div class="pd_top_90"></div>
   <!--===============spacing==============-->
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
            <div class="image_boxes style_one">
               <div class="image one">
                  <img src="{{ asset('assets/frontend/img/page/aw1.webp') }}" class="img" alt="image">
               </div>
               <div class="image two">
                  <img src="{{ asset('assets/frontend/img/page/aw2.webp') }}" class="img" alt="image">
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-12 pd_left_40">
            <div class="pd_left_20">
                <div class="title_all_box style_two  dark_color">
                   <div class="title_sections two">
                      <div class="before_title">OUR ACHIEVEMENTS</div>
                      <h2>A Legacy of Industry Recognition</h2>
                      <div class="description_box">
                         <p>At Mirashka, every award we win is a reflection of the relentless creativity, strategic thinking, and measurable impact our team delivers for our clients. From prestigious PR industry honours to brand excellence platforms, our trophy shelf is built on real campaigns, real results, and real relationships — spanning over a decade of Premium PR practice.</p>
                      </div>
                   </div>
                  <!--===============spacing==============-->
                  <div class="mr_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_30"></div>
               <!--===============spacing==============-->
                <div class="description_box">
                   <p>| 7 Award Ceremonies</p>
                   <p>| 25+ Medals Won</p>
                   <p>| 12+ Years of Recognised Excellence </p>
                </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_30"></div>
               <!--===============spacing==============-->
               <div class="theme_btn_all color_one">
                  <a href="#" target="_blank" rel="nofollow" class="theme-btn three">Contact us</a>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
         </div>
      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_70"></div>
   <!--===============spacing==============-->
</section>
<!---about-end--->


<style>
  .awards-section { background: #f8f5f0; padding: 60px 0; font-family: 'Segoe UI', sans-serif; }
  .section-label { color: var(--primary-color-one); font-size: 12px; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 8px; font-weight: 600; }
  .section-title { color: #1a1a1a; font-size: 36px; font-weight: 700; line-height: 1.2; }
  .section-title span { color: var(--primary-color-one); }
  .section-subtitle { color: #666; font-size: 15px; margin-top: 10px; }
  .stat-box { background: #fff; border: 1px solid #e5ddd0; border-radius: 12px; padding: 18px 28px; text-align: center; }
  .stat-num { font-size: 30px; font-weight: 700; color: var(--primary-color-one); }
  .stat-label { font-size: 11px; color: #999; text-transform: uppercase; letter-spacing: 1px; margin-top: 2px; }
  .year-tabs { display: flex; flex-wrap: wrap; gap: 8px; margin: 36px 0 32px; }
  .year-tab { background: #fff; border: 1.5px solid #ddd; color: #666; padding: 8px 22px; border-radius: 30px; font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.22s; }
  .year-tab:hover { border-color: var(--primary-color-one); color: var(--primary-color-one); }
  .year-tab.active { background: var(--primary-color-one); border-color: var(--primary-color-one); color: #fff; font-weight: 700; }
  .award-card { background: #fff; border: 1px solid #e5ddd0; border-radius: 16px; padding: 30px; height: 100%; transition: box-shadow 0.2s, transform 0.2s; display: none; flex-direction: column; }
  .award-card.show { display: flex; }
  .award-card:hover { transform: translateY(-4px); box-shadow: 0 8px 32px rgba(184,134,11,0.10); }
  .award-year-badge { display: inline-flex; align-items: center; gap: 7px; background: #fdf6e3; border: 1px solid var(--primary-color-one); border-radius: 30px; padding: 5px 14px; font-size: 13px; color: var(--primary-color-one); font-weight: 600; margin-bottom: 16px; width: fit-content; }
  .award-title { color: #1a1a1a; font-size: 28px; font-weight: 700; margin-bottom: 5px; line-height: 1.3; }
  .award-org { color: #888; font-size: 13px; margin-bottom: 14px; }
  .award-org i { margin-right: 5px; color: var(--primary-color-one); }
  .divider-line { width: 44px; height: 3px; background: var(--primary-color-one); border-radius: 2px; margin: 14px 0 18px; }
  .medals-row { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 18px; }
  .medal { display: inline-flex; align-items: center; gap: 6px; padding: 5px 14px; border-radius: 20px; font-size: 13px; font-weight: 600; }
  .medal-gold { background: #fdf6e3; border: 1.5px solid var(--primary-color-one); color: var(--primary-color-one); }
  .medal-silver { background: #f5f5f5; border: 1.5px solid #bbb; color: #555; }
  .medal-bronze { background: #fdf0e8; border: 1.5px solid var(--primary-color-one); color: var(--primary-color-one); }
  .medal-special { background: #f3eeff; border: 1.5px solid #b08aee; color: #6a3db8; }
  .award-desc { color: #555; font-size: 14.5px; line-height: 1.75; flex: 1; }
  .total-medals { display: flex; align-items: center; gap: 6px; color: #aaa; font-size: 12px; margin-top: 18px; padding-top: 14px; border-top: 1px solid #f0ebe2; }
  .total-medals i { color: var(--primary-color-one); }
  .featured-badge { background: var(--primary-color-one); color: #fff; font-size: 10px; font-weight: 700; padding: 3px 10px; border-radius: 20px; letter-spacing: 1px; text-transform: uppercase; margin-left: 8px; vertical-align: middle; }
  .most-decorated { background: #fdf6e3; border: 2px solid var(--primary-color-one); }
</style>

<section class="awards-section">
  <div class="container">

    <div class="text-center mb-2">
      <p class="section-label"><i class="fa fa-trophy me-2"></i>Recognition & Excellence</p>
      <h2 class="section-title">Our <span>Award-Winning</span> Legacy</h2>
      <p class="section-subtitle">Over a decade of recognition across India's most prestigious PR and media platforms.</p>
    </div>

    <div class="row g-3 justify-content-center mt-4 mb-2">
      <div class="col-6 col-sm-3"><div class="stat-box"><div class="stat-num">7</div><div class="stat-label">Award Years</div></div></div>
      <div class="col-6 col-sm-3"><div class="stat-box"><div class="stat-num" style="color:var(--primary-color-one);">8 <i class="fa fa-medal" style="font-size:18px;"></i></div><div class="stat-label">Gold Medals</div></div></div>
      <div class="col-6 col-sm-3"><div class="stat-box"><div class="stat-num" style="color:#777;">15 <i class="fa fa-medal" style="font-size:18px;"></i></div><div class="stat-label">Silver Medals</div></div></div>
      <div class="col-6 col-sm-3"><div class="stat-box"><div class="stat-num" style="color:var(--primary-color-one);">4 <i class="fa fa-medal" style="font-size:18px;"></i></div><div class="stat-label">Bronze Medals</div></div></div>
    </div>

    <div class="year-tabs justify-content-center" id="yearTabs">
      <button class="year-tab active" data-year="2024">2024</button>
      <button class="year-tab" data-year="2022">2022</button>
      <button class="year-tab" data-year="2021">2021</button>
      <button class="year-tab" data-year="2020">2020</button>
      <button class="year-tab" data-year="2017">2017</button>
      <button class="year-tab" data-year="2013">2013</button>
      <button class="year-tab" data-year="2012">2012</button>
    </div>

    <div class="row g-4" id="cardsContainer">

      <div class="col-12 award-card show" data-year="2024">
        <div class="award-year-badge"><i class="fa fa-calendar-alt"></i> 2024</div>
        <div class="award-title">BW Merit Award <span class="featured-badge"><i class="fa fa-star me-1"></i>Latest</span></div>
        <div class="award-org"><i class="fa fa-building"></i> Organiser: BusinessWorld Mirashka</div>
        <div class="divider-line"></div>
        <div class="medals-row">
          <span class="medal medal-gold"><i class="fa fa-medal"></i> 1 Gold</span>
          <span class="medal medal-silver"><i class="fa fa-medal"></i> 2 Silver</span>
        </div>
        <p class="award-desc">Honoured at the prestigious BusinessWorld Merit Awards 2024, receiving 1 Gold and 2 Silver recognitions — affirming our position as one of India's most impactful PR agencies delivering consistent excellence for clients across sectors.</p>
        <div class="total-medals"><i class="fa fa-award"></i> 3 total medals this year</div>
      </div>

      <div class="col-12 award-card" data-year="2022">
        <div class="award-year-badge"><i class="fa fa-calendar-alt"></i> 2022</div>
        <div class="award-title">ET Brand Bharat Summit & Awards</div>
        <div class="award-org"><i class="fa fa-building"></i> Organiser: The Economic Times</div>
        <div class="divider-line"></div>
        <div class="medals-row">
          <span class="medal medal-silver"><i class="fa fa-medal"></i> 3 Silver</span>
          <span class="medal medal-bronze"><i class="fa fa-medal"></i> 1 Bronze</span>
        </div>
        <p class="award-desc">At the Economic Times Brand Bharat Summit & Awards 2022, Mirashka claimed 3 Silver and 1 Bronze — celebrating our work in building brand narratives for India-first businesses and reinforcing our commitment to driving meaningful PR outcomes in an evolving media landscape.</p>
        <div class="total-medals"><i class="fa fa-award"></i> 4 total medals this year</div>
      </div>

      <div class="col-12 award-card" data-year="2021">
        <div class="award-year-badge"><i class="fa fa-calendar-alt"></i> 2021</div>
        <div class="award-title">Fulcrum Awards</div>
        <div class="award-org"><i class="fa fa-building"></i> Organiser: Fulcrum PR Awards</div>
        <div class="divider-line"></div>
        <div class="medals-row">
          <span class="medal medal-silver"><i class="fa fa-medal"></i> 3 Silver</span>
        </div>
        <p class="award-desc">The Fulcrum Awards 2021 recognised Mirashka's campaign excellence with 3 Silver Awards — a testament to our team's ability to craft campaigns that resonate, influence, and deliver even in the challenging post-pandemic media landscape.</p>
        <div class="total-medals"><i class="fa fa-award"></i> 3 total medals this year</div>
      </div>

      <div class="col-12 award-card" data-year="2020">
        <div class="award-year-badge"><i class="fa fa-calendar-alt"></i> 2020</div>
        <div class="award-title">Kleido Awards</div>
        <div class="award-org"><i class="fa fa-building"></i> Organiser: Kleido Awards</div>
        <div class="divider-line"></div>
        <div class="medals-row">
          <span class="medal medal-gold"><i class="fa fa-medal"></i> 1 Gold</span>
          <span class="medal medal-silver"><i class="fa fa-medal"></i> 2 Silver</span>
        </div>
        <p class="award-desc">Mirashka's innovative PR campaigns earned top honours at the Kleido Awards 2020, with 1 Gold and 2 Silver recognitions. This achievement highlights our ability to blend creative storytelling with strategic media placement — delivering campaigns that stand out even in the most competitive categories.</p>
        <div class="total-medals"><i class="fa fa-award"></i> 3 total medals this year</div>
      </div>

      <div class="col-12 award-card" data-year="2017">
        <div class="award-year-badge"><i class="fa fa-calendar-alt"></i> 2017</div>
        <div class="award-title">Campaign India PR Awards</div>
        <div class="award-org"><i class="fa fa-building"></i> Organiser: Campaign India</div>
        <div class="divider-line"></div>
        <div class="medals-row">
          <span class="medal medal-silver"><i class="fa fa-medal"></i> 2 Silver</span>
          <span class="medal medal-bronze"><i class="fa fa-medal"></i> 1 Bronze</span>
        </div>
        <p class="award-desc">One of India's most respected PR industry platforms, the Campaign India PR Awards 2017 recognised Mirashka with 2 Silver and 1 Bronze — celebrating the strategic depth and creative execution of our client campaigns, confirming our standing as a serious, results-driven PR agency.</p>
        <div class="total-medals"><i class="fa fa-award"></i> 3 total medals this year</div>
      </div>

      <div class="col-12 award-card most-decorated" data-year="2013">
        <div class="award-year-badge"><i class="fa fa-calendar-alt"></i> 2013 <span class="featured-badge">Most Decorated Year</span></div>
        <div class="award-title">Industry Awards — Multi-Category</div>
        <div class="award-org"><i class="fa fa-building"></i> Multiple Organising Bodies</div>
        <div class="divider-line"></div>
        <div class="medals-row">
          <span class="medal medal-gold"><i class="fa fa-medal"></i> 3 Gold</span>
          <span class="medal medal-silver"><i class="fa fa-medal"></i> 2 Silver</span>
          <span class="medal medal-bronze"><i class="fa fa-medal"></i> 2 Bronze</span>
        </div>
        <p class="award-desc">2013 was a landmark year for Mirashka — our most decorated year at the time, with 3 Gold, 2 Silver, and 2 Bronze awards across multiple categories. This haul of 7 medals in a single year established our agency as a powerhouse of PR creativity and effectiveness, setting the tone for the award-winning culture we continue to this day.</p>
        <div class="total-medals"><i class="fa fa-award"></i> 7 total medals this year — our best ever</div>
      </div>

      <div class="col-12 award-card" data-year="2012">
        <div class="award-year-badge"><i class="fa fa-calendar-alt"></i> 2012 <span class="featured-badge"><i class="fa fa-trophy me-1"></i>Where It All Began</span></div>
        <div class="award-title">Provoke PR Campaign of the Year</div>
        <div class="award-org"><i class="fa fa-globe"></i> Organiser: Provoke Media (formerly The Holmes Report) &nbsp;|&nbsp; <i class="fa fa-car"></i> Campaign: BMW India</div>
        <div class="divider-line"></div>
        <div class="medals-row">
          <span class="medal medal-special"><i class="fa fa-trophy"></i> Campaign of the Year</span>
        </div>
        <p class="award-desc">The honour that started it all. In 2012, Mirashka was recognised with the prestigious Provoke PR Campaign of the Year — one of the most coveted global PR industry accolades — for our groundbreaking work on the BMW India campaign. This recognition by Provoke Media, the gold standard of global PR industry awards, cemented Mirashka's reputation for delivering world-class, award-worthy PR from the very beginning.</p>
        <div class="total-medals"><i class="fa fa-star"></i> Global recognition — the campaign that defined us</div>
      </div>

    </div>
  </div>
</section>

<style>
  .tally-section {
    background: #fff;
    padding: 60px 0;
    font-family: 'Segoe UI', sans-serif;
  }

  .section-label {
    color: var(--primary-color-one);
    font-size: 12px;
    letter-spacing: 4px;
    text-transform: uppercase;
    font-weight: 600;
    margin-bottom: 8px;
  }

  .section-title {
    color: #1a1a1a;
    font-size: 32px;
    font-weight: 700;
  }

  .section-title span { color: var(--primary-color-one); }

  .tally-strip {
    background: #f0f5f2;
    border: 1px solid #c8ddd5;
    border-radius: 20px;
    padding: 10px;
    margin-top: 40px;
    display: flex;
    align-items: stretch;
    gap: 6px;
    flex-wrap: wrap;
  }

  .tally-item {
    flex: 1;
    min-width: 140px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 28px 16px;
    border-radius: 14px;
    background: #fff;
    border: 1px solid #ddeee7;
    position: relative;
    transition: transform 0.2s, box-shadow 0.2s;
  }

  .tally-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 28px rgba(0,96,57,0.10);
  }

  .tally-item.total-item {
    background: var(--primary-color-one);
    border-color: var(--primary-color-one);
  }

  .medal-icon {
    font-size: 36px;
    margin-bottom: 10px;
    line-height: 1;
  }

  .tally-count {
    font-size: 44px;
    font-weight: 800;
    line-height: 1;
    color: #1a1a1a;
    margin-bottom: 6px;
  }

  .total-item .tally-count {
    color: #fff;
    font-size: 52px;
  }

  .tally-label {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #999;
    text-align: center;
  }

  .total-item .tally-label { color: rgba(255,255,255,0.8); }

  .tally-divider {
    width: 1px;
    background: #c8ddd5;
    border-radius: 2px;
    margin: 10px 0;
    align-self: stretch;
    flex: 0 0 1px;
  }

  .top-bar {
    height: 4px;
    border-radius: 4px 4px 0 0;
    position: absolute;
    top: -1px;
    left: 10%;
    width: 80%;
  }

  .gold-bar   { background: linear-gradient(90deg, #f0c040, #e8a800); }
  .silver-bar { background: linear-gradient(90deg, #c0c0c0, #909090); }
  .bronze-bar { background: linear-gradient(90deg, #d4944a, #a05a20); }
  .special-bar{ background: linear-gradient(90deg, #006039, #00a060); }
  .total-bar  { background: rgba(255,255,255,0.35); }

  .shine-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(255,255,255,0.18);
    color: #fff;
    font-size: 10px;
    font-weight: 700;
    padding: 2px 8px;
    border-radius: 20px;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  @media (max-width: 576px) {
    .tally-divider { display: none; }
    .tally-item { min-width: calc(50% - 8px); }
    .tally-item.total-item { min-width: 100%; }
  }
</style>

<section class="tally-section">
  <div class="container">

    <div class="text-center mb-2">
      <p class="section-label"><i class="fa fa-trophy me-2"></i>Our Achievements</p>
      <h2 class="section-title">Total <span>Medal Tally</span></h2>
      <p class="text-muted mt-2" style="font-size:15px;">A cumulative count of every award won across all years and platforms.</p>
    </div>

    <div class="tally-strip">

      <div class="tally-item">
        <div class="top-bar gold-bar"></div>
        <div class="medal-icon">🥇</div>
        <div class="tally-count" style="color:#9a6f00;">6</div>
        <div class="tally-label">Gold</div>
      </div>

      <div class="tally-divider"></div>

      <div class="tally-item">
        <div class="top-bar silver-bar"></div>
        <div class="medal-icon">🥈</div>
        <div class="tally-count" style="color:#707070;">13</div>
        <div class="tally-label">Silver</div>
      </div>

      <div class="tally-divider"></div>

      <div class="tally-item">
        <div class="top-bar bronze-bar"></div>
        <div class="medal-icon">🥉</div>
        <div class="tally-count" style="color:#a05a20;">4</div>
        <div class="tally-label">Bronze</div>
      </div>

      <div class="tally-divider"></div>

      <div class="tally-item">
        <div class="top-bar special-bar"></div>
        <div class="medal-icon">🏆</div>
        <div class="tally-count" style="color:var(--primary-color-one);">1</div>
        <div class="tally-label">Campaign of the Year</div>
      </div>

      <div class="tally-divider"></div>

      <div class="tally-item total-item">
        <div class="top-bar total-bar"></div>
        <span class="shine-badge"><i class="fa fa-star me-1"></i>Total</span>
        <div class="medal-icon" style="font-size:30px;">🎖️</div>
        <div class="tally-count">24</div>
        <div class="tally-label">Total Awards</div>
      </div>

    </div>

  </div>
</section>


                 <!---call to action--->
      <section class="call-to-action">
   <div class="call_to_action style_one">
      <div class="image">
         <img src="{{ asset('assets/frontend/img/page/m_banner.webp') }}" class="img-fluid" alt="image">
      </div>
      <div class="auto-container">
         <div class="row">
            <div class="col-lg-12">
               <div class="left_content">
                  <div class="main_content">
                      <h3 class="text-white mb-3">Founder Quote</h3>
                      <p>"Every award we have earned is not ours — it belongs to the clients who trusted us, the campaigns we bled for, and the journalists who believed our stories were worth telling. Recognition by our industry peers is the greatest validation that what we do every day, truly matters."</p>
                      <h5 class="text-white">— Founder & CEO, Mirashka</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

            <!---call to action end--->
            
               <!---Proof of Impact end---->
           
               @include('frontend.layouts.common.sections.testimonials', [
    'sectionClass' => 'pd_left_100 pd_right_100',
    'useFluidContainer' => true,
])

<script>
  const tabs = document.querySelectorAll('.year-tab');
  const cards = document.querySelectorAll('.award-card');
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const year = tab.dataset.year;
      cards.forEach(card => {
        if (card.dataset.year === year) {
          card.classList.add('show');
        } else {
          card.classList.remove('show');
        }
      });
    });
  });
</script>

   @endsection