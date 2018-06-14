<?php

namespace AtolOnlineClient\Request\V4;

use JMS\Serializer\Annotation as Serializer;

/**
 * В запросе обязательно должно быть заполнено хотя бы одно из полей: email или phone.
 * Если заполнены оба поля, ОФД отправит электронный чек только на email.
 */
class ClientReceiptRequest
{
    /**
     * @var string
     * required
     * @Serializer\Groups({"set", "get"})
     * @Serializer\SerializedName("email")
     * @Serializer\Type("string")
     */
    private $email;

    /**
     * @var string
     * required
     * @Serializer\Groups({"set", "get"})
     * @Serializer\SerializedName("phone")
     * @Serializer\Type("string")
     */
    private $phone;


    public function __construct($email, $phone)
    {
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
}
