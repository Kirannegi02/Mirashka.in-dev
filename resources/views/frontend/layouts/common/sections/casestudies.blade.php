 <section class="project-section  bg_light_1" id="Case">
     <div class="pd_top_40"></div>
     <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class="title_all_box style_one text-center dark_color">
                 <div class="title_sections">
                    <div class="before_title">Proven Impact</div>
                    <h2>Our Case Studies </h2>
                 </div>
                 <!--===============spacing==============-->
                 <div class="pd_bottom_20"></div>
                 <!--===============spacing==============-->
              </div>

           </div>
        </div>
        <div class="project_all filt_style_eight filter_enabled">
           <div class="project_container clearfix">
              <div class="row clearfix">
               @php $caseStudies = \App\Models\CaseStudy::where('status', 1)->latest()->paginate(6); @endphp
                 @foreach($caseStudies as $case)
                 <div
                    class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 project_category-leadership">
                    <div class="project_post style_eight">
                       <div class="inner_box">
                          <div class="image_box">
                             <img  src="{{ imageUrl($case->featured_image, 'admin_assets/img/default.png', 'case-study') }}" alt="{{ $case->title }}">
                             <a href="{{ url('/case-study/'.$case->slug) }}">
                                <span class="icon-plus zoom_icon"></span>
                             </a>
                          </div>
                          <div class="content_box">
                             <h2 class="title_pro">
                                <a href="{{ url('/case-study/'.$case->slug) }}" rel="bookmark">{{ \Illuminate\Support\Str::limit($case->title,40) }}</a>
                             </h2>
                             <p>Read More</p>
                             <a href="{{ url('/case-study/'.$case->slug) }}" class="arrow_btn"><span class="icon-right-arrow-long"></span></a>
                          </div>
                       </div>
                    </div>
                 </div>
                 @endforeach
              </div>
           </div>
        </div>
     </div>
     <div class="pd_bottom_80"></div>
  </section>