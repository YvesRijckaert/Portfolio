<section class="project-detail wrap">
  <h2 class="project-detail-title medium-title"><?php echo $project['title'];?></h2>
  <picture>
    <source type="image/webp" srcset="../../assets/img/webp/<?php echo $project['shorttitle'];?>-project.webp">
    <img class="project-detail-image" src="../../assets/img/<?php echo $project['shorttitle'];?>-project.png" alt="<?php echo $project['shorttitle'];?>" width="1440" height="1080" />
  </picture>
  <article class="project-detail-info">
    <h3 class="hide">Project info</h3>
    <dl class="def">
      <dt class="def-term">Creators</dt>
      <dd class="def-desc"><?php echo $project['user_id'] ?></dd>
      <dt class="def-term">Type</dt>
      <dd class="def-desc">
        <ul class="def-desc-type-list">
          <?php $types = explode(' ', $project['type']);
            foreach($types as $type):
              echo '<li>';
              echo $type;
              echo '</li>';
            endforeach;?>
        </ul>
      </dd>
      <dt class="def-term">Client</dt>
      <dd class="def-desc"><?php echo $project['client']; ?></dd>
    </dl>
  </article>
  <a href="<?php echo $project['online']; ?>" target="_blank" class="big-white-button project-detail-online">See online &rarr;</a>
  <article class="project-detail-briefing">
    <h3 class="project-detail-briefing-title small-title">Briefing</h3>
    <?php echo $project['briefing']; ?>
  </article>
  <article class="project-detail-colours">
    <h3 class="project-detail-colours-title small-title hide">Colour scheme</h3>
    <ul class="project-detail-colours-list">
      <?php $colours = explode(' ', $project['colour']);
          foreach($colours as $colour):
            echo '<li class="project-detail-colour" style="background-color:';
            echo $colour;
            echo '"></li>';
          endforeach;?>
    </ul>
  </article>
  <article class="project-detail-elaboration">
    <h3 class="project-detail-elaboration-title small-title">Concept & Journey</h3>
    <?php echo $project['elaboration']; ?>
  </article>
  <?php if($project['video'] === 1) {
      ?>
    <article class="project-detail-video">
    <h3 class="project-detail-video-title small-title">Case movie</h3>
    <video class="project-detail-video-source" width="1920" height="1080" controls>
      <source src="assets/video/<?php echo $project['shorttitle'] ?>-video.mp4" type="video/mp4"/>
    </video>
  </article>
  <?php
  } ?>
</section>
