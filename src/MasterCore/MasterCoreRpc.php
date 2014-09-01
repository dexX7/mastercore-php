<?php

namespace Mastercoin\MasterCore;

use Nbobtc\Bitcoind\Bitcoind;
use Nbobtc\Bitcoind\BitcoindInterface;
use Nbobtc\Bitcoind\Client as RpcClient;

/**
 * RPC wrapper for the JSON-RPC API interface of Master Core
 *
 * Based on API as published on 2014-08-07 (commit: 62f036c524efdea53d72e31e2d6232a11ba123ab)
 * @link https://github.com/mastercoin-MSC/mastercore/blob/62f036c524/doc/apidocumentation.md
 *
 * As well as undocumented methods based on 2014-09-01 (commit: c60cc3428164a36260171182d65835c75646118a)
 * @link https://github.com/mastercoin-MSC/mastercore/blob/c60cc3428164a36260171182d65835c75646118a/src/rpcserver.h
 *
 * @author dexX7 <dexx@bitwatch.co>
 * @link https://github.com/dexX7/mastercore-php
 */
class MasterCoreRpc extends Bitcoind implements MasterCoreInterface, BitcoindInterface
{
    /**
     * Initializes Master Core RPC wrapper
     *
     * The RPC connection string has the following format:
     * schema://username:password@host:port
     *
     * @param string $connection RPC connection string
     */
    public function __construct($connection)
    {
        parent::__construct(new RpcClient($connection));
    }

    /**
     * @inheritdoc
     */
    public function send_MP($sender, $receiver, $property, $amount)
    {
        $response = $this->sendRequest('send_MP', array($sender, $receiver, $property, $amount));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function sendtoowners_MP($sender, $property, $amount)
    {
        $response = $this->sendRequest('sendtoowners_MP', array($sender, $property, $amount));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function getbalance_MP($address, $property)
    {
        $response = $this->sendRequest('getbalance_MP', array($address, $property));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function getallbalancesforaddress_MP($address)
    {
        $response = $this->sendRequest('getallbalancesforaddress_MP', array($address));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function getallbalancesforid_MP($property)
    {
        $response = $this->sendRequest('getallbalancesforid_MP', array($property));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function gettransaction_MP($txhash)
    {
        $response = $this->sendRequest('gettransaction_MP', array($txhash));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function listtransactions_MP($count = 10, $skip = 0, $startblock = 0, $endblock = 999999)
    {
        $response = $this->sendRequest('listtransactions_MP', array($count, $skip, $startblock, $endblock));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function searchtransactions_MP($address = '*', $count = 10, $skip = 0, $startblock = 0, $endblock = 999999)
    {
        $response = $this->sendRequest('searchtransactions_MP', array($address, $count, $skip, $startblock, $endblock));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function getproperty_MP($property)
    {
        $response = $this->sendRequest('getproperty_MP', array($property));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function listproperties_MP()
    {
        $response = $this->sendRequest('listproperties_MP', array());
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function getcrowdsale_MP($property, $verbose = false)
    {
        $response = $this->sendRequest('getcrowdsale_MP', array($property, $verbose));
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function getactivecrowdsales_MP()
    {
        $response = $this->sendRequest('getactivecrowdsales_MP', array());
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function getactivedexsells_MP()
    {
        $response = $this->sendRequest('getactivedexsells_MP', array());
        return $response->result;
    }

    /**
     * @inheritdoc
     */
    public function getgrants_MP($property)
    {
        $response = $this->sendRequest('getgrants_MP', array($property));
        return $response->result;
    }
}
