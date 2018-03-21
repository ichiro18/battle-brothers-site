<footer class="footer clearfix">
    <div class="footer-logo">
        <a href="/"></a>
    </div>
  <div class="container">
      <div class="row">
          <div class="col-sm">
              <h4>Об организации</h4>
              <?php
                  if (has_nav_menu('footer-menu-1')){
                      $args_menu = array(
                          'theme_location' => 'footer-menu-1',
                          'menu_class' => 'nav',
                          'depth' => 1,
                      );
                      wp_nav_menu($args_menu);
                  }
              ?>
          </div>
          <div class="col-sm">
              <h4>Медиа</h4>
              <?php
                  if (has_nav_menu('footer-menu-2')){
                      $args_menu = array(
                          'theme_location' => 'footer-menu-2',
                          'menu_class' => 'nav',
                      );
                      wp_nav_menu($args_menu);
                  }
              ?>
          </div>
          <div class="col-sm">
              <h4>Помощь</h4>
              <?php
                  if (has_nav_menu('footer-menu-3')){
                      $args_menu = array(
                          'theme_location' => 'footer-menu-3',
                          'menu_class' => 'nav',
                      );
                      wp_nav_menu($args_menu);
                  }
              ?>
          </div>
          <div class="col-sm">
              <h4>Социальные сети</h4>
              <?php
                  if (has_nav_menu('footer-menu-4')){
                      $args_menu = array(
                          'theme_location' => 'footer-menu-4',
                          'menu_class' => 'nav',
                      );
                      wp_nav_menu($args_menu);
                  }
              ?>
          </div>
      </div>
      <div class="sign">
          <p>Всероссийская общественная организация ветеранов «БОЕВОЕ БРАТСТВО» © 2015 - <?php echo date("Y"); ?></p>
          <p>Все права защищены.</p>
      </div>
  </div>
</footer>
