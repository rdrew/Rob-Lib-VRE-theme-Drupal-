<div<?php print $attributes; ?>>
 

  <header class="l-header" role="banner">
    <div class="user-wrapper">
      <div class="user-container limiter">  
       <?php if ($page['user_first'] || $page['user_second']): ?>
        <?php print render($page['user_first']); ?>
        <?php print render($page['user_second']); ?> 
        <?php endif; ?>
      </div> <!-- /user-container limiter -->
    </div> <!-- /user-wrapper -->
   
   
      <div class="branding-wrapper">
        <div class="branding-container limiter">
          <?php if ($logo): ?>
           <div class="l-branding">
           
          <div class="header-logo"> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
              </div><?php endif; ?>
          
             <?php if ($site_name || $site_slogan): ?>
              <?php if ($site_name): ?>
              <div class="site-name">
                <h1 class="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
              </div>
              <?php endif; ?>
          
              <?php if ($site_slogan): ?>
              <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
            <?php endif; ?>
          <?php endif; ?>
          <?php print render($page['branding']); ?>
         </div><!-- /branding-->
        </div><!-- /container-->
      </div><!-- /wrapper-->
   
    

   
    <div class="header-wrapper">
      <div class="header-container limiter">
        <?php if ($page['header'] || $page['header_second'] || $page['header_third']): ?>
            <?php print render($page['header']); ?>
            <?php print render($page['header_second']); ?>
            <?php print render($page['header_third']); ?>
        <?php endif; ?></div>
    </div>
    
    
  </header>



   <div class="navigation-container limiter"> 
    <?php print render($page['navigation']); ?>
       <?php if ($page['navigation_first'] || $page['navigation_second']): ?>
             <?php if ($page['navigation_first']): ?>
               <?php print render($page['navigation_first']); ?>
             <?php endif; ?>
             <?php if ($page['navigation_second']): ?>
               <?php print render($page['navigation_second']); ?>
             <?php endif; ?>
       <?php endif; ?></div>


  <div class="feature-wrapper">
    <div class="feature-container limiter">
      <?php if ($page['feature']): ?>
        <section id="feature" class="clearfix">
                <?php print render($page['feature']); ?>
        </section>
      <?php endif; ?>
    </div>
  </div>


  <div class="l-main">

    <div class="preface-wrapper">
      <div class="preface-container limiter">
        <?php if ($page['preface_first'] || $page['preface_second'] || $page['preface_third']): ?>
                <?php print render($page['preface_first']); ?>
                <?php print render($page['preface_second']); ?>
                <?php print render($page['preface_third']); ?>
        <?php endif; ?>
      </div>
    </div>


    <div class="content-wrapper">
      <div class="content-container limiter">
        <div class="l-content" role="main">
          <?php print render($page['highlighted']); ?>
          <?php print $breadcrumb; ?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php print render($tabs); ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>
        </div>
        
        <?php print render($page['sidebar_first']); ?>
        <?php print render($page['sidebar_second']); ?>
          </div>
      </div>
    </div>

  <div id="page-footer"></div>
</div> <!-- /page -->



<footer>

  <div class="footer-wrapper">
    <div class="footer-container limiter">
      <div class="l-footer" role="contentinfo">
        <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
        <?php print render($page['footer_first']); ?>
        <?php print render($page['footer_second']); ?>
        <?php print render($page['footer_third']); ?>
        <?php print render($page['footer_fourth']); ?>
        <?php print render($page['footer_fifth']); ?>
        <?php endif; ?>
      </div> 
    </div> 
  </div>
  
  <div class="subfooter-wrapper">
    <div class="subfooter-container limiter">
      <div class="l-subfooter" role="contentinfo">
          <?php if ($page['subfooter_first'] || $page['subfooter_second']): ?>
          <?php print render($page['subfooter_first']); ?>
          <?php print render($page['subfooter_second']); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>  

</footer>


