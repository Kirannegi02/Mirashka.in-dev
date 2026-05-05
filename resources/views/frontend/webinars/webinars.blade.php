@extends('frontend.layouts.app')

@section('content')
<div class="page_header_default style_one">
  <div class="parallax_cover">
    <div class="simpleParallax">
      <img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax">
    </div>
  </div>
  <div class="page_header_content">
    <div class="auto-container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner_title_inner">
            <div class="title_page">Webinars</div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="breadcrumbs creote">
            <ul class="breadcrumb m-auto">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Webinars</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="service-section">
  <div class="pd_top_80"></div>

  <div class="container">
    <!-- Section Title -->
    <div class="row">
      <div class="col-lg-12">
        <div class="title_all_box style_one text-center dark_color">
          <div class="title_sections">
            <div class="before_title">Company Webinars</div>
            <h2>Join Our Upcoming and Past Webinars</h2>
            <p>Explore our live and recorded sessions to stay updated on the latest trends.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabs -->
    <div class="row pd_bottom_40">
      <div class="col-lg-12 text-center">
        <ul class="nav nav-tabs justify-content-center" id="webinarTabs">
          <li class="nav-item">
            <button class="nav-link theme-btn one active me-2" data-bs-toggle="tab" data-bs-target="#upcoming">
              On Demand 
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link theme-btn one" data-bs-toggle="tab" data-bs-target="#past">
              Past Webinars
            </button>
          </li>
        </ul>
      </div>
    </div>

    <!-- Tab Content -->
    <div class="tab-content">

      <!-- Upcoming Webinars -->
      <div class="tab-pane fade show active" id="upcoming">
        <div class="row g-4">
          @forelse($upcomingWebinars as $webinar)
          <div class="col-lg-4 col-md-6 col-12">
            <div class="webinar-card-simple">
              <div class="webinar-image">
                <img src="{{ imageUrl($webinar->image) }}" alt="{{ $webinar->title }}">
                <span class="webinar-badge {{ $webinar->status === 'cancelled' ? 'cancelled-badge' : '' }}">
                  {{ $webinar->status === 'cancelled' ? 'Cancelled' : 'Upcoming' }}
                </span>
              </div>
              <div class="webinar-body">
                <div class="webinar-date">
                  <i class="fa fa-calendar"></i>
                  {{ \Carbon\Carbon::parse($webinar->start_date)->format('d M, Y') }}
                  <span class="separator">|</span>
                  <i class="fa fa-clock-o"></i>
                  {{ $webinar->start_time ? \Carbon\Carbon::parse($webinar->start_time)->format('h:i A') : '' }}
                </div>
                <h3 class="webinar-title">{{ $webinar->title }}</h3>
                <p class="webinar-excerpt">{{ Str::limit(strip_tags($webinar->description), 100) }}</p>
                <button class="btn-view-more" data-webinar='@json($webinar)' onclick="openWebinarModal(this)">
                  <i class="fa fa-plus-circle"></i> View More
                </button>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12 text-center py-5">
            <i class="fa fa-video-camera" style="font-size:48px; color:#ccc;"></i>
            <h4 class="mt-3">No Upcoming Webinars</h4>
            <p class="text-muted">Check back soon for new sessions!</p>
          </div>
          @endforelse
        </div>
      </div>

      <!-- Past Webinars -->
      <div class="tab-pane fade" id="past">
        <div class="row g-4">
          @forelse($pastWebinars as $webinar)
          <div class="col-lg-4 col-md-6 col-12">
            <div class="webinar-card-simple past">
              <div class="webinar-image">
                <img src="{{ imageUrl($webinar->image) }}" alt="{{ $webinar->title }}">
                <span class="webinar-badge past-badge">Recording</span>
              </div>
              <div class="webinar-body">
                <div class="webinar-date">
                  <i class="fa fa-calendar"></i>
                  {{ \Carbon\Carbon::parse($webinar->start_date)->format('d M, Y') }}
                </div>
                <h3 class="webinar-title">{{ $webinar->title }}</h3>
                <p class="webinar-excerpt">{{ Str::limit(strip_tags($webinar->description), 100) }}</p>
                <a href="{{ route('webinar.single', $webinar->id) }}" class="btn-view-more">
                  <i class="fa fa-play-circle"></i> Read More
                </a>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12 text-center py-5">
            <i class="fa fa-archive" style="font-size:48px; color:#ccc;"></i>
            <h4 class="mt-3">No Past Webinars</h4>
            <p class="text-muted">Previous sessions will appear here.</p>
          </div>
          @endforelse
        </div>
      </div>

    </div>
  </div>

  <div class="pd_bottom_60"></div>
