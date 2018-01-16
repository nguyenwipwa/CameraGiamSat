 <div id="top">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php echo $__env->make('index.layouts.topmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    
    <!-- Menu -->
    <?php echo $__env->make('index.layouts.collapse', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- End Menu -->
    <div class="clear"></div>
</div>