<?php

require_once "Sauce_Sausage.php";

$s = new Sauce\Sausage(getenv('SAUCE_USERNAME'), getenv('SAUCE_ACCESS_KEY'));
//$s = new Sauce\Sausage('jlippstest', 'c1dad461-9fcb-4494-947c-d7ac83e7c3f7');

//$res = $s->updateJob('0e2ae11933664d0ba26948d379fc67a6', array('passed'=>TRUE));
//print_r($res);
//$res = $s->getAccountDetails();
//print_r($res);
//$res = $s->getAccountLimits();
//print_r($res);
//$res = $s->createSubaccount(array('username'=>'jlippstest', 'email'=>'jlipps2@adsf.com', 'password'=>'testpass', 'name'=>"New Guy"));
//print_r($res);
//$res = $s->updateSubaccountSubscription('jlipps', 'free');
//print_r($res);
//$res = $s->login('testpass');
//print_r($res);
//$res = $s->getUsage(null, null, 'jlippstest');
//print_r($res);
//$res = $s->getUsage('2012-03-01', '2012-05-01');
//print_r($res);
//$res = $s->deleteSubaccountSubscription('jlippstest');
//print_r($res);
//$res = $s->getAllBrowsers();
//print_r($res);
//$res = $s->getSeleniumRCBrowsers();
//print_r($res);
//$res = $s->getWebDriverBrowsers();
//print_r($res);
//$res = $s->getStatus();
//print_r($res);
//$res = $s->getSauceTestsCount();
//print_r($res);
//$res = $s->getScoutBrowsers();
//print_r($res);
//$res = $s->getScoutBrowsers(true);
//print_r($res);
//$res = $s->getJobs(0, null, 5);
//print_r($res);
//$res = $s->updateJob('0213180a592449948a0f46b3b2c23cdb', array('build'=>'1234'));
//$res = $s->getJobsForBuild('1234');
//print_r($res);
//$res = $s->getActivity();
//print_r($res);
//$res = $s->getUpdatedJobs(0);
//print_r($res);
//$res = $s->getJob('0e2ae11933664d0ba26948d379fc67a6');
//print_r($res);
//$res = $s->stopJob('0e2ae11933664d0ba26948d379fc67a6');
//print_r($res);
//$res = $s->createErrorReport("This is an error report, woot!");
//print_r($res);
//$res = $s->getTunnels();
//print_r($res);
//$res = $s->getTunnel('00af7b9575f6405b82176d983ac6aa94');
//print_r($res);
$res = $s->deleteTunnel('00af7b9575f6405b82176d983ac6aa94');
print_r($res);