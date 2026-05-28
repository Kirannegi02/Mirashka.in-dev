@php
    $video = $video ?? [];
    $storyline = $video['storyline'] ?? [];
    $industryThumbs = $industryThumbs ?? [];
    $videoHref = $video['ctas'][0]['href'] ?? '#';
    $consultHref = $video['ctas'][1]['href'] ?? '#industry-form';
    $heroBgPath = 'assets/frontend/img/from-discovery-to-dominance.webp';
    $heroBgFallbackPath = $video['image_fallback'] ?? 'assets/frontend/images/about/about-8.jpg';
    $mainThumbPath = $video['image'] ?? 'assets/frontend/img/industries/industries-video-thumbnail-mirashka-hr.webp';
    $mainThumbFallbackPath = $video['image_fallback'] ?? 'assets/frontend/images/about/about-8.jpg';
    $heroBg = asset($heroBgPath);
    $heroBgFallback = asset($heroBgFallbackPath);
    $mainThumb = asset($mainThumbPath);
    $mainThumbFallback = asset($mainThumbFallbackPath);
    $content = $video['content'] ?? '';
    $contentHtml = e($content);
    if (str_contains($content, 'Mirashka')) {
        $contentHtml = preg_replace('/Mirashka/', '<span class="industry-video-hero__highlight">Mirashka</span>', $contentHtml, 1);
    }
    $slides = [];
    foreach ($storyline as $i => $step) {
        $thumb = $industryThumbs[$i] ?? null;
        $slideImagePath = $thumb['image'] ?? $mainThumbPath;
        $slideFallbackPath = $thumb['image_fallback'] ?? $mainThumbFallbackPath;
        $slides[] = [
            'caption' => $step,
            'image' => asset($slideImagePath),
            'fallback' => asset($slideFallbackPath),
            'label' => $thumb['title'] ?? ('Step ' . ($i + 1)),
        ];
    }
    if ($slides === []) {
        $slides[] = [
            'caption' => $content,
            'image' => $mainThumb,
            'fallback' => $mainThumbFallback,
            'label' => 'Overview',
        ];
    }
    $slides = array_slice($slides, 0, 3);
@endphp

<style>
.industry-video-hero {
    position: relative;
    overflow: hidden;
    background: #fff;
    padding: 0 0 80px;
}

.industry-video-hero__bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 390px;
    background-color: transparent;
    background-size: cover;
    background-position: center 28%;
    background-repeat: no-repeat;
    filter: blur(3px);
    transform: scale(1.03);
    transform-origin: center;
}

.industry-video-hero__bg::after {
    content: "";
    position: absolute;
    inset: 0;
    background:
        radial-gradient(circle at 18% 35%, rgba(255, 255, 255, 0.04) 0%, transparent 42%),
        radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.04) 0%, transparent 40%),
        linear-gradient(135deg, rgba(0, 104, 71, 0.50) 0%, rgba(0, 78, 62, 0.44) 100%);
}

.industry-video-hero__inner {
    position: relative;
    z-index: 2;
    max-width: 980px;
    margin: 0 auto;
    padding: 42px 20px 54px;
    text-align: center;
}

.industry-video-hero__badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 9px 24px;
    border-radius: 8px;
    background: #ffffff;
    color: #006847;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 18px;
}

.industry-video-hero__title {
    color: #fff;
    font-size: clamp(34px, 4vw, 52px);
    line-height: 1.12;
    font-weight: 800;
    max-width: 900px;
    margin: 0 auto 16px;
    text-shadow: 0 3px 12px rgba(0,0,0,0.42);
}

.industry-video-hero__lead {
    max-width: 850px;
    margin: 0 auto;
    color: rgba(255,255,255,0.98);
    font-size: 20px;
    line-height: 1.8;
    font-weight: 500;
}

.industry-video-hero__highlight {
    display: inline-block;
    padding: 4px 10px;
    border-radius: 6px;
    background: #006847;
    color: #fff;
    font-weight: 800;
}

.industry-video-hero__shell {
    position: relative;
    z-index: 3;
    margin-top: -38px;
    background: transparent;
}

