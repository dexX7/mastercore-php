<?php

namespace Mastercoin\MasterCore\Examples;

use Mastercoin\MasterCore\MasterCoreRpc;

// Bootstrap
require_once __DIR__ . '/../vendor/autoload.php';

// RPC connection data
$schema   = 'http';
$username = 'your-rpc-username';
$password = 'your-rpc-password';
$host     = '127.0.0.1';
$port     = '18333';

$connection = sprintf("%s://%s:%s@%s:%s", $schema, $username, $password, $host, $port);

// Initialize the Master Core client
$mastercore = new MasterCoreRpc($connection);

// Dump a list of all smart properties
var_dump($mastercore->listproperties_MP());

// Or let's dump it all
var_dump($mastercore->getbalance_MP('mvayzbj425X55kRLLPQiuCXWUED6LMP65C', 2));
var_dump($mastercore->getallbalancesforaddress_MP('mvayzbj425X55kRLLPQiuCXWUED6LMP65C'));
var_dump($mastercore->getallbalancesforid_MP(2));
var_dump($mastercore->gettransaction_MP('9ec79de2a015b32050dcbea39446e394afbf4aa2d9f50d18556f1c425916eb2e'));
var_dump($mastercore->listtransactions_MP($count = 5));
var_dump($mastercore->searchtransactions_MP());
var_dump($mastercore->getproperty_MP(2147483653));
var_dump($mastercore->listproperties_MP());
var_dump($mastercore->getcrowdsale_MP(2147483653, true));
var_dump($mastercore->getactivecrowdsales_MP());
var_dump($mastercore->getactivedexsells_MP());

?>
