<?php
if(isset($_SESSION['fname']) && isset($_SESSION['uid']) && isset($_SESSION['email']) )
{
  echo '
  <footer class="footer">
        <div class="container-fluid">
         
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="" target="_blank">Bridal</a> for a better Partner.
          </div>
        </div>
      </footer>
  ';
}

?>
