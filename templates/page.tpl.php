<?php
// PAGE.TPL.PHP

// hide the nodes and pager for front page
if(drupal_is_front_page()){
  hide($page['content']['system_main']);
}

?>
<div class="layout-page page">


  <header class="site-header">
    <div class="site-branding">
      <div class="site-logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      </div>
      <h1 class="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span>
          <?php print $site_name; ?></span>
        </a>
      </h1>
    </div>
    <?php if ($page['header']): ?>
    <div class="header-nav">
      <?php print render($page['header']); ?>
    </div>
    <?php endif; ?>
  </header>


    <?php print $messages; ?>


    <?php if ($page['highlight']): ?>
      <!-- HIGHLIGHT -->
      <div class="layout-highlight highlight-content"><?php print render($page['highlight']); ?></div>
    <?php endif; ?>

 
  <div class="layout-main">

 
    <?php if($page['sidebar']): ?>
    <!-- SIDEBAR -->
    <div class="layout-sidebar sidebar">
      <div class="sidebar-fixed">     
        <?php print render($page['sidebar']); ?>
      </div>
    </div>
    <?php endif; ?>


    <!-- CONTENT -->
    <div class="layout-content">


      <!-- PRIMARY CONTENT -->
      <div class="layout-primary-content primary-content">
        <?php print render($tabs); ?>
        <?php if ($title && (!empty($node) && $node->type !== 'nieuws')): ?>
        <header class="content-header">
          <?php print render($title_prefix); ?>
          <h1 class="title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
        </header>
        <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <a id="primary-content"></a>
        <div class="content">
          <?php if(drupal_is_front_page()): ?>
            <div class="layout-front">
            <?php print views_embed_view('nieuws','block_2'); ?>
            <?php print views_embed_view('calendar_vandaag','page_1'); ?>  
            </div>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </div>


      <!-- SECONDARY -->
      <?php if ($page['secondary']): ?>
        <div class="secondary-content">
          <?php print render($page['secondary']); ?>
        </div>
      <?php endif; ?>
      <nav class="top-nav"><a href="#top"><span class="text">Top</span></a></nav>


    </div><!-- END LAYOUT-CONTENT -->
  </div><!-- END LAYOUT-MAIN -->


  <!-- FOOTER -->
  <footer class="site-footer" id="site-footer">
    <?php print render($page['footer']); ?>
  </footer>


</div>
