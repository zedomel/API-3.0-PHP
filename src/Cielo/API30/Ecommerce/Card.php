<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class CardTokenDto
 * @package AppBundle
 */
class Card implements \JsonSerializable, CieloSerializable
{

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var string
     */
    private $cardToken;

    /**
     * @var string
     */
    private $customerName;

    /**
     * @var string
     */
    private $expirationDate;

    /**
     * @var string
     */
    private $holder;

    /**
     * @var \stdClass
     */
    private $links;

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return string
     */
    public function getCardToken()
    {
        return $this->cardToken;
    }

    /**
     * @param string $cardToken
     */
    public function setCardToken($cardToken)
    {
        $this->cardToken = $cardToken;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return string
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * @param string $holder
     */
    public function setHolder($holder)
    {
        $this->holder = $holder;
    }

    /**
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param \stdClass $links
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }

    /**
     * @param string $json
     * @return Card
     */
    public static function fromJson($json)
    {
        $object = \json_decode($json);
        $cardToken = new Card();
        $cardToken->populate($object);

        return $cardToken;
    }

    /**
     * @inheritdoc
     */
    public function populate(\stdClass $data)
    {
        $data = \get_object_vars($data);
        $this->setCardToken(isset($data['CardToken']) ? $data['CardToken'] : '');
        $this->setLinks(isset($data['Links']) ? $data['Links'] : new \stdClass());
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
