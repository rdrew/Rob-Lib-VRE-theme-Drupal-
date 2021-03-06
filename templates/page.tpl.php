<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['branding']: Items for the branding region.
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see omega_preprocess_page()
 */
?>
<div class="l-page">


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


