<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>redmine评论</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
    </head>
    <body>
        <div id="loggedas">登录为 <a href="/AnYuan/users/12">孙兴华</a></div>
        <div class="autoscroll">
            <table class="filecontent syntaxhl">
                <tbody>
                   <thead>
                       <tr><th class="filename" colspan="4">b/config/all/default.php</th></tr>
                   </thead>
                    <tr>
                        <th class="line-num">441</th>
                        <th class="line-num">441</th>
                        <td class="line-code ">
                            Base::load('library.user.userctrl');
                        </td>
                        
                    </tr>

                    <tr>
                        <th class="line-num">442</th>
                                <th class="line-num">442</th>
                        <td class="line-code ">
                            $objUserCtrl = new UserCtrl;
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">443</th>
                        <th class="line-num">443</th>
                        <td class="line-code ">
                            Base::load('library.user.userctrl');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">444</th>
                        <th class="line-num"></th>
                        <td class="line-code diff_out">
                           $objUserCtrl-&gt;freezeUser('Leask');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">444</th>
                        <td class="line-code diff_in">
                            $bolResult = $objUserCtrl-&gt;freezeUser('Leask');
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">445</th>
                        <th class="line-num">445</th>
                        <td class="line-code ">
                            $bolResult = $objUserCtrl-&gt;freezeUser('Leask');
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">446</th>
                        <th class="line-num"></th>
                        <td class="line-code diff_out">
                           echo 'User Leask has been freesed!';
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">446</th>
                        <td class="line-code diff_in">
                           if ($bolResult) {
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">447</th>
                        <td class="line-code diff_in">
                           echo 'User Leask has been freesed!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">448</th>
                        <td class="line-code diff_in">
                            } else { 
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">449</th>
                        <td class="line-code diff_in">
                           echo 'Failure!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">450</th>
                        <td class="line-code diff_in">
                            }
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">447</th>
                        <th class="line-num">451</th>
                        <td class="line-code ">
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">448</th>
                        <th class="line-num">452</th>
                        <td class="line-code ">
                             $objUserCtrl = null;
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">449</th>
                        <th class="line-num">453</th>
                        <td class="line-code ">
                                }
                        </td>
                    </tr>

                    <tr class="spacing">
                        <th class="line-num">...</th><th class="line-num">...</th><td></td>
                    </tr>
                    <tr>
                        <th class="line-num">457</th>
                        <th class="line-num">461</th>
                        <td class="line-code ">
                            Base::load('library.user.userctrl');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">458</th>
                        <th class="line-num">462</th>
                        <td class="line-code ">
                             $objUserCtrl = new UserCtrl;
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">459</th>
                        <th class="line-num">463</th>
                        <td class="line-code ">
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">460</th>
                        <th class="line-num"></th>
                        <td class="line-code diff_out">
                               $objUserCtrl-&gt;thawUser('Leask');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">464</th>
                        <td class="line-code diff_in">
                              $bolResult = $objUserCtrl-&gt;thawUser('Leask');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">461</th>
                        <th class="line-num">465</th>
                        <td class="line-code ">
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">462</th>
                        <th class="line-num"></th>
                        <td class="line-code diff_out">
                             echo 'User Leask has been thawed!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">466</th>
                        <td class="line-code diff_in">
                            if ($bolResult) {
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">467</th>
                        <td class="line-code diff_in">
                            echo 'User Leask has been thawed!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">468</th>
                        <td class="line-code diff_in">
                            } else {
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">469</th>
                        <td class="line-code diff_in">
                            echo 'Failure!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">470</th>
                        <td class="line-code diff_in">
                            }
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">463</th>
                        <th class="line-num">471</th>
                        <td class="line-code ">
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">464</th>
                        <th class="line-num">472</th>
                        <td class="line-code ">
                            $objUserCtrl = null;
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">465</th>
                        <th class="line-num">473</th>
                        <td class="line-code ">
                             }
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">466</th>
                        <th class="line-num">474</th>
                        <td class="line-code ">
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">475</th>
                        <td class="line-code diff_in">
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">476</th>
                        <td class="line-code diff_in">
                            <pre>    public function actionCreateCompany()
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">477</th>
                        <td class="line-code diff_in">
                            <pre>    {
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">478</th>
                        <td class="line-code diff_in">
                            <pre>        @$strName          = $_POST['name'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">479</th>
                        <td class="line-code diff_in">
                            <pre>        @$strPermissions   = $_POST['permissions'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">480</th>
                        <td class="line-code diff_in">
                            <pre>        @$strParent        = $_POST['parent'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">481</th>
                        <td class="line-code diff_in">
                            <pre>        @$strType          = $_POST['type'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">482</th>
                        <td class="line-code diff_in">
                            <pre>        @$strBusinessModel = $_POST['businessmodel'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">483</th>
                        <td class="line-code diff_in">
                            <pre>        @$strScale         = $_POST['scale'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">484</th>
                        <td class="line-code diff_in">
                            <pre>        @$strCountry       = $_POST['country'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">485</th>
                        <td class="line-code diff_in">
                            <pre>        @$strProvince      = $_POST['province'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">486</th>
                        <td class="line-code diff_in">
                            <pre>        @$strCity          = $_POST['city'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">487</th>
                        <td class="line-code diff_in">
                            <pre>        @$strAddress       = $_POST['address'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">488</th>
                        <td class="line-code diff_in">
                            <pre>        @$strZip           = $_POST['zip'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">489</th>
                        <td class="line-code diff_in">
                            <pre>        @$strTel           = $_POST['tel'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">490</th>
                        <td class="line-code diff_in">
                            <pre>        @$strMobile        = $_POST['mobile'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">491</th>
                        <td class="line-code diff_in">
                            <pre>        @$strFax           = $_POST['fax'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">492</th>
                        <td class="line-code diff_in">
                            <pre>        @$strEmail         = $_POST['email'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">493</th>
                        <td class="line-code diff_in">
                            <pre>        @$strQq            = $_POST['qq'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">494</th>
                        <td class="line-code diff_in">
                            <pre>        @$strMsn           = $_POST['msn'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">495</th>
                        <td class="line-code diff_in">
                            <pre>        @$strContact       = $_POST['contact'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">496</th>
                        <td class="line-code diff_in">
                            <pre>        @$strMainBusiness  = $_POST['mainbusiness'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">497</th>
                        <td class="line-code diff_in">
                            <pre>        @$strIndustry      = $_POST[''];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">498</th>
                        <td class="line-code diff_in">
                            <pre>        @$strInterest      = $_POST[''];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">499</th>
                        <td class="line-code diff_in">
                            <pre>        @$strAbout         = $_POST[''];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">500</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">501</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">502</th>
                        <td class="line-code diff_in">
                            <pre>        Base::load('library.company.companyctrl');
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">503</th>
                        <td class="line-code diff_in">
                            <pre>        $objCompanyCtrl = new CompanyCtrl;
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">504</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">505</th>
                        <td class="line-code diff_in">
                            <pre>        //temp
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">506</th>
                        <td class="line-code diff_in">
                            <pre>        $objCompanyCtrl-&gt;createCompany($strName,
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">507</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strPermissions   = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">508</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strParent        = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">509</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strType          = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">510</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strBusinessModel = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">511</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strScale         = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">512</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strCountry       = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">513</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strProvince      = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">514</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strCity          = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">515</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strAddress       = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">516</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strZip           = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">517</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strTel           = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">518</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strMobile        = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">519</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strFax           = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">520</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strEmail         = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">521</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strQq            = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">522</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strMsn           = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">523</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strContact       = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">524</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strMainBusiness  = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">525</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strIndustry      = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">526</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strInterest      = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">527</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strAbout         = '');
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">528</th>
                        <td class="line-code diff_in">
                            <pre>    }
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">529</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">530</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">531</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">467</th>
                        <th class="line-num">532</th>
                        <td class="line-code ">
                            <pre>}
                            </pre>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="autoscroll">
            <table class="filecontent syntaxhl">
                <tbody>
                    <thead>
                       <tr><th class="filename" colspan="4">b/config/main.php</th></tr>
                   </thead>
                    <tr>
                        <th class="line-num">441</th>
                        <th class="line-num">441</th>
                        <td class="line-code ">
                            Base::load('library.user.userctrl');
                        </td>

                    </tr>

                    <tr>
                        <th class="line-num">442</th>
                                <th class="line-num">442</th>
                        <td class="line-code ">
                            $objUserCtrl = new UserCtrl;
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">443</th>
                        <th class="line-num">443</th>
                        <td class="line-code ">
                            Base::load('library.user.userctrl');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">444</th>
                        <th class="line-num"></th>
                        <td class="line-code diff_out">
                           $objUserCtrl-&gt;freezeUser('Leask');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">444</th>
                        <td class="line-code diff_in">
                            $bolResult = $objUserCtrl-&gt;freezeUser('Leask');
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">445</th>
                        <th class="line-num">445</th>
                        <td class="line-code ">
                            $bolResult = $objUserCtrl-&gt;freezeUser('Leask');
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">446</th>
                        <th class="line-num"></th>
                        <td class="line-code diff_out">
                           echo 'User Leask has been freesed!';
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">446</th>
                        <td class="line-code diff_in">
                           if ($bolResult) {
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">447</th>
                        <td class="line-code diff_in">
                           echo 'User Leask has been freesed!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">448</th>
                        <td class="line-code diff_in">
                            } else {
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">449</th>
                        <td class="line-code diff_in">
                           echo 'Failure!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">450</th>
                        <td class="line-code diff_in">
                            }
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">447</th>
                        <th class="line-num">451</th>
                        <td class="line-code ">
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">448</th>
                        <th class="line-num">452</th>
                        <td class="line-code ">
                             $objUserCtrl = null;
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">449</th>
                        <th class="line-num">453</th>
                        <td class="line-code ">
                                }
                        </td>
                    </tr>

                    <tr class="spacing">
                        <th class="line-num">...</th><th class="line-num">...</th><td></td>
                    </tr>
                    <tr>
                        <th class="line-num">457</th>
                        <th class="line-num">461</th>
                        <td class="line-code ">
                            Base::load('library.user.userctrl');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">458</th>
                        <th class="line-num">462</th>
                        <td class="line-code ">
                             $objUserCtrl = new UserCtrl;
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">459</th>
                        <th class="line-num">463</th>
                        <td class="line-code ">
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">460</th>
                        <th class="line-num"></th>
                        <td class="line-code diff_out">
                               $objUserCtrl-&gt;thawUser('Leask');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">464</th>
                        <td class="line-code diff_in">
                              $bolResult = $objUserCtrl-&gt;thawUser('Leask');
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">461</th>
                        <th class="line-num">465</th>
                        <td class="line-code ">
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">462</th>
                        <th class="line-num"></th>
                        <td class="line-code diff_out">
                             echo 'User Leask has been thawed!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">466</th>
                        <td class="line-code diff_in">
                            if ($bolResult) {
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">467</th>
                        <td class="line-code diff_in">
                            echo 'User Leask has been thawed!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">468</th>
                        <td class="line-code diff_in">
                            } else {
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">469</th>
                        <td class="line-code diff_in">
                            echo 'Failure!';
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">470</th>
                        <td class="line-code diff_in">
                            }
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">463</th>
                        <th class="line-num">471</th>
                        <td class="line-code ">
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">464</th>
                        <th class="line-num">472</th>
                        <td class="line-code ">
                            $objUserCtrl = null;
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">465</th>
                        <th class="line-num">473</th>
                        <td class="line-code ">
                             }
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num">466</th>
                        <th class="line-num">474</th>
                        <td class="line-code ">
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">475</th>
                        <td class="line-code diff_in">
                        </td>
                    </tr>
                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">476</th>
                        <td class="line-code diff_in">
                            <pre>    public function actionCreateCompany()
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">477</th>
                        <td class="line-code diff_in">
                            <pre>    {
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">478</th>
                        <td class="line-code diff_in">
                            <pre>        @$strName          = $_POST['name'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">479</th>
                        <td class="line-code diff_in">
                            <pre>        @$strPermissions   = $_POST['permissions'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">480</th>
                        <td class="line-code diff_in">
                            <pre>        @$strParent        = $_POST['parent'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">481</th>
                        <td class="line-code diff_in">
                            <pre>        @$strType          = $_POST['type'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">482</th>
                        <td class="line-code diff_in">
                            <pre>        @$strBusinessModel = $_POST['businessmodel'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">483</th>
                        <td class="line-code diff_in">
                            <pre>        @$strScale         = $_POST['scale'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">484</th>
                        <td class="line-code diff_in">
                            <pre>        @$strCountry       = $_POST['country'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">485</th>
                        <td class="line-code diff_in">
                            <pre>        @$strProvince      = $_POST['province'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">486</th>
                        <td class="line-code diff_in">
                            <pre>        @$strCity          = $_POST['city'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">487</th>
                        <td class="line-code diff_in">
                            <pre>        @$strAddress       = $_POST['address'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">488</th>
                        <td class="line-code diff_in">
                            <pre>        @$strZip           = $_POST['zip'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">489</th>
                        <td class="line-code diff_in">
                            <pre>        @$strTel           = $_POST['tel'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">490</th>
                        <td class="line-code diff_in">
                            <pre>        @$strMobile        = $_POST['mobile'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">491</th>
                        <td class="line-code diff_in">
                            <pre>        @$strFax           = $_POST['fax'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">492</th>
                        <td class="line-code diff_in">
                            <pre>        @$strEmail         = $_POST['email'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">493</th>
                        <td class="line-code diff_in">
                            <pre>        @$strQq            = $_POST['qq'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">494</th>
                        <td class="line-code diff_in">
                            <pre>        @$strMsn           = $_POST['msn'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">495</th>
                        <td class="line-code diff_in">
                            <pre>        @$strContact       = $_POST['contact'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">496</th>
                        <td class="line-code diff_in">
                            <pre>        @$strMainBusiness  = $_POST['mainbusiness'];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">497</th>
                        <td class="line-code diff_in">
                            <pre>        @$strIndustry      = $_POST[''];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">498</th>
                        <td class="line-code diff_in">
                            <pre>        @$strInterest      = $_POST[''];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">499</th>
                        <td class="line-code diff_in">
                            <pre>        @$strAbout         = $_POST[''];
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">500</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">501</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">502</th>
                        <td class="line-code diff_in">
                            <pre>        Base::load('library.company.companyctrl');
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">503</th>
                        <td class="line-code diff_in">
                            <pre>        $objCompanyCtrl = new CompanyCtrl;
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">504</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">505</th>
                        <td class="line-code diff_in">
                            <pre>        //temp
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">506</th>
                        <td class="line-code diff_in">
                            <pre>        $objCompanyCtrl-&gt;createCompany($strName,
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">507</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strPermissions   = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">508</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strParent        = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">509</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strType          = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">510</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strBusinessModel = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">511</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strScale         = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">512</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strCountry       = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">513</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strProvince      = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">514</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strCity          = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">515</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strAddress       = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">516</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strZip           = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">517</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strTel           = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">518</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strMobile        = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">519</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strFax           = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">520</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strEmail         = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">521</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strQq            = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">522</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strMsn           = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">523</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strContact       = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">524</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strMainBusiness  = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">525</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strIndustry      = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">526</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strInterest      = '',
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">527</th>
                        <td class="line-code diff_in">
                            <pre>                                       $strAbout         = '');
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">528</th>
                        <td class="line-code diff_in">
                            <pre>    }
                            </pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">529</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">530</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num"></th>
                        <th class="line-num">531</th>
                        <td class="line-code diff_in">
                            <pre></pre>
                        </td>
                    </tr>

                    <tr>
                        <th class="line-num">467</th>
                        <th class="line-num">532</th>
                        <td class="line-code ">
                            <pre>}
                            </pre>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="autoscroll">我是来测试的</div>
    </body>
</html>