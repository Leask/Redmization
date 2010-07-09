<!DOCTYPE html >
<html>
    <head>
<title>SaaS - / - Diff - 安元项目管理系统</title>
<link type="text/css"  href="css/css.css" rel="stylesheet">
<script  type="text/javascript" src="js/jquery.js"></script>
<script  type="text/javascript"  src="js/js.js"></script>

</head><body>
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
</div>

<div id="main" class="nosidebar">
    <div id="sidebar">


    </div>

    <div id="content">

        <h2>修订 f00ed0ee:4ea1c99c </h2>

<!-- Choose view type -->


<div class="autoscroll" id="c1">
<table class="filecontent syntaxhl">
<thead>
<tr><th class="filename" colspan="3">b/controller/dev.php</th></tr>
</thead>
<tbody>

<tr>
  <th class="line-num" style="cursor: pointer;">21</th>
  <th class="line-num" style="cursor: pointer;">21</th>
    <td class="line-code ">
    <pre></pre>
  </td>

  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">22</th>
  <th class="line-num" style="cursor: pointer;">22</th>
 <td class="line-code ">
    <pre>    public function actionTest()
</pre>
  </td>
 
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">23</th>
  <th class="line-num" style="cursor: pointer;">23</th>
    <td class="line-code ">
    <pre>    {
</pre>
  </td>

  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">24</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
        <pre>        $r=array('xxx','xxx','xxx');<div><input type="text"></div>
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">25</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        echo count($r);
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">24</th>
    <td class="line-code diff_in">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">25</th>
    <td class="line-code diff_in">
    <pre>        print_r(unserialize(serialize(array('asdfsdf'))));
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">26</th>
    <td class="line-code diff_in">
    <pre>
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">26</th>
  <th class="line-num" style="cursor: pointer;">27</th>
    <td class="line-code ">
    <pre>    }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">27</th>
  <th class="line-num" style="cursor: pointer;">28</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">28</th>
  <th class="line-num" style="cursor: pointer;">29</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>
</tbody>
</table>

</div>
<div class="autoscroll" id="c2">
<table class="filecontent syntaxhl">
<thead>
<tr><th class="filename" colspan="3">b/deploy/database/cmp_[COMPANY_NAME]_role.sql</th></tr>
</thead>
<tbody>

<tr>
  <th class="line-num" style="cursor: pointer;">4</th>
  <th class="line-num" style="cursor: pointer;">4</th>
    <td class="line-code ">
    <pre>    `id`          INTEGER      NOT NULL PRIMARY KEY AUTO_INCREMENT,
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">5</th>
  <th class="line-num" style="cursor: pointer;">5</th>
    <td class="line-code ">
    <pre>    `name`        VARCHAR(30)  NOT NULL,
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">6</th>
  <th class="line-num" style="cursor: pointer;">6</th>
    <td class="line-code ">
    <pre>    `description` VARCHAR(255),
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">7</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>    `permissions` VARCHAR(255)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">7</th>
    <td class="line-code diff_in">
    <pre>    `permissions` VARCHAR(255),
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">8</th>
    <td class="line-code diff_in">
    <pre>    `parent`      INTEGER     NOT NULL
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">8</th>
  <th class="line-num" style="cursor: pointer;">9</th>
    <td class="line-code ">
    <pre>) ENGINE=InnoDB;
</pre>
  </td>
  </tr>
</tbody>
</table>

</div>
<div class="autoscroll" id="c3">
<table class="filecontent syntaxhl">
<thead>
<tr><th class="filename" colspan="3">b/deploy/database/debug_initialization.sql</th></tr>
</thead>
<tbody>

<tr>
  <th class="line-num" style="cursor: pointer;">19</th>
  <th class="line-num" style="cursor: pointer;">19</th>
    <td class="line-code ">
    <pre>    `password`    = 'be06dc310dc50b4b5ef25e1719e7353f',
</pre>
  </td>
  </tr><div id="k6">Leask:放到杀</div>

