      <div class="3u" id="sidebar1">

        <?php if(!dynamic_sidebar('sidebar-1')): ?>
          <section>
            <h2>Pages</h2>
            <ul>
              <?php // Retrieve only Pages
                wp_list_pages(array(
                      'title_li' => ''
                      ));
              ?>
            </ul>
          </section>
          <?php endif; ?>
        </div>
        <div class="3u">
          <div id="sidebar2">
            <section>
              <?php if(!dynamic_sidebar('sidebar-2')): ?>
              <div class="sbox1">
                <h2>Categories</h2>
                <ul>
                  <?php // Retrieve only Categories
                    wp_list_categories('title_li=&depth=2&hierarchical=1');
                  ?>
                </ul>
              </div>
            <?php endif; ?>  
            </section>
          </div>
          <?php include (TEMPLATEPATH . '/banners.php'); ?>
        </div>