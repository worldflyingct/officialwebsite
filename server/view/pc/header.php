<script>
    var _hmt = _hmt || [];
    (function() {
        var hm,s,src,bp,s2,curProtocol;
        hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?2efac3d09a135e88e39c98a3388123df";
        s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
        src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?4b100c5a70f6caf5d080a7f72b529884":"https://jspassport.ssl.qhimg.com/11.0.1.js?4b100c5a70f6caf5d080a7f72b529884";
        document.write('<script src="' + src + '" id="sozz"><\/script>');
        bp = document.createElement('script');
        curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        s2 = document.getElementsByTagName("script")[0];
        s2.parentNode.insertBefore(bp, s2);
    })();
</script>
<nav>
    <div class="nav-center">
        <div class="logo"><img src="<?php AssetsUrl ();?>/imgs/wlogo2.png" alt="<?php WebsiteImportantWord ();?>"></div>
        <ul class="navbar">
            <li>
<?php if ($do == "index") { ?>
                <a href="#" style="color: #000" >首页</a>
<?php } else { ?>
                <a href="<?php SiteUrl ();?>/index.html"  >首页</a>
<?php } ?>
            </li>
            <li>
<?php if ($do == "iot") { ?>
                <a href="#" style="color: #000" >物联网</a>
<?php } else { ?>
                <a href="<?php SiteUrl ();?>/iot.html"  >物联网</a>
<?php } ?>
            </li>
            <li>
<?php if ($do == "solution") { ?>
                <a href="#" style="color: #000" >解决方案</a>
<?php } else { ?>
                <a href="<?php SiteUrl ();?>/solution.html"  >解决方案</a>
<?php } ?>
            </li>
            <li>
<?php if ($do == "news") { ?>
                <a href="#" style="color: #000" >新闻资讯</a>
<?php } else { ?>
                <a href="<?php SiteUrl ();?>/news.html"  >新闻资讯</a>
<?php } ?>
            </li>
            <li>
<?php if ($do == "about") { ?>
                <a href="#" style="color: #000" >关于我们</a>
<?php } else { ?>
                <a href="<?php SiteUrl ();?>/about.html"  >关于我们</a>
<?php } ?>
            </li>
            <li>
<?php if ($do == "join") { ?>
                <a href="#" style="color: #000" >人才合作</a>
<?php } else { ?>
                <a href="<?php SiteUrl ();?>/recruit.html"  >人才合作</a>
<?php } ?>
            </li>
        </ul>
    </div>
</nav>