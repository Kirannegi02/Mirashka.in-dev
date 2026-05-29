<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($data['title'] ?? 'Mirashka'); ?></title>
    <meta name="title" content="<?php echo e($data['title'] ?? ''); ?>">
    <meta name="description" content="<?php echo e($data['description'] ?? ''); ?>">
    <meta name="keywords" content="<?php echo e($data['keywords'] ?? ''); ?>">
    
    
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('assets/img/favicon.png')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>">
    
    
    <style>
        body {
            visibility: hidden;
            opacity: 0;
        }
        body.loaded {
            visibility: visible;
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }
        /* Auth pages: hide global header/footer + nested body/page wrappers */
        body.auth-page { overflow: hidden !important; height: 100vh !important; margin: 0 !important; padding: 0 !important; }
        body.auth-page .site { display: none !important; }
        body.auth-page .header, body.auth-page .footer, body.auth-page .blogs-section, body.auth-page .newsletter-section { display: none !important; }
        body.auth-page main.main-auth { padding: 0 !important; margin: 0 !important; width: 100% !important; max-width: 100% !important; height: 100vh !important; display: flex !important; align-items: center !important; justify-content: center !important; overflow: hidden !important; }
        body.auth-page #content, body.auth-page .site-content { width: 100% !important; max-width: 100% !important; padding: 0 !important; margin: 0 !important; height: 100% !important; display: flex !important; align-items: center !important; justify-content: center !important; }
        /* Hide the nested body + page/wrapper divs from header include */
        body.auth-page #page, body.auth-page #wrapper_full, body.auth-page .content_all_warpper, body.auth-page .page_wapper { display: none !important; }

        body:not(.auth-page) .header_area {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 9999;
            background: #ffffff;
            box-shadow: 0 2px 14px rgba(15, 23, 42, 0.08);
        }
        body:not(.auth-page) .header_area .main-header {
            background: #ffffff;
        }
        body:not(.auth-page) main {
            padding-top: var(--mirashka-header-offset, 132px);
        }
        body:not(.auth-page) .dropdown-menu.mega-border {
            z-index: 10000;
        }
        @media (max-width: 991.98px) {
            body:not(.auth-page) main {
                padding-top: var(--mirashka-header-offset, 72px);
            }
        }

        .title-before {
    background: #006039;
    color: #fff;
    width: fit-content;
    margin: auto;
    padding: 2px 15px;
    border-radius: 5px;
    font-size: 17px;
}
.middle {
   width: 190px;
   border-bottom: 1px solid #d4d4d4;
   text-align: center;
   display: inline-block;
   position: relative;
    margin-bottom: 10px;   
}
.middle::after {
    width: 70px;
    content: '';
    border-bottom: 4px solid #006039;
    position: absolute;
    top: -2px;
    left: 59px;
    border-radius: 20px;
}
.middle.left::after {
    left: 0 !important;
}

