<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Yves Rijckaert">
    <meta name="description" content="Portfolio Yves Rijckaert">
    <meta name="robots" content="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> - Portfolio Yves Rijckaert</title>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php echo $css; ?>
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please update your browser. This site requires it.");</script>
    <script>
      WebFontConfig = {
        custom: {
          families: ['circular', 'druk text'],
          urls: ['../assets/fonts/circular/circular.css', '../assets/fonts/druktext/druktext.css']
        }
      };
      (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
  </head>
  <body <?php if($currentPage === 'project-detail') { echo 'class="body-project-detail"'; } ?>>
    <?php
      if (!empty($_SESSION['error'])) {
        echo '<div class="error box">' . $_SESSION['error'] . '</div>';
      }
      if (!empty($_SESSION['info'])) {
        echo '<div class="info box">' . $_SESSION['info'] . '</div>';
      }
    ?>
    <header>
      <h1 class="hide">Portfolio Yves Rijckaert</h1>
      <nav class="header-nav">
        <ul class="header-nav-menu wrap">
          <li class="header-nav-menu-item <?php if($currentPage === 'project-detail') { echo 'header-nav-menu-item-project-detail';} ?>">
            <a href="index.php">Yves <span class="lastname">Rijckaert</span></a>
          </li>
          <li class="header-nav-menu-item <?php if($currentPage === 'project-detail') { echo 'header-nav-menu-item-project-detail';} ?> <?php if ($currentPage === 'projects') {
          echo 'header-nav-menu-item-active'; }?>">
            <a href="index.php?page=projects">Projects</a>
          </li>
          <li class="header-nav-menu-item <?php if($currentPage === 'project-detail') { echo 'header-nav-menu-item-project-detail';} ?> <?php if ($currentPage === 'contact') {
          echo 'header-nav-menu-item-active'; }?>">
            <a href="index.php?page=contact">Contact</a>
          </li>
        </ul>
      </nav>
    </header>
    <main class="main">
    <?php
        if (!empty($_SESSION['user'])) {
      ?>
      <section class="session wrap">
        <h2>Welcome, Yves!</h2>
        <nav class="header-nav">
          <ul class="header-nav-menu">
            <li class="header-nav-menu-item-session">
              <a href="index.php?page=addproject">Add project</a>
            </li>
            <li class="header-nav-menu-item-session">
              <a href="index.php?page=logout">logout</a>
            </li>
          </ul>
        </nav>
      </section>
      <?php
        };
    ?>
      <?php echo $content; ?>
    </main>
    <footer class="footer <?php if($currentPage === 'project-detail') { echo 'footer-project-detail';} ?>">
      <a href="mailto:hi@yvesrijckaert.com" class="footer-mail <?php if($currentPage === 'project-detail') { echo 'footer-mail-project-detail';} ?>" target="_top">hi&#64;yvesrijckaert.com</a>
      <ul class="footer-social-list">
        <li class="footer-social">
          <a href="https://www.facebook.com/rijckaertyves" target="_blank" class="footer-social-link">
            <svg class="footer-social-icon <?php if($currentPage === 'project-detail') { echo 'footer-social-icon-project-detail';} ?>" width="57" height="57" viewBox="0 0 57 57">
              <path fill-rule="evenodd" d="M35.9010938,18.981 L33.2185312,18.9827813 C31.114875,18.9827813 30.7069688,19.9820625 30.7069688,21.4480313 L30.7069688,24.6827813 L35.72475,24.6827813 L35.0710313,29.7504375 L30.7069688,29.7504375 L30.7069688,42.75 L25.4754375,42.75 L25.4754375,29.7504375 L21.1006875,29.7504375 L21.1006875,24.6827813 L25.4754375,24.6827813 L25.4754375,20.9475 C25.4754375,16.6101563 28.1241562,14.25 31.99125,14.25 C33.84375,14.25 35.4361875,14.3871563 35.9010938,14.4495 L35.9010938,18.981 Z M28.5,0 C12.760875,0 0,12.7590938 0,28.5 C0,44.239125 12.760875,57 28.5,57 C44.2409063,57 57,44.239125 57,28.5 C57,12.7590938 44.2409063,0 28.5,0 L28.5,0 Z"/>
            </svg>
          </a>
        </li>
        <li class="footer-social">
          <a href="https://www.instagram.com/yvesrijckaert/" target="_blank" class="footer-social-link">
            <svg class="footer-social-icon <?php if($currentPage === 'project-detail') { echo 'footer-social-icon-project-detail';} ?>" width="57" height="57" viewBox="0 0 57 57">
              <g fill-rule="evenodd">
                <path d="M28.5333094 34.0001438C31.5596531 34.0001438 34.0142156 31.5527063 34.0142156 28.5317063 34.0142156 25.5124875 31.5596531 23.06505 28.5333094 23.06505 25.5069656 23.06505 23.0524031 25.5124875 23.0524031 28.5317063 23.0524031 31.5527063 25.5069656 34.0001438 28.5333094 34.0001438M34.8444562 22.9318125L38.6973 22.9318125C39.1372687 22.9318125 39.4953 22.5755625 39.4953 22.137375L39.4953 18.2916563C39.4953 17.8534688 39.1372687 17.4972188 38.6973 17.4972188L34.8444562 17.4972188C34.4044875 17.4972188 34.0464562 17.8534688 34.0464562 18.2916563L34.0464562 22.137375C34.0464562 22.5755625 34.4044875 22.9318125 34.8444562 22.9318125"/>
                <path d="M42.75,39.3691875 C42.75,41.2359375 41.2341563,42.75 39.3620625,42.75 L17.6379375,42.75 C15.767625,42.75 14.25,41.2359375 14.25,39.3691875 L14.25,17.6290313 C14.25,15.7622813 15.767625,14.25 17.6379375,14.25 L39.3620625,14.25 C41.2341563,14.25 42.75,15.7622813 42.75,17.6290313 L42.75,39.3691875 Z M28.5,0 C12.7590938,0 0,12.7590938 0,28.5 C0,44.239125 12.7590938,57 28.5,57 C44.2409063,57 57,44.239125 57,28.5 C57,12.7590938 44.2409063,0 28.5,0 L28.5,0 Z"/>
                <path d="M37.2028312,28.5324187 C37.2028312,33.300825 33.3143625,37.1821687 28.5334875,37.1821687 C23.7526125,37.1821687 19.8641437,33.300825 19.8641437,28.5324187 C19.8641437,27.7415437 19.9710187,26.973825 20.1723,26.2452937 L17.5057687,26.2452937 L17.5057687,38.6392312 C17.5057687,39.0792 17.8620187,39.43545 18.3019875,39.43545 L38.7632062,39.43545 C39.2049562,39.43545 39.5612062,39.0792 39.5612062,38.6392312 L39.5612062,26.2452937 L36.894675,26.2452937 C37.0959562,26.973825 37.2028312,27.7415437 37.2028312,28.5324187"/>
              </g>
            </svg>
          </a>
        </li>
        <li class="footer-social">
          <a href="https://twitter.com/yvesrijckaert" target="_blank" class="footer-social-link">
            <svg class="footer-social-icon <?php if($currentPage === 'project-detail') { echo 'footer-social-icon-project-detail';} ?>" width="57" height="57" viewBox="0 0 57 57">
              <path fill-rule="evenodd" d="M39.5684142,22.6879594 C39.5790306,22.9391156 39.5861082,23.1902719 39.5861082,23.4449906 C39.5861082,31.1702719 33.743545,40.0800844 23.0598998,40.0800844 C19.7794297,40.0800844 16.7272124,39.1128656 14.1562723,37.4545219 C14.6110084,37.5079594 15.0728222,37.5346781 15.5417135,37.5346781 C18.2630528,37.5346781 20.7667557,36.6013031 22.7555627,35.0320219 C20.212933,34.9857094 18.0684186,33.2953031 17.3288089,30.9725531 C17.6844585,31.0402406 18.0471858,31.0758656 18.4222989,31.0758656 C18.9513499,31.0758656 19.4644763,31.0046156 19.952831,30.8710219 C17.2951902,30.3348656 15.2939973,27.9711469 15.2939973,25.1389594 L15.2939973,25.0641469 C16.0760727,25.5023344 16.9731592,25.7659594 17.9250971,25.7962406 C16.3662545,24.7470844 15.3400018,22.9569281 15.3400018,20.9298656 C15.3400018,19.8575531 15.6266448,18.8529281 16.1273854,17.9890219 C18.9920461,21.5265844 23.2722279,23.8546781 28.0991548,24.0987094 C28.0000683,23.6712094 27.9487557,23.2241156 27.9487557,22.7663344 C27.9487557,19.5369281 30.5497756,16.9184906 33.7559308,16.9184906 C35.4280151,16.9184906 36.9373144,17.6292094 37.9954164,18.7656469 C39.3189286,18.5038031 40.5628177,18.0175219 41.6846182,17.3477719 C41.2511149,18.7122094 40.3292568,19.8575531 39.1313721,20.5825219 C40.3062545,20.4400219 41.4245162,20.1265219 42.4666936,19.6616156 C41.688157,20.8336781 40.7026004,21.8632406 39.5684142,22.6879594 M28.3114829,0.000178125 C12.6752834,0.000178125 0.0010616408,12.7592719 0.0010616408,28.5001781 C0.0010616408,44.2393031 12.6752834,57.0001781 28.3114829,57.0001781 C43.9476825,57.0001781 56.6219042,44.2393031 56.6219042,28.5001781 C56.6219042,12.7592719 43.9476825,0.000178125 28.3114829,0.000178125"/>
            </svg>
          </a>
        </li>
        <li class="footer-social">
          <a href="https://www.pinterest.com/yvesrijckaert/" target="_blank" class="footer-social-link">
            <svg class="footer-social-icon <?php if($currentPage === 'project-detail') { echo 'footer-social-icon-project-detail';} ?>" width="57" height="57" viewBox="0 0 57 57">
              <path fill-rule="evenodd" d="M30.4956319,34.8471281 C28.7403858,34.8471281 27.087765,33.8923781 26.5233259,32.8058156 C26.5233259,32.8058156 25.5784656,36.5785031 25.3802927,37.3070344 C24.676071,39.8791594 22.604102,42.4530656 22.4430865,42.6632531 C22.3316142,42.8110969 22.083898,42.7647844 22.057357,42.5706281 C22.013122,42.2428781 21.484071,38.9956594 22.1069002,36.3487219 C22.4183149,35.0199094 24.1983326,27.4282219 24.1983326,27.4282219 C24.1983326,27.4282219 23.679898,26.3826281 23.679898,24.8382844 C23.679898,22.4122219 25.0759557,20.6006906 26.8152772,20.6006906 C28.2944967,20.6006906 29.0075654,21.7193156 29.0075654,23.0588156 C29.0075654,24.5550656 28.0609357,26.7940969 27.5725809,28.8674719 C27.1638492,30.6041906 28.4378182,32.0202844 30.1399823,32.0202844 C33.2187406,32.0202844 35.2942483,28.0374094 35.2942483,23.3170969 C35.2942483,19.7296594 32.8949401,17.0435344 28.5280576,17.0435344 C23.5967361,17.0435344 20.5215166,20.7467531 20.5215166,24.8845969 C20.5215166,26.3095969 20.9408647,27.3160031 21.5955432,28.0944094 C21.8963415,28.4524406 21.9388071,28.5967219 21.8291042,29.0064094 C21.7494812,29.3092219 21.572541,30.0324094 21.4964568,30.3209719 C21.3885233,30.7360031 21.0558758,30.8838469 20.6825322,30.7306594 C18.4123902,29.7972844 17.3525188,27.2910656 17.3525188,24.4766906 C17.3525188,19.8258469 21.2487406,14.2505344 28.9739468,14.2505344 C35.1845455,14.2505344 39.2700931,18.7713469 39.2700931,23.6288156 C39.2700931,30.0502219 35.7224435,34.8471281 30.4956319,34.8471281 M28.3121907,0.000534374999 C12.6759911,0.000534374999 0.00176940133,12.7596281 0.00176940133,28.5005344 C0.00176940133,44.2396594 12.6759911,57.0005344 28.3121907,57.0005344 C43.9466208,57.0005344 56.622612,44.2396594 56.622612,28.5005344 C56.622612,12.7596281 43.9466208,0.000534374999 28.3121907,0.000534374999"/>
            </svg>
          </a>
        </li>
        <li class="footer-social">
          <a href="https://github.com/YvesRijckaert" target="_blank" class="footer-social-link">
            <svg class="footer-social-icon <?php if($currentPage === 'project-detail') { echo 'footer-social-icon-project-detail';} ?>" width="57" height="57" viewBox="0 0 57 57">
              <path fill-rule="evenodd" d="M241.550863,507.873281 C241.550863,507.873281 239.62355,508.106625 237.5003,508.106625 C235.37705,508.106625 233.4248,507.891094 233.4248,507.891094 C228.464019,507.326437 223.2503,505.409812 223.2503,496.850906 C223.2503,494.412375 224.11955,492.419156 225.548113,490.857 C225.320113,490.292344 224.552394,488.02125 225.767206,484.945031 C225.767206,484.945031 227.642863,484.34475 231.910738,487.235719 C233.691988,486.740531 235.603269,486.492938 237.502081,486.484031 C239.399113,486.492938 241.310394,486.740531 243.095206,487.235719 C247.359519,484.34475 249.231613,484.945031 249.231613,484.945031 C250.449988,488.02125 249.68405,490.292344 249.454269,490.857 C250.884613,492.419156 251.7503,494.412375 251.7503,496.850906 C251.7503,505.431187 246.527675,507.321094 241.550863,507.873281 M237.5003,468 C221.759394,468 209.0003,480.759094 209.0003,496.5 C209.0003,512.239125 221.759394,525 237.5003,525 C253.239425,525 266.0003,512.239125 266.0003,496.5 C266.0003,480.759094 253.239425,468 237.5003,468" transform="translate(-209 -468)"/>
            </svg>
          </a>
        </li>
      </ul>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
