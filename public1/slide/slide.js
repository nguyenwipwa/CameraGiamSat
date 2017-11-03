jQuery(document).ready(function ($) {

  var jssor_1_options = {
    $AutoPlay: true,
    $AutoPlaySteps: 4,
    $SlideDuration: 160,
    $SlideWidth: 210,
    /*$SlideHeight: 300,*/
    $SlideSpacing: 3,
    $Cols: 4,
    $ArrowNavigatorOptions: {
      $Class: $JssorArrowNavigator$,
      $Steps: 4
    },
    $BulletNavigatorOptions: {
      $Class: $JssorBulletNavigator$,
      $SpacingX: 1,
      $SpacingY: 1
    }
  };
  var jssor_3_options = {
    $AutoPlay: true,
    $AutoPlaySteps: 4,
    $SlideDuration: 160,
    $SlideWidth: 210,
    /*$SlideHeight: 300,*/
    $SlideSpacing: 3,
    $Cols: 4,
    $ArrowNavigatorOptions: {
      $Class: $JssorArrowNavigator$,
      $Steps: 4
    },
    $BulletNavigatorOptions: {
      $Class: $JssorBulletNavigator$,
      $SpacingX: 1,
      $SpacingY: 1
    }
  };
  var jssor_2_options = {
    $AutoPlay: true,
    $AutoPlaySteps: 7,
    $SlideDuration: 160,
    $SlideWidth: 120,
    /*$SlideHeight: 300,*/
    $SlideSpacing: 3,
    $Cols: 8,
    $ArrowNavigatorOptions: {
      $Class: $JssorArrowNavigator$,
      $Steps: 8
    },
    $BulletNavigatorOptions: {
      $Class: $JssorBulletNavigator$,
      $SpacingX: 1,
      $SpacingY: 1
    }
  };

  var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
  var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
  var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);
  var jssor_4_slider = new $JssorSlider$("jssor_4", jssor_3_options);
  /*responsive code begin*/
  /*you can remove responsive code if you don't want the slider scales while window resizing*/
  function ScaleSlider() {
    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
    if (refSize) {
      refSize = Math.min(refSize, 900);
      jssor_1_slider.$ScaleWidth(refSize);
      /*jssor_1_slider.$ScaleHeight(400); */
    }
    else {
      window.setTimeout(ScaleSlider, 30);
    }
  }
  ScaleSlider();
  $(window).bind("load", ScaleSlider);
  $(window).bind("resize", ScaleSlider);
  $(window).bind("orientationchange", ScaleSlider);
  /*responsive code end*/
});
