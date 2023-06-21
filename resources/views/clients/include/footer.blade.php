<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Le Bison</h3>
              <p>
                Ancienne route de bassam carrefour, <br>
                les 2 poteaux, à coté de la station OLA<br><br>
                <strong>Téléphone:</strong> +225 07 05 70 44 45<br>
                <strong>Email:</strong> lebison.grill@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
                <a href="https://www.facebook.com/profile.php?id=100091531976664&mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/lebisonranchgrill/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.tiktok.com/@grilllebison?_r=1&_d=e7b3j9gijm2glh&sec_uid=MS4wLjABAAAAhvENOreLzKOMurMzJvS3c8NEbKR-ZnmIiBtCaHwCYI2eW3b0SgP_H6di4CEPggUv&share_author_id=7205911067753808902&sharer_language=fr&source=h5_m&u_code=e6ii9mjm6eh42d&timestamp=1683991763&user_id=7205911067753808902&sec_user_id=MS4wLjABAAAAhvENOreLzKOMurMzJvS3c8NEbKR-ZnmIiBtCaHwCYI2eW3b0SgP_H6di4CEPggUv&utm_source=whatsapp&utm_campaign=client_share&utm_medium=android&share_iid=7228666250841949958&share_link_id=511f35a2-0386-4456-b5a5-4d21e8e970b8&share_app_id=1233&ugbiz_name=Account&ug_btm=b8727%2Cb4907&social_share_type=5" class="tiktok"><i class="bx bxl-tiktok"></i></a>
                <a href="https://www.snapchat.com/add/lebisonranchgri?sender_web_id=66fd5b56-fd2d-44de-bbc6-bace2c8afbf2&device_type=desktop&is_copy_url=true" class="snapchat"><i class="bx bxl-snapchat"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">À-propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#events">Evénements</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Galerie</a></li>
            </ul>
          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Notre Fil d'actualités</h4>
            <p>Recevez en exclusivité les dernières nouveautés !</p>
            <form action="{{route('abonne')}}" method="POST">
                @csrf
              <input type="email" name="email"><input type="submit" value="S'abonner">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2023 restaurant le bison. Tous droits réservés.
        Développé par <strong><span> <a href="https://www.linkedin.com/in/anvoh-christy-yannick-banga-2a13aa12a/">Christy Banga</a></span></strong>.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
      </div>
    </div>
  </footer>
