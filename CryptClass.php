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


public static function geraSalt(){

        $id = uniqid(mt_rand(), true);
        $salt = base64_encode($id);
	$salt = str_replace('+', '.', $salt);
		return substr($salt, 0, 25);
	}
}
