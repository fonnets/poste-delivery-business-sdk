<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class WaybillDataDeclared
{
    /** @var string */
    private $weight;

    /** @var string */
    private $height;

    /** @var string */
    private $length;

    /** @var string */
    private $width;

    /** @var string */
    private $description;

    /** @var string */
    private $contentCode;

    /** @var string */
    private $content;

    /** @var string */
    private $packagingCode;

    /** @var string */
    private $packagingName;

    /** @var array */
    private $items;

    /** @var int */
    private $totalWeight;

    /** @var string */
    private $nationality;

    public function toArray($international = false): array
    {
        $result = [
            'weight' => $this->weight,
            'height' => $this->height,
            'length' => $this->length,
            'width' => $this->width
        ];

        if ($international) {
            $result = array_merge($result, [
                'description' => $this->description,
                'contentCode' => $this->contentCode,
                'content' => $this->content,
                'packagingCode' => $this->packagingCode,
                'packagingName' => $this->packagingName,
                'items' => $this->items,
                'totalWeight' => $this->totalWeight,
                'nationality' => $this->nationality,
            ]);
        }

        return $result;
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of length
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @return  self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get the value of width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * @return  self
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
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of packagingCode
     */
    public function getPackagingCode()
    {
        return $this->packagingCode;
    }

    /**
     * Set the value of packagingCode
     *
     * @return  self
     */
    public function setPackagingCode($packagingCode)
    {
        $this->packagingCode = $packagingCode;

        return $this;
    }

    /**
     * Get the value of packagingName
     */
    public function getPackagingName()
    {
        return $this->packagingName;
    }

    /**
     * Set the value of packagingName
     *
     * @return  self
     */
    public function setPackagingName($packagingName)
    {
        $this->packagingName = $packagingName;

        return $this;
    }

    /**
     * Get the value of items
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @return  self
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get the value of totalWeight
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Set the value of totalWeight
     *
     * @return  self
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;

        return $this;
    }

    /**
     * Get the value of nationality
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set the value of nationality
     *
     * @return  self
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

}