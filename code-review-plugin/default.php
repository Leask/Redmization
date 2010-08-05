
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>

<title>安元项目管理系统</title>

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
        <input type="hidden" value="1" name="changesets"/>
        <a accesskey="4" href="/AnYuan/search/index/saas">搜索</a>:
        <input type="text" size="20" name="q" id="q" class="small" accesskey="f"/>
        </form>
        <select onchange="if (this.value != '') { window.location = this.value; }"><option value="">选择一个项目...</option><option disabled="disabled" value="">---</option><option value="/AnYuan/projects/saas?jump=repository" selected="selected">SaaS</option><option value="/AnYuan/projects/edu?jump=repository">&nbsp;&nbsp;» Kindergarten Assessment</option><option value="/AnYuan/projects/redmization?jump=repository">&nbsp;&nbsp;» Redmine Customization</option><option value="/AnYuan/projects/sandbox?jump=repository">沙盘</option><option value="/AnYuan/projects/svn?jump=repository">&nbsp;&nbsp;» svn</option></select>
    </div>

    <h1><a class="root" href="/AnYuan/projects/overview?jump=repository">安元公司</a> » SaaS</h1>


    <div id="main-menu">
        <ul><li><a class="overview" href="/AnYuan/projects/saas">概述</a></li>
<li><a class="activity" href="/AnYuan/projects/saas/activity">活动</a></li>
<li><a class="issues" href="/AnYuan/projects/saas/issues">问题</a></li>
<li><a class="new-issue" accesskey="7" href="/AnYuan/projects/saas/issues/new">新建问题</a></li>
<li><a class="news" href="/AnYuan/projects/saas/news">新闻</a></li>
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

        <h2>修订 b049d7c7:a91b663b </h2>

<!-- Choose view type -->
<form method="get" action="/AnYuan/projects/saas/repository/revisions/a91b663b4aa77cfccca9e507ec3ed16c57957119/diff">
  <input type="hidden" value="a91b663b4aa77cfccca9e507ec3ed16c57957119" name="rev" id="rev"/>
  <input type="hidden" value="b049d7c7eff9df8f19ca07bf198c942972853cce" name="rev_to" id="rev_to"/>
  <p><label>查看差别</label>
  <select onchange="if (this.value != '') {this.form.submit()}" name="type" id="type"><option selected="selected" value="inline">直列</option>
<option value="sbs">并排</option></select></p>
</form>

<div class="autoscroll" id="c1">
<table class="filecontent syntaxhl">
<thead>
<tr><th class="filename" colspan="3">b/controller/demo.php</th></tr>
</thead>
<tbody>

<tr>
  <th class="line-num" style="cursor: pointer;">441</th>
  <th class="line-num" style="cursor: pointer;">441</th>
    <td class="line-code ">
    <pre>        Base::load('library.user.userctrl');
</pre>
 </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">442</th>
  <th class="line-num" style="cursor: pointer;">442</th>
    <td class="line-code ">
    <pre>        $objUserCtrl = new UserCtrl;
</pre>
   
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">443</th>
  <th class="line-num" style="cursor: pointer;">443</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">444</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        $objUserCtrl-&gt;freezeUser('Leask')</pre>
    </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">444</th>
    <td class="line-code diff_in">
    <pre>        $bolResult = $objUserCtrl-&gt;freezeUser('Leask');</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">445</th>
  <th class="line-num" style="cursor: pointer;">445</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">446</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        echo 'User Leask has been freesed!';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">446</th>
    <td class="line-code diff_in">
    <pre>        if ($bolResult) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">447</th>
    <td class="line-code diff_in">
    <pre>            echo 'User Leask has been freesed!';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">448</th>
    <td class="line-code diff_in">
    <pre>        } else {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">449</th>
    <td class="line-code diff_in">
    <pre>            echo 'Failure!';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">450</th>
    <td class="line-code diff_in">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">447</th>
  <th class="line-num" style="cursor: pointer;">451</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">448</th>
  <th class="line-num" style="cursor: pointer;">452</th>
    <td class="line-code ">
    <pre>        $objUserCtrl = null;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">449</th>
  <th class="line-num" style="cursor: pointer;">453</th>
    <td class="line-code ">
    <pre>    }
