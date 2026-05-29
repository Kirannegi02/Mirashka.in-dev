  <style>
    .banner-wrapper1 {
      position: relative;
      overflow: hidden;
    }

    .banner-slide {
      display: none;
      width: 100%;
      height: 480px;
      position: relative;
      overflow: hidden;
    }

    .banner-slide.active {
      display: flex;
      align-items: center;
    }

    .slide-content1 {
      position: relative;
      z-index: 2;
      padding: 0 70px;
      max-width: 650px;
      animation: slideIn 0.6s ease forwards;
    }

    @keyframes slideIn {
      from { opacity: 0; transform: translateX(-30px); }
      to   { opacity: 1; transform: translateX(0); }
    }

    .slide-title {
      font-weight: 800;
      line-height: 1.05;
      color: #fff;
      margin-bottom: 10px;
    }

    .slide-title span {
      color: #e1a300;
    }

    .slide-desc {
      font-size: 14px;
      color: #fff;
      line-height: 1.65;
      max-width: 420px;
      margin-bottom: 28px;
    }

    /* Badge/logo */
    .slide-badge {
      position: absolute;
      right: 25px;
      top: 84%;
      transform: translateY(-50%);
      z-index: 3;
      text-align: center;
    }
    .badge-box {
        width: 100px;
        height: 100px;
        border: 2px solid var(--tg-theme-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: var(--tg-theme-primary);
        font-size: 10px;
        font-weight: 400;
        letter-spacing: 1px;
        text-align: center;
        line-height: 1.2;
        animation: rotateBadge 8s linear infinite;
        background: #fff;
    }
    @keyframes rotateBadge {
      from { transform: rotate(0deg); }
      to   { transform: rotate(360deg); }
    }
    .badge-box .dd-logo {
      animation: counterRotate 8s linear infinite;
    }
    @keyframes counterRotate {
      from { transform: rotate(0deg); }
      to   { transform: rotate(-360deg); }
    }

    /* Progress bar */
    .progress-bar-container {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: rgba(255,255,255,0.1);
      z-index: 10;
    }
    .progress-bar-fill {
      height: 100%;
      background: #e1a300;
      width: 0%;
      transition: width linear;
    }

    /* ===== TAB NAV ===== */
    .tab-nav-wrapper {
      background: #111;
    }

    .tab-nav {
      display: flex;
      overflow-x: auto;
      scrollbar-width: none;
    }
    .tab-nav::-webkit-scrollbar { display: none; }

    .tab-btn {
      flex: 1;
      padding: 25px;
      background: transparent;
      border: none;
      border-bottom: 3px solid transparent;
      color: rgba(255,255,255,0.90);
      font-size: 15px;
      font-weight: 600;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      cursor: pointer;
      transition: all 0.25s;
      position: relative;
      white-space: nowrap;
    }

    .tab-btn:hover {
      color: rgba(255,255,255,0.8);
      background: rgba(255,255,255,0.03);
    }

    .tab-btn.active {
      color: #fff;
      border-color: var(--tg-theme-primary);
    }

    .tab-btn .tab-num {
      display: block;
      font-size: 10px;
      color: #e1a300;
      letter-spacing: 2px;
      margin-bottom: 3px;
    }
    .tab-btn .tab-num {
        display: block;
        font-size: 10px;
        color: #fff;
        letter-spacing: 2px;
        background: #e1a300;
        width: 26px;
        border-radius: 5px;
        margin: auto;
        margin-bottom: 3px;
        line-height: 2;
    }

    /* Timer dots */
    .tab-btn.active::after {
      content: '';
      position: absolute;
      bottom: -3px;
      left: 0;
      height: 3px;
      background: #e1a300;
      width: 100%;
      animation: tabTimer 5s linear forwards;
    }

    @keyframes tabTimer {
      from { width: 0%; }
      to   { width: 100%; }
    }

    @media (max-width: 768px) {
      .slide-content1 {
          padding: 0 25px;
      }
    }

    #tabNav button {
        background-size: cover;
        background-position: center;
    }
  </style>
</head>
<body>

<div class="banner-wrapper1">

  <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="banner-slide slide-<?php echo e($key+1); ?> <?php echo e($key==0 ? 'active' : ''); ?>" id="slide-<?php echo e($key+1); ?>" style="background: linear-gradient(115deg, #0a0a0aab 32%, transparent 42%), url('<?php echo e(imageUrl($banner->image)); ?>') center/cover no-repeat">
    <div class="slide-content1">
      <p class="gold textbg mb-4"><?php echo e($banner->sub_heading); ?></p>
      <h1 class="slide-title"><?php echo e($banner->title); ?></h1>
      <div class="middle left"></div>
      <p class="slide-desc"><?php echo e($banner->description); ?></p>
      <?php if($banner->button_link): ?>
      <div class="theme_btn_all color_one">
        <a href="<?php echo e($banner->button_link); ?>" class="theme-btn one"><?php echo e($banner->button_text ?? 'Our Service'); ?></a>
      </div>
      <?php endif; ?>
    </div>
    <div class="slide-badge">
      <div class="badge-box">
        <span class="dd-logo"><img src="<?php echo e(asset('assets/img/favicon.png')); ?>" width="40"></span>
        HR AS A<br> SERVICE
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <!-- Progress Bar -->
  <div class="progress-bar-container">
    <div class="progress-bar-fill" id="progressBar"></div>
  </div>
</div>

<?php
$labels = [
    'P — Protect',
    'U — Unify',
    'L — Lead',
    'S — Source',
    'E — Empower'
];
?>
<div class="tab-nav-wrapper">
  <div class="tab-nav" id="tabNav">
    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <button class="tab-btn <?php echo e($key==0 ? 'active' : ''); ?>" data-slide="<?php echo e($key+1); ?>" onclick="goToSlide(<?php echo e($key+1); ?>)" style="background-image: linear-gradient(90deg, #0000009c, #0a0a0a30), url('<?php echo e(imageUrl($banner->image)); ?>'); border-right: 1px solid #fff;">
      <span class="tab-num">0<?php echo e($key+1); ?></span>
      <?php echo e($labels[$key] ?? ''); ?>

    </button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
  </div>
</div>

<script>
  const INTERVAL = 5000;
  let currentSlide = 1;
  let timer = null;
  let progressTimer = null;

  function goToSlide(n) {
    document.querySelectorAll('.banner-slide').forEach(s => s.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));

    document.getElementById('slide-' + n).classList.add('active');
    document.querySelector('[data-slide="' + n + '"]').classList.add('active');

    currentSlide = n;

    clearInterval(timer);
    startProgress();
    timer = setInterval(nextSlide, INTERVAL);
  }

  function nextSlide() {
    let next = currentSlide >= 4 ? 1 : currentSlide + 1;
    goToSlide(next);
  }

  function startProgress() {
    const bar = document.getElementById('progressBar');
    bar.style.transition = 'none';
    bar.style.width = '0%';
    setTimeout(() => {
      bar.style.transition = `width ${INTERVAL}ms linear`;
      bar.style.width = '100%';
    }, 30);
  }

  startProgress();
  timer = setInterval(nextSlide, INTERVAL);
</script>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/pages/home-sections/homeBanner.blade.php ENDPATH**/ ?>