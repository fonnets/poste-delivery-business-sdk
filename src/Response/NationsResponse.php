<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class NationsResponse extends BaseResponse
{

    /**
     * @var array
     */
    protected $countries;

    public function __construct($response)
    {
        parent::__construct($response);
        foreach ($response as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
                    case 'countries':
                        $countries = [];
                        foreach ($value as $arrvalue) {
                            $country = new Country(
                                $arrvalue->iso4,
                                $arrvalue->iso2,
                                $arrvalue->active,
                                $arrvalue->name,
                                $arrvalue->intName ?? null,
                                $arrvalue->extraue,
                                $arrvalue->states,
                                $arrvalue->news ?? null,
                                $arrvalue->products
                            );
                            $countries[] = $country;
                        }
                        $value = $countries;
                        break;
                    case 'result':
                        $value = new Result(
                            $value->errorCode,
                            $value->errorDescription
                        );
                        break;
                }
                $this->{$key} = $value;
            } else {
                $this->extraProperties[$key] = $value;
            }
        }
    }

    /**
     * Get the value of countries
     *
     * @return  array
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * Set the value of countries
     *
     * @param array $countries
     *
     * @return  self
     */
    public function setCountries(array $countries): NationsResponse
    {
        $this->countries = $countries;

        return $this;
    }

}
