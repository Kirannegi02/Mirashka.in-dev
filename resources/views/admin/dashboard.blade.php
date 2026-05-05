@extends('admin.layouts.app')


@section('title', 'Dashboard Page')

@section('content')

  <div class="contents">

    <div class="crm demo6 mb-25">
      <div class="container-fluid">
        <div class="row ">
          <!-- <div class="col-lg-12">

            <div class="breadcrumb-main">

              <div class="breadcrumb-action justify-content-center flex-wrap">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Demo 6</li>
                  </ol>
                </nav>
              </div>
            </div>

          </div> -->
          <div class="row g-4">

            <!-- Card Template -->
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden hover-scale">
                <div class="card-body d-flex flex-column justify-content-between">

                  <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                           <h2 class="fw-bold count">{{ $enquiryCount }}</h2>
                      <p class="text-muted mb-0">Enquiry Recieved</p>
                    </div>
                    <div class="icon-circle bg-warning text-white shadow-sm">
                      <i class="uil uil-file-alt fs-3"></i>
                    </div>
                  </div>

                  <a href="{{ route('admin.mainform.index') }}" class="btn btn-primary btn-sm w-100">
                    <i class="las la-eye me-1"></i> View All
                  </a>
                </div>
              </div>
            </div>
             <!-- Case study -->
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden hover-scale">
                <div class="card-body d-flex flex-column justify-content-between">

                  <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                           <h2 class="fw-bold count">{{ $casestudiesCount }}</h2>
                      <p class="text-muted mb-0">Case Study</p>
                    </div>
                    <div class="icon-circle bg-warning text-white shadow-sm">
                      <i class="uil uil-file-alt fs-3"></i>
                    </div>
                  </div>

                  <a href="{{ route('admin.casestudies.index') }}" class="btn btn-primary btn-sm w-100">
                    <i class="las la-eye me-1"></i> View All
                  </a>
                </div>
              </div>
            </div>
            <!-- Podcasts -->
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden hover-scale">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                           <h2 class="fw-bold count">{{ $podcastsCount }}</h2>
                      <p class="text-muted mb-0">Podcasts</p>
                    </div>
                    <div class="icon-circle bg-primary text-white shadow-sm">
                      <i class="uil uil-volume-up fs-3"></i>
                    </div>
                  </div>
                  <a href="{{ route('admin.podcasts.index') }}" class="btn btn-primary btn-sm w-100">
                    <i class="las la-eye me-1"></i> View All
                  </a>
                </div>
              </div>
            </div>

            <!-- Webinars -->
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden hover-scale">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                      <h2 class="fw-bold count">{{ $webinarsCount }}</h2>
                      <p class="text-muted mb-0">Webinars</p>
                    </div>
                    <div class="icon-circle bg-info text-white shadow-sm">
                      <i class="uil uil-video fs-3"></i>
                    </div>
                  </div>
                  <a href="{{ route('admin.webinars.index') }}" class="btn btn-primary btn-sm w-100">
                    <i class="las la-eye me-1"></i> View All
                  </a>
                </div>
              </div>
            </div>

              <!-- Team -->
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden hover-scale">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                      <h2 class="fw-bold count">{{ $teamCount  }}</h2>
                      <p class="text-muted mb-0">Teams</p>
                    </div>
                    <div class="icon-circle bg-info text-white shadow-sm">
                      <i class="uil uil-video fs-3"></i>
                    </div>
                  </div>
                  <a href="{{ route('admin.teams.index') }}" class="btn btn-primary btn-sm w-100">
                    <i class="las la-eye me-1"></i> View All
                  </a>
                </div>
              </div>
            </div>

            <!-- Webinar Registrations -->
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden hover-scale">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                      <h2 class="fw-bold count">{{ $webinarRegistrationsCount ?? 0 }}</h2>
                      <p class="text-muted mb-0">Webinar Registrations</p>
                    </div>
                    <div class="icon-circle bg-success text-white shadow-sm">
                      <i class="uil uil-users-alt fs-3"></i>
                    </div>
                  </div>
                  <a href="{{ route('admin.webinars.index') }}" class="btn btn-primary btn-sm w-100">
                    <i class="las la-eye me-1"></i> View All
                  </a>
                </div>
              </div>
            </div>

            <!-- Case Studies -->
            <!-- <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden hover-scale">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                      <h2 class="fw-bold count">56</h2>
                      <p class="text-muted mb-0">Case Studies</p>
                    </div>
                    <div class="icon-circle bg-secondary text-white shadow-sm">
                      <i class="uil uil-book-alt fs-3"></i>
                    </div>
                  </div>
                  <a href="#" class="btn btn-primary btn-sm w-100">
                    <i class="las la-eye me-1"></i> View All
                  </a>
                </div>
              </div>
            </div> -->

            <!-- Glossary -->
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden hover-scale">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h2 class="fw-bold count">{{ $bannersCount }}</h2>
                      <p class="text-muted mb-0">Main Banner</p>
                    </div>
                    <div class="icon-circle bg-danger text-white shadow-sm">
                      <i class="uil uil-book-reader fs-3"></i>
                    </div>
                  </div>
                  <a href="{{ route('admin.banners.index') }}" class="btn btn-primary btn-sm w-100">
                    <i class="las la-eye me-1"></i> View All
                  </a>
                </div>
              </div>
            </div>

          </div>

          <!-- Styles -->
          <style>
            .card.hover-scale:hover {
              transform: translateY(-8px);
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            }

            .icon-circle {
              width: 55px;
              height: 55px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 50%;
              transition: transform 0.3s ease;
            }

            .icon-circle:hover {
              transform: scale(1.2);
            }
          </style>





        </div>
        <!-- ends: .row -->
      </div>
    </div>


  </div>

@endsection