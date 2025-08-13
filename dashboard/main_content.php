      <!-- Box START -->

      <div class="projects-section">
        <div id="header" class="projects-section-header">
        </div>
        <p id="feedback" class="projects-section-header" style="align-self: center;"></p>
        <div class="project-boxes">
          <div class="container-fluid">
            <div class="col-lg col-lg-offset-2">

              <!-- Content START-->
              
              <div id="content" class="panel-body">

              <?php
                if (isset($_GET['page'])) {
                  $page = $_GET['page'];

                  if ($page === 'profile' || $page === 'payments' || $page === 'settings') {
                    echo '<script>';
                    echo 'loadPage("' . $page . '");';
                    echo '</script>';
                  } else {
                    // Invalid page, show default content (e.g., a welcome message)
                    echo '<script>';
                    echo 'loadPage("dashboard");';
                    echo '</script>';
                  }
                } else {
                  // No page specified, show default content (e.g., a welcome message)
                  echo '<script>';
                  echo 'loadPage("dashboard");';
                  echo '</script>';
                }
              ?>