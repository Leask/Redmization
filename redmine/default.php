<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta content="text/html; charset=utf-8"/>
<title>SaaS - / - Diff - 安元项目管理系统</title>
<link type="text/css"  href="css/css.css" rel="stylesheet"/>
<link type="text/css"  href="css/test.css" rel="stylesheet"/>
<script  type="text/javascript" src="js/jquery.js"></script>
<script  type="text/javascript"  src="js/js.js"></script>
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

        <h2>修订 672da034:8ded9f23 </h2>

<!-- Choose view type -->
<form method="get" action="/AnYuan/projects/saas/repository/diff">
  <input type="hidden" value="8ded9f23090113956b8854c860796b86abce1776" name="rev" id="rev"/>
  <input type="hidden" value="672da034437410b5e027bf9b8f00f1c227721186" name="rev_to" id="rev_to"/>
  <p><label>查看差别</label>
  <select onchange="if (this.value != '') {this.form.submit()}" name="type" id="type"><option selected="selected" value="inline">直列</option>
<option value="sbs">并排</option></select></p>
</form>

<div class="autoscroll" id="c1">
<table class="filecontent syntaxhl">
<thead>
<tr><th class="filename" colspan="3">b/library/company/companyctrl.php</th></tr>
</thead>
<tbody>

<tr>
  <th class="line-num" style="cursor: pointer;">278</th>
  <th class="line-num" style="cursor: pointer;">278</th>
    <td class="line-code ">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">279</th>
  <th class="line-num" style="cursor: pointer;">279</th>
    <td class="line-code ">
    <pre>        if (!$intId
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">280</th>
  <th class="line-num" style="cursor: pointer;">280</th>
    <td class="line-code ">
    <pre>            || (($intParent = $this-&gt;objDbio-&gt;queryScalar(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">281</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>                                 'SELECT `parent`  '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">282</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>                               . 'FROM `cmp_'  . $strCompanyId . '_role` '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">283</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>                               . 'WHERE `id`=' . $intId
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">284</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>                             )) === false)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">281</th>
  <td class="line-code diff_in" >
      <pre>  'SELECT `parent`  '</pre>
      <div id="281" class="display" >
          <input type="text" style="min-height: 18px; height: 18px;" id="contentk"/>
          <input type="button" style="" value="评论"/>
          <input type="reset" style="" value="取消" />
      </div>
  </td>
  
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">282</th>
    <td class="line-code diff_in">
        <pre style="display:inline;"> 'FROM `cmp_' </pre>
        <div id="282" class="display">
            <input type="text" style="min-height: 18px; height: 18px;" id="contentk"/>
            <input type="button" style="" value="评论"/>
            <input type="reset" style="" value="取消"/></div>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">283</th>
    <td class="line-code diff_in">
    <pre>                                . 'WHERE `id`=' . $intId
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">284</th>
    <td class="line-code diff_in">
    <pre>                              )) === false)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">285</th>
  <th class="line-num" style="cursor: pointer;">285</th>
    <td class="line-code ">
    <pre>            ) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">286</th>
  <th class="line-num" style="cursor: pointer;">286</th>
    <td class="line-code ">
    <pre>            Debug::out('Invalid role id "' . $intId . '"!');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">287</th>
  <th class="line-num" style="cursor: pointer;">287</th>
    <td class="line-code ">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr class="spacing">