</pre>
  </td>
  </tr>

<tr class="spacing">
<th class="line-num" style="cursor: pointer;">...</th><th class="line-num" style="cursor: pointer;">...</th><td></td>
</tr>
<tr>
  <th class="line-num" style="cursor: pointer;">457</th>
  <th class="line-num" style="cursor: pointer;">461</th>
    <td class="line-code ">
    <pre>        Base::load('library.user.userctrl');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">458</th>
  <th class="line-num" style="cursor: pointer;">462</th>
    <td class="line-code ">
    <pre>        $objUserCtrl = new UserCtrl;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">459</th>
  <th class="line-num" style="cursor: pointer;">463</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">460</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        $objUserCtrl-&gt;thawUser('Leask');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">464</th>
    <td class="line-code diff_in">
    <pre>        $bolResult = $objUserCtrl-&gt;thawUser('Leask');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">461</th>
  <th class="line-num" style="cursor: pointer;">465</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">462</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        echo 'User Leask has been thawed!';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">466</th>
    <td class="line-code diff_in">
    <pre>        if ($bolResult) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">467</th>
    <td class="line-code diff_in">
    <pre>            echo 'User Leask has been thawed!';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">468</th>
    <td class="line-code diff_in">
    <pre>        } else {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">469</th>
    <td class="line-code diff_in">
    <pre>            echo 'Failure!';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">470</th>
    <td class="line-code diff_in">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">463</th>
  <th class="line-num" style="cursor: pointer;">471</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">464</th>
  <th class="line-num" style="cursor: pointer;">472</th>
    <td class="line-code ">
    <pre>        $objUserCtrl = null;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">465</th>
  <th class="line-num" style="cursor: pointer;">473</th>
    <td class="line-code ">
    <pre>    }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">466</th>
  <th class="line-num" style="cursor: pointer;">474</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">475</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">476</th>
    <td class="line-code diff_in">
    <pre>    public function actionCreateCompany()
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">477</th>
    <td class="line-code diff_in">
    <pre>    {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">478</th>
    <td class="line-code diff_in">
    <pre>        @$strName          = $_POST['name'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">479</th>
    <td class="line-code diff_in">
    <pre>        @$strPermissions   = $_POST['permissions'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">480</th>
    <td class="line-code diff_in">
    <pre>        @$strParent        = $_POST['parent'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">481</th>
    <td class="line-code diff_in">
    <pre>        @$strType          = $_POST['type'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">482</th>
    <td class="line-code diff_in">
    <pre>        @$strBusinessModel = $_POST['businessmodel'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">483</th>
    <td class="line-code diff_in">
    <pre>        @$strScale         = $_POST['scale'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">484</th>
    <td class="line-code diff_in">
    <pre>        @$strCountry       = $_POST['country'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">485</th>
    <td class="line-code diff_in">
    <pre>        @$strProvince      = $_POST['province'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">486</th>
    <td class="line-code diff_in">
    <pre>        @$strCity          = $_POST['city'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">487</th>
    <td class="line-code diff_in">
    <pre>        @$strAddress       = $_POST['address'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">488</th>
    <td class="line-code diff_in">
    <pre>        @$strZip           = $_POST['zip'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">489</th>
    <td class="line-code diff_in">
    <pre>        @$strTel           = $_POST['tel'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">490</th>
    <td class="line-code diff_in">
    <pre>        @$strMobile        = $_POST['mobile'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">491</th>
    <td class="line-code diff_in">
    <pre>        @$strFax           = $_POST['fax'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">492</th>
    <td class="line-code diff_in">
    <pre>        @$strEmail         = $_POST['email'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">493</th>
    <td class="line-code diff_in">
    <pre>        @$strQq            = $_POST['qq'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">494</th>
    <td class="line-code diff_in">
    <pre>        @$strMsn           = $_POST['msn'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">495</th>
    <td class="line-code diff_in">
    <pre>        @$strContact       = $_POST['contact'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">496</th>
    <td class="line-code diff_in">
    <pre>        @$strMainBusiness  = $_POST['mainbusiness'];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">497</th>
    <td class="line-code diff_in">
    <pre>        @$strIndustry      = $_POST[''];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">498</th>
    <td class="line-code diff_in">
    <pre>        @$strInterest      = $_POST[''];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">499</th>
    <td class="line-code diff_in">
    <pre>        @$strAbout         = $_POST[''];
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">500</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">501</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">502</th>
    <td class="line-code diff_in">
    <pre>        Base::load('library.company.companyctrl');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">503</th>
    <td class="line-code diff_in">
    <pre>        $objCompanyCtrl = new CompanyCtrl;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">504</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">505</th>
    <td class="line-code diff_in">
    <pre>        //temp
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">506</th>
    <td class="line-code diff_in">
    <pre>        $objCompanyCtrl-&gt;createCompany($strName,
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">507</th>
    <td class="line-code diff_in">
    <pre>                                       $strPermissions   = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">508</th>
    <td class="line-code diff_in">
    <pre>                                       $strParent        = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">509</th>
    <td class="line-code diff_in">
    <pre>                                       $strType          = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">510</th>
    <td class="line-code diff_in">
    <pre>                                       $strBusinessModel = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">511</th>
    <td class="line-code diff_in">
    <pre>                                       $strScale         = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">512</th>
    <td class="line-code diff_in">
    <pre>                                       $strCountry       = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">513</th>
    <td class="line-code diff_in">
    <pre>                                       $strProvince      = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">514</th>
    <td class="line-code diff_in">
    <pre>                                       $strCity          = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">515</th>
    <td class="line-code diff_in">
    <pre>                                       $strAddress       = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">516</th>
    <td class="line-code diff_in">
    <pre>                                       $strZip           = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">517</th>
    <td class="line-code diff_in">
    <pre>                                       $strTel           = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">518</th>
    <td class="line-code diff_in">
    <pre>                                       $strMobile        = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">519</th>
    <td class="line-code diff_in">
    <pre>                                       $strFax           = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">520</th>
    <td class="line-code diff_in">
    <pre>                                       $strEmail         = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">521</th>
    <td class="line-code diff_in">
    <pre>                                       $strQq            = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">522</th>
    <td class="line-code diff_in">
    <pre>                                       $strMsn           = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">523</th>
    <td class="line-code diff_in">
    <pre>                                       $strContact       = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">524</th>
    <td class="line-code diff_in">
    <pre>                                       $strMainBusiness  = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">525</th>
    <td class="line-code diff_in">
    <pre>                                       $strIndustry      = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">526</th>
    <td class="line-code diff_in">
    <pre>                                       $strInterest      = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">527</th>
    <td class="line-code diff_in">
    <pre>                                       $strAbout         = '');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">528</th>
    <td class="line-code diff_in">
    <pre>    }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">529</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">530</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">531</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">467</th>
  <th class="line-num" style="cursor: pointer;">532</th>
    <td class="line-code ">
    <pre>}
</pre>
  </td>
  </tr>
</tbody>
</table>

</div>
<div class="autoscroll" id="c2">
<table class="filecontent syntaxhl">
<thead>
<tr><th class="filename" colspan="3">b/library/common/object.php</th></tr>
</thead>
<tbody>

<tr>
  <th class="line-num" style="cursor: pointer;">80</th>
  <th class="line-num" style="cursor: pointer;">80</th>
    <td class="line-code ">
    <pre>    {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">81</th>
  <th class="line-num" style="cursor: pointer;">81</th>
    <td class="line-code ">
    <pre>        Base::load('library.validate.' . strtolower(get_class($this)) . 'rule');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">82</th>
  <th class="line-num" style="cursor: pointer;">82</th>
    <td class="line-code ">
    <pre>    }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">83</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">84</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">83</th>
  <th class="line-num" style="cursor: pointer;">85</th>
    <td class="line-code ">
    <pre>}
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">84</th>
  <th class="line-num" style="cursor: pointer;">86</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>
</tbody>
</table>

</div>




<p class="other-formats">导出
	<span><a rel="nofollow" class="diff" href="/AnYuan/projects/saas/repository/revisions/a91b663b4aa77cfccca9e507ec3ed16c57957119/diff.diff?rev_to=b049d7c7eff9df8f19ca07bf198c942972853cce">Unified diff</a></span>
</p>





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
>>>>>>> 4d2fdd71f304c60cc5340c9da0affa3fad4cce5a
