<?php

namespace Cielo\API30\Ecommerce;

/**
 * Wallet
 */
class Wallet implements \JsonSerializable
{

    private $type;

    private $walletKey;

    private $additionalData;

    /**
     * summary
     */
    public function __construct($type = null)
    {
        $this->setType($type);
    }

    /**
     * @param $json
     *
     * @return Payment
     */
    public static function fromJson($json)
    {
        $wallet = new Wallet();
        $wallet->populate(json_decode($json));

        return $wallet;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function populate(\stdClass $data)
    {
        $this->type             = isset($data->Type) ? $data->Type : null;
        $this->walletKey        = isset($data->WalletKey) ? $data->WalletKey : null;
        $this->additionalData   = isset($data->AdditionalData) ? $data->AdditionalData : null;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getWalletKey()
    {
        return $this->walletKey;
    }

    public function setWalletKey($walletKey)
    {
        $this->walletKey = $walletKey;

        return $this;
    }

    public function getAdditionalData()
    {
        return $this->additionalData;
    }

    public function setAdditionalData($additionalData)
    {
        $this->additionalData = $additionalData;

        return $this;
    }
}