</section>

<!-- Webinar Detail Modal -->
<div class="modal fade" id="webinarModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Webinar Details</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Image -->
        <div class="modal-image">
          <img id="modalImage" src="" alt=""> 
        </div>
        
        <!-- Date & Time -->
        <div class="modal-meta">
          <span><i class="fa fa-calendar"></i> <span id="modalDate"></span></span>
          <span><i class="fa fa-clock-o"></i> <span id="modalTime"></span></span>
          <span><i class="fa fa-tv"></i> <span id="modalDuration"></span></span>
        </div>
        
        <!-- Speaker -->
        <div class="modal-speaker">
          <i class="fa fa-user"></i>
          <strong id="modalSpeaker"></strong>
          <span id="modalSpeakerDesignation"></span>
        </div>
        
        <!-- About -->
        <div class="modal-section">
          <h6><i class="fa fa-info-circle"></i> About This Session</h6>
          <p id="modalDescription"></p>
        </div>
        
        <!-- Why Attend -->
        <div class="modal-section">
          <h6><i class="fa fa-bullseye"></i> Why You Should Attend</h6>
          <ul id="modalWhyAttend">
            <li>Gain expert insights and actionable strategies</li>
            <li>Learn real-world case studies and best practices</li>
            <li>Live Q&A session with industry experts</li>
          </ul>
        </div>
        
        <!-- Key Features -->
        <div class="modal-section">
          <h6><i class="fa fa-star"></i> Key Features</h6>
          <ul id="modalFeatures">
            <li>Comprehensive content covering industry trends</li>
            <li>Practical tips you can apply immediately</li>
            <li>Certificate of participation</li>
          </ul>
        </div>
        
        <!-- What You Get -->
        <div class="modal-section">
          <h6><i class="fa fa-gift"></i> What You Will Get</h6>
          <ul id="modalBenefits">
            <li>Exclusive learning materials</li>
            <li>Recording access</li>
            <li>Networking opportunities</li>
          </ul>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-register-modal" id="btnRegisterModal">
          <i class="fa fa-ticket"></i> Register Now
        </button>
      </div>
    </div>
  </div>
</div>

