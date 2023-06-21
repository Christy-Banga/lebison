<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Reservation</h2>
        <p>Réserver une table</p>
      </div>

      <form action="{{route('reservation')}}" method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        @csrf
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Votre téléphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            {{-- <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse e-mail" data-rule="email" data-msg="Please enter a valid email" required>
            <div class="validate"></div> --}}
          </div>

          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" name="date" class="form-control flatpickr-input" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>

          <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
          <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
          <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>

          <script>
            flatpickr(".flatpickr-input", {
              dateFormat: "l j F Y",
              locale: "fr",
              minDate: "today"
            });
          </script>


          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" class="form-control flatpickr-heure" name="heure" id="heure" min="0" max="24" placeholder="L'heure" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
            <script>
                flatpickr(".flatpickr-heure", {
                    enableTime: true,
                    noCalendar: true,
                    dateFormat: "H:i",
                    time_24hr: true
                });
              </script>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" class="form-control" name="nbpersonne" id="nbpersonne" placeholder="Nombre de personnes" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre demande de réservation a été envoyée. Nous vous rappellerons ou vous enverrons un e-mail pour confirmer votre réservation. Merci!</div>
        </div>

        <div class="text-center"><button type="submit">Réserver une table</button></div>
      </form>

    </div>
  </section>

