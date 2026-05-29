<?php
   $insights = request()->is('/') ? config('home-bottom.insights', []) : [];
?>
<section class="blog-section bg_light_1 blogs-section">
   <div class="pd_top_80"></div>

   <div class="container">
      <div class="row">

       
  <div class="row align-items-end">
           <div class="col-lg-8">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">
                    <div class="before_title"><?php echo e($insights['label'] ?? 'Find Out Our'); ?></div>
                    <h2><?php echo e($insights['heading'] ?? 'Insights & Intelligence'); ?></h2>
                    <?php if(!empty($insights['subheading'])): ?>
                       <p class="home-insights__subheading"><?php echo e($insights['subheading']); ?></p>
                    <?php endif; ?>
                 </div>
              </div>
           </div>
           <div class="col-lg-4">
              <div class="theme_btn_all color_one text-md-end">
                 <a href="<?php echo e(url('blog/')); ?>" class="theme-btn one"><?php echo e($insights['cta'] ?? 'Explore All Insights'); ?></a>
                 <div class="pd_bottom_30"></div>
              </div>
           </div>

           <div class="pd_bottom_20"></div>
        </div>
         <!-- BLOG GRID -->
         <div class="col-lg-12">
            <div class="blog_post_section three_column news_wrapper_grid style_eight">
               <div class="grid_show_case grid_layout clearfix">

                  <?php $__empty_1 = true; $__currentLoopData = $latest_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                     <?php
                        $img = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/img/default-blog.jpg');
                        $imageAlt = $post['image_alt'] ?? strip_tags($post['title']['rendered'] ?? 'Blog post');
                        $category = $post['_embedded']['wp:term'][0][0]['name'] ?? 'General';
                     ?>

                     <div class="grid_box _card">
                        <div class="news_box style_eight">

                           <!-- IMAGE -->
                           <div class="image_box">
                              <img width="750" height="420"
                                   src="<?php echo e($img); ?>"
                                   class="img-fluid"
                                   alt="<?php echo e($imageAlt); ?>"
                                   loading="lazy">
                           </div>

                           <!-- CONTENT -->
                           <div class="content_box">

                              <div class="category">
                                 <a href="#" class="categories">
                                    <i class="icon-folder"></i> <?php echo e($category); ?>

                                 </a>
                              </div>

                              <h2 class="title">
                                 <a href="<?php echo e(url('blog/'.$post['slug'])); ?>" rel="bookmark">
                                    <?php echo e($post['title']['rendered']); ?>

                                 </a>
                              </h2>

                              <a href="<?php echo e(url('blog/'.$post['slug'])); ?>" class="link__go">
                                 Continue Reading <i class="icon-right-arrow-long"></i>
                              </a>

                           </div>

                        </div>
                     </div>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                     <div class="col-12 text-center">
                        <p>No blog posts available right now.</p>
                     </div>
                  <?php endif; ?>

               </div>
            </div>
         </div>

      </div>
   </div>

   <div class="pd_bottom_60"></div>
</section>
<?php if(request()->is('/')): ?>
<style>
   .home-insights__subheading {
      margin: 12px 0 0;
      max-width: 40rem;
      font-size: 1rem;
      line-height: 1.65;
      color: #555;
      font-weight: 400;
   }
</style>
<?php endif; ?><?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/layouts/common/sections/blogs.blade.php ENDPATH**/ ?>