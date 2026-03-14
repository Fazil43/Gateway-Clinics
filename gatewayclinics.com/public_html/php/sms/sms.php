<?php

/**
 * Description of sms
 *
 * @author subramani
 */
class sms {

    var $_url;
    var $_user;
    var $_pwd;
    var $_senderId;
    var $_route;

    function __construct() {
        $this->_url = "http://smsserver3.inwayhosting.com";
        $this->_user = 'inwayrafi';
        $this->_pwd = 'Iamauthorised';
        $this->_senderId = 'INWAYH';
        $this->_route = 'T';
    }

    /**
     * 
     * @param int $to
     * @param string $text
     * @return Response
     */
    function send($to, $text) {


        $text = urlencode($text);
        $url = $this->_url . "/sendsms?uname=$this->_user&pwd=$this->_pwd&senderid=$this->_senderId&route=$this->_route";

        $url = "$url&to=$to&msg=$text";

        $ret = file($url);
        $send = explode(":", $ret[0]);

        if ($send[0] == "ID") {
            $log[] = ("Message Sent.");
        } else {
            $answer = is_array($ret) ? json_encode($ret) : $ret;
            $log[] = ("Message could not sent. Error: $answer");
            $error[] = ("Message could not sent. Error: $answer");
        }
		if (!isset($send[1])) {
			$send[1] = null;
		}
		$send[0] = $send[1];
        return array (
            'log' => $log,
            'error' => $error,
            'msgid' => $send[1],
        );
    }

}
