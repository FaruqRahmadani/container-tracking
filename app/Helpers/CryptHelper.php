<?php
namespace App\Helpers;

use Illuminate\Contracts\Encryption\DecryptException;

class CryptHelper
{
  public static function decrypt($value){
    try {
      return decrypt($value);
    } catch (DecryptException $e) {
      return abort('404');
    }
  }
}
