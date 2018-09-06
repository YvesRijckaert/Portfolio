<section class="home-header wrap">
  <h2 class="home-header-title large-title">Designer and developer</h2>
  <ul class="home-header-social-links">
    <li class="home-header-social-link">
      <a href="https://www.instagram.com/yvesrijckaert/" target="_blank">instagram</a>
    </li>
    <li class="home-header-social-link">
      <a href="https://twitter.com/yvesrijckaert" target="_blank">twitter</a>
    </li>
    <li class="home-header-social-link">
      <a href="https://www.facebook.com/rijckaertyves" target="_blank">facebook</a>
    </li>
  </ul>
</section>
<section class="home-featured">
  <h2 class="home-featured-title medium-title">Projects</h2>
  <ul class="home-featured-work-list wrap">
    <?php foreach($featuredwork as $featured): ?>
      <li class="home-featrued-work-list-item">
        <a class="home-featured-work" href="index.php?page=project&id=<?php echo $featured['id'] ?>">
          <picture class="home-featured-work-image-container">
            <source type="image/webp" srcset="assets/img/webp/<?php echo $featured['shorttitle'] ?>-home.webp">
            <img class="image featured-work-image featured-work-image-<?php echo $featured['shorttitle'] ?>" src="assets/img/<?php echo $featured['shorttitle'] ?>-home.png" alt="<?php echo $featured['title'] ?>" width="" height=""/>
          </picture>
          <div class="home-featured-info-box small-title">
            <h3><?php echo $featured['title'] ?></h3>
          </div>
        </a>
      </li>
    <?php endforeach;?>
  </ul>
  <a href="index.php?page=projects" class="big-white-button">View all projects</a>