<th class="line-num" style="cursor: pointer;">...</th><th class="line-num" style="cursor: pointer;">...</th><td></td>
</tr>
<tr>
  <th class="line-num" style="cursor: pointer;">297</th>
  <th class="line-num" style="cursor: pointer;">297</th>
    <td class="line-code ">
    <pre>            return true;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">298</th>
  <th class="line-num" style="cursor: pointer;">298</th>
    <td class="line-code ">
    <pre>        } else {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">299</th>
  <th class="line-num" style="cursor: pointer;">299</th>
    <td class="line-code ">
    <pre>            Debug::out('Unable to remove role!'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">300</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>                     . "\n" . 'company id: "' . $strCompanyId . '"'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">300</th>
    <td class="line-code diff_in">
    <pre>                     . "\n" . 'company_id: "' . $strCompanyId . '"'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">301</th>
  <th class="line-num" style="cursor: pointer;">301</th>
    <td class="line-code ">
    <pre>                     . "\n" . 'role id: "'    . $intId . '"');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">302</th>
  <th class="line-num" style="cursor: pointer;">302</th>
    <td class="line-code ">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">303</th>
  <th class="line-num" style="cursor: pointer;">303</th>
    <td class="line-code ">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">304</th>
  <th class="line-num" style="cursor: pointer;">304</th>
    <td class="line-code ">
    <pre>    }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">305</th>
  <th class="line-num" style="cursor: pointer;">305</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">306</th>
  <th class="line-num" style="cursor: pointer;">306</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">307</th>
    <td class="line-code diff_in">
    <pre>    /**
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">308</th>
    <td class="line-code diff_in">
    <pre>     * Add user to company
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">309</th>
    <td class="line-code diff_in">
    <pre>     *
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">310</th>
    <td class="line-code diff_in">
    <pre>     * @param string $strUserId
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">311</th>
    <td class="line-code diff_in">
    <pre>     * @param string $strCompanyId
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">312</th>
    <td class="line-code diff_in">
    <pre>     * @return boolean depends on the success
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">313</th>
    <td class="line-code diff_in">
    <pre>     */
</pre>
  <div id="k1" class="display1">sunxinghua008:sdaas</div></td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">314</th>
    <td class="line-code diff_in">
    <pre>    public function addUserToCompany($strUserId,
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">315</th>
    <td class="line-code diff_in">
    <pre>                                     $strCompanyId)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">316</th>
    <td class="line-code diff_in">
    <pre>    {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">317</th>
    <td class="line-code diff_in">
    <pre>        if (!$this-&gt;objUserCtrl-&gt;isUserExists($strUserId)) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">318</th>
    <td class="line-code diff_in">
    <pre>            Debug::out('User "'    . $strUserId    . '" does not exists!');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">319</th>
    <td class="line-code diff_in">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">320</th>
    <td class="line-code diff_in">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">321</th>
    <td class="line-code diff_in">
    <pre>        if (!$this-&gt;isCompanyNameExists($strCompanyId)) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">322</th>
    <td class="line-code diff_in">
    <pre>            Debug::out('Company "' . $strCompanyId . '" does not exists!');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">323</th>
    <td class="line-code diff_in">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">324</th>
    <td class="line-code diff_in">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">325</th>
    <td class="line-code diff_in">
    <pre>        $arrayCompanyOfUser = $this-&gt;objUserCtrl-&gt;getCompanyByUserId(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">326</th>
    <td class="line-code diff_in">
    <pre>                                  $strUserId
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">327</th>
    <td class="line-code diff_in">
    <pre>                              );
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">328</th>
    <td class="line-code diff_in">
    <pre>        if (!$resultInUserTable) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">329</th>
    <td class="line-code diff_in">
    <pre>            Debug::out('Can not get current company infos from user table!');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">330</th>
    <td class="line-code diff_in">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">331</th>
    <td class="line-code diff_in">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">332</th>
    <td class="line-code diff_in">
    <pre>        $bolInUserTable = in_array($strCompanyId, $arrayCompanyOfUser)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">333</th>
    <td class="line-code diff_in">
    <pre>                        ? true
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">334</th>
    <td class="line-code diff_in">
    <pre>                        : false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">335</th>
    <td class="line-code diff_in">
    <pre>        $bolInMemberTable = $this-&gt;objDbio-&gt;queryScalar(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">336</th>
    <td class="line-code diff_in">
    <pre>                                'SELECT `user_id` '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">337</th>
    <td class="line-code diff_in">
    <pre>                              . 'FROM `cmp_` ' . $strCompanyId . '_member` '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">338</th>
    <td class="line-code diff_in">
    <pre>                              . 'WHERE `user_id`="' . $strUserId . '"'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">339</th>
    <td class="line-code diff_in">
    <pre>                            )
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">340</th>
    <td class="line-code diff_in">
    <pre>                          ? true
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">341</th>
    <td class="line-code diff_in">
    <pre>                          : false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">342</th>
    <td class="line-code diff_in">
    <pre>        if ($bolInUserTable !== $bolInMemberTable) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">343</th>
    <td class="line-code diff_in">
    <pre>            Debug::out('Invalid relationship between user and company!'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">344</th>
    <td class="line-code diff_in">
    <pre>                     . "\n" . 'user_id: "'    . $strUserId . '"'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">345</th>
    <td class="line-code diff_in">
    <pre>                     . "\n" . 'company_id: "' . $strCompanyId . '"');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">346</th>
    <td class="line-code diff_in">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">347</th>
    <td class="line-code diff_in">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">348</th>
    <td class="line-code diff_in">
    <pre>        if ($bolInUserTable) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">349</th>
    <td class="line-code diff_in">
    <pre>            Debug::out('User already exists in the company!'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">350</th>
    <td class="line-code diff_in">
    <pre>                     . "\n" . 'user_id: "'    . $strUserId . '"'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">351</th>
    <td class="line-code diff_in">
    <pre>                     . "\n" . 'company_id: "' . $strCompanyId . '"');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">352</th>
    <td class="line-code diff_in">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">353</th>
    <td class="line-code diff_in">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">354</th>
    <td class="line-code diff_in">
    <pre>        $arrStrSql = array(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">355</th>
    <td class="line-code diff_in">
    <pre>            'INSERT INTO `cmp_` ' . $strCompanyId . '_member` '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">356</th>
    <td class="line-code diff_in">
    <pre>          . 'SET `user_id`="'     . $strUserId . '"',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">357</th>
    <td class="line-code diff_in">
    <pre>            'UPDATE `sys_user_base` '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">358</th>
    <td class="line-code diff_in">
    <pre>          . 'SET `company`="'     . addslashes(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">359</th>
    <td class="line-code diff_in">
    <pre>                                        serialize(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">360</th>
    <td class="line-code diff_in">
    <pre>                                            array_merge($arrayCompanyOfUser,
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">361</th>
    <td class="line-code diff_in">
    <pre>                                                        array($strCompanyId)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">362</th>
    <td class="line-code diff_in">
    <pre>                                        )
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">363</th>
    <td class="line-code diff_in">
    <pre>                                    )) .'" '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">364</th>
    <td class="line-code diff_in">
    <pre>          . 'WHERE `user_id`="' . $strUserId . '"',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">365</th>
    <td class="line-code diff_in">
    <pre>        );
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">366</th>
    <td class="line-code diff_in">
    <pre>        if ($this-&gt;objDbio-&gt;transaction($arrStrSql)) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">367</th>
    <td class="line-code diff_in">
    <pre>            return true;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">368</th>
    <td class="line-code diff_in">
    <pre>        } else {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">369</th>
    <td class="line-code diff_in">
    <pre>            Debug::out('Unable to add user to company!'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">370</th>
    <td class="line-code diff_in">
    <pre>                     . "\n" . 'user_id: "'    . $strUserId . '"'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">371</th>
    <td class="line-code diff_in">
    <pre>                     . "\n" . 'company_id: "' . $strCompanyId . '"');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">372</th>
    <td class="line-code diff_in">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">373</th>
    <td class="line-code diff_in">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">374</th>
    <td class="line-code diff_in">
    <pre>    }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">375</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">307</th>
  <th class="line-num" style="cursor: pointer;">376</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">308</th>
  <th class="line-num" style="cursor: pointer;">377</th>
    <td class="line-code ">
    <pre>    public function createCompany($strName,
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">309</th>
  <th class="line-num" style="cursor: pointer;">378</th>
    <td class="line-code ">
    <pre>                                  $strPermissions   = '',
</pre>
  </td>
  </tr>
</tbody>
</table>

</div>




<p class="other-formats">导出
	<span><a rel="nofollow" class="diff" href="/AnYuan/projects/saas/repository/revisions/8ded9f23090113956b8854c860796b86abce1776/diff?format=diff&amp;rev_to=672da034437410b5e027bf9b8f00f1c227721186">Unified diff</a></span>
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