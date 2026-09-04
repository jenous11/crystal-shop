<?php

namespace App\Services;

class EsewaGateway
{
    /**
     * Create a new class instance.
     */
    protected $merchantCode;
    protected $secretKey;
    public function __construct()
    {
        $this->merchantCode = config('services.esewa.esewa_merchant_code');
        $this->secretKey = config('services.esewa.esewa_secret_key');
    }
    public   function generateSignature($order){
      $message = "total_amount={$order->total},transaction_uuid={$order->transaction_uuid},product_code=EPAYTEST";
      $signature=  base64_encode(hash_hmac('sha256',$message,$this->secretKey,true));
      return $signature;
    }
}
