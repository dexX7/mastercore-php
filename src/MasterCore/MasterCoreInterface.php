<?php

namespace Mastercoin\MasterCore;

/**
 * Mirrors the JSON-RPC API interface of Master Core
 *
 * Based on API as published on 2014-08-07 (commit: 62f036c524efdea53d72e31e2d6232a11ba123ab)
 * @link https://github.com/mastercoin-MSC/mastercore/blob/62f036c524/doc/apidocumentation.md
 *
 * @author dexX7 <dexx@bitwatch.co>
 * @link https://github.com/dexX7/mastercore-php
 */
interface MasterCoreInterface
{
    /**
     * Creates and broadcasts a Simple Send transaction
     *
     * @param string  $sender    Wallet address with sufficient balance to spent from
     * @param string  $receiver  Bitcoin address of the recipient
     * @param int     $property  Identifier of the property to send
     * @param float   $amount    Amount to send
     *
     * @return string
     */
    public function send_MP($sender, $receiver, $property, $amount);

    /**
     * Creates and broadcasts a Send to Owners transaction
     *
     * @param string $sender   Wallet address with sufficient balance to spent from
     * @param int    $property Identifier of the property to send
     * @param float  $amount   Total amount to distribute
     *
     * @return string
     */
    public function sendtoowners_MP($sender, $property, $amount);

    /**
     * Returns the Master Protocol balance for an address and property
     *
     * @param string $address  Bitcoin address
     * @param int    $property Identifier of the property
     *
     * @return float
     */
    public function getbalance_MP($address, $property);

    /**
     * Lists all Master Protocol balances for an address
     *
     * @param string $address Bitcoin address
     *
     * @return array
     */
    public function getallbalancesforaddress_MP($address);

    /**
     * Lists all Master Protocol balances related to a property
     *
     * @param int $property Identifier of the property
     *
     * @return array
     */
    public function getallbalancesforid_MP($property);

    /**
     * Returns information about a Master Protocol transaction
     *
     * @param string $txhash Transaction hash
     *
     * @return \stdClass
     */
    public function gettransaction_MP($txhash);

    /**
     * Lists wallet transactions filtered by counts and block boundaries
     *
     * @param int $count      Number of transactions to return
     * @param int $skip       Number of transactions to skip
     * @param int $startblock Only show transactions at or after this block height
     * @param int $endblock   Only show transactions at or before this block height
     *
     * @return array
     */
    public function listtransactions_MP($count = 10, $skip = 0, $startblock = 0, $endblock = 999999);

    /**
     * Lists history of wallet transactions filtered by address, counts and block boundaries
     *
     * @param string $address    Bitcoin address to filter or "*" for all wallet addresses
     * @param int    $count      Number of transactions to return
     * @param int    $skip       Number of transactions to skip
     * @param int    $startblock Only show transactions at or after this block height
     * @param int    $endblock   Only show transactions at or before this block height
     *
     * @return array
     */
    public function searchtransactions_MP($address = '*', $count = 10, $skip = 0, $startblock = 0, $endblock = 999999);

    /**
     * Returns information about a Master Protocol property
     *
     * @param int $property Identifier of the property
     *
     * @return \stdClass The property
     */
    public function getproperty_MP($property);

    /**
     * Lists information about all Master Protocol properties
     *
     * @return array
     */
    public function listproperties_MP();

    /**
     * Returns information about a Master Protocol crowdsale
     *
     * @param int  $property Identifier of the property related to the crowdsale
     * @param bool $verbose  To determine whether to display crowdsale participant transactions
     *
     * @return \stdClass
     */
    public function getcrowdsale_MP($property, $verbose = false);

    /**
     * Lists currently active crowdsales
     *
     * @return array
     */
    public function getactivecrowdsales_MP();

    /**
     * Lists currently active orders on the distributed exchange
     *
     * @return array
     */
    public function getactivedexsells_MP();
}
