<?php

namespace Mastercoin\MasterCore;

use Nbobtc\Bitcoind\BitcoindInterface;

/**
 * Mirrors the JSON-RPC API interface of Master Core
 *
 * Based on Master Core v0.0.7:
 * @link https://github.com/mastercoin-MSC/mastercore/releases/tag/v0.0.7
 * @link https://github.com/mastercoin-MSC/mastercore/blob/0.0.7/doc/apidocumentation.md
 *
 * @author dexX7 <dexx@bitwatch.co>
 * @link   https://github.com/dexX7/mastercore-php
 */
interface MasterCoreInterface extends BitcoindInterface
{
    /**
     * Creates and broadcasts a Simple Send transaction
     *
     * @param string  $sender    Wallet address with sufficient balance to spent from
     * @param string  $receiver  Bitcoin address of the recipient
     * @param int     $property  Identifier of the property to send
     * @param string  $amount    Amount to send
     *
     * @return string
     */
    public function send_MP($sender, $receiver, $property, $amount);

    /**
     * Creates and broadcasts a Send to Owners transaction
     *
     * @param string $sender   Wallet address with sufficient balance to spent from
     * @param int    $property Identifier of the property to send
     * @param string $amount   Total amount to distribute
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
     * @param string $filter     Bitcoin address to filter or "*" for all wallet addresses
     * @param int    $count      Number of transactions to return
     * @param int    $skip       Number of transactions to skip
     * @param int    $startblock Only show transactions at or after this block height
     * @param int    $endblock   Only show transactions at or before this block height
     *
     * @return array
     */
    public function listtransactions_MP($filter = '*', $count = 10, $skip = 0, $startblock = 0, $endblock = 999999);

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

    /**
     * Gets grants and revokes of a managed property
     *
     * @param int $property Identifier of the property
     *
     * @return \stdClass The grants and revokes
     */
    public function getgrants_MP($property);

    /**
     * Lists all Master Protocol transactions in a block
     *
     * @param int $block The block height or index
     *
     * @return array The transaction hashes
     */
    public function listblocktransactions_MP($block);

    /**
     * Creates and broadcasts a Master Protocol transaction
     *
     * @param string  $sender          Wallet address with sufficient balance to send from
     * @param string  $rawtransaction  Hex-encoded raw transaction
     * @param string  $reference       Bitcoin address of transaction reference - can be empty
     * @param string  $redeemer        Public key of the one who can redeem multisig the dust - defaults to sender
     *
     * @return string The transaction hash
     */
    public function sendrawtx_MP($sender, $rawtransaction, $reference = null, $redeemer = null);
}
