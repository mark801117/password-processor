<?php
namespace Password\Processor\Encryption;

/**
 * Encryption Interface
 * 密碼加/解密器介面  
 * @author Cloud
 */
interface EncryptionInterface
{    
    public static function encrypt($pwd);
    public static function validate($pwd, $hash_pwd);
}
