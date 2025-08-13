                <?php if (session_status() === PHP_SESSION_NONE) {include("auth_session.php");} ?>
                <?php include("settings_create.php")?>
                <?php include("settings_update.php")?>
                <?php include("settings_delete.php")?>
                <?php include("settings_read.php")?>
                  <script>
                    $("#feedback").empty();
                  </script>
                <?php include("settings_content.php")?>