<?php
/**
 * =======================================================================
 *  File:        example_balance.php
 *  Created:     2014-03-11
 *  Author:      MessageBird B.V.
 *  Version:     v1.3.2 - 11-03-2014
 *
 *  More information? Go to www.messagebird.com/sms-api
 *
 * This class requires that you have PHP 5.1.x or higher installed.
 * ========================================================================
 */

require_once 'lib/class.MessageBird.php';

// Set the Messabeird username and password, and create an instance of the MessageBird class
$sms = new MessageBird('username', 'password');

echo $sms->getBalance();