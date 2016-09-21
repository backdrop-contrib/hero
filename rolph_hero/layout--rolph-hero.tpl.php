<?php
/**
 * @file
 * Template for the Rolph Hero layout.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node.)
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['quarter1']
 *   - $content['quarter2']
 *   - $content['quarter3']
 *   - $content['quarter4']
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="hero-layouts layout--rolph-hero <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="l-header-inner container container-fluid">
        <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>

  <div class="l-wrapper">

    <?php if ($messages): ?>
      <div class="l-messages" role="status" aria-label="<?php print t('Status messages'); ?>">
        <div class="container container-fluid">
          <?php print $messages; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="l-page-title">
      <div class="container container-fluid">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>
    </div>

    <?php if ($tabs): ?>
      <nav class="tabs" role="tablist" aria-label="<?php print t('Admin content navigation tabs.'); ?>">
        <div class="container container-fluid">
          <?php print $tabs; ?>
        </nav>
      </div>
    <?php endif; ?>

    <div class="container container-fluid">
      <?php print $action_links; ?>
    </div>

    <?php if (!empty($content['hero'])): ?>
      <div class="l-hero">
        <div class="no-container">
          <?php print $content['hero']; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($content['top'])): ?>
      <div class="l-top">
        <div class="container container-fluid">
          <?php print $content['top']; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="l-middle l-quarters row">
      <div class="container container-fluid">
        <div class="l-quarters-region col-md-3">
          <?php print $content['quarter1']; ?>
        </div>
        <div class="l-quarters-region col-md-3">
          <?php print $content['quarter2']; ?>
        </div>
        <div class="l-quarters-region col-md-3">
          <?php print $content['quarter3']; ?>
        </div>
        <div class="l-quarters-region col-md-3">
          <?php print $content['quarter4']; ?>
        </div>
      </div>
    </div><!-- /.l-middle -->

    <?php if (!empty($content['bottom'])): ?>
      <div class="l-bottom">
        <div class="container container-fluid">
          <?php print $content['bottom']; ?>
        </div>
      </div>
    <?php endif; ?>

  </div><!-- /.l-wrapper -->

  <?php if ($content['footer']): ?>
    <footer class="l-footer"  role="footer">
      <div class="l-footer-inner container container-fluid">
        <?php print $content['footer']; ?>
      </div>
    </footer>
  <?php endif; ?>
</div><!-- /.layout--rolph -->
