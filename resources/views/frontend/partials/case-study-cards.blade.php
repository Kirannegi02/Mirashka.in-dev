<div class="row">

    @forelse($caseStudies as $case)

    <div class="col-lg-4 col-md-6 mb-4">

        <div class="card case-study-card h-100 border-0 shadow-sm">

            <!-- Featured Image -->
            <div class="case-img">
                <img 
                    src="{{ imageUrl($case->featured_image, 'admin_assets/img/default.png', 'case-study') }}"
                    alt="{{ $case->title }}"
                    class="img-fluid"
                    width="400"
                    height="260"
                    loading="lazy"
                />
            </div>

            <!-- Card Content -->
            <div class="card-body d-flex flex-column">

                <!-- Title -->
                <h5 class="card-title fw-bold">

                    {{ \Illuminate\Support\Str::limit($case->title,40) }}
                </h5>

                <!-- Short Description -->
                <p class="card-text text-muted">
                    {{ \Illuminate\Support\Str::limit($case->short_description,100) }}
                </p>

                <!-- Read More Button -->
                <div class="mt-auto">
                    <a href="{{ url('/case-study/'.$case->slug) }}" class="theme-btn one">
                        Read More →
                    </a>
                </div>

            </div>

        </div>

    </div>

    @empty

    <div class="col-12 text-center py-5">
        <h5>No Case Studies Found</h5>
    </div>

    @endforelse

</div>


<style>
    .case-study-card {
        transition: all 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
    }

    .case-study-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .case-img img {
        width: 100%;
        height: 230px;
        object-fit: cover;
    }
</style>