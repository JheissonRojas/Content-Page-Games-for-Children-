<?
?>
<script>jQuery(function($) {
    'use strict';
    if ($.fn.slider) {
        $(".art-slidecontainerslide1").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            var helper = null;

            if ($.support.transition) {
                helper = new BackgroundHelper();
                helper.init("horizontal", "next", $(".art-slide-item", inner).first().css($.support.transition.prefix + "transition-duration"));
                inner.children().each(function () {
                    helper.processSlide($(this));
                });

                var items = helper.items(helper.current(0), helper.next(0));
                helper.setBackground(inner, items);
                helper.setPosition(inner, items);

                slideContainer.on("beforeSlide", function () {
                    var activeItem = $(".active", this),
                        nextItem = $(".next, .prev", this),
                        activePos = $(".art-slide-item", this).index(activeItem),
                        nextPos = $(".art-slide-item", this).index(nextItem),
                        currentItems = helper.items(helper.current(activePos), helper.current(nextPos));

                    helper.transition(inner, false);
                    helper.setBackground(inner, currentItems);
                    helper.setPosition(inner, currentItems);
                    if (inner.length) {
                        tmp = inner.get(0).offsetHeight;
                    }

                    var movedCurrentItems = helper.items(helper.current(activePos), helper.current(nextPos), true);
                    helper.transition(inner, true);
                    helper.setPosition(inner, movedCurrentItems);
                });
            }

            inner.children().eq(0).addClass("active");
            slideContainer.slider({
                pause: 3500,
                speed: 1500,
                repeat: true,
                animation: "horizontal",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigatorslide1"),
                helper: helper
                            });
        });
    }
});
</script><style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 3px;padding-left: 3px;  }
.art-content .art-postcontent-0 .layout-item-1 { margin-bottom: 10px;  }
.art-content .art-postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:3px;border-right-width:5px;border-bottom-width:5px;border-left-width:3px;border-top-color:#CFD8E2;border-right-color:#CFD8E2;border-bottom-color:#CFD8E2;border-left-color:#CFD8E2; border-spacing: 15px 0px; border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-3 { padding-right: 3px;padding-left: 3px; border-radius: 5px;  }
.art-content .art-postcontent-0 .layout-item-4 { border-spacing: 15px 0px; border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-5 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:0px;border-top-color:#CFD8E2;border-right-color:#CFD8E2;border-bottom-color:#CFD8E2;border-left-color:#CFD8E2; padding-right: 3px;padding-left: 3px; border-radius: 5px;  }
.art-content .art-postcontent-0 .layout-item-6 { background: #75F46C; padding-right: 3px;padding-left: 3px; border-radius: 5px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

.art-slidecontainerslide1 {
    position: relative;
        width: 610px;
    height: 270px;
        }

.art-slidecontainerslide1 .art-slide-item
{

}

.art-slidecontainerslide1 .art-slide-item {
    -webkit-transition: 1500ms ease-in-out left;
    -moz-transition: 1500ms ease-in-out left;
    -ms-transition: 1500ms ease-in-out left;
    -o-transition: 1500ms ease-in-out left;
    transition: 1500ms ease-in-out left;
    position: relative;
    display: none;
    width:  100%;
    height: 100%;
}

.art-slidecontainerslide1 .active, .art-slidecontainerslide1 .next, .art-slidecontainerslide1 .prev {
    display: block;
}

.art-slidecontainerslide1 .active {
    left: 0;
}

.art-slidecontainerslide1 .next, .art-slidecontainerslide1 .prev {
    position: absolute;
    top: 0;
    width: 100%;
}

.art-slidecontainerslide1 .next {
    left: 100%;
}

.art-slidecontainerslide1 .prev {
    left: -100%;
}

.art-slidecontainerslide1 .next.forward, .art-slidecontainerslide1 .prev.back {
    left: 0;
}

.art-slidecontainerslide1 .active.forward {
    left: -100%;
}

.art-slidecontainerslide1 .active.back {
    left: 100%;
}




.art-slideslide10 {
    background-image:  url('images/slideslide10.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slideslide11 {
    background-image:  url('images/slideslide11.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slideslide12 {
    background-image:  url('images/slideslide12.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}


.art-slidenavigatorslide1 {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 246px;
  left: 89.51%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigatorslide1
{
background: #B9C2CB;background: transparent;
-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;


padding:7px;





}
.art-slidenavigatorslide1 > a
{
background: #728597;background: #728597;background: #728597;background: #728597;background: #728597;background: #728597;background: #728597;-svg-background: #728597;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatorslide1 > a.active
{
background: #FD9D53;background: #FD9D53;background: #FD9D53;background: #FD9D53;background: #FD9D53;background: #FD9D53;background: #FD9D53;-svg-background: #FD9D53;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatorslide1 > a:hover
{
background: #455B73;background: #455B73;background: #455B73;background: #455B73;background: #455B73;background: #455B73;background: #455B73;-svg-background: #455B73;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}

</style>
