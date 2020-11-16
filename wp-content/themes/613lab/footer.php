<footer>
  <div class="container">

    <div class="row footer-content">
        <div class="col-md-3 left-footer order-md-1">
          <div id="social">
            <?php dynamic_sidebar( 'left-footer' );?>
        </div>
        </div>

        <div class="col-md-3 right-footer order-md-3">
          <?php dynamic_sidebar( 'right-footer' );?>
        </div>

        <div class="col-md-6 middle-footer order-md-2">
          <div class="middle-footer-text">
            <p>businessascended@613LAB.com<br/>
            949 Clark Ave W | Vaughan, Ontario L4J 8G6 CA <br />
            +1 917 651 7282</p>
          </div>
          <div class="middle-footer-buttons">
            <a href="/613LAB/apply"><button type="button" name="button-yellow">Apply</button></a>
            <a href="/613LAB/about"><button type="button" name="button-yellowBorder">Learn More</button></a>
          </div>
          <div class="middle-footer-copyright">
            <p>Copyright &copy; <?php echo get_the_date('Y');?> 613LAB </p>
          </div>
          
        </div>

        

      </div>

    </div>
  </div> <!--end container-->

  </footer>

    <?php wp_footer(); ?>
  </body>
  </html>
