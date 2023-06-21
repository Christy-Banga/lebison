<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+225 07 05 70 44 45</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4">
            <span>
                <?php
                    $jours_semaine = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
                    $mois = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
                    $aujourdhui = $jours_semaine[date('w')]." ".date('j')." ".$mois[date('n')]." ".date('Y');
                    echo $aujourdhui;
                ?>
            </span>
        </i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>FR</li>
          {{-- <li><a href="#">De</a></li> --}}
        </ul>
      </div>
    </div>
  </div>

