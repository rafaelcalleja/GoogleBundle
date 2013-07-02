<?php

namespace AntiMattr\GoogleBundle\Analytics;

class Transaction
{
    private $affiliation;
    private $city;
    private $country;
    private $orderNumber;
    private $shipping;
    private $state;
    private $tax;
    private $total;
    private $paymentType;
    private $currency;
    private $type;
    private $date;
    private $shippingMethod;
    private $promoCode;
    

    public function setPaymentType($value){
    	$this->paymentType = $value;
    }
    
    public function getPaymentType(){
    	return $this->paymentType;
    }
    
    public function setCurrency($value){
    	$this->currency = $value;
    }
    
    public function getCurrency(){
    	return $this->currency;
    }
    
    public function setType($value){
    	$this->type = $value;
    }
    
    public function getType(){
    	return $this->type;
    }
    
    public function setDate($value){
    	$this->date = $value;
    }
    
    public function getDate(){
    	return $this->date;
    }
    
    public function setShippingMethod($value){
    	$this->shippingMethod = $value;
    }
    
    public function getShippingMethod(){
    	return $this->shippingMethod;
    }
    
    public function setPromoCode($value){
    	$this->promoCode = $value;
    }
    
    public function getPromoCode(){
    	return $this->promoCode;
    }
    
    public function setAffiliation($affiliation)
    {
        $this->affiliation = (string) $affiliation;
    }

    public function getAffiliation()
    {
        return $this->affiliation;
    }

    public function setCity($city)
    {
        $this->city = (string) $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCountry($country)
    {
        $this->country = (string) $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = (string) $orderNumber;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    public function setShipping($shipping)
    {
        $this->shipping = (float) $shipping;
    }

    public function getShipping()
    {
        return $this->shipping;
    }

    public function setState($state)
    {
        $this->state = (string) $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setTax($tax)
    {
        $this->tax = (float) $tax;
    }

    public function getTax()
    {
        return $this->tax;
    }

    public function setTotal($total)
    {
        $this->total = (float) $total;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
