      <footer>  
        <!-- footer -->
        <div class="footer" role="contentinfo">

          <p><a href="/obchodni-podminky/">Obchodní podmínky</a> | <a href="/reklamacni-rad/">Reklamační řád</a> | <a href="/doprava-a-platba/">Doprava a platba</a> | <a href="/ochrana-osobnich-udaju/">Ochrana osobních údajů</a></p>

          <p>
            BEACH ACADEMY VIKTORIA BRNO, z.s.<br>
            Vodařská 232/2, Horní Heršpice, 619 00 Brno<br>
            IČO: 03417581</p>

          <p id="logos">
            <img src="<?php echo get_template_directory_uri(); ?>/img/loga/gopay.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/loga/maestro.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/loga/master.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/loga/master2.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/loga/visa.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/loga/visa2.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/loga/visa3.png" alt="">
          </p>

        </div>
        <!-- /footer -->

        <!-- copyright -->
        <div class="copyright bg-dark text-light p-2 text-center">
          &copy; 2020 - <?php echo date('Y'); ?> <a href="https://eshop.beachacademy.cz">E-SHOP BAVB</a>&nbsp;&nbsp;|&nbsp;&nbsp;Vytvořil <a href="http://prokopl.cz">Lukáš Prokop</a>
        </div>
        <!-- /copyright -->
      </footer>

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- bootstrap -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- current category -->
    <script>
      const path = window.location.pathname;

      // if (path.includes('/kategorie/') || path.includes('/produkt/')) {
      //   let parts = path.split("/");
      //   let catName = parts[2];
      //   if (catName === "permanentky" && parts[3] !== "") {
      //     catName = parts[3];
      //   }
      //   document.querySelector("#current-category option[value=" + catName + "]").setAttribute('selected', true);
      // }

      $('#current-category').change(function(){
          window.location.href = '/kategorie/' + $(this).val();
      })
    </script>

    <!-- ticket categories -->
    <script>
      if (path === '/kategorie/treninky' || path === '/kategorie/treninky/') {
        document.querySelector("ul.products").classList.add("d-none");
        document.querySelector("#tickets-categories").classList.remove("d-none");
      }
    </script>

    <!-- clothes categories -->
    <script>
      if (path === '/kategorie/klubove-obleceni' || path === '/kategorie/klubove-obleceni/') {
        document.querySelector("ul.products").classList.add("d-none");
        document.querySelector("#clothes-categories").classList.remove("d-none");
      }
    </script>

    <!-- form design -->
    <script>
      $('input#username').addClass('form-control');
      $('input#password').addClass('form-control');
      $('input#reg_email').addClass('form-control');
      $('input#reg_password').addClass('form-control');
    </script>

    <!-- full content show -->
    <script>
      if ($('#full-content').html().length > 5) {
        document.querySelector("#full-content").classList.remove("d-none");
      }
    </script>

    <!-- logo only if homepage -->
    <script>
    console.log(path);
      if (path !== '/') {
        document.querySelector(".logo").classList.add("d-none");
      }
    </script>

    <!-- payments alerts design -->
    <script>
      if ($(".woocommerce-notice--success")[0]){
        document.querySelector(".woocommerce-notice--success").classList.add("alert", "alert-success");
      }
      if ($(".woocommerce-notice--error")[0]){
        document.querySelector(".woocommerce-notice--error").classList.add("alert", "alert-danger");
      }
    </script>

    <!-- keep footer down -->
    <script>
      if ($(".wrapper").height() < $(window).height() + 3) {
        $('footer').attr('style', 'position: absolute!important; bottom: 0; width: 100%');
      }
    </script>

	<!-- change my account info text -->
	<script>
		if (path === "/muj-ucet/") {
			$(".woocommerce-MyAccount-content p:last-child").html(`Na nástěnce svého uživatelského účtu si můžete prohlédnout své <a href="https://eshop.beachacademy.cz/muj-ucet/objednavky/">nedávné objednávky</a> a <a href="https://eshop.beachacademy.cz/muj-ucet/upravit-ucet/">změnit své heslo a osobní informace</a>.`);
		}
	</script>


	</body>
</html>
