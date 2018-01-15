<?php
//Configuracion de entorno
define('PE_SERVER', 'https://cip.pre.2b.pagoefectivo.pe/');

//Rutas de Webservices
define('PE_WSCRYPTA', PE_SERVER.'PagoEfectivoWSCrypto/WSCrypto.asmx?wsdl');
//define('PE_WSCIP', PE_SERVER.'PagoEfectivoWSGeneral/WSCIP.asmx?wsdl');
define('PE_WSGENPAGO', PE_SERVER.'GenPago.aspx');
define('PE_WSGENPAGOIFRAME', PE_SERVER.'GenPagoIF.aspx');

//Para las modalidades
define('PE_WSGENCIP', PE_SERVER.'PagoEfectivoWSGeneralv2/service.asmx?wsdl');
define('PE_WSCRYPTAB', PE_SERVER.'pasarela/pasarela/crypta.asmx?wsdl');

//Configuracion de cuenta

//Mail de la persona a la que le llegara el mail en la prueba de generacion de cip
//Este mail es de prueba, al final en vez de esta constante - se reemplazará con el mail del cliente
define('PE_EMAIL_PORTAL', 'admin@paycash.com.pe');
define('PE_EMAIL_CONTACTO','pepruebas@gmail.com'); 
//Tiempo en el que expira el código cip para pagarlo en el banco. Se mide en horas
define('PE_TIEMPO_EXPIRACION', '5');

//Este dato es unico por servicio - nosotros se lo proporcionaremos
define('PE_MERCHAND_ID', 'SRV');
//Nombre del portal para el concepto de Pago que acompaña al numero de pedido en el banco
define('PE_COMERCIO_CONCEPTO_PAGO', 'Paycash');
//El dominio de pruebas o produccion al que solicitaron permisos por IP
define('PE_DOMINIO_COMERCIO','http://'.$_SERVER['SERVER_NAME'].'/');

define('PE_PATH',dirname(__FILE__) . DIRECTORY_SEPARATOR);

//Colocar la url de información
define('PE_URL_POPUP',PE_SERVER . 'CNT/QueEsPagoEfectivo.aspx');

//ubicacion y nombre de los archivos a usar
define('PE_SECURITY_PRIMARY_PATH',PE_PATH  ."../../tools/pagoefectivo/");
define('PE_SECURITY_PATH', 'C:\xampp\htdocs\kitV1.1\kitV1.1\lib_pagoefectivo\code\../../tools/pagoefectivo/SRV/keys/');

//Estos archivos se los enviara PagoEfectivo
//nombre del archivo clave publica de PagoEfectivo
define('PE_PUBLICKEY', 'SPE_PublicKey.1pz.1pz');
//nombre del archivo clave privada del comercio - cambiar con el prefijo de la llave - por el valor de MERCHAN_ID indicado
define('PE_PRIVATEKEY', '887eafba25f767082187fe2dda1a6418.1pz');
define('PE_MONEDA','1'); // 1.- Soles   2.- Dolares
define('PE_MEDIO_PAGO','1');
define('PE_MOD_INTEGRACION', '1');
?>