<!-- FAQ Section -->
<section class="faqs-section bg_light_1">
  <div class="pd_top_80"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title_all_box style_seven text-center dark_color">
          <div class="title_sections">
            <div class="before_title">FAQs</div>
            <div class="title">Frequently Asked Questions</div>
            <div class="small_text_sub">Have questions? We're here to help.</div>
          </div>
          <div class="pd_bottom_40"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
        <div class="simple_image_boxes height_360px parallax_cover">
          <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax" alt="Client Satisfaction">
        </div>
        <div class="mr_bottom_25"></div>
        <div class="progress_bar">
          <h2>Client Satisfaction <span>98%</span></h2>
          <div class="bar">
            <div class="bar-inner count-bar counted" data-percent="98%" style="width: 98%;"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
        <div class="simple_image_boxes height_360px parallax_cover">
          <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax" alt="Media Reach">
        </div>
        <div class="mr_bottom_25"></div>
        <div class="progress_bar">
          <h2>Media Reach <span>120+</span></h2>
          <div class="bar">
            <div class="bar-inner count-bar counted" data-percent="100%" style="width: 100%;"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12">
        <div class="faq_section type_one">
          <div class="block_faq">
            <div class="accordion">
              <dl>
                <dt class="faq_header">
                  <span class="icon-play"></span> What topics will the webinar cover?
                </dt>
                <dd class="accordion-content hide">
                  <p>Learn actionable PR strategies, CXO positioning tips, and how to boost your digital visibility effectively.</p>
                </dd>
                <dt class="faq_header">
                  <span class="icon-play"></span> Who should attend this webinar?
                </dt>
                <dd class="accordion-content hide">
                  <p>Startup founders, marketing leaders, PR professionals, and anyone looking to grow their brand presence.</p>
                </dd>
                <dt class="faq_header">
                  <span class="icon-play"></span> How long is the webinar?
                </dt>
                <dd class="accordion-content hide">
                  <p>The session runs for 60 minutes, including a live Q&A for personalized guidance.</p>
                </dd>
                <dt class="faq_header">
                  <span class="icon-play"></span> Is there a cost to join?
                </dt>
                <dd class="accordion-content hide">
                  <p>It's completely free! Reserve your spot early as seats are limited.</p>
                </dd>
                <dt class="faq_header active">
                  <span class="icon-play"></span> How can I register?
                </dt>
                <dd class="accordion-content hide" style="display: block;">
                  <p>Click the "Register Now" button, fill in your details, and get a confirmation email with joining instructions.</p>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pd_bottom_60"></div>
</section>

<style>
/* Card Styles */
.webinar-card-simple {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 15px rgba(0,0,0,0.08);
  transition: all 0.3s ease;
  height: 100%;
  display: flex;
  flex-direction: column;
}

.webinar-card-simple:hover {
  box-shadow: 0 8px 30px rgba(0,0,0,0.12);
  transform: translateY(-3px);
}

.webinar-card-simple.past {
  opacity: 0.9;
}

.webinar-image {
  position: relative;
  height: 180px;
  overflow: hidden;
}

.webinar-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.webinar-badge {
  position: absolute;
  top: 12px;
  left: 12px;
  background: linear-gradient(135deg, #006039, #008c52);
  color: #fff;
  padding: 5px 14px;
  border-radius: 20px;
  font-size: 11px;
  font-weight: 600;
  text-transform: uppercase;
}

.past-badge {
  background: linear-gradient(135deg, #6c757d, #868e96);
}

.cancelled-badge {
  background: linear-gradient(135deg, #dc3545, #e4606d);
}

.webinar-body {
  padding: 20px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.webinar-date {
  font-size: 13px;
  color: #666;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 6px;
  flex-wrap: wrap;
}

.webinar-date i {
  color: #006039;
}

.webinar-date .separator {
  color: #ddd;
}

.webinar-title {
  font-size: 17px;
  font-weight: 700;
  color: #1a1a2e;
  margin-bottom: 10px;
  line-height: 1.3;
}

.webinar-excerpt {
  font-size: 14px;
  color: #555;
  line-height: 1.5;
  margin-bottom: 15px;
  flex: 1;
}

.btn-view-more {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 10px 20px;
  background: linear-gradient(135deg, #006039, #008c52);
  color: #fff;
  border: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  text-decoration: none;
  transition: all 0.2s ease;
  width: 100%;
}

.btn-view-more:hover {
  background: linear-gradient(135deg, #004d2c, #006039);
  color: #fff;
}

/* Modal Styles */
#webinarModal .modal-dialog {
  max-width: 900px;
}

#webinarModal .modal-content {
  border: none;
  border-radius: 16px;
  overflow: hidden;
}

#webinarModal .modal-header {
  background: linear-gradient(135deg, #006039, #008c52);
  color: #fff;
  padding: 20px 25px;
  border: none;
}

#webinarModal .modal-header .modal-title {
  font-weight: 700;
  font-size: 18px;
  color:#fff;
}

#webinarModal .modal-header .close {
  color: #fff;
  opacity: 0.8;
  font-size: 28px;
  padding: 0;
  margin: -8px -8px -8px auto;
}

#webinarModal .modal-header .close:hover {
  opacity: 1;
}

#webinarModal .modal-body {
  padding: 25px;
}

