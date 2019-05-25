<footer>
    <div class="footer-p1">
        <p class="phone">
            <span class="text-span">手机：<?php WebsiteMobile ();?></span>
        </p>
        <p class="qq">
            <span class="text-span">QQ：<?php WebsiteQQ ();?></span>
        </p>
    </div>
    <p class="footer-p2">邮箱：<?php WebsiteEmail ();?></p>
    <p class="footer-p3">地点：<?php WebsiteAddress ();?></p>
    <p><?php WebsiteRecord ();?></p>
</footer>
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
