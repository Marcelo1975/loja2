<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/newLoja/");
	$config['dbname'] = 'newloja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://localhost/loja2/");
	$config['dbname'] = 'loja2';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

$config['default_lang'] = 'pt-br';
$config['cep_origin'] = '35530000';
$config['pagseguro_seller'] = 'alexandremarcelo48@gmail.com';

//Informações do mercadoPago
$config['mp_appid'] = '4069008840089131';
$config['mp_key'] = 'RE0hTijvvTxpm3kROpoA3C8yMYEPRLpN';

//Informações do paypal
$config['paypal_clientid'] = 'Abhqj003MppHjrdfePPAxcjc6yrioL94fSSwmMmLBjeB2w1glzBx4rEW40rPTRIHqWNcN8kdWZPWuxd9';
$config['paypal_secret'] = 'EAIij4Yn1HzPWdfLL6AAyoj5SMCm_R-AeRNu57-PCrTjEp4dF6U_nTpLjduodZS7FkkAZm0LasVQeJrD';

//Informações do Gerencianet
$config['gerencianet_clientid'] = 'Client_Id_dcaa3035b131ceb3bdf08ad11d42795e77990b11';
$config['gerencianet_clientsecret'] = 'Client_Secret_6596bb9ea0134974025f05de03bb5dd0494d585f';
$config['gerencianet_sandbox'] = true;

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("NovaLoja")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("NovaLoja")->setRelease("1.0.0");

\PagSeguro\Configuration\Configure::setEnvironment('sandbox');
\PagSeguro\Configuration\Configure::setAccountCredentials('alexandremarcelo48@gmail.com', '563DA405C46741C98832B5272717FE1B');
\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog(true, 'pagseguro.log');

?>
