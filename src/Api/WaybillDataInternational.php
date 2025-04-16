<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class WaybillDataInternational
{
    /** @var string */
    private $carrier;

    /** @var string */
    private $offeringType;

    /** @var string */
    private $receiverType;

    /** @var int */
    private $intLdvCopies;

    /** @var string */
    private $currency;

    /** @var float */
    private $waybillTotalValue;

    /** @var string */
    private $note;

    /** @var string */
    private $contentCode;

    /** @var string */
    private $content;

    public function toArray(): array
    {
        return [
            'carrier' => $this->carrier,
            'offeringType' => $this->offeringType,
            'receiverType' => $this->receiverType,
            'intLdvCopies' => $this->intLdvCopies,
            'currency' => $this->currency,
            'waybillTotalValue' => $this->waybillTotalValue,
            'note' => $this->note,
            'contentCode' => $this->contentCode,
            'content' => $this->content,
        ];
    }

    /**
     * Get the value of carrier
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Set the value of carrier
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get the value of offeringType
     */
    public function getOfferingType()
    {
        return $this->offeringType;
    }

    /**
     * Set the value of offeringType
     *
     * @return self
     */
    public function setOfferingType($offeringType)
    {
        $this->offeringType = $offeringType;

        return $this;
    }

    /**
     * Get the value of receiverType
     */
    public function getReceiverType()
    {
        return $this->receiverType;
    }

    /**
     * Set the value of receiverType
     *
     * @return self
     */
    public function setReceiverType($receiverType)
    {
        $this->receiverType = $receiverType;

        return $this;
    }

    /**
     * Get the value of intLdvCopies
     */
    public function getIntLdvCopies()
    {
        return $this->intLdvCopies;
    }

    /**
     * Set the value of intLdvCopies
     *
     * @return self
     */
    public function setIntLdvCopies($intLdvCopies)
    {
        $this->intLdvCopies = $intLdvCopies;

        return $this;
    }

    /**
     * Get the value of currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the value of waybillTotalValue
     */
    public function getWaybillTotalValue()
    {
        return $this->waybillTotalValue;
    }

    /**
     * Set the value of waybillTotalValue
     *
     * @return self
     */
    public function setWaybillTotalValue($waybillTotalValue)
    {
        $this->waybillTotalValue = $waybillTotalValue;

        return $this;
    }

    /**
     * Get the value of note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of contentCode
     */
    public function getContentCode()
    {
        return $this->contentCode;
    }

    /**
     * Set the value of contentCode
     *
     * @return self
     */
    public function setContentCode($contentCode)
    {
        $this->contentCode = $contentCode;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}