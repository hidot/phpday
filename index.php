<?php
/**
 * 加密方法
 * @param $key  加密key
 * @param $data 要加密的数据
 * @return string 密文
 */
function safeEncrypt($key, $data)
{
    $ivSize     = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
    $iv         = mcrypt_create_iv($ivSize, MCRYPT_RAND);
    $cryptText  = rtrim(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $data, MCRYPT_MODE_CBC, $iv), "\0");
    return base64_encode($iv . '$$' . $cryptText);
}

function getCity()
{
    try {
        $uid = 3070408;
        $urlTip = 'http://mservice010.speiyou.com';
        $url = $urlTip . '/BaseInfoService.php?wsdl';
        $client = new \SoapClient($url, array('encoding' => 'UTF-8', 'location' => $url, 'trace' => 1));
        $auth = new \stdClass();
        $auth->platform = 'newUceter';

        $auth->authinfo = safeEncrypt('c7b00b992f44b96fbe39aae0e162ae2d', '12345678');
        $header = new \SoapHeader(
            $urlTip . '/namespace/',
            'authentication',
            $auth,
            false,
            SOAP_ACTOR_NEXT);

        $client->__setSoapHeaders(array($header));
        $params = new \stdClass();
        $params->request = json_encode(array('mode' => 2, 'name' => '天津'));
        $result = $client->getCity($params);
    } catch (\SoapFault $e) {
        return false;
    }

    $result->rlt = json_decode($result->rlt, true);
    print_r($result);
}

function getProvince()
{
    try {
        $uid = 3070408;
        $urlTip = 'http://mservice010.speiyou.com';
        $url = $urlTip . '/BaseInfoService.php?wsdl';
        $client = new \SoapClient($url, array('encoding' => 'UTF-8', 'location' => $url, 'trace' => 1));
        $auth = new \stdClass();
        $auth->platform = 'newUceter';

        $auth->authinfo = safeEncrypt('c7b00b992f44b96fbe39aae0e162ae2d', '12345678');
        $header = new \SoapHeader(
            $urlTip . '/namespace/',
            'authentication',
            $auth,
            false,
            SOAP_ACTOR_NEXT);

        $client->__setSoapHeaders(array($header));
        $params = new \stdClass();
        $params->request = json_encode(array('mode' => 0));
        $result = $client->getProvince($params);
    } catch (\SoapFault $e) {
        return false;
    }

    print_r(json_decode($result->rlt));
}

function getSubject()
{
    try {
        $uid = 3070408;
        $urlTip = 'http://mservice010.speiyou.com';
        $url = $urlTip . '/BaseInfoService.php?wsdl';
        $client = new \SoapClient($url, array('encoding' => 'UTF-8', 'location' => $url, 'trace' => 1));
        $auth = new \stdClass();
        $auth->platform = 'newUceter';

        $auth->authinfo = safeEncrypt('c7b00b992f44b96fbe39aae0e162ae2d', '12345678');
        $header = new \SoapHeader(
            $urlTip . '/namespace/',
            'authentication',
            $auth,
            false,
            SOAP_ACTOR_NEXT);

        $client->__setSoapHeaders(array($header));
        $params = new \stdClass();
        $params->request = json_encode(array('mode' => 2));
        $result = $client->getSubject($params);
    } catch (\SoapFault $e) {
        return false;
    }

    print_r(json_decode($result->rlt));
}

function getGrade()
{
    try {
        $uid = 3070408;
        $urlTip = 'http://mservice010.speiyou.com';
        $url = $urlTip . '/BaseInfoService.php?wsdl';
        $client = new \SoapClient($url, array('encoding' => 'UTF-8', 'location' => $url, 'trace' => 1));
        $auth = new \stdClass();
        $auth->platform = 'newUceter';

        $auth->authinfo = safeEncrypt('c7b00b992f44b96fbe39aae0e162ae2d', '12345678');
        $header = new \SoapHeader(
            $urlTip . '/namespace/',
            'authentication',
            $auth,
            false,
            SOAP_ACTOR_NEXT);

        $client->__setSoapHeaders(array($header));
        $params = new \stdClass();
        $params->request = json_encode(array('mode' => 3));
        $result = $client->getGrade($params);
    } catch (\SoapFault $e) {
        return false;
    }

     print_r(json_decode($result->rlt));
}

function getGradeTypeList()
{
    try {
        $uid = 3070408;
        $urlTip = 'http://mservice010.speiyou.com';
        $url = $urlTip . '/BaseInfoService.php?wsdl';
        $client = new \SoapClient($url, array('encoding' => 'UTF-8', 'location' => $url, 'trace' => 1));
        $auth = new \stdClass();
        $auth->platform = 'newUceter';

        $auth->authinfo = safeEncrypt('c7b00b992f44b96fbe39aae0e162ae2d', '12345678');
        $header = new \SoapHeader(
            $urlTip . '/namespace/',
            'authentication',
            $auth,
            false,
            SOAP_ACTOR_NEXT);

        $client->__setSoapHeaders(array($header));
        $params = new \stdClass();
        $params->request = json_encode(array('gtId' => ''));
        $result = $client->getGradeTypeList($params);
    } catch (\SoapFault $e) {
        return false;
    }

    echo json_encode($result);
}
getCity();
die;
getProvince();
?>