<?php
namespace Cloud\Password\Processor;

/**
 * Description of PasswordCreator
 * 密碼產生器
 * @author Cloud
 */
class PasswordCreator 
{
    /**
     * 建立一組隨機密碼(未加密)
     * generate a random pwd (uncrypted)
     * @param int $length bytes長度再經由bin2hex會變成2倍
     * @return string bytes 
     */
    public static function generateRandomPwd($length=16)
    {
        $pwd=bin2hex(openssl_random_pseudo_bytes(($length)));
        return $pwd;
    }
}
