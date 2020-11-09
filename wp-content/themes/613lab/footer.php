<footer>
  <div class="container">

    <div class="row footer-content">
        <div class="col-md-4 left-footer">
          <div id="social">
            <?php dynamic_sidebar( 'right-footer' );?>
        </div>
        </div>

        <div class="col-md-4 middle-footer">
          <div class="middle-footer-text">
            <p>hello@613lab.com <br/>
            1234 Main Street | Ontario, Canada</p>
          </div>
          <div class="middle-footer-buttons">
            <button type="button" name="button-yellow">Apply</button>
            <button type="button" name="button-yellowBorder">Learn More</button>
          </div>
          <div class="middle-footer-copyright">
            <p>Copyright &copy; <?php echo get_the_date('Y');?> 613LAB </p>
          </div>
          
        </div>

        <div class="col-md-4 right-footer">
          <?php dynamic_sidebar( 'right-footer' );?>
        </div>

      </div>

    </div>
  </div> <!--end container-->

  </footer>

    <?php wp_footer(); ?>
  </body>
  </html>
