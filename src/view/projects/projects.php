<section class="projects wrap">
  <h2 class="projects-title medium-title">Projects</h2>
  <form class="projects-category-list" action="index.php?page=work" method="get">
    <label class="category-button" id="label-development" for="development">Development</label>
    <input type="radio" name="category" value="development" id="development" class="radio-button" />
    <label class="category-button" id="label-design" for="design">Design</label>
    <input type="radio" name="category" value="design" id="design" class="radio-button" />
    <label class="category-button" id="label-motion" for="motion">Motion</label>
    <input type="radio" name="category" value="motion" id="motion" class="radio-button" />
    <label class="category-button category-active" id="label-allprojects" for="allprojects">All projects</label>
    <input type="radio" name="category" value="allprojects" id="allprojects" class="radio-button" checked />
    <input type="submit" class="category-submit" name="submit" value="Submit" />
  </form>
  <?php if (!empty($_SESSION['user'])): ?>
  <!-- if admin is logged in -->
  <a class="projects-newlink big-white-button" href="index.php?page=addproject">Add new project</a>
  <?php endif; ?>
  <?php if (empty($projects)): ?>
    <p>No work yet</p>
  <?php else: ?>
    <ul class="projects-grid">
      <?php
        foreach ($projects as $project) {
         echo "<li>";
          echo "<article class=\"project\">";
            echo "<a href=\"index.php?page=project&id=" . $project['id'] . "\">";
             echo "<h3 class=\"medium-title project-text\">";
             echo $project['title'];
             echo "</h3>";
             echo "<picture>";
              echo "<source type=\"image/webp\" srcset=\"../../assets/img/webp/" . $project['shorttitle'] . "-project.webp\">";
              echo "<img class=\"image project-img\" src=\"../../assets/img/" . $project['shorttitle'] . "-project.png\" alt=" . $project['shorttitle'] . " width=\"720\" height=\"540\" />";
             echo "</picture>";
            echo "</a>";
          echo "</article>";
        echo "</li>";
        }
      ?>
    </ul>
  <?php endif; ?>
</section>
