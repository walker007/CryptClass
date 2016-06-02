class Crypt{
//Para todas as Cirptografias
private static $Texto;
//Para Blowfish
private static $Custo;
private static $Salt;

public static function getBlowFish(string $Texto, int $Custo = null, string $Salt = null){
 self::$Texto = $Texto;
 self::$Custo = ($Custo != null ? $Custo : 15);
 $SID = self::geraSalt();
 self::$Salt = ($Salt != null ? $Salt : $SID);

  return crypt(sel::$Texto, '$2a$'. self::$Custo .'$' . self::$Salt . '$');
}

public static function getMd5(string $Texto){
self::$Texto = $Texto;
return md5(self::$Texto);
}

public static function getMd5Special(string $Texto, string $Salt = null){
self::$Texto = $Texto;
$SID = self::geraSalt();
self::$Salt = ($Salt != null ? $Salt : $SID);
$HashMD5 = md5(self::$Texto . self::$Salt);
 return $Hash = ["md5" => $HasMD5, "Prefix" => $SID];
}

public static function getMd5Ultimate(string $Texto){
self::$Texto = $Texto;

return md5(self::$Texto . md5(self::$Texto));
}

public static function geraSalt(){

        $id = uniqid(mt_rand(), true);
        $salt = base64_encode($id);
	$salt = str_replace('+', '.', $salt);
		return substr($salt, 0, 25);
	}
}
