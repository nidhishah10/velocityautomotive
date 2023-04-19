<?php if (is_page_template(array('page-templates/template-home.php', 'page-templates/template-about-us.php', 'page-templates/template-window-stickers.php', 'page-templates/template-integrations.php', 'page-templates/template-velocityrecon.php', 'page-templates/template-velocityengage.php', 'page-templates/template-resources.php', 'page-templates/template-blog.php'))): ?>
<!-- Contact Temp -->

        <section class="p-t-130 p-b-100 background-grey ">

            <div class="container">

                <div class="row">

                    <div class="col-lg-5 m-b-30">
                        <?php $get_in_touch_title = get_field('get_in_touch_title', 'option');?>
                        <?php if (isset($get_in_touch_title) && !empty($get_in_touch_title)): ?>
                        <h2 class="m-b-0"><?php echo $get_in_touch_title; ?></h2>
                        <?php endif;?>

                        <?php $address1 = get_field('address1', 'option');?>
                        <?php if (isset($address1) && !empty($address1)): ?>
                        <p class="lead"><?php echo $address1; ?></p>
                        <?php endif;?>
                    </div>



                    <div class="col-lg-4 m-b-40">
                        <?php $contact_box = get_field('contact_box', 'option');?>
                        <?php foreach ($contact_box as $key => $contact_box) {?>
                       <strong><?php echo $contact_box['title']; ?></strong> <a style="text-decoration:none; color:#3F4444;" href="<?php echo $contact_box['contact_url']; ?>"><?php echo $contact_box['contact_number']; ?></a> <br>
                         <?php }?>
                    </div>



                    <div class="col-lg-3">
                        <?php $social_title = get_field('social_title', 'option');?>
                        <?php if (isset($social_title) && !empty($social_title)): ?>
                       <h4><?php echo $social_title; ?></h4>
                       <?php endif;?>

                       <div class="social-icons social-icons-light social-icons-colored-hover">

                           <ul>
 <?php $social_icon_box = get_field('social_icon_box', 'option');?>
                        <?php foreach ($social_icon_box as $key => $social_icon_box) {?>
                               <li class="<?php echo $social_icon_box['icon_class']; ?>"><a target="_blank" href="<?php echo $social_icon_box['social_icon_img']; ?>"><i class="<?php echo $social_icon_box['icon1_class']; ?>"></i></a></li>
                               <?php }?>
                           </ul>


                       </div>

                    </div>



                </div>

            </div>

        </section>

        <!-- end: Contact Temp-->
        <?php endif;?>

        <?php if (is_page_template(array('page-templates/template-success-stories.php', 'page-templates/template-products.php'))): ?>
<!-- Contact Temp -->

        <section class="p-t-130 p-b-100 background-white ">

            <div class="container">

                <div class="row">

                    <div class="col-lg-5 m-b-30">
                        <?php $get_in_touch_title = get_field('get_in_touch_title', 'option');?>
                        <?php if (isset($get_in_touch_title) && !empty($get_in_touch_title)): ?>
                        <h2 class="m-b-0"><?php echo $get_in_touch_title; ?></h2>
                        <?php endif;?>

                        <?php $address1 = get_field('address1', 'option');?>
                        <?php if (isset($address1) && !empty($address1)): ?>
                        <p class="lead"><?php echo $address1; ?></p>
                        <?php endif;?>
                    </div>



                    <div class="col-lg-4 m-b-40">
                        <?php $contact_box = get_field('contact_box', 'option');?>
                        <?php foreach ($contact_box as $key => $contact_box) {?>
                       <strong><?php echo $contact_box['title']; ?></strong> <a style="text-decoration:none; color:#3F4444;" href="<?php echo $contact_box['contact_url']; ?>"><?php echo $contact_box['contact_number']; ?></a> <br>
                         <?php }?>
                    </div>



                    <div class="col-lg-3">
                        <?php $social_title = get_field('social_title', 'option');?>
                        <?php if (isset($social_title) && !empty($social_title)): ?>
                       <h4><?php echo $social_title; ?></h4>
                       <?php endif;?>

                       <div class="social-icons social-icons-light social-icons-colored-hover">

                           <ul>
 <?php $social_icon_box = get_field('social_icon_box', 'option');?>
                        <?php foreach ($social_icon_box as $key => $social_icon_box) {?>
                               <li class="<?php echo $social_icon_box['icon_class']; ?>"><a target="_blank" href="<?php echo $social_icon_box['social_icon_img']; ?>"><i class="<?php echo $social_icon_box['icon1_class']; ?>"></i></a></li>
                               <?php }?>
                           </ul>


                       </div>

                    </div>



                </div>

            </div>

        </section>

        <!-- end: Contact Temp-->
        <?php endif;?>


        <!-- Footer -->

        <footer id="footer" class="inverted">

            <div class="footer-content">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-5">
                        <?php $footer_content = get_field('footer_content', 'option');?>
                        <?php if (isset($footer_content) && !empty($footer_content)): ?>
                        <?php echo $footer_content; ?>

                            <?php endif;?>

                        </div>

                        <div class="col-lg-7">

                            <div class="row">

                                <div class="col-lg-3">

                                    <div class="widget">

                                        <a href="http://64.4.160.99/velocityautomotive/products/"><div class="widget-title">Products</div></a>

                                        <?php
