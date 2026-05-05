
@extends('frontend.layouts.app')

@section('content')
 <style type="text/css">
.clients-section {
  padding: 3rem 1rem;
}

.clients-header {
  text-align: center;
  margin-bottom: 2rem;
}

.divider {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
}

.divider .line {
  height: 1px;
  width: 60px;
  background: #e0e0e0;
}

.divider .dot {
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background: #ccc;
}

.clients-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
  gap: 20px;
}

.client-tile {
  aspect-ratio: 3 / 2;
  border: 1px solid #ebebeb;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  background: #fff;
  transition: border-color 0.2s ease, transform 0.2s ease;
}

.client-tile:hover {
  border-color: #bbb;
  transform: translateY(-2px);
}

.client-tile img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 10px;
    transition: filter 0.25s ease, opacity 0.25s ease;
}

.client-tile:hover img {
  filter: grayscale(100%);
  opacity: 0.7;
}
 </style>
 <div class="page_header_default style_one ">
            <div class="parallax_cover">
               <div class="simpleParallax"><img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax"></div>
            </div>
            <div class="page_header_content">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="banner_title_inner">
                           <div class="title_page">
                              Clients
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                           <ul class="breadcrumb m-auto">
                              <li><a href="index.html">Home</a></li>
                              <li class="active">Clients</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!----header----->


   <section class="clients-section">
      <div class="container">
        <div class="clients-header">
          <div class="title_sections">
            <div class="before_title mb-3">Trusted by Our Clients</div>
            <h2>Together, We Build Success</h2>
          </div>
          <div class="divider">
            <div class="line"></div>
            <div class="dot"></div>
            <div class="line"></div>
          </div>
        </div>

        <div class="clients-grid">
          @for ($i = 1; $i <= 33; $i++)
            <div class="client-tile">
              <img src="{{ asset('assets/frontend/img/page/client/' . $i . '.jpg') }}" alt="client {{ $i }}">
            </div>
          @endfor
        </div>
      </div>
   </section>

            @endsection