.modal-image {
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 20px;
  height: 180px;
}

.modal-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.modal-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  margin-bottom: 15px;
  padding: 12px 15px;
  background: #f8f9fa;
  border-radius: 8px;
}

.modal-meta span {
  font-size: 13px;
  color: #555;
  display: flex;
  align-items: center;
  gap: 6px;
}

.modal-meta i {
  color: #006039;
}

.modal-speaker {
  margin-bottom: 20px;
  padding-bottom: 15px;
  border-bottom: 1px solid #eee;
  display: flex;
  align-items: center;
  gap: 8px;
}

.modal-speaker i {
  color: #006039;
  font-size: 16px;
}

.modal-speaker strong {
  color: #1a1a2e;
}

.modal-speaker span {
  color: #888;
  font-style: italic;
}

.modal-section {
  margin-bottom: 20px;
}

.modal-section:last-of-type {
  margin-bottom: 0;
}

.modal-section h6 {
  font-size: 14px;
  font-weight: 700;
  color: #1a1a2e;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.modal-section h6 i {
  color: #006039;
}

.modal-section p {
  font-size: 14px;
  color: #555;
  line-height: 1.6;
  margin: 0;
}

.modal-section ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.modal-section ul li {
  font-size: 14px;
  color: #555;
  padding: 6px 0;
  padding-left: 20px;
  position: relative;
}

.modal-section ul li::before {
  content: "•";
  position: absolute;
  left: 5px;
  color: #006039;
  font-weight: bold;
}

#webinarModal .modal-footer {
  padding: 15px 25px 25px;
  border: none;
  justify-content: center;
  gap: 10px;
}

#webinarModal .modal-footer .btn {
  padding: 10px 25px;
  border-radius: 8px;
  font-weight: 600;
}

