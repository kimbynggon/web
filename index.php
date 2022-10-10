
<style>
    * {
    margin: 0;
    padding: 0;
}

body {
    font: 17px 'Nanum Gothic', sans-serif;
}

a {
    text-decoration: none;
    color: #404040;
}

li {
    list-style: none;
}

/*BODY*/
#nav {
    width: 100%;
}

#nav:after {
    content: "";
    display: block;
    clear: both;
}

.main {
    margin: 30px;
}

.main > li {
    position: relative;
    float: left;
    width: 210px;
    height: 30px;
    box-sizing: border-box;
    line-height: 30px;
    text-align: center;
    background: #ccc;
}

.main > li:hover .sub {
    /*display: block;*/
}

.main > li a {
    display: block;
    transition: all 0.3s;
}

.main > li a:hover {
    background: #009688;
    color: #fff;
}

.sub {
    display: none;
    position: absolute;
    top: 30px;
    left: 0;
    z-index: 1;
    width: 100%;
    background: #eee;
    opacity: 0.8;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
    $(".main>li").mouseover(function() {
        $(this).children(".sub").stop().slideDown();
    });
    $(".main>li").mouseleave(function() {
        $(this).children(".sub").stop().slideUp();
    });
});

    // $(document).ready(function(){
    //    $(document).on('mouseover','.d1_menu',function(e){
    //     var d1menuidx = $(this).attr('menulabel');
    //     $('.d2_menu_wrap').css({'display':'block'})
    //     $('.d2_wrap_'+d1menuidx).css({'display':'flex'});
    //    });
    // });
</script>
<nav>    <div id="nav">        <ul class="main">            <li><a href="#">MAIN 01</a></li>            <li><a href="#">MAIN 02</a>                <ul class="sub">                    <li><a href="#">SUB 01</a></li>                    <li><a href="#">SUB 02</a></li>                    <li><a href="#">SUB 03</a></li>                    <li><a href="#">SUB 04</a></li>                </ul>            </li>            <li><a href="#">MAIN 03</a>                <ul class="sub">                    <li><a href="#">SUB 05</a></li>                    <li><a href="#">SUB 06</a></li>                    <li><a href="#">SUB 07</a></li>                </ul>            </li>        </ul>    </div></nav>

<div style="width: 100%;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="d1_menu_div14323" style="display:flex; gap: 1.3rem; padding: 1.3rem;">
            <?= $d1_html?>
            </div>
        </div>
</div>
    <div class="d2_menu_wrap" style="max-width: 1400px; margin: 0 auto; display:none; padding: 1.3rem; gap: 1.3rem;">
    <?=$d2_html?>
        <div style="display: block; margin-left: 700px;">
            <a>img</a>
        </div>
</div>

