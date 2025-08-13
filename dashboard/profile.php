                <?php if (session_status() === PHP_SESSION_NONE) {include("auth_session.php");} ?>
                <?php include("profile_create.php")?>
                <?php include("profile_update.php")?>
                <?php include("profile_delete.php")?>
                <?php include("profile_read.php")?>
                  <script>
                    $("#feedback").empty();
                  </script>
                <?php include("profile_content.php")?>