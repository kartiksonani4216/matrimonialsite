<?php
if(isset($_SESSION['aname']) && isset($_SESSION['aid']) && isset($_SESSION['aemail']) && isset($_SESSION['aimg']))
{
  echo '
  <footer class="footer" >
        <div class="container-fluid">
         
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>';
}
else{
  header("location:admin_login.php");
}
?>