<tr>
  <th class="line-num" style="cursor: pointer;">20</th>
  <th class="line-num" style="cursor: pointer;">20</th>
    <td class="line-code ">
    <pre>    `real_name`   = '安元',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">21</th>
  <th class="line-num" style="cursor: pointer;">21</th>
    <td class="line-code ">
    <pre>    `permissions` = '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">22</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>    `company`     = 'AnYuan';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">22</th>
    <td class="line-code diff_in">
    <pre>    `company`     = 'a:0:{}';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">23</th>
  <th class="line-num" style="cursor: pointer;">23</th>
    <td class="line-code ">
    <pre>INSERT INTO `sys_user_extra` SET
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">24</th>
  <th class="line-num" style="cursor: pointer;">24</th>
    <td class="line-code ">
    <pre>    `user_id`         = 'root',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">25</th>
  <th class="line-num" style="cursor: pointer;">25</th>
    <td class="line-code ">
    <pre>    `type`            = 7,
</pre>
  </td>
  </tr>
</tbody>
</table>

</div>
<div class="autoscroll" id="c4">
<table class="filecontent syntaxhl">
<thead>
<tr><th class="filename" colspan="3">b/library/company/companyctrl.php</th></tr>
</thead>
<tbody>

<tr>
  <th class="line-num" style="cursor: pointer;">265</th>
  <th class="line-num" style="cursor: pointer;">265</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">266</th>
  <th class="line-num" style="cursor: pointer;">266</th>
    <td class="line-code ">
    <pre>    public function saveCompany($objCompany)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">267</th>
  <th class="line-num" style="cursor: pointer;">267</th>
    <td class="line-code ">
    <pre>    {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">268</th>
    <td class="line-code diff_in">
    <pre>        //check if it's a valid company object
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">268</th>
  <th class="line-num" style="cursor: pointer;">269</th>
    <td class="line-code ">
    <pre>        if (!$objCompany || !$objCompany-&gt;isObjectValid()) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">269</th>
  <th class="line-num" style="cursor: pointer;">270</th>
    <td class="line-code ">
    <pre>            Debug::out('It is a invalid company object!');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">270</th>
  <th class="line-num" style="cursor: pointer;">271</th>
    <td class="line-code ">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">271</th>
  <th class="line-num" style="cursor: pointer;">272</th>
    <td class="line-code ">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">272</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">273</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        Base::load('library.dbio.dbio');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">274</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        $objDbio = new Dbio;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">275</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">273</th>
    <td class="line-code diff_in">
    <pre>        //check if it's a new company
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">276</th>
  <th class="line-num" style="cursor: pointer;">274</th>
    <td class="line-code ">
    <pre>        if ($objCompany-&gt;get('id') === -1){
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">275</th>
    <td class="line-code diff_in">
    <pre>            //check if it's a new company name
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">277</th>
  <th class="line-num" style="cursor: pointer;">276</th>
    <td class="line-code ">
    <pre>            if ($this-&gt;isCompanyNameExists($objCompany-&gt;get('name'))) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">278</th>
  <th class="line-num" style="cursor: pointer;">277</th>
    <td class="line-code ">
    <pre>                Debug::out('Company "' . $objCompany-&gt;get('name')
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">279</th>
  <th class="line-num" style="cursor: pointer;">278</th>
    <td class="line-code ">
    <pre>                         . '" already exists!');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">280</th>
  <th class="line-num" style="cursor: pointer;">279</th>
    <td class="line-code ">
    <pre>                return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">281</th>
  <th class="line-num" style="cursor: pointer;">280</th>
    <td class="line-code ">
    <pre>            }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">281</th>
    <td class="line-code diff_in">
    <pre>            //check if it's a valid parent company
</pre>
  </td>
  </tr><div id="k5">sunxinghua008:fsfds</div>

<tr>
  <th class="line-num" style="cursor: pointer;">282</th>
  <th class="line-num" style="cursor: pointer;">282</th>
    <td class="line-code ">
    <pre>            if ($objCompany-&gt;get('parent')
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">283</th>
  <th class="line-num" style="cursor: pointer;">283</th>
    <td class="line-code ">
    <pre>                &amp;&amp; !$this-&gt;isCompanyIdExists($objCompany-&gt;get('parent'))) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">284</th>
  <th class="line-num" style="cursor: pointer;">284</th>
    <td class="line-code ">
    <pre>                Debug::out('Parent company "' . $objCompany-&gt;get('parent')
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">285</th>
  <th class="line-num" style="cursor: pointer;">285</th>
    <td class="line-code ">
    <pre>                         . '" does not exists!');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">286</th>
  <th class="line-num" style="cursor: pointer;">286</th>
    <td class="line-code ">
    <pre>                return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">287</th>
  <th class="line-num" style="cursor: pointer;">287</th>
    <td class="line-code ">
    <pre>            }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">288</th>
    <td class="line-code diff_in">
    <pre>            //check if it's a valid founder
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">288</th>
  <th class="line-num" style="cursor: pointer;">289</th>
    <td class="line-code ">
    <pre>            if (!$this-&gt;objUserCtrl-&gt;isUserExists(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">289</th>
  <th class="line-num" style="cursor: pointer;">290</th>
    <td class="line-code ">
    <pre>                                         $objCompany-&gt;get('founder_id')
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">290</th>
  <th class="line-num" style="cursor: pointer;">291</th>
    <td class="line-code ">
    <pre>                                     )
</pre>
  </td>
  </tr>

<tr class="spacing">
<th class="line-num" style="cursor: pointer;">...</th><th class="line-num" style="cursor: pointer;">...</th><td></td>
</tr>
<tr>
  <th class="line-num" style="cursor: pointer;">293</th>
  <th class="line-num" style="cursor: pointer;">294</th>
    <td class="line-code ">
    <pre>                         . '" does not exists!');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">294</th>
  <th class="line-num" style="cursor: pointer;">295</th>
    <td class="line-code ">
    <pre>                return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">295</th>
  <th class="line-num" style="cursor: pointer;">296</th>
    <td class="line-code ">
    <pre>            }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">297</th>
    <td class="line-code diff_in">
    <pre>            //get current company array of founder
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">298</th>
    <td class="line-code diff_in">
    <pre>            $arrCompanyOfFounderCurrent = unserialize(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">299</th>
    <td class="line-code diff_in">
    <pre>                $this-&gt;objDbio-&gt;queryScalar(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">300</th>
    <td class="line-code diff_in">
    <pre>                    'SELECT `company` FROM `sys_user_base` WHERE `user_id`="'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">301</th>
    <td class="line-code diff_in">
    <pre>                                       . $objCompany-&gt;get('founder_id') . '"'
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">302</th>
    <td class="line-code diff_in">
    <pre>                )
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">303</th>
    <td class="line-code diff_in">
    <pre>            );
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">304</th>
    <td class="line-code diff_in">
    <pre>            //build new company array for founder
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">305</th>
    <td class="line-code diff_in">
    <pre>            $arrCompanyOfFounderPending = in_array(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">306</th>
    <td class="line-code diff_in">
    <pre>                                              $objCompany-&gt;get('company_id'),
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">307</th>
    <td class="line-code diff_in">
    <pre>                                              $arrCompanyOfFounderCurrent
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">308</th>
    <td class="line-code diff_in">
    <pre>                                          )
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">309</th>
    <td class="line-code diff_in">
    <pre>                                        ? $arrCompanyOfFounderCurrent
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">310</th>
    <td class="line-code diff_in">
    <pre>                                        : array_merge(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">311</th>
    <td class="line-code diff_in">
    <pre>                                              $arrCompanyOfFounderCurrent,
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">312</th>
    <td class="line-code diff_in">
    <pre>                                              array(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">313</th>
    <td class="line-code diff_in">
    <pre>                                                  $objCompany-&gt;get('company_id')
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">314</th>
    <td class="line-code diff_in">
    <pre>                                              )
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">315</th>
    <td class="line-code diff_in">
    <pre>                                          );
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">316</th>
    <td class="line-code diff_in">
    <pre>            //serialize company array and addslashes to them for store
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">317</th>
    <td class="line-code diff_in">
    <pre>            $arrCompanyOfFounderCurrent = serialize(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">318</th>
    <td class="line-code diff_in">
    <pre>                                              $arrCompanyOfFounderCurrent
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">319</th>
    <td class="line-code diff_in">
    <pre>                                          );
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">320</th>
    <td class="line-code diff_in">
    <pre>            $arrCompanyOfFounderPending = serialize(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">321</th>
    <td class="line-code diff_in">
    <pre>                                              $arrCompanyOfFounderPending
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">322</th>
    <td class="line-code diff_in">
    <pre>                                          );
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">323</th>
    <td class="line-code diff_in">
    <pre>            //build sql command array of company operating
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">296</th>
  <th class="line-num" style="cursor: pointer;">324</th>
    <td class="line-code ">
    <pre>            $arrStrSqlCompany = array(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">297</th>
  <th class="line-num" style="cursor: pointer;">325</th>
    <td class="line-code ">
    <pre>        //add base company informations
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">298</th>
  <th class="line-num" style="cursor: pointer;">326</th>
    <td class="line-code ">
    <pre>            array(
</pre>
  </td>
  </tr>

<tr class="spacing">
<th class="line-num" style="cursor: pointer;">...</th><th class="line-num" style="cursor: pointer;">...</th><td></td>
</tr>
<tr>
  <th class="line-num" style="cursor: pointer;">401</th>
  <th class="line-num" style="cursor: pointer;">429</th>
    <td class="line-code ">
    <pre>          . ', `role_id`='         . 0,
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">402</th>
  <th class="line-num" style="cursor: pointer;">430</th>
    <td class="line-code ">
    <pre>            '',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">403</th>
  <th class="line-num" style="cursor: pointer;">431</th>
    <td class="line-code ">
    <pre>            ),
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">432</th>
    <td class="line-code diff_in">
    <pre>        //add company to user base table
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">433</th>
    <td class="line-code diff_in">
    <pre>            array(
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">434</th>
    <td class="line-code diff_in">
    <pre>            'UPDATE `sys_user_base` '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">435</th>
    <td class="line-code diff_in">
    <pre>          . 'SET `company`="' . addslashes($arrCompanyOfFounderPending) . '" '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">436</th>
    <td class="line-code diff_in">
    <pre>          . 'WHERE `user_id`="'    . $objCompany-&gt;get('founder_id') . '"',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">437</th>
    <td class="line-code diff_in">
    <pre>            'UPDATE `sys_user_base` '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">438</th>
    <td class="line-code diff_in">
    <pre>          . 'SET `company`="' . addslashes($arrCompanyOfFounderCurrent) . '" '
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">439</th>
    <td class="line-code diff_in">
    <pre>          . 'WHERE `user_id`="'    . $objCompany-&gt;get('founder_id') . '"',
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">440</th>
    <td class="line-code diff_in">
    <pre>            ),
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">404</th>
  <th class="line-num" style="cursor: pointer;">441</th>
    <td class="line-code ">
    <pre>            );
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">405</th>
  <th class="line-num" style="cursor: pointer;">442</th>
    <td class="line-code ">
    <pre>        } else {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">406</th>
  <th class="line-num" style="cursor: pointer;">443</th>
    <td class="line-code ">
    <pre>            $arrStrSqlCompany = array(
</pre>
  </td>
  </tr>

<tr class="spacing">
<th class="line-num" style="cursor: pointer;">...</th><th class="line-num" style="cursor: pointer;">...</th><td></td>
</tr>
<tr>
  <th class="line-num" style="cursor: pointer;">440</th>
  <th class="line-num" style="cursor: pointer;">477</th>
    <td class="line-code ">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">441</th>
  <th class="line-num" style="cursor: pointer;">478</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">442</th>
  <th class="line-num" style="cursor: pointer;">479</th>
    <td class="line-code ">
    <pre>        if (($objCompany-&gt;get('id') === -1)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">443</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>            ? $objDbio-&gt;xTransaction($arrStrSqlCompany)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">444</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>            : $objDbio-&gt;transaction($arrStrSqlCompany)) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">480</th>
    <td class="line-code diff_in">
    <pre>            ? $this-&gt;objDbio-&gt;xTransaction($arrStrSqlCompany)
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">481</th>
    <td class="line-code diff_in">
    <pre>            : $this-&gt;objDbio-&gt;transaction($arrStrSqlCompany)) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">445</th>
  <th class="line-num" style="cursor: pointer;">482</th>
    <td class="line-code ">
    <pre>            // Company informations has been inserted successfully
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">446</th>
  <th class="line-num" style="cursor: pointer;">483</th>
    <td class="line-code ">
    <pre>            return true;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">447</th>
  <th class="line-num" style="cursor: pointer;">484</th>
    <td class="line-code ">
    <pre>        } else {
</pre>
  </td>
  </tr>
</tbody>
</table>

</div>
<div class="autoscroll" id="c5">
<table class="filecontent syntaxhl">
<thead>
<tr><th class="filename" colspan="3">b/library/user/userbase.php</th></tr>
</thead>
<tbody>

<tr>
  <th class="line-num" style="cursor: pointer;">31</th>
  <th class="line-num" style="cursor: pointer;">31</th>
    <td class="line-code ">
    <pre>    protected $password    = '';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">32</th>
  <th class="line-num" style="cursor: pointer;">32</th>
    <td class="line-code ">
    <pre>    protected $real_name   = '';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">33</th>
  <th class="line-num" style="cursor: pointer;">33</th>
    <td class="line-code ">
    <pre>    protected $permissions = '';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">34</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>    protected $company     = '';
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">34</th>
    <td class="line-code diff_in">
    <pre>    protected $company     = array();
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">35</th>
  <th class="line-num" style="cursor: pointer;">35</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">36</th>
  <th class="line-num" style="cursor: pointer;">36</th>
    <td class="line-code ">
    <pre>}
