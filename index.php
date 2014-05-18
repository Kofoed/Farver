<html>
<head>
<script src="scripts/jquery-1.11.1.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
<link href="style/style.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.t, .c { 
    transition: 2s;
    opacity:0;
    position:absolute;
    top:50%;
    left:50%;
}
.t1, .t2, .t3 {margin:0;width:0;height:0;}
.c1 {width:0px;height:0px;border-radius:0px;}
.c2 {width:0px;height:0px;border-radius:0px;}
    
</style>
</head>
<body>
<div class="container">
    <div class="c c1"></div>
    <div class="c c2"></div>
    <div class="t t1"></div>
    <div class="t t2"></div>
    <div class="t t3"></div>
    <div class="button aligncenter">Randomize</div>
    </div>
</div>
<script type="text/javascript">
//$(".fullwidth").css("width" totalwidth);

var totalwidth = window.innerWidth;
var totalheight = window.innerHeight;
    
$(window).resize(function() {
    var totalwidth = window.innerWidth;
    var totalheight = window.innerHeight;
});

$(window).load(function() {    
});
    
$(".button").click(function() {
    
    $(".button").addClass("pressed");
    
    $(".t, .c").css("opacity", "100");

    var a = Math.random() * 360;
    var b = Math.random() * 360;
    var c = Math.random() * 360;
    
    var colour1 = Math.floor(Math.random() * 255);
    var colour2 = Math.floor(Math.random() * 255);
    var colour3 = Math.floor(Math.random() * 255);
    
    var size1 = Math.floor((Math.random() * totalwidth / 2) + 500);
    var size2 = Math.floor((Math.random() * totalwidth / 2) + 200);
    var size3 = Math.floor((Math.random() * totalwidth / 2) + 300);
    var size4 = Math.floor((Math.random() * totalwidth / 2) + totalwidth / 5);
    
    var dotsize = Math.floor((Math.random() * 500) + 10);
    var dotsize2 = Math.floor((Math.random() * 10) + 1);
    
    var size5 = Math.floor((Math.random() * totalwidth / 2) + (totalwidth / 2) + 10);
    
//    function colour() {
//        Math.random() * 255;
//    };
    
//     function degree() {
//        Math.random() * 360;
//    };
    
    $(".t1").css({
        "transform": "rotate(" + a + "deg)",
        "background": "rgba(" + colour1 + "," + colour2 + "," + colour3 + ",0.8)",
        "width": size1,
        "height": size1,
        "margin-left": (size1 / 2) * -1,
        "margin-top": (size1 / 2) * -1
    });
     $(".t2").css({
        "transform": "rotate(" + b + "deg)",
         "background": "rgba(" + colour3 + "," + colour1 + "," + colour3 + ",0.8)",
        "width": size2,
        "height": size2,
        "margin-left": (size2 / 2) * -1,
        "margin-top": (size2 / 2) * -1
    }); 
     $(".t3").css({
        "transform": "rotate(" + c + "deg)",
         "background": "rgba(" + colour3 + "," + colour2 + "," + colour1 + ",0.8)",
        "width": size3,
        "height": size3,
        "margin-left": (size3 / 2) * -1,
        "margin-top": (size3 / 2) * -1
    });
    $(".c1").css({
        "transform": "rotate(" + c * 1.3 + "deg)",
        "width": size4,
        "height": size4,
        "border": dotsize +"px rgba(" + colour1 + "," + colour2 + "," + colour1 + ",0.8) solid",
        "border-radius": size4,
        "margin-left": ((size4 / 2) + (dotsize)) * -1,
        "margin-top": ((size4 / 2) + (dotsize)) * -1
    });
    $(".c2").css({
        "transform": "rotate(" + c / 100 + "deg)",
        "width": size5,
        "height": size5,
        "border": dotsize2 +"px rgba(" + colour1 * 2 + "," + colour1 * 2 + "," + colour1 * 2 + ",0.8) solid",
        "border-radius": size5,
        "margin-left": ((size5 / 2) + (dotsize2)) * -1,
        "margin-top": ((size5 / 2) + (dotsize2)) * -1
    });
    
    console.log("farve " + colour1 + "," + colour2 + "," + colour3);
    console.log("størrelser " + size1 + "," + size2 + "," + size3);
});

</script>
</body>
</html>