.industry-video-hero__shell::before {
    display: none;
}

.industry-video-hero__stage {
    position: relative;
    max-width: 1080px;
    margin: 0 auto;
}

.industry-video-hero__player {
    position: relative;
    max-width: 980px;
    margin: 0 auto;
    border-radius: 22px;
    overflow: hidden;
    background: #111827;
    border: 2px solid rgba(255,255,255,0.85);
    box-shadow: 0 28px 70px rgba(15, 23, 42, 0.22);
}

.industry-video-hero__player img {
    width: 100%;
    height: 460px;
    display: block;
    object-fit: cover;
    object-position: center;
}

.industry-video-hero__player::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        180deg,
        transparent 45%,
        rgba(0,0,0,0.58) 100%
    );
    pointer-events: none;
}

.industry-video-hero__play {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 78px;
    height: 78px;
    transform: translate(-50%, -50%);
    z-index: 4;
    border-radius: 50%;
    background: #006847;
    color: #fff;
    border: 5px solid #fff;
    box-shadow: 0 18px 40px rgba(0, 104, 71, 0.38);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
}

.industry-video-hero__play:hover {
    color: #fff;
    transform: translate(-50%, -50%) scale(1.06);
}

.industry-video-hero__caption {
    display: none;
}

.industry-video-hero__actions {
    margin-top: 36px;
    display: flex;
    justify-content: center;
    gap: 18px;
    flex-wrap: wrap;
}

.industry-video-hero__actions .theme-btn {
    min-width: 230px;
    height: 64px;
    border-radius: 8px !important;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 18px;
}

.industry-video-hero__actions .theme-btn.one {
    background: #006847 !important;
    border: 1px solid #006847 !important;
    color: #fff !important;
}

.industry-video-hero__actions .theme-btn.one:hover {
    background: #fff !important;
    color: #006847 !important;
}

@media (max-width: 991px) {
    .industry-video-hero__bg {
        height: 340px;
    }

    .industry-video-hero__shell {
        margin-top: -20px;
    }

    .industry-video-hero__player img {
        height: 360px;
    }
}

@media (max-width: 576px) {
    .industry-video-hero__shell {
        margin-top: -24px;
    }
    .industry-video-hero__title {
        font-size: 30px;
    }

    .industry-video-hero__lead {
        font-size: 16px;
    }

    .industry-video-hero__player img {
        height: 260px;
    }

    .industry-video-hero__play {
        width: 62px;
        height: 62px;
    }

}
</style>

<section class="industry-video-hero industry-video-hr" id="industry-video" data-video-slides='@json($slides)'>
    <div
        class="industry-video-hero__bg"
        style="background-image: url('{{ $heroBg }}');"
        role="presentation"
        aria-hidden="true"
    ></div>
    <div class="container industry-video-hero__inner">
        <span class="industry-video-hero__badge">{{ $video['label'] ?? 'Watch Industry HR in Action' }}</span>
        <h2 class="industry-video-hero__title">{{ $video['heading'] ?? '' }}</h2>
        <p class="industry-video-hero__lead">{!! $contentHtml !!}</p>
    </div>

    <div class="industry-video-hero__shell">
        <div class="container">
            <div class="industry-video-hero__stage">
                <div class="industry-video-hero__player">
                    <img
                        id="industry-video-main-img"
                        src="{{ $mainThumb }}"
                        data-fallback="{{ $mainThumbFallback }}"
                        onerror="this.onerror=null;this.src=this.dataset.fallback;"
                        alt="Industry HR in action"
                        loading="lazy"
                    >
                    <a href="{{ $videoHref }}" class="industry-video-hero__play lightbox-image" aria-label="Watch Industry HR video">
                        <i class="icon-play"></i>
                    </a>
                    <p class="industry-video-hero__caption" id="industry-video-caption"></p>
                </div>

            </div>

            <div class="industry-video-hero__actions">
                <a href="{{ $consultHref }}" class="theme-btn one">{{ $video['ctas'][1]['label'] ?? 'Book Industry HR Consultation' }}</a>
            </div>
        </div>
    </div>
</section>
