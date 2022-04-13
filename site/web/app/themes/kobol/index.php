<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class("mx-auto h-screen w-full xl:w-4/5 scroll-smooth bg-[#f5f5f5] text-neutral-800 dark:bg-neutral-800 dark:text-neutral-100"); ?> >
      <?php wp_body_open(); ?>
      <?php do_action('get_header'); ?>

      <div id="app">
        <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
      </div>

      <?php do_action('get_footer'); ?>
      <?php wp_footer(); ?>
  </body>
</html>