.btn-register-modal {
  background: linear-gradient(135deg, #006039, #008c52);
  color: #fff;
  border: none;
}

.btn-register-modal:hover {
  background: linear-gradient(135deg, #004d2c, #006039);
  color: #fff;
}

/* Nav Tab Styles */
.nav-tabs .nav-link.active {
  background-color: #006039;
  color: #fff;
  border-radius: 8px;
}

.nav-tabs .nav-link {
  border: none;
  color: #006039;
  font-weight: 600;
}

.theme-btn.one {
  background: #fff;
  color: #006039;
  border: 2px solid #006039;
}

.theme-btn.one:hover {
  background: #006039;
  color: #fff;
}
</style>

<script>
// Global modal reference
const webinarModal = document.getElementById('webinarModal');

// Open Webinar Modal
function openWebinarModal(btn) {
  const webinarData = btn.getAttribute('data-webinar');
  if (!webinarData) return;
  
  const webinar = JSON.parse(webinarData);
  populateWebinarModal(webinar);
  
  // Show Bootstrap modal
  const modal = new bootstrap.Modal(webinarModal);
  modal.show();
}

// Populate Modal with Webinar Data
function populateWebinarModal(webinar) {
  // Get modal elements
  const modalTitle = document.getElementById('modalTitle');
  const modalImage = document.getElementById('modalImage');
  const modalDate = document.getElementById('modalDate');
  const modalTime = document.getElementById('modalTime');
  const modalDuration = document.getElementById('modalDuration');
  const modalSpeaker = document.getElementById('modalSpeaker');
  const modalSpeakerDesignation = document.getElementById('modalSpeakerDesignation');
  const modalDescription = document.getElementById('modalDescription');
  const modalWhyAttend = document.getElementById('modalWhyAttend');
  const modalFeatures = document.getElementById('modalFeatures');
  const modalBenefits = document.getElementById('modalBenefits');
  const btnRegisterModal = document.getElementById('btnRegisterModal');
  
  // Set title
  modalTitle.textContent = webinar.title || 'Webinar Details';
  
  // Set image
  if (webinar.image) {
    modalImage.src = 'assets/admin/image/webinar/' + webinar.image;
    modalImage.alt = webinar.title;
    modalImage.style.display = 'block';
  } else {
    modalImage.style.display = 'none';
  }
  
  // Set date & time
  if (webinar.start_date) {
    const date = new Date(webinar.start_date);
    modalDate.textContent = date.toLocaleDateString('en-US', { 
      weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' 
    });
  } else {
    modalDate.textContent = '';
  }
  
  if (webinar.start_time) {
    const timeParts = webinar.start_time.split(':');
    const hour = parseInt(timeParts[0]);
    const minute = timeParts[1];
    const ampm = hour >= 12 ? 'PM' : 'AM';
    const hour12 = hour % 12 || 12;
    modalTime.textContent = hour12 + ':' + minute + ' ' + ampm;
  } else {
    modalTime.textContent = '';
  }
  
  modalDuration.textContent = webinar.duration || '60 mins';
  
  // Set speaker
  modalSpeaker.textContent = webinar.speaker_name || 'Expert Speaker';
  modalSpeakerDesignation.textContent = webinar.speaker_designation ? ' - ' + webinar.speaker_designation : '';
  
  // Set description
  modalDescription.textContent = stripHtml(webinar.description) || 'Join us for an insightful session.';
  
  // Why Attend
  const whyItems = webinar.why_attend && webinar.why_attend.length > 0 
    ? webinar.why_attend 
    : [
        'Gain expert insights and actionable strategies',
        'Learn real-world case studies and best practices',
        'Live Q&A session with industry experts'
      ];
  modalWhyAttend.innerHTML = whyItems.map(item => `<li>${escapeHtml(item)}</li>`).join('');
  
  // Key Features
  const featureItems = webinar.features && webinar.features.length > 0 
    ? webinar.features 
    : [
        'Comprehensive content covering industry trends',
        'Practical tips you can apply immediately',
        'Certificate of participation'
      ];
  modalFeatures.innerHTML = featureItems.map(item => `<li>${escapeHtml(item)}</li>`).join('');
  
  // Benefits
  const benefitItems = webinar.what_you_get && webinar.what_you_get.length > 0 
    ? webinar.what_you_get 
    : [
        'Exclusive learning materials',
        'Recording access',
        'Networking opportunities'
      ];
  modalBenefits.innerHTML = benefitItems.map(item => `<li>${escapeHtml(item)}</li>`).join('');
  
  // Register Button
  btnRegisterModal.onclick = function() {
    bootstrap.Modal.getInstance(webinarModal).hide();
    
    setTimeout(function() {
      document.getElementById('webinar_id').value = webinar.id;
      const regModalTitle = document.getElementById('webinarModalTitle');
      if (regModalTitle) regModalTitle.textContent = webinar.title;
      document.getElementById('webinarRegistrationForm').reset();
      const alertBox = document.getElementById('webinarModalAlert');
      if (alertBox) alertBox.classList.add('d-none');
      new bootstrap.Modal(document.getElementById('webinarRegisterModal')).show();
    }, 300);
  };
}

// Helper: Strip HTML tags
function stripHtml(html) {
  if (!html) return '';
  const tmp = document.createElement('div');
  tmp.innerHTML = html;
  return tmp.textContent || tmp.innerText || '';
}

// Helper: Escape HTML
function escapeHtml(text) {
  if (!text) return '';
  const div = document.createElement('div');
  div.textContent = text;
  return div.innerHTML;
}
</script>

@endsection