</section>
<a href="index.php?page=contact" class="home-button-contact wrap"><span class="small-title">Like what you see?</span><span>Send me an e-mail on the contact page.</span></a>
<section class="home-services wrap">
    <h2 class="home-services-title medium-title">Services</h2>
    <ul class="home-services-list">
      <li class="home-service">
        <h3 class="home-service-title small-title">Development</h3>
        <svg class="home-service-svg" width="546.10169" height="467.72599" viewBox="0 0 546.10169 467.72599">
          <title>Development</title>
          <path width="525.87571" height="447.5" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:20.225988388061523px" d="M 28.11299,10.11299 L 517.9887,10.11299 A 18,18,0,0,1,535.9887,28.11299 L 535.9887,439.61299 A 18,18,0,0,1,517.9887,457.61299 L 28.11299,457.61299 A 18,18,0,0,1,10.11299,439.61299 L 10.11299,28.11299 A 18,18,0,0,1,28.11299,10.11299" class="ubZyYbbT_0"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M419.68927,108.71469L10.11299,108.71469" class="ubZyYbbT_1"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M460.14124,108.71469L490.48023,108.71469" class="ubZyYbbT_2"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M60.67772,42.97997L60.67772,78.37526" class="ubZyYbbT_3"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M108.99536,42.97997L108.99536,78.37526" class="ubZyYbbT_4"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M157.313,42.97997L157.313,78.37526" class="ubZyYbbT_5"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M205.63064,42.97997L205.63064,78.37526" class="ubZyYbbT_6"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M253.94828,42.97997L253.94828,78.37526" class="ubZyYbbT_7"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M302.26592,42.97997L302.26592,78.37526" class="ubZyYbbT_8"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M350.58356,42.97997L350.58356,78.37526" class="ubZyYbbT_9"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M398.9012,42.97997L398.9012,78.37526" class="ubZyYbbT_10"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M447.21884,42.97997L447.21884,78.37526" class="ubZyYbbT_11"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M495.53648,42.97997L495.53648,78.37526" class="ubZyYbbT_12"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" d="M298.33332,169.39266L247.76838,396.93502" class="ubZyYbbT_13"></path>
          <path d="M181.55085,229.613q-27.5,28-55,56,27.5,28,55,56" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" class="ubZyYbbT_14"></path>
          <path d="M358.55085,229.613q28,28,56,56-28,28-56,56" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:15.169491291046143px" class="ubZyYbbT_15"></path>
        </svg>
        <p class="home-service-text">Accessibility and clean code are priorities.</p>
      </li>
      <li class="home-service">
        <h3 class="home-service-title small-title">Design</h3>
        <svg class="home-service-svg" width="411.38367" height="411.38367" viewBox="0 0 411.38367 411.38367">
          <title>Design</title>
          <path d="M124.90423,200.66581,5.119,80.88061,80.88061,5.119l119.7852,119.7852" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:10.238051414489746px" class="tTQftnqr_0"></path>
          <path d="M286.47944,210.71786l119.78521,119.7852-75.76159,75.76159L210.71786,286.47944" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:10.238051414489746px" class="tTQftnqr_1"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:10.238051414489746px" d="M392.834,73.407L393.141,73.714L389.496,77.359" class="tTQftnqr_2"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:10.238051414489746px" d="M389.49643,77.35872L385.97454,80.88061" class="tTQftnqr_3"></path>
          <path d="M49.40885,387.01884l-43.266,18.408q8.20064-19.28858,16.40138-38.55654a23.883,23.883,0,0,0,5.87663,13.33C34.07227,386.466,44.98594,386.99835,49.40885,387.01884Zm18.16229-45.06792A92.71368,92.71368,0,0,1,47.095,309.18916Q34.80938,338.0298,22.54421,366.84981v.02049a23.883,23.883,0,0,0,5.87663,13.33c5.65143,6.26568,16.5651,6.79808,20.988,6.81857l52.97166-22.54421A92.44592,92.44592,0,0,1,67.57114,341.95092ZM295.87969,60.4045l-79.8568,79.85681q-37.8706,37.87041-75.76158,75.76158Q93.668,262.61621,47.095,309.18916a92.193,92.193,0,0,0,55.28547,55.28547L351.16517,115.69Zm93.61674,16.95422-3.52189,3.52189L351.16517,115.69,295.87969,60.4045l41.976-41.976.28666.28667L392.834,73.40683m-3.15717-53.749C378.01031,8.06523,358.225,8.99115,343.386,21.29624l46.052,48.08042C401.42869,53.10052,401.6674,31.57113,389.67687,19.65786ZM8.48153,402.11334,26.91,379.58962m10.23805,6.14284L8.48153,402.11334" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:10.238051414489746px" class="tTQftnqr_4"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M275.78697,220.0034L282.54609,226.76252" class="tTQftnqr_5"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M290.93926,235.15569L297.69838,241.91481" class="tTQftnqr_6"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M306.09155,250.30798L312.85067,257.0671" class="tTQftnqr_7"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M321.24383,265.46027L328.00295,272.21939" class="tTQftnqr_8"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M336.39612,280.61255L343.15524,287.37167" class="tTQftnqr_9"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M351.54841,295.76484L358.30753,302.52396" class="tTQftnqr_10"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M366.7007,310.91713L373.45982,317.67625" class="tTQftnqr_11"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M381.85299,326.06942L388.61211,332.82854" class="tTQftnqr_12"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M78.50418,22.72061L85.2633,29.47973" class="tTQftnqr_13"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M93.65647,37.8729L100.41559,44.63202" class="tTQftnqr_14"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M108.80875,53.02519L115.56787,59.78431" class="tTQftnqr_15"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M123.96104,68.17747L130.72016,74.93659" class="tTQftnqr_16"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M139.11333,83.32976L145.87245,90.08888" class="tTQftnqr_17"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M154.26562,98.48205L161.02474,105.24117" class="tTQftnqr_18"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M169.41791,113.63434L176.17703,120.39346" class="tTQftnqr_19"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px" d="M184.57019,128.78663L191.32931,135.54575" class="tTQftnqr_20"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px" d="M297.17175,79.65311L61.70519,315.11967" class="tTQftnqr_21"></path>
        </svg>
        <p class="home-service-text">Digital products with a unique, user-centred design.</p>
      </li>
      <li class="home-service">
        <h3 class="home-service-title small-title">Strategy</h3>
        <svg class="home-service-svg" width="478.00139" height="478.00805" viewBox="0 0 500.00139 500.00805">
          <title>Strategy</title>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:14.981899976730347px" d="M230.44179,239.00518A8.56109,8.56109 0,1,1 247.56397,239.00518A8.56109,8.56109 0,1,1 230.44179,239.00518" class="AwoQwQie_0"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:14.981899976730347px" d="M230.44179,239.00518A8.56109,8.56109 0,1,1 247.56397,239.00518A8.56109,8.56109 0,1,1 230.44179,239.00518" class="AwoQwQie_1"></path>
          <path d="M373.37767,151.122a160.70333,160.70333,0,1,1-20.86976-25.62186M301.0523,176.95576a87.688,87.688,0,1,0,11.60775,14.332m124.0686-82.08689c60.39981,91.75747,50.22976,216.31033-30.495,297.03511-92.36283,92.36283-242.09867,92.36283-334.46151,0s-92.36283-242.09868,0-334.46151c87.0054-87.00539,224.90645-92.06015,317.81411-15.134" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:10px" class="AwoQwQie_2"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:10.701357126235962px" d="M384.28932,95.23213L240.51628,239.00518" class="AwoQwQie_3"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:9.843108284711839px" d="M431.205,15.022L428.178,51.344L384.289,95.232L387.316,58.911L431.205,15.022Z" class="AwoQwQie_4"></path>
          <path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:9.843108284711839px" d="M464.5,48.317L420.611,92.205L384.289,95.232L428.178,51.344L464.5,48.317Z" class="AwoQwQie_5"></path>
        </svg>
        <p class="home-service-text">Research to achieve the best UI and UX.</p>
      </li>
    </ul>
