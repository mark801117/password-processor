<?php
namespace Password\Processor\Encryption;

/**
 * Description of PasswordHash
 * PHP passwordHash encrypt & decrypt
 * @author Cloud
 */
class PasswordHash implements \Password\Processor\EncryptionInterface
{
    /**
     * 加密 (使用password_hash)
     * @param type $pwd 要加密之密碼
     * @return type
     */
    public static function encrypt($pwd)
    {
        $hash_pwd=password_hash($pwd, PASSWORD_BCRYPT);
        return $hash_pwd;
    }
    /**
     * 驗證密碼(使用 PHP password_verify)
     * @param string $pwd 輸入密碼
     * @param string $hash_pwd 要比對的密碼
     * @return bool
     */
    public static function validate($pwd, $hash_pwd)
    {
        return password_verify($pwd, $hash_pwd);
    }
}