if (has_nav_menu('footer-menu')):
	wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => '', 'container_class' => '', 'items_wrap' => '<ul>%3$s</ul>'));
endif;
?>

                                    </div>

                                </div>

                                <div class="col-lg-3">

                                    <div class="widget">

                                        <a href="http://64.4.160.99/velocityautomotive/resources/"><div class="widget-title">Resources</div></a>

                                       <?php
if (has_nav_menu('resources')):
	wp_nav_menu(array('theme_location' => 'resources', 'container' => '', 'container_class' => '', 'items_wrap' => '<ul>%3$s</ul>'));
endif;
?>

                                    </div>

                                </div>

                                <div class="col-lg-3">

                                    <div class="widget">

                                        <a href="http://64.4.160.99/velocityautomotive/about/"><div class="widget-title">About</div></a>

                                        <?php
if (has_nav_menu('about')):
	wp_nav_menu(array('theme_location' => 'about', 'container' => '', 'container_class' => '', 'items_wrap' => '<ul>%3$s</ul>'));
endif;
?>

                                    </div>

                                </div>

                                <div class="col-lg-3">

                                    <div class="widget">

                                        <a href="http://64.4.160.99/velocityautomotive/contact/"><div class="widget-title">Contact</div></a>

                                                                               <?php
if (has_nav_menu('contact')):
	wp_nav_menu(array('theme_location' => 'contact', 'container' => '', 'container_class' => '', 'items_wrap' => '<ul>%3$s</ul>'));
endif;
?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="copyright-content">

                <div class="container">
                    <?php $copy_right = get_field('copy_right', 'option');?>
                    <?php $copy_right_title = get_field('copy_right_title', 'option');?>
                    <?php $copy_right_url = get_field('copy_right_url', 'option');?>

                    <div class="copyright-text text-center footer-copyright"><?php echo $copy_right; ?>
<a href="<?php echo $copy_right_url; ?>"><?php echo $copy_right_title; ?></a></div>


                </div>

            </div>

        </footer>

        <!-- end: Footer -->

    </div>

    <!-- end: Body Inner -->

<!--     <script  type="text/javascript" src="http://64.4.160.99/velocityautomotive/wp-content/themes/velocityautomotive/js/jquery.js"></script>

    <script type="text/javascript" src="http://64.4.160.99/velocityautomotive/wp-content/themes/velocityautomotive/js/plugins.js"></script> -->

    <!--Template functions-->

    <!-- <script type="text/javascript" src="http://64.4.160.99/velocityautomotive/wp-content/themes/velocityautomotive/js/functions.js"></script> -->

    <script type="text/javascript">

    _linkedin_partner_id = "3159474";

    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];

    window._linkedin_data_partner_ids.push(_linkedin_partner_id);

    </script><script type="text/javascript">

    (function(l) {

    if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};

    window.lintrk.q=[]}

    var s = document.getElementsByTagName("script")[0];

    var b = document.createElement("script");

    b.type = "text/javascript";b.async = true;

    //b.src = https://snap.licdn.com/li.lms-analytics/insight.min.js;

    s.parentNode.insertBefore(b, s);})(window.lintrk);

    </script>

   

    <noscript>

    <img height="1" width="1" style="display:none;" alt="" src=https://px.ads.linkedin.com/collect/?pid=3159474&fmt=gif />

    </noscript>
    <noscript>

        <img src=https://ws.zoominfo.com/pixel/627c14cc3ef5dc0012eea313 width="1" height="1" style="display: none;" alt="websights"/>
              </noscript>

              <?php wp_footer();?>

            
</body>



</html>