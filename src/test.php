<?php
require __DIR__.'/Encryption/EncryptionInterface.php';
require __DIR__.'/Encryption/PasswordHash/PasswordHash.php';
require __DIR__.'/Passwordcreator.php';

$test = Password\Processor\PasswordCreator::generateRandomPwd($length);
$test= \Password\Processor\Encryption\PasswordHash::encrypt($test);
var_dump($test);exit();