</pre>
  </td>
  </tr>
</tbody>
</table>

</div>
<div class="autoscroll" id="c6">
<table class="filecontent syntaxhl">
<thead>
<tr><th class="filename" colspan="3">b/library/user/userctrl.php</th></tr>
</thead>
<tbody>

<tr>
  <th class="line-num" style="cursor: pointer;">341</th>
  <th class="line-num" style="cursor: pointer;">341</th>
    <td class="line-code ">
    <pre>            return false;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">342</th>
  <th class="line-num" style="cursor: pointer;">342</th>
    <td class="line-code ">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">343</th>
  <th class="line-num" style="cursor: pointer;">343</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">344</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        Base::load('library.dbio.dbio');
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">345</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        $objDbio = new Dbio;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">346</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">347</th>
  <th class="line-num" style="cursor: pointer;">344</th>
    <td class="line-code ">
    <pre>        if ($objUser-&gt;get('id') === -1){
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">348</th>
  <th class="line-num" style="cursor: pointer;">345</th>
    <td class="line-code ">
    <pre>            if ($this-&gt;isUserExists($objUser-&gt;get('user_id'))) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">349</th>
  <th class="line-num" style="cursor: pointer;">346</th>
    <td class="line-code ">
    <pre>                Debug::out(
</pre>
  </td>
  </tr>

<tr class="spacing">
<th class="line-num" style="cursor: pointer;">...</th><th class="line-num" style="cursor: pointer;">...</th><td></td>
</tr>
<tr>
  <th class="line-num" style="cursor: pointer;">419</th>
  <th class="line-num" style="cursor: pointer;">416</th>
    <td class="line-code ">
    <pre>                }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">420</th>
  <th class="line-num" style="cursor: pointer;">417</th>
    <td class="line-code ">
    <pre>        }
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">421</th>
  <th class="line-num" style="cursor: pointer;">418</th>
    <td class="line-code ">
    <pre></pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">422</th>
  <th class="line-num" style="cursor: pointer;"></th>
    <td class="line-code diff_out">
    <pre>        if ($objDbio-&gt;transaction($arrStrSqlUser)) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;"></th>
  <th class="line-num" style="cursor: pointer;">419</th>
    <td class="line-code diff_in">
    <pre>        if ($hits-&gt;objDbio-&gt;transaction($arrStrSqlUser)) {
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">423</th>
  <th class="line-num" style="cursor: pointer;">420</th>
    <td class="line-code ">
    <pre>            // User informations has been inserted successfully
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">424</th>
  <th class="line-num" style="cursor: pointer;">421</th>
    <td class="line-code ">
    <pre>            return true;
</pre>
  </td>
  </tr>

<tr>
  <th class="line-num" style="cursor: pointer;">425</th>
  <th class="line-num" style="cursor: pointer;">422</th>
    <td class="line-code ">
    <pre>        } else {
</pre>
  </td>
  </tr>
</tbody>
</table>

</div>




<p class="other-formats">导出
	<span><a rel="nofollow" class="diff" href="/AnYuan/projects/saas/repository/revisions/4ea1c99c603d6bcdfef4a304e8d7c8781be906a9/diff?format=diff&amp;rev_to=f00ed0eebe433071bec36b209387544ac56dd565">Unified diff</a></span>
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

</body></html>