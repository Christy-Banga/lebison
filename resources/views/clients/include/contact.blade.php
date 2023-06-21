<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Nous contacter</p>
      </div>
    </div>
    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.3097507270771!2d-3.8459287304447125!3d5.225103499672044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebe43d12b24f%3A0xb56dac6067142acb!2sLE%20Bison%20Ranch%20Grill!5e0!3m2!1sfr!2sci!4v1683992136924!5m2!1sfr!2sci" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Localisation:</h4>
              <p>Ancienne route de bassam carrefour, les 2 poteaux, à coté de la station OLA</p>
            </div>

            <div class="open-hours">
              <i class="bi bi-clock"></i>
              <h4>Heures d'ouverture:</h4>
              <p>
                Mercredi-Dimanche<br>
                De 08H à 01H
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>lebison.grill@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Téléphone:</h4>
              <p>+225 07 05 70 44 45</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{route('contact')}}" method="POST" role="form" id="contact-form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse e-mail" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="sujet" id="sujet" placeholder="Sujet" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Votre message a été envoyé. Merci!</div>
            </div>
            <div class="text-center"><button type="submit">Envoyer un message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section>
