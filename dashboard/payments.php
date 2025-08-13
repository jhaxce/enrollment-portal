                <?php if (session_status() === PHP_SESSION_NONE) {include("auth_session.php");} ?>
                <?php //include("payments_create.php")?>
                <?php include("payments_update.php")?>
                <?php //include("payments_delete.php")?>
                <?php include("payments_read.php")?>
                  <script>
                    $("#feedback").empty();
                  </script>
                <?php include("payments_content.php")?>