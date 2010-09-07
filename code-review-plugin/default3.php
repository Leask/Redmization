<html>
    <head>
        <title>123</title>
<link type="text/css" rel="stylesheet" href="css/css.css"/>
<link type="text/css" rel="stylesheet" href="css/test.css"/>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/js.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
<div id="wrapper2">
<div id="top-menu">
    <div id="account">
        <ul><li><a class="my-account" href="/AnYuan/my/account">我的帐号</a></li>
<li><a class="logout" href="/AnYuan/logout">退出</a></li></ul>    </div>
    <div id="loggedas">登录为 <a href="/AnYuan/users/12">sunxinghua008</a></div>
    <ul><li><a class="home" href="/AnYuan/">主页</a></li>
<li><a class="my-page" href="/AnYuan/my/page">我的工作台</a></li>
<li><a class="projects" href="/AnYuan/projects">项目</a></li>
<li><a class="help" href="http://www.redmine.org/guide">帮助</a></li></ul></div>

<div id="header">
    <div id="quick-search">
        <form method="get" action="/AnYuan/search/index/saas">
        <input type="hidden" value="1" name="changesets">
        <a accesskey="4" href="/AnYuan/search/index/saas">搜索</a>:
        <input type="text" size="20" name="q" id="q" class="small" accesskey="f">
        </form>
        <select onchange="if (this.value != '') { window.location = this.value; }"><option value="">选择一个项目...</option><option disabled="disabled" value="">---</option><option value="/AnYuan/projects/saas?jump=repository" selected="selected">SaaS</option><option value="/AnYuan/projects/edu?jump=repository">&nbsp;&nbsp;» Kindergarten Assessment</option><option value="/AnYuan/projects/redmization?jump=repository">&nbsp;&nbsp;» Redmine Customization</option><option value="/AnYuan/projects/sandbox?jump=repository">沙盘</option><option value="/AnYuan/projects/svn?jump=repository">&nbsp;&nbsp;» svn</option></select>
    </div>

    <h1><a class="root" href="/AnYuan/projects/overview?jump=repository">安元公司</a> » SaaS</h1>


    <div id="main-menu">
        <ul><li><a class="overview" href="/AnYuan/projects/saas">概述</a></li>
<li><a class="activity" href="/AnYuan/projects/saas/activity">活动</a></li>
<li><a class="roadmap" href="/AnYuan/projects/saas/roadmap">路线图</a></li>
<li><a class="issues" href="/AnYuan/projects/saas/issues">问题</a></li>
<li><a class="new-issue" accesskey="7" href="/AnYuan/projects/saas/issues/new">新建问题</a></li>
<li><a class="wiki" href="/AnYuan/projects/saas/wiki">Wiki</a></li>
<li><a class="files" href="/AnYuan/projects/saas/files">文件</a></li>
<li><a class="repository selected" href="/AnYuan/projects/saas/repository">版本库</a></li>
<li><a class="settings" href="/AnYuan/projects/saas/settings">配置</a></li></ul>
    </div>

</div>

<div id="main" class="nosidebar">
    <div id="sidebar">


    </div>

    <div id="content">



<div class="contextual">


<a class="icon icon-stats" href="/AnYuan/projects/saas/repository/statistics">统计</a>

<form method="get" id="revision_selector" action="/AnYuan/projects/saas/repository/entry/widget/wcaptcha.php?rev=">  <!-- Branches Dropdown -->
      | 分支:
    <select name="branch" id="branch"><option value=""></option>
<option value="leask">leask</option>
<option selected="selected" value="master">master</option>
<option value="sunxinghua">sunxinghua</option>
<option value="wcm">wcm</option></select>


  | 修订:
  <input type="text" value="master" size="8" name="rev" id="rev">
</form>
</div>

<h2><a href="/AnYuan/projects/saas/repository/revisions/6b3aabfb1b5f8dc77e522dfce22b652e93764d6f/show">root</a>

    / <a href="/AnYuan/projects/saas/repository/revisions/6b3aabfb1b5f8dc77e522dfce22b652e93764d6f/show/public">public</a>

    / <a href="/AnYuan/projects/saas/repository/revisions/6b3aabfb1b5f8dc77e522dfce22b652e93764d6f/show/public/global">global</a>

    / <a href="/AnYuan/projects/saas/repository/revisions/6b3aabfb1b5f8dc77e522dfce22b652e93764d6f/show/public/global/workflow">workflow</a>


    / <a href="/AnYuan/projects/saas/repository/revisions/6b3aabfb1b5f8dc77e522dfce22b652e93764d6f/changes/public/global/workflow/ide.js">ide.js</a>


