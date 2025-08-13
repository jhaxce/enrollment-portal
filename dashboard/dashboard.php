                <?php if (session_status() === PHP_SESSION_NONE) {include("auth_session.php");} ?>
                <?php //include("dashboard_create.php")?>
                <?php //include("dashboard_update.php")?>
                <?php //include("dashboard_delete.php")?>
                <?php //include("dashboard_read.php")?>
                  <script>
                    $("#feedback").empty();
                  </script>
                <?php include("dashboard_content.php")?>