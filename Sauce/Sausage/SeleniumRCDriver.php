<?php

namespace Sauce\Sausage;

require_once 'PHPUnit/Extensions/SeleniumTestCase/Driver.php';

class SeleniumRCDriver extends \PHPUnit_Extensions_SeleniumTestCase_Driver
{

    protected $os;

    protected $browser_version;

    protected $username;

    protected $access_key;

    public function start()
    {
        foreach (array('browserUrl', 'username', 'access_key', 'browser', 'browser_version', 'os') as $data) {
            if ($this->$data == NULL) {
                throw new \PHPUnit_Framework_Exception("set $data () needs to be called before start().");
            }
        }

        $data = array(
            'username'        => $this->username,
            'access-key'      => $this->access_key,
            'os'              => $this->os,
            'browser'         => $this->browser,
            'browser-version' => $this->browser_version,
            'name'            => $this->name
        );

        $this->sessionId = $this->getString(
          'getNewBrowserSession',
          array(json_encode($data), $this->browserUrl)
        );

        $this->doCommand('setTimeout', array($this->seleniumTimeout * 1000));

        return $this->sessionId;
    }

    public function setUsername($username)
    {
        if (!is_string($username)) {
            throw PHPUnit_Util_InvalidArgumentHelper::factory(1, 'string');
        }

        $this->username = $username;
    }

    public function setAccessKey($key)
    {
        if (!is_string($key)) {
            throw PHPUnit_Util_InvalidArgumentHelper::factory(1, 'string');
        }

        $this->access_key = $key;
    }

    public function setBrowserVersion($ver)
    {
        if (!is_string($ver)) {
            throw PHPUnit_Util_InvalidArgumentHelper::factory(1, 'string');
        }

        $this->browser_version = $ver;
    }

    public function setOs($os)
    {
        if (!is_string($os)) {
            throw PHPUnit_Util_InvalidArgumentHelper::factory(1, 'string');
        }

        $this->os = $os;
    }

}
