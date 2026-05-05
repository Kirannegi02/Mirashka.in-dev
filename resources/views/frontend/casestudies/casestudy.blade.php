@extends('frontend.layouts.app')


@section('content')

<div class="page_header_default style_one">
    <div class="parallax_cover">
        <img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">Case Studies</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<section class="case-study-section py-5">

    <div class="container">

        <div class="row mb-4">

            <div class="col-lg-4">

                <select id="industryFilter" class="form-control">

                    <option value="">All Industries</option>

                    @foreach($industries as $industry)

                    <option value="{{ $industry }}">
                        {{ $industry }}
                    </option>

                    @endforeach

                </select>

            </div>

        </div>


        <div class="row" id="caseStudyCards">

            @include('frontend.partials.case-study-cards')

        </div>

    </div>

</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $('#industryFilter').on('change', function() {

        let industry = $(this).val();

        $.ajax({

            url: "{{ url('/filter-case-studies') }}",

            type: "GET",

            data: {
                industry: industry
            },

            success: function(response) {

                $('#caseStudyCards').html(response);

            }

        })

    })
</script>




@endsection