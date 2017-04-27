
<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/image-hover/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>assets/plugins/image-hover/js/touch.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="<?php echo base_url('');?>assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?php echo base_url('');?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
<!--[if lt IE 9]>
<script src="<?php echo base_url('');?>assets/plugins/respond.js"></script>
<script src="<?php echo base_url('');?>assets/plugins/html5shiv.js"></script>
<script src="<?php echo base_url('');?>assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>