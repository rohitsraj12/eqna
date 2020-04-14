
            <div class="body__footer">
              <footer>

              </footer>
            </div>
            <!-- end body footer -->
      </div>
      <!-- script -->
      <script src="<?=base_url()?>js/jQuery.v3.4.1.js"></script>
      <script src="<?=base_url()?>js/baseScript.js"></script>
    <script>
      $(document).ready(function() {
        $(window).scroll(function() {
          var winTop = $(document).scrollTop();
          console.log(winTop);

          if (winTop > 130 && winTop < 160) {
            $("#section__header").addClass("animated fadeInDown show");
          }
          if (winTop > 200 && winTop < 550) {
            $("#left__product").addClass("animated fadeInLeft show");
            $("#right__product").addClass("animated fadeInRight show");
          }

          if (winTop > 900 && winTop < 1030) {
            $("#left__about").addClass("animated fadeInLeft show");
            $("#right__about").addClass("animated fadeInRight show");
          }
        });
      });
    </script>
</body>
</html>