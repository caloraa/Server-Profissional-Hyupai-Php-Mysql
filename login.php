<?php

include 'init.php';

//initialization
$crypter = Crypter::init();
$privatekey = readFileData("Keys/PrivateKey.prk");

function tokenResponse($data){
    global $crypter, $privatekey;
    $data = toJson($data);
    $datahash = sha256($data);
    $acktoken = array(
        "Data" => profileEncrypt($data, $datahash),
        "Sign" => toBase64($crypter->signByPrivate($privatekey, $data)),
        "Hash" => $datahash
    );
    return toBase64(toJson($acktoken));
}

//token data
$token = fromBase64($_POST['token']);
$tokarr = fromJson($token, true);

//Data section decrypter
$encdata = $tokarr['Data'];
$decdata = trim($crypter->decryptByPrivate($privatekey, fromBase64($encdata)));
$data = fromJson($decdata);

//Hash Validator
$tokhash = $tokarr['Hash'];
$newhash = sha256($encdata);

if (strcmp($tokhash, $newhash) == 0) {
    PlainDie();
}

if($status == "Desativado"){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "$message",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

//Username Validator
$uname = $data["uname"];
if($uname == null || preg_match("([a-zA-Z0-9]+)", $uname) === 0){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Usuario Invalido",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

//Password Validator
$pass = $data["pass"];
if($pass == null || !preg_match("([a-zA-Z0-9]+)", $pass) === 0){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Senha Invalida",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}



$query = $conn->query("SELECT * FROM `$tabela4` WHERE `user` = '".$uname."'");
if($query->num_rows >= 1){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Dispositivo Banido permanentemente!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

$query = $conn->query("SELECT * FROM `$tabela` WHERE `Username` = '".$uname."' AND `Password` = '".$pass."'");
if($query->num_rows < 1){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Usuario ou senha incorretos!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

$res = $query->fetch_assoc();

if($res["StartDate"] == '0000-00-00 00:00:00'){
    $query = $conn->query("UPDATE `$tabela` SET `StartDate` = CURRENT_TIMESTAMP WHERE `Username` = '$uname'");
}

if($res["EndDate"] == '0000-00-00 00:00:00'){
    
    $date2 = date("Y/m/d h:i");
    $dias = $res["dias"];
    $mod_date = strtotime($date2."+ $dias days");
    $adicionardias = date("Y/m/d h:i",$mod_date);

    $query = $conn->query("UPDATE `$tabela` SET `EndDate` = '$adicionardias' WHERE `Username` = '$uname'");
}

$uidup = $uname.$data["cs"];

if($res["UID"] == NULL && $res["devices"] == 1){
    $query = $conn->query("UPDATE `$tabela` SET `UID` = '$uidup' WHERE `Username` = '".$uname."' AND `Password` = '".$pass."'");
}
else if($res["UID2"] == NULL && $res["devices"] == 2 && $res["UID"] != $uidup){
    $query = $conn->query("UPDATE `$tabela` SET `UID2` = '$uidup' WHERE `Username` = '".$uname."' AND `Password` = '".$pass."'");
}
else if($res["UID"] == NULL && $res["UID2"] != NULL && $res["devices"] == 2 && $res["UID2"] != $uidup){
    $query = $conn->query("UPDATE `$tabela` SET `UID` = '$uidup' WHERE `Username` = '".$uname."' AND `Password` = '".$pass."'");
}
else if($res["devices"] == 2 && $res["UID"] != $uidup && $res["UID2"] != $uidup) {
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Seu UID foi alterado!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

else if($res["devices"] == 1 && $res["UID"] != $uidup) {
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Seu UID foi alterado!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}



if($res["status"] == "off"){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Seu login está offline!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

if($res["status"] == "paused"){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Seu login está pausado!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

$datenow = date("Y/m/d h:i");
$user = $res['Username'];
$vendedor = $res['Vendedor'];
$filename = 'logapk.txt';
$textinto = "$datenow - O Usuario: $user que foi registrado por $vendedor acabou de fazer login!\n";
$file = fopen($filename, 'a');
fwrite($file, $textinto);
fclose($file);

$ackdata = array(
    "Status" => "Success",
    "MessageString" => "",
    "Username" => $res["Username"],
    "SubscriptionLeft" => $res["EndDate"],
    "Validade" => $res["EndDate"],
    "Vendedor" => $res["Vendedor"],
    "RegisterDate" => $res["StartDate"],
    $database = date_create($res["EndDate"]),
$datadehoje = date_create(),
$resultado = date_diff($database, $datadehoje),
$dias = date_interval_format($resultado, '%a'),
"Dias" => "Voce tem $dias dias restantes"
);

echo tokenResponse($ackdata);
