<?php

//Generate a random string.
$token = openssl_random_pseudo_bytes(16);

//Convert the binary data into hexadecimal representation.
$token = bin2hex($token);

//Print it out for example purposes.
echo $token;
echo "<br>";
echo "<br>";

$tokenf = sha1(mt_rand(1, 900) . 'SALT');
echo $tokenf;
echo "<br>";
echo "<br>";

	function GUID()
	{
		if (function_exists('com_create_guid') === true)
		{
			return trim(com_create_guid(), '{}');
		}
		return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
	}
$tokena =  GUID(); 
echo $tokena;
echo "<br>";
echo "<br>";

    function Parntoken($guid)
    {
        $ceed = str_split($guid
        .$guid); 
        $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                    .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                    .'0123456789'); // and any other characters

        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        $randchild = '';
        foreach (array_rand($seed, 4) as $k) $rand .= $seed[$k];
        foreach (array_rand($ceed, 2) as $a) $randchild .= $ceed[$a];
        return $rand . $randchild;
    }

    echo Parntoken(GUID());