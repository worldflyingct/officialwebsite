# server
本程序的核心文件只有3个,config.php是用于存放配置文件的，functions.php是逻辑代码，index.php是用于存放路由文件的。

模板文件只要与index.php中的文件路径设置对应即可。

常用的restapi如下：
常用的restapi如下：

获取网站基本信息：
<table border="1">
<tr>
	<td>url</td>
	<td>参数</td>
	<td>返回</td>
</tr>
<tr>
	<td>/index.php?do=apigetbasedata</td>
	<td>无</td>
	<td>
<pre>{
    "title": "沃航科技_物联网解决方案服务提供商_沃航(武汉)科技股份有限公司",
    "keywords": "智慧仓库,智慧农业,远程抄表,无人网吧,智慧小区,远程监控,物联网,智能家居",
    "description": "沃航科技是一家专业的物联网公司，公司专注于物联网技术研发，lora，rfid等解决方案的实施，公司技术先进，是国内领先的物联网开发公司。",
    "address": "武汉市洪山区SBI光谷创业街9栋327室",
    "QQ": "932773931",
    "telephone": "027-59761089",
    "mobile": "13397158231",
    "email": "jevian_ma@worldflying.cn"
}</pre>
    </td>
</tr>
</table>

获取文章列表：
<table border="1">
<tr>
	<td>url</td>
	<td>参数</td>
	<td>返回</td>
</tr>
<tr>
	<td>/index.php?do=apigetarticlelist</td>
	<td>
<pre>{
    "page": 1, // 必填，页数
    "size": 2, // 必填，每页多少文章
    "type": 1  // 可选，文章类型，不选的话就是所有的文章类型都返回。
}</pre>
    </td>
	<td>
<pre>{
    "errcode": 0,
    "articlelist": [
    {
        "articleid": 241,
        "title": "一点一点学vart.x（八）",
        "thumbnail": "/uploads/article/2019/06/23/1561219573XKgG.png",
        "desc": "上一讲我们学习了vert.x如何操作redis，这一讲我们学习另一种vert.x操作redis的方法。两种方式调用相同的库，但是调用的函数不同，同学们注意对比。",
        "publishtime": "2019-06-22 23:52:19"
    },
    {
        "articleid": 240,
        "title": "一点一点学vart.x（七）二",
        "thumbnail": "/uploads/article/2019/06/22/1561190386ogp0.png",
        "desc": "这是我第一次对文章进行补充编写，主要是因为java8已经开始有了lambda表达式，并且vert.x也多次使用lambda表达式。因此对于redis的读写，我们将使用lamba重写一次。",
        "publishtime": "2019-06-22 15:50:35"
    }
    ],
    "totalcount": 241
}</pre>
    </td>
</tr>
</table>

获取文章内容：
<table border="1">
<tr>
	<td>url</td>
	<td>参数</td>
	<td>返回</td>
</tr>
<tr>
	<td>/index.php?do=apigetarticledesc</td>
	<td>
<pre>{
    "articleid": 241
}</pre>
    </td>
	<td>
<pre>{
    "errcode": 0,
    "article": {
    "title": "文章标题",
    "desc": "文章简介",
    "publishtime": "2019-06-22 23:52:19",
    "content": "文章内容",
    "thumbnail": "/uploads/article/2019/06/23/1561219573XKgG.png",
    "articletype": 1,
    "articlestatus": 1
    },
    "previousArticle": { // 上一篇文章
        "articleid": 240,
        "title": "一点一点学vart.x（一）"
    },
    "nextArticle": { // 下一篇文章
        "articleid": 0,
        "title": "文章不存在"
    }
}</pre>
    </td>
</tr>
</table>