@ 6b3aabfb1b5f8dc77e522dfce22b652e93764d6f

</h2>

<p>

</p><p>
<a href="/AnYuan/projects/saas/repository/revisions/master/changes/widget/wcaptcha.php">历史记录</a> |

    查看 |


    <a href="/AnYuan/projects/saas/repository/revisions/master/annotate/widget/wcaptcha.php">追溯</a> |

<a href="/AnYuan/projects/saas/repository/revisions/master/raw/widget/wcaptcha.php">下载</a>
(820 Bytes)
</p>




<div class="autoscroll" id="c1">
<table class="filecontent syntaxhl">
<tbody>


<tr><th id="L1" class="line-num" style="cursor: pointer;"><a href="#L1">1</a></th><td class="line-code"><pre><span class="idl">&lt;?php</span>
</pre></td></tr>


<tr><th id="L2" class="line-num" style="cursor: pointer;"><a href="#L2">2</a></th><td class="line-code"><pre><span class="c">/**
</span></pre></td></tr>


<tr><th id="L3" class="line-num" style="cursor: pointer;"><a href="#L3">3</a></th><td class="line-code"><pre> * Captchar widget class file
</pre></td></tr>


<tr><th id="L4" class="line-num" style="cursor: pointer;"><a href="#L4">4</a></th><td class="line-code"><pre> */
</pre></td></tr>


<tr><th id="L5" class="line-num" style="cursor: pointer;"><a href="#L5">5</a></th><td class="line-code"><pre></pre></td></tr>


<tr><th id="L6" class="line-num" style="cursor: pointer;"><a href="#L6">6</a></th><td class="line-code"><pre><span class="c">/**
</span></pre></td></tr>


<tr><th id="L7" class="line-num" style="cursor: pointer;"><a href="#L7">7</a></th><td class="line-code"><pre> * Captchar as a widget
</pre></td></tr>


<tr><th id="L8" class="line-num" style="cursor: pointer;"><a href="#L8">8</a></th><td class="line-code"><pre> */
</pre></td></tr>


<tr><th id="L9" class="line-num" style="cursor: pointer;"><a href="#L9">9</a></th><td class="line-code"><pre><span class="r">class</span> <span class="cl">WCaptcha</span> <span class="r">extends</span> <span class="co">Widget</span>
</pre></td></tr>


