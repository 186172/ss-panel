
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <strong>&copy; <?php echo $site_name."  ".date('Y'); ?></strong>
        &nbsp;|&nbsp;
        V<?php echo $version; ?>
        &nbsp;|&nbsp;
        <?php
        $Runtime->Stop();
        echo $Runtime->SpendTime()."ms";
        ?>
    </div>
    <a target="_blank" href="tos.php">用户协议</a>
    &nbsp;|&nbsp;
    <a target="_blank" href="http://shadowsocks.org/en/download/clients.html">客户端下载</a>
</footer>
</div><!-- ./wrapper -->
<?php
include_once '../ana.php';
?>

<!-- jQuery 2.1.3 -->
<script src="../asset/js/jQuery.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../asset/js/bootstrap.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="../asset/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../asset/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="../asset/js/app.min.js" type="text/javascript"></script>
</body>
</html>