.middle.whitte::after {
  border-bottom: 4px solid #ffffff;
}
    </style>
    
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/responsive.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/pawan.css')); ?>">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/owl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/jquery.fancybox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/flexslider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/scss/elements/theme-css.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/vj.css')); ?>">
    <?php if (isset($component)) { $__componentOriginal38911123848a7a173ba3df67e89ccbb8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38911123848a7a173ba3df67e89ccbb8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.mirashka-fonts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('mirashka-fonts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38911123848a7a173ba3df67e89ccbb8)): ?>
<?php $attributes = $__attributesOriginal38911123848a7a173ba3df67e89ccbb8; ?>
<?php unset($__attributesOriginal38911123848a7a173ba3df67e89ccbb8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38911123848a7a173ba3df67e89ccbb8)): ?>
<?php $component = $__componentOriginal38911123848a7a173ba3df67e89ccbb8; ?>
<?php unset($__componentOriginal38911123848a7a173ba3df67e89ccbb8); ?>
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/mirashka-fonts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/scss/elements/color-switcher/color.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
        <style type="text/css">
.page_header_default .parallax_cover {
    min-height: 100%;
}
.page_header_default::before {
    background: #000000a3;
}
    </style>
</head>

<body class="<?php echo e(request()->is('client-portal-login*') ? 'auth-page' : ''); ?><?php echo e(request()->is('/') ? ' page-home' : ''); ?>">
    
    <?php echo $__env->make('components.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $isAuth = request()->is('client-portal-login*'); ?>

    <?php echo $__env->renderWhen(!$isAuth, 'frontend.layouts.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

    <main class="<?php echo e($isAuth ? 'main-auth' : ''); ?>">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php if(!$isAuth): ?>
        <?php echo $__env->make('frontend.layouts.common.sections.blogs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('frontend.layouts.common.footer-cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('frontend.layouts.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    
    <script src="<?php echo e(asset('assets/frontend/js/jquery-3.6.0.min.js')); ?>" defer></script>
    
    
    <script src="<?php echo e(asset('assets/frontend/js/bootstrap.min.js')); ?>" defer></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js" defer></script>
    
    
    <script src="<?php echo e(asset('assets/frontend/js/jquery.fancybox.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/jQuery.style.switcher.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/jquery.flexslider-min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/isotope.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/jquery.countTo.js')); ?>" defer></script>
    
    
    <script src="<?php echo e(asset('assets/frontend/js/color-scheme.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/owl.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/swiper.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/countdown.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/simpleParallax.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/appear.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/sharer.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/validation.js')); ?>" defer></script>
    
    
    <script src="<?php echo e(asset('assets/frontend/js/toast-notify.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/map-helper.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/creote-extension.js')); ?>" defer></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js" defer></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Contact form handler with timeout
        document.querySelectorAll('.contactForm').forEach(function(form) {
            if (form.dataset.bound === "true") return;
            form.dataset.bound = "true";

            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                const submitBtn = form.querySelector('.submitBtn');
                const originalText = submitBtn ? submitBtn.innerHTML : 'Submitting...';

                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';
                }

                try {
                    const controller = new AbortController();
                    const timeoutId = setTimeout(() => controller.abort(), 30000);

                    const response = await fetch("<?php echo e(route('contact.submit')); ?>", {
                        method: 'POST',
                        body: new FormData(form),
                        headers: {
                            'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        },
                        signal: controller.signal
                    });
                    clearTimeout(timeoutId);

                    const data = await response.json();

                    if (!response.ok) {
                        if (response.status === 422) {
                            const errors = Object.values(data.errors).flat().join('<br>');
                            notify('error', errors);
                        } else {
                            notify('error', data.message || 'Submission failed.');
                        }
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalText;
                        }
                        return;
                    }

                    if (data.success) {
                        notify('success', 'Thank you! We will contact you soon.');
                        setTimeout(function() {
                            window.location.href = data.redirect || '/thank-you';
                        }, 1500);
                    }
                } catch (err) {
                    notify('error', err.name === 'AbortError' ? 'Request timed out. Please try again.' : 'Network error. Please check your connection.');
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }
                }
            });
        });

        // Webinar registration handler
        const webinarForm = document.getElementById('webinarRegistrationForm');
        if (webinarForm) {
            webinarForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                const submitBtn = document.getElementById('webinarSubmitBtn');
                const spinner = document.getElementById('webinarSpinner');
                submitBtn.disabled = true;
                spinner.classList.remove('d-none');

                try {
                    const controller = new AbortController();
                    const timeoutId = setTimeout(() => controller.abort(), 10000);

                    const response = await fetch("<?php echo e(route('webinar.register')); ?>", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        },
                        body: new FormData(webinarForm),
                        signal: controller.signal
                    });
                    clearTimeout(timeoutId);

                    const data = await response.json();

                    if (data.success) {
                        document.getElementById('webinarModalAlert').className = 'alert alert-success';
                        document.getElementById('webinarModalAlert').textContent = data.message;
                        document.getElementById('webinarModalAlert').classList.remove('d-none');
                        notify('success', data.message);
                        setTimeout(function() {
                            bootstrap.Modal.getInstance(document.getElementById('webinarRegisterModal')).hide();
                            webinarForm.reset();
                        }, 2000);
                    } else {
                        document.getElementById('webinarModalAlert').className = 'alert alert-danger';
                        document.getElementById('webinarModalAlert').textContent = data.message;
                        document.getElementById('webinarModalAlert').classList.remove('d-none');
                        notify('error', data.message);
                    }
                } catch (err) {
                    notify('error', err.name === 'AbortError' ? 'Request timed out.' : 'Network error. Please try again.');
                } finally {
                    submitBtn.disabled = false;
                    spinner.classList.add('d-none');
                }
            });
        }
    });
    </script>

    
    <div class="modal fade" id="webinarRegisterModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <h4 class="modal-title" id="webinarModalTitle">Register for Webinar</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div id="webinarModalAlert" class="alert d-none"></div>
                    <form id="webinarRegistrationForm">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="webinar_id" id="webinar_id">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" required placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" required placeholder="john@example.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" class="form-control" required placeholder="+91 98765 43210">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Company</label>
                                <input type="text" name="company" class="form-control" placeholder="Your Company">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Job Title</label>
                                <input type="text" name="job_title" class="form-control" placeholder="CEO, Manager, etc.">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Industry</label>
                                <select name="industry" class="form-select">
                                    <option value="">Select Industry</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Education">Education</option>
                                    <option value="Media">Media</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="consent" id="consent" required>
                                    <label class="form-check-label" for="consent">
                                        I agree to receive updates about this webinar.
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary w-100" id="webinarSubmitBtn">
                                    <span class="spinner-border spinner-border-sm me-2 d-none" id="webinarSpinner"></span>
                                    Register Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const registerModal = document.getElementById('webinarRegisterModal');
        if (registerModal) {
            registerModal.addEventListener('show.bs.modal', function(e) {
                const btn = e.relatedTarget;
                if (btn) {
                    const webinarId = btn.dataset.seminarId;
                    const webinarTitle = btn.dataset.seminarTitle || 'Register for Webinar';
                    document.getElementById('webinar_id').value = webinarId || '';
                    document.getElementById('webinarModalTitle').textContent = webinarTitle;
                }
                document.getElementById('webinarRegistrationForm').reset();
                document.getElementById('webinarModalAlert').classList.add('d-none');
            });
        }
    });
    </script>
    
    
    <script>
        function setStickyHeaderOffset() {
            if (document.body.classList.contains('auth-page')) return;
            var header = document.getElementById('header_contents');
            if (!header) return;
            document.documentElement.style.setProperty(
                '--mirashka-header-offset',
                header.offsetHeight + 'px'
            );
        }
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
            setStickyHeaderOffset();
        });
        window.addEventListener('resize', setStickyHeaderOffset);
        document.addEventListener('DOMContentLoaded', setStickyHeaderOffset);
    </script>
</body>

</html>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>