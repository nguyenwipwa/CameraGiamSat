    <link rel="shortcut icon" href="http://fptcamera.vn/resources/uploads/images/automatic/favicon/camera-giam-sat-fpt.png" type="image/x-icon">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/bootstrap.css')); ?>" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/bootstrap-theme.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/normalize.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/app.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/flexslider.css')); ?>" />


    <script src="<?php echo e(asset('public/js/jquery-2.1.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery-ui-1.9.2.custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/bootbox.min.js')); ?>"></script>
    
    <!-- <script src="<?php echo e(asset('public/js/bootstrap.js')); ?>"></script> -->
    <script src="<?php echo e(asset('public/js/scrollfix.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/equalheight.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.flexslider-min.js')); ?>"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-66346872-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript">
        function lookup(keyword) {
            var keyword = document.getElementById("searchbutton").value;
            if (keyword.length == 0) {
                $('#autoSuggestionsList').fadeOut(400);
            } else {
                $.get("<?php echo e(url('/search-ajax')); ?>/"+ keyword, null ,
                    function(data) {
                        if (data.length > 14) {
                            $('#autoSuggestionsList').fadeIn(400);
                        // var obj = jQuery.parseJSON(data);
                        var obj = JSON.parse(data);
                        var strhtml = '';
                        //$('#autoSuggestionsList').html(data['message']);
                        strhtml += '<div class="sgg-outer">';
                        for (var index in obj) {
                            //alert(obj.message[1].label);
                            //alert(obj.length());
                            for (var i = 0; i < obj[index].length; i++) {
                                //alert(obj.message[i].value);
                                //append
                                strhtml += '<div class="sgg-row">';
                                strhtml += '<div class="sgg-image"><img width="50" height="50" src="<?php echo e(asset("public/images/san-pham")); ?>/' + obj.message[i].img + '"/></div>';
                                strhtml += '<div class="sgg-right">';
                                strhtml += '<div class="sgg-title"><a href="<?php echo e(url("/detail-product")); ?>/' + obj.message[i].id + '">' + obj.message[i].name + '</a></div>';
                                strhtml += '<div class="sgg-sellprice">' + parseFloat(obj.message[i].price).toFixed().replace(/./g, function(c, i, a) { return i && c !== "." && ((a.length - i) % 3 === 0) ? '.' + c : c; }) + ' đ</div>';
                                strhtml += '</div>';
                                strhtml += '</div>';
                            }
                        }
                        strhtml += '</div>';
                        $('#autoSuggestionsList').html(strhtml);
                    } else {
                        var strhtml = '';
                        strhtml += '<div class="sgg-outer">';
                        strhtml += '<div class="sgg-row">';
                        strhtml += '<div class="sgg-title"><a>Không có sản phẩm nào tương ứng</a></div>';
                        strhtml += '</div>';
                        strhtml += '</div>';
                        $('#autoSuggestionsList').html(strhtml);
                    }
                });
            // Ajax_Suggestion(keyword);
        }
    }
</script>