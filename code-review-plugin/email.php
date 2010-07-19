<?php
/**
 * Email sending class
 *
 * Send email by pear mail interface
 * @category   AYSaaS
 * @package    library.communication
 * @author     Leask Huang <leaskh@gmail.com>
 * @version    0.3
 * @link       http://www.aysaas.com
 * @copyright  Copyright (C) 2010 AnYuan-SaaS (http://www.aysaas.com)
 * @since      1.4
 */


/**
 * Email class
 */
class Email
{

    protected $strCrlf = "\n";

    protected $objPearMail = null;

    protected $arrSmtpParams = array();

    protected $arrHeaders = array();

    protected $arrMimeParameters = array('text_charset'  => 'utf-8',
                                         'html_charset'  => 'utf-8',
                                         'head_charset'  => 'utf-8',
                                         'text_encoding' => 'base64',
                                         'html_encoding' => 'base64');


    public function __construct($arrSmtpParams = array(),
                                    /* array('host'     => '',
                                             'port'     => '',
                                             'auth'     => false,
                                             'username' => '',
                                             'password' => '',
                                             'timeout'  => 0) */
                                $strSender = '',
                                    /* '"User Name" <username@server.com>' */
                                $strReplyTo = ''
                                    /* '"User Name" <username@server.com>' */
                               )
    {
        /**
         * Load Pear Mail class pack
         *
         * That provides multiple interfaces for sending emails
         */
        include_once('Mail.php');
        include_once('Mail/mime.php');

        /**
         * Get smtp server configuration and create a pear main object
         */
        $this->objPearMail = @Mail::factory(
                                 'smtp',
                                 $arrSmtpParams?:Main::$SMTP_PARAMS
                             );

        // Config sender and replyto address and sdd them to headers
        $strSender  = $strSender  ?: Main::EMAIL_SENDER;
        $strReplyTo = $strReplyTo ?: $strSender;
        $this->arrHeaders = array('From'         => $strSender,
                                  'Return-Path'  => $strReplyTo);
    }


    public function send($strOrArrRecipient,
                         $strSubject,
                         $strTextMessage = '',
                         $strHtmlMessage = '',
                         $arrAttachments = array()
                             /* array(array('file'         => 'Leask',
                                            'file_name'    => 'leask.h',
                                            'content_type' => 'text/plain')) */
                        )
    {
        if (!$strOrArrRecipient
            || !$strSubject
            || (!$strTextMessage && !$strHtmlMessage)) {
            Debug::out('Invalid parameter!');
            return false;
        }

        // Create and init the Mime message object
        $objMime = new Mail_mime($this->strCrlf);
        $objMime->_build_params = $this->arrMimeParameters;

        // Add text and(or) html body to message
        if ($strTextMessage) {
            $this->arrHeaders['Content-type'] = 'text/plain; charset=utf-8';
            @$objMime->setTXTBody($strTextMessage);
        }
        if ($strHtmlMessage) {
            $this->arrHeaders['Content-type'] = 'text/html; charset=utf-8';
            @$objMime->setHTMLBody($strHtmlMessage);
        }

        // Add attachment(s)
        foreach ($arrAttachments as $arrAttachment) {
            @$objMime->addAttachment($arrAttachment['file'],
                                     $arrAttachment['content_type'],
                                     $arrAttachment['file_name'],
                                     0);
        }

        // Send it now!
        $objResult = @$this->objPearMail->send(
                         $strOrArrRecipient,
                         $objMime->headers(array_merge(
                             $this->arrHeaders,
                             array('Subject' => $strSubject,
                                   'To'      => $strOrArrRecipient)
                             )
                         ),
                         $objMime->get()
                     );

        // Error handle
        if (@PEAR::isError($objResult)) {
            // Comment this when using this class outside our framework
            //Debug::out('Message can not be sent: ' . @$objResult->getMessage());
            return false;
        }

        // If success
        return true;
    }


}


$email= new Email(array(
                 'host' => 'smtp.gmail.com',
                 'port' => '587', // Backup port: 465
                 'auth' => true,
                 'username' => 'anyuanproject@gmail.com',
                 'password' => 'AnYuan.Project.for.Redmine'
          ),"anyuanproject@gmail.com");

$email->send('"sunxinghua" <sunxinghua008@gmail.com>', "孙兴华用来测试的", "还是来测试的");