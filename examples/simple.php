<?php

/*
 * Example: simple.php
 *
 * To run this example, please update the RPC connection information.
 * The autoload.php include may need an adjustment based on your file structure.
 *
 *
 * This file is part of the mastercoin/mastercore-php library.
 */
 
namespace Mastercoin\MasterCore\Examples;

use Mastercoin\MasterCore\MasterCoreRpc;

// Bootstrap
require_once __DIR__ . '/../vendor/autoload.php';

// RPC connection data
$schema   = 'http';
$username = 'your_rpc_username';
$password = 'your_rpc_password';
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
var_dump($mastercore->gettransaction_MP('3b2d5cdfa43772eb30efeaf0606643a550bab8b549b7c4fb05cdb9c48930a1c0'));
var_dump($mastercore->listtransactions_MP('*', 5));
var_dump($mastercore->listblocktransactions_MP(279007));
var_dump($mastercore->listproperties_MP());
var_dump($mastercore->getproperty_MP(3));
var_dump($mastercore->getgrants_MP(3));
var_dump($mastercore->getactivecrowdsales_MP());
var_dump($mastercore->getcrowdsale_MP(2147483653, true));
var_dump($mastercore->getactivedexsells_MP());

?>