</section>
<section class="home-timeline">
  <h2 class="home-timeline-title medium-title">Timeline</h2>
  <div class="home-timeline-wrap">
    <section class="home-timeline-first">
      <h3 class="hide">Now - 2016</h3>
      <p class="year year-now">Now</p>
      <p class="year year-2016">2016</p>
      <article class="timeline-item timeline-internship left">
        <h4 class="medium-title event-title">Internship</h4>
        <p>To conclude my bachelor, I am currently looking for an internship as a creative developer.</p>
      </article>
      <article class="timeline-item timeline-devine right">
        <h4 class="medium-title event-title">Devine</h4>
        <p>In September I started my bachelor Devine: an online crossroad of creativity and development.</p>
      </article>
      <article class="timeline-item timeline-london left">
        <h4 class="medium-title event-title">London</h4>
        <p>In June I graduated from high school, ready for a language camp in London.</p>
    </article>
    </section>
    <section class="home-timeline-second">
      <h3 class="hide">2014 - 1998</h3>
      <p class="year year-2014">2014</p>
      <p class="year year-2008">2008</p>
      <p class="year year-1998">1998</p>
      <article class="timeline-item timeline-barista right">
        <h4 class="medium-title event-title">Barista</h4>
        <p>A flat white or a soy deca latte? After four years of weekend work I can make a perfect cup of coffee.</p>
        <p></p>
      </article>
      <article class="timeline-item timeline-pingpong left">
        <h4 class="medium-title event-title">Pingpong</h4>
        <p>Several years of training, but my skills are rusty.</p>
      </article>
      <article class="timeline-item timeline-birthdate right">
        <h4 class="medium-title event-title">Birthdate</h4>
        <p>13th of July 1998.</p>
        <p>Length: 58cm</p>
        <p>Weight: 4,93kg</p>
      </article>
    </section>
    <section class="home-timeline-resume">
      <h3 class="hide">Download resume</h3>
      <a href="./assets/resume.pdf" target="_blank" class="big-white-button">Download resume</a>
    </section>
  </div>
</section>