<tr><th id="L10" class="line-num" style="cursor: pointer;"><a href="#L10">10</a></th><td class="line-code"><pre>{
</pre></td></tr>


<tr><th id="L11" class="line-num" style="cursor: pointer;"><a href="#L11">11</a></th><td class="line-code"><pre></pre></td></tr>


<tr><th id="L12" class="line-num" style="cursor: pointer;"><a href="#L12">12</a></th><td class="line-code"><pre>    <span class="c">/**
</span></pre></td></tr>


<tr><th id="L13" class="line-num" style="cursor: pointer;"><a href="#L13">13</a></th><td class="line-code"><pre>     * Initialization
</pre></td></tr>


<tr><th id="L14" class="line-num" style="cursor: pointer;"><a href="#L14">14</a></th><td class="line-code"><pre>     */
</pre></td></tr>


<tr><th id="L15" class="line-num" style="cursor: pointer;"><a href="#L15">15</a></th><td class="line-code"><pre>    <span class="r">public</span> <span class="r">function</span> <span class="fu">__construct</span>(<span class="lv">$strCaptchaHash</span> = <span class="pc">null</span>)
</pre></td></tr>


<tr><th id="L16" class="line-num" style="cursor: pointer;"><a href="#L16">16</a></th><td class="line-code"><pre>    {
</pre></td></tr>


<tr><th id="L17" class="line-num" style="cursor: pointer;"><a href="#L17">17</a></th><td class="line-code"><pre>        <span class="pc">parent</span>::__construct();
</pre></td></tr>


<tr><th id="L18" class="line-num" style="cursor: pointer;"><a href="#L18">18</a></th><td class="line-code"><pre>        <span class="co">Base</span>::load(<span class="s"><span class="dl">'</span><span class="k">library.platform.gadget.captcha.captcha</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th id="L19" class="line-num" style="cursor: pointer;"><a href="#L19">19</a></th><td class="line-code"><pre>    }
</pre></td></tr>


<tr><th id="L20" class="line-num" style="cursor: pointer;"><a href="#L20">20</a></th><td class="line-code"><pre></pre></td></tr>


<tr><th id="L21" class="line-num" style="cursor: pointer;"><a href="#L21">21</a></th><td class="line-code"><pre>    <span class="c">/**
</span></pre></td></tr>


<tr><th id="L22" class="line-num" style="cursor: pointer;"><a href="#L22">22</a></th><td class="line-code"><pre>     * Render the captcha image
</pre></td></tr>


<tr><th id="L23" class="line-num" style="cursor: pointer;"><a href="#L23">23</a></th><td class="line-code"><pre>     */
</pre></td></tr>


<tr><th id="L24" class="line-num" style="cursor: pointer;"><a href="#L24">24</a></th><td class="line-code"><pre>    <span class="r">public</span> <span class="r">function</span> <span class="fu">actionRender</span>()
</pre></td></tr>


<tr><th id="L25" class="line-num" style="cursor: pointer;"><a href="#L25">25</a></th><td class="line-code"><pre>    {
</pre></td></tr>


<tr><th id="L26" class="line-num" style="cursor: pointer;"><a href="#L26">26</a></th><td class="line-code"><pre>        <span class="ex">@</span><span class="lv">$strCaptchaId</span> = <span class="pd">$_REQUEST</span>[<span class="s"><span class="dl">'</span><span class="k">captchaid</span><span class="dl">'</span></span>];
</pre></td></tr>


<tr><th id="L27" class="line-num" style="cursor: pointer;"><a href="#L27">27</a></th><td class="line-code"><pre>        <span class="r">if</span> (<span class="lv">$strCaptchaId</span>) {
</pre></td></tr>


<tr><th id="L28" class="line-num" style="cursor: pointer;"><a href="#L28">28</a></th><td class="line-code"><pre>            <span class="lv">$objCaptcha</span> = <span class="r">new</span> <span class="co">Captcha</span>;
</pre></td></tr>


<tr><th id="L29" class="line-num" style="cursor: pointer;"><a href="#L29">29</a></th><td class="line-code"><pre>            <span class="lv">$objCache</span> = <span class="r">new</span> <span class="co">Mcache</span>();
</pre></td></tr>


<tr><th id="L30" class="line-num" style="cursor: pointer;"><a href="#L30">30</a></th><td class="line-code"><pre></pre></td></tr>


<tr><th id="L31" class="line-num" style="cursor: pointer;"><a href="#L31">31</a></th><td class="line-code"><pre>            <span class="lv">$strVerifyCode</span> = <span class="lv">$objCaptcha</span>-&gt;generateVerifyCode();
</pre></td></tr>


<tr><th id="L32" class="line-num" style="cursor: pointer;"><a href="#L32">32</a></th><td class="line-code"><pre></pre></td></tr>


<tr><th id="L33" class="line-num" style="cursor: pointer;"><a href="#L33">33</a></th><td class="line-code"><pre>            <span class="lv">$objCache</span>-&gt;set(<span class="lv">$strCaptchaId</span>, <span class="lv">$strVerifyCode</span>, <span class="i">180</span>);
</pre></td></tr>


<tr><th id="L34" class="line-num" style="cursor: pointer;"><a href="#L34">34</a></th><td class="line-code"><pre></pre></td></tr>


<tr><th id="L35" class="line-num" style="cursor: pointer;"><a href="#L35">35</a></th><td class="line-code"><pre>            <span class="lv">$objCaptcha</span>-&gt;renderImage(<span class="lv">$strVerifyCode</span>);
</pre></td></tr>


<tr><th id="L36" class="line-num" style="cursor: pointer;"><a href="#L36">36</a></th><td class="line-code"><pre>        } <span class="r">else</span> {
</pre></td></tr>


<tr><th id="L37" class="line-num" style="cursor: pointer;"><a href="#L37">37</a></th><td class="line-code"><pre>            <span class="co">Debug</span>::out(<span class="s"><span class="dl">'</span><span class="k">Wrong parameters!</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th id="L38" class="line-num" style="cursor: pointer;"><a href="#L38">38</a></th><td class="line-code"><pre>        }
</pre></td></tr>


<tr><th id="L39" class="line-num" style="cursor: pointer;"><a href="#L39">39</a></th><td class="line-code"><pre>    }
</pre></td></tr>


<tr><th id="L40" class="line-num" style="cursor: pointer;"><a href="#L40">40</a></th><td class="line-code"><pre>}
</pre></td></tr>


</tbody>
</table>
</div>





				<div style="clear: both;"></div>
    </div>
</div>

<div style="display: none;" id="ajax-indicator"><span>载入中...</span></div>

<div id="footer">
  <div class="bgl"><div class="bgr">
    Powered by <a href="http://www.redmine.org/">Redmine</a> &copy; 2006-2010 Jean-Philippe Lang
  </div></div>
</div>
</div>
</div>

</body>
</html>