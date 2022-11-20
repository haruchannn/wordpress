  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
      <div class="container px-4 px-lg-5">
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"> <?php bloginfo('name'); ?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
          </button>
          <?php
          $menu_name='global_nav';
          $locations=get_nav_menu_locations();
          $menu=wp_get_nav_menu_object($locations[$menu_name]);
          $menu_items=wp_get_nav_menu_items($menu->term_id);?>

          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <?php foreach ($menu_items as $item): ?>
                  <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
                <?php endforeach; ?>
              </ul>
          </div>
      </div>
  </nav>