    </main>
    <footer>
      <div id="wrapper">
        <div id="about-container" class="text-center">
          <h4 id="about-title" class="uppercase"><?php echo get_theme_mod("footer-title", "about rosa"); ?></h4>
          <p id="about-paragraph"><?php echo get_theme_mod("footer-paragraph", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia nesciunt reprehenderit possimus saepe sunt dolorem odio labore accusamus, sint tempore."); ?></p>
        </div>
        <!-- about-container -->
        <h4 class="uppercase">follow along</h4>
        <div class="social-links">
          <a href="#" class="social-links__link"><i class="fa"></i></a>
          <a href="#" class="social-links__link"><i class="fa"></i></a>
          <a href="#" class="social-links__link"><i class="fa"></i></a>
          <a href="#" class="social-links__link"><i class="fa"></i></a>
        </div>
        <!-- social-links -->
      </div>
      <!-- wrapper -->
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>