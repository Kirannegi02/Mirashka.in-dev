<div class="row">

@forelse($webinars as $webinar)

<div class="col-xl-4 col-lg-6 mb-4">

<div class="project_box style_two">

<div class="entry-thumbnail image position-relative">

<img src="{{ imageUrl($webinar->image) }}" alt="">

<div class="overlay">

@if($webinar->status == 'upcoming')
    <a href="#"><span class="fa fa-user-plus icon"></span></a>

@elseif($webinar->status == 'past')
    <a href="{{ url('webinars/'.$webinar->id) }}">
        <span class="fa fa-eye icon"></span>
    </a>

@else
    <span class="fa fa-ban icon"></span>
@endif

</div>

<div class="webinar-date">
    {{ \Carbon\Carbon::parse($webinar->start_date)->format('d M') }}
</div>

</div>

<div class="content_inner">

<h2>{{ $webinar->title }}</h2>

<p>{{ Str::limit($webinar->description, 80) }}</p>

@if($webinar->status == 'upcoming')
    <a href="#" class="btn btn-success">Register</a>

@elseif($webinar->status == 'past')
    <a href="{{ url('webinars/'.$webinar->id) }}" class="btn btn-primary">Read More</a>

@else
    <button class="btn btn-secondary" disabled>Cancelled</button>
@endif

</div>

</div>
</div>

@empty

<div class="col-12 text-center">
    <p>No webinars found</p>
</div>

@endforelse

</div>
<script>
document.querySelectorAll('.webinar-tabs li').forEach(tab => {

    tab.addEventListener('click', function() {

        // active class
        document.querySelectorAll('.webinar-tabs li').forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        let status = this.getAttribute('data-status');

        // loading state
        document.getElementById('webinar-data').innerHTML = "Loading...";

        fetch(`/webinars/filter/${status}`)
            .then(res => res.text())
            .then(data => {
                document.getElementById('webinar-data').innerHTML = data;
            });

    });

});
</script>