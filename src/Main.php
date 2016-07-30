<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 7/29/16
 * Time: 10:23 PM
 */

require 'vendor/autoload.php';

use DigitalOceanV2\Adapter\BuzzAdapter;
use DigitalOceanV2\DigitalOceanV2;


// create an adapter with your access token which can be
// generated at https://cloud.digitalocean.com/settings/applications
$adapter = new BuzzAdapter('your_access_token');

// create a digital ocean object with the previous adapter
$digitalocean = new DigitalOceanV2($adapter);

// // return the account api
$account = $digitalocean->account();

// return the Account entity
$userInformation = $account->getUserInformation();