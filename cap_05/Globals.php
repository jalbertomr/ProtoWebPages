// Desplegado de variables globales

echo(" \$GLOBALS <br>");
	foreach( $GLOBALS as $cve => $valor){
	  echo("$cve -> '$valor' DUMP: ".var_dump($valor)." <br>");
	}

//Resultado >
$GLOBALS
array(16) { ["GLOBALS"]=> *RECURSION* 
            ["_ENV"]=> array(28) { ["PATH"]=> string(28) "/usr/local/bin:/usr/bin:/bin" 
                                   ["SCRIPT_NAME"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                   ["REQUEST_METHOD"]=> string(4) "POST" 
                                   ["HTTP_ACCEPT"]=> string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8" 
                                   ["SCRIPT_FILENAME"]=> string(69) "/home/users/web/b676/moo.vickuscom/phpscript/c05/formularioSimple.php" 
                                   ["SERVER_SOFTWARE"]=> string(8) "Apache/2" 
                                   ["REMOTE_PORT"]=> string(5) "36574" 
                                   ["HTTP_USER_AGENT"]=> string(72) "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0" 
                                   ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0" 
                                   ["HTTP_ACCEPT_LANGUAGE"]=> string(14) "en-US,en;q=0.5" 
                                   ["CONTENT_TYPE"]=> string(33) "application/x-www-form-urlencoded" 
                                   ["GATEWAY_INTERFACE"]=> string(7) "CGI/1.1" 
                                   ["SCRIPT_URL"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                   ["DOCUMENT_ROOT"]=> string(34) "/home/users/web/b676/moo.vickuscom" 
                                   ["UNIQUE_ID"]=> string(24) "VfGp6woBcFsAAD3DDAEAAABH" 
                                   ["SERVER_NAME"]=> string(14) "www.vickus.com" 
                                   ["HTTP_REFERER"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.htm" 
                                   ["SERVER_ADMIN"]=> string(31) "cgiadmin@yourhostingaccount.com" 
                                   ["HTTP_ACCEPT_ENCODING"]=> string(13) "gzip, deflate" 
                                   ["HTTP_CONNECTION"]=> string(10) "keep-alive" 
                                   ["CONTENT_LENGTH"]=> string(2) "56" 
                                   ["SCRIPT_URI"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.php" 
                                   ["SERVER_PORT"]=> string(2) "80" 
                                   ["REMOTE_ADDR"]=> string(12) "148.205.56.1" 
                                   ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1" 
                                   ["REQUEST_URI"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                   ["HTTP_HOST"]=> string(14) "www.vickus.com" 
                                   ["TZ"]=> string(7) "EST5EDT" 
                                 } 
            ["HTTP_ENV_VARS"]=> array(28) { ["PATH"]=> string(28) "/usr/local/bin:/usr/bin:/bin" 
                                            ["SCRIPT_NAME"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                            ["REQUEST_METHOD"]=> string(4) "POST" 
                                            ["HTTP_ACCEPT"]=> string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8" 
                                            ["SCRIPT_FILENAME"]=> string(69) "/home/users/web/b676/moo.vickuscom/phpscript/c05/formularioSimple.php" 
                                            ["SERVER_SOFTWARE"]=> string(8) "Apache/2" 
                                            ["REMOTE_PORT"]=> string(5) "36574" 
                                            ["HTTP_USER_AGENT"]=> string(72) "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0" 
                                            ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0" 
                                            ["HTTP_ACCEPT_LANGUAGE"]=> string(14) "en-US,en;q=0.5" 
                                            ["CONTENT_TYPE"]=> string(33) "application/x-www-form-urlencoded" 
                                            ["GATEWAY_INTERFACE"]=> string(7) "CGI/1.1" 
                                            ["SCRIPT_URL"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                            ["DOCUMENT_ROOT"]=> string(34) "/home/users/web/b676/moo.vickuscom" 
                                            ["UNIQUE_ID"]=> string(24) "VfGp6woBcFsAAD3DDAEAAABH" 
                                            ["SERVER_NAME"]=> string(14) "www.vickus.com" 
                                            ["HTTP_REFERER"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.htm" 
                                            ["SERVER_ADMIN"]=> string(31) "cgiadmin@yourhostingaccount.com" 
                                            ["HTTP_ACCEPT_ENCODING"]=> string(13) "gzip, deflate" 
                                            ["HTTP_CONNECTION"]=> string(10) "keep-alive" 
                                            ["CONTENT_LENGTH"]=> string(2) "56" 
                                            ["SCRIPT_URI"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.php" 
                                            ["SERVER_PORT"]=> string(2) "80" 
                                            ["REMOTE_ADDR"]=> string(12) "148.205.56.1" 
                                            ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1" 
                                            ["REQUEST_URI"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                            ["HTTP_HOST"]=> string(14) "www.vickus.com" 
                                            ["TZ"]=> string(7) "EST5EDT" 
                                          } 
            ["_POST"]=> array(3) { ["nombre"]=> string(4) "Beto" 
                                   ["datoOculto"]=> string(23) "Este es un campo oculto" 
                                   ["ok"]=> string(6) "ENVIAR" 
                                 } 
            ["HTTP_POST_VARS"]=> array(3) { ["nombre"]=> string(4) "Beto" 
                                            ["datoOculto"]=> string(23) "Este es un campo oculto" 
                                            ["ok"]=> string(6) "ENVIAR" 
                                          } 
            ["_GET"]=> array(0) { } 
            ["HTTP_GET_VARS"]=> array(0) { } 
            ["_COOKIE"]=> array(0) { } 
            ["HTTP_COOKIE_VARS"]=> array(0) { } 
            ["_SERVER"]=> array(32) { ["PATH"]=> string(28) "/usr/local/bin:/usr/bin:/bin" 
                                      ["SCRIPT_NAME"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                      ["REQUEST_METHOD"]=> string(4) "POST" 
                                      ["HTTP_ACCEPT"]=> string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8" 
                                      ["SCRIPT_FILENAME"]=> string(69) "/home/users/web/b676/moo.vickuscom/phpscript/c05/formularioSimple.php" 
                                      ["SERVER_SOFTWARE"]=> string(8) "Apache/2" 
                                      ["REMOTE_PORT"]=> string(5) "36574" 
                                      ["HTTP_USER_AGENT"]=> string(72) "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0" 
                                      ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0" 
                                      ["HTTP_ACCEPT_LANGUAGE"]=> string(14) "en-US,en;q=0.5" 
                                      ["CONTENT_TYPE"]=> string(33) "application/x-www-form-urlencoded" 
                                      ["GATEWAY_INTERFACE"]=> string(7) "CGI/1.1" 
                                      ["SCRIPT_URL"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                      ["DOCUMENT_ROOT"]=> string(34) "/home/users/web/b676/moo.vickuscom" 
                                      ["UNIQUE_ID"]=> string(24) "VfGp6woBcFsAAD3DDAEAAABH" 
                                      ["SERVER_NAME"]=> string(14) "www.vickus.com" 
                                      ["HTTP_REFERER"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.htm" 
                                      ["SERVER_ADMIN"]=> string(31) "cgiadmin@yourhostingaccount.com" 
                                      ["HTTP_ACCEPT_ENCODING"]=> string(13) "gzip, deflate" 
                                      ["HTTP_CONNECTION"]=> string(10) "keep-alive" 
                                      ["CONTENT_LENGTH"]=> string(2) "56" 
                                      ["SCRIPT_URI"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.php" 
                                      ["SERVER_PORT"]=> string(2) "80" 
                                      ["REMOTE_ADDR"]=> string(12) "148.205.56.1" 
                                      ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1" 
                                      ["REQUEST_URI"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                      ["HTTP_HOST"]=> string(14) "www.vickus.com" 
                                      ["TZ"]=> string(7) "EST5EDT" 
                                      ["PHP_SELF"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                      ["REQUEST_TIME"]=> int(1441901035) 
                                      ["argv"]=> array(0) { } 
                                      ["argc"]=> int(0) 
                                    } 
            ["HTTP_SERVER_VARS"]=> array(32) { ["PATH"]=> string(28) "/usr/local/bin:/usr/bin:/bin" 
                                               ["SCRIPT_NAME"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                               ["REQUEST_METHOD"]=> string(4) "POST" 
                                               ["HTTP_ACCEPT"]=> string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8" 
                                               ["SCRIPT_FILENAME"]=> string(69) "/home/users/web/b676/moo.vickuscom/phpscript/c05/formularioSimple.php" 
                                               ["SERVER_SOFTWARE"]=> string(8) "Apache/2" 
                                               ["REMOTE_PORT"]=> string(5) "36574" 
                                               ["HTTP_USER_AGENT"]=> string(72) "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0" 
                                               ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0" 
                                               ["HTTP_ACCEPT_LANGUAGE"]=> string(14) "en-US,en;q=0.5" 
                                               ["CONTENT_TYPE"]=> string(33) "application/x-www-form-urlencoded" 
                                               ["GATEWAY_INTERFACE"]=> string(7) "CGI/1.1" 
                                               ["SCRIPT_URL"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                               ["DOCUMENT_ROOT"]=> string(34) "/home/users/web/b676/moo.vickuscom" 
                                               ["UNIQUE_ID"]=> string(24) "VfGp6woBcFsAAD3DDAEAAABH" 
                                               ["SERVER_NAME"]=> string(14) "www.vickus.com" 
                                               ["HTTP_REFERER"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.htm" 
                                               ["SERVER_ADMIN"]=> string(31) "cgiadmin@yourhostingaccount.com" 
                                               ["HTTP_ACCEPT_ENCODING"]=> string(13) "gzip, deflate" 
                                               ["HTTP_CONNECTION"]=> string(10) "keep-alive" 
                                               ["CONTENT_LENGTH"]=> string(2) "56" 
                                               ["SCRIPT_URI"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.php" 
                                               ["SERVER_PORT"]=> string(2) "80" 
                                               ["REMOTE_ADDR"]=> string(12) "148.205.56.1" 
                                               ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1" 
                                               ["REQUEST_URI"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                               ["HTTP_HOST"]=> string(14) "www.vickus.com" 
                                               ["TZ"]=> string(7) "EST5EDT" 
                                               ["PHP_SELF"]=> string(35) "/phpscript/c05/formularioSimple.php" 
                                               ["REQUEST_TIME"]=> int(1441901035) 
                                               ["argv"]=> array(0) { } 
                                               ["argc"]=> int(0) 
                                             } 
            ["_FILES"]=> array(0) { } 
            ["HTTP_POST_FILES"]=> array(0) { } 
            ["_REQUEST"]=> array(3) { ["nombre"]=> string(4) "Beto" 
                                      ["datoOculto"]=> string(23) "Este es un campo oculto" 
                                      ["ok"]=> string(6) "ENVIAR" 
                                    } ["valor"]=> *RECURSION* 
            ["cve"]=> string(7) "GLOBALS" 
          } 
GLOBALS -> 'Array' DUMP:
array(28) { ["PATH"]=> string(28) "/usr/local/bin:/usr/bin:/bin" 
            ["SCRIPT_NAME"]=> string(35) "/phpscript/c05/formularioSimple.php" 
            ["REQUEST_METHOD"]=> string(4) "POST" 
            ["HTTP_ACCEPT"]=> string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8" 
            ["SCRIPT_FILENAME"]=> string(69) "/home/users/web/b676/moo.vickuscom/phpscript/c05/formularioSimple.php" 
            ["SERVER_SOFTWARE"]=> string(8) "Apache/2" 
            ["REMOTE_PORT"]=> string(5) "36574" 
            ["HTTP_USER_AGENT"]=> string(72) "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0" 
            ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0" 
            ["HTTP_ACCEPT_LANGUAGE"]=> string(14) "en-US,en;q=0.5" 
            ["CONTENT_TYPE"]=> string(33) "application/x-www-form-urlencoded" 
            ["GATEWAY_INTERFACE"]=> string(7) "CGI/1.1" 
            ["SCRIPT_URL"]=> string(35) "/phpscript/c05/formularioSimple.php" 
            ["DOCUMENT_ROOT"]=> string(34) "/home/users/web/b676/moo.vickuscom" 
            ["UNIQUE_ID"]=> string(24) "VfGp6woBcFsAAD3DDAEAAABH" 
            ["SERVER_NAME"]=> string(14) "www.vickus.com" 
            ["HTTP_REFERER"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.htm" 
            ["SERVER_ADMIN"]=> string(31) "cgiadmin@yourhostingaccount.com" 
            ["HTTP_ACCEPT_ENCODING"]=> string(13) "gzip, deflate" 
            ["HTTP_CONNECTION"]=> string(10) "keep-alive" 
            ["CONTENT_LENGTH"]=> string(2) "56" 
            ["SCRIPT_URI"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.php" 
            ["SERVER_PORT"]=> string(2) "80" 
            ["REMOTE_ADDR"]=> string(12) "148.205.56.1" 
            ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1" 
            ["REQUEST_URI"]=> string(35) "/phpscript/c05/formularioSimple.php" 
            ["HTTP_HOST"]=> string(14) "www.vickus.com" 
            ["TZ"]=> string(7) "EST5EDT" 
          } 
_ENV -> 'Array' DUMP:
     array(28) { ["PATH"]=> string(28) "/usr/local/bin:/usr/bin:/bin" ["SCRIPT_NAME"]=> string(35) "/phpscript/c05/formularioSimple.php" ["REQUEST_METHOD"]=> string(4) "POST" ["HTTP_ACCEPT"]=> string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8" ["SCRIPT_FILENAME"]=> string(69) "/home/users/web/b676/moo.vickuscom/phpscript/c05/formularioSimple.php" ["SERVER_SOFTWARE"]=> string(8) "Apache/2" ["REMOTE_PORT"]=> string(5) "36574" ["HTTP_USER_AGENT"]=> string(72) "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0" ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0" ["HTTP_ACCEPT_LANGUAGE"]=> string(14) "en-US,en;q=0.5" ["CONTENT_TYPE"]=> string(33) "application/x-www-form-urlencoded" ["GATEWAY_INTERFACE"]=> string(7) "CGI/1.1" ["SCRIPT_URL"]=> string(35) "/phpscript/c05/formularioSimple.php" ["DOCUMENT_ROOT"]=> string(34) "/home/users/web/b676/moo.vickuscom" ["UNIQUE_ID"]=> string(24) "VfGp6woBcFsAAD3DDAEAAABH" ["SERVER_NAME"]=> string(14) "www.vickus.com" ["HTTP_REFERER"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.htm" ["SERVER_ADMIN"]=> string(31) "cgiadmin@yourhostingaccount.com" ["HTTP_ACCEPT_ENCODING"]=> string(13) "gzip, deflate" ["HTTP_CONNECTION"]=> string(10) "keep-alive" ["CONTENT_LENGTH"]=> string(2) "56" ["SCRIPT_URI"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.php" ["SERVER_PORT"]=> string(2) "80" ["REMOTE_ADDR"]=> string(12) "148.205.56.1" ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1" ["REQUEST_URI"]=> string(35) "/phpscript/c05/formularioSimple.php" ["HTTP_HOST"]=> string(14) "www.vickus.com" ["TZ"]=> string(7) "EST5EDT" } 
HTTP_ENV_VARS -> 'Array' DUMP:
     array(3) { ["nombre"]=> string(4) "Beto" 
                ["datoOculto"]=> string(23) "Este es un campo oculto" 
                ["ok"]=> string(6) "ENVIAR" } 
_POST -> 'Array' DUMP:
     array(3) { ["nombre"]=> string(4) "Beto" ["datoOculto"]=> string(23) "Este es un campo oculto" ["ok"]=> string(6) "ENVIAR" } 
HTTP_POST_VARS -> 'Array' DUMP:
     array(0) { } 
_GET -> 'Array' DUMP:
     array(0) { } 
HTTP_GET_VARS -> 'Array' DUMP:
     array(0) { } 
_COOKIE -> 'Array' DUMP:
     array(0) { } 
HTTP_COOKIE_VARS -> 'Array' DUMP:
    array(32) { ["PATH"]=> string(28) "/usr/local/bin:/usr/bin:/bin" ["SCRIPT_NAME"]=> string(35) "/phpscript/c05/formularioSimple.php" ["REQUEST_METHOD"]=> string(4) "POST" ["HTTP_ACCEPT"]=> string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8" ["SCRIPT_FILENAME"]=> string(69) "/home/users/web/b676/moo.vickuscom/phpscript/c05/formularioSimple.php" ["SERVER_SOFTWARE"]=> string(8) "Apache/2" ["REMOTE_PORT"]=> string(5) "36574" ["HTTP_USER_AGENT"]=> string(72) "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0" ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0" ["HTTP_ACCEPT_LANGUAGE"]=> string(14) "en-US,en;q=0.5" ["CONTENT_TYPE"]=> string(33) "application/x-www-form-urlencoded" ["GATEWAY_INTERFACE"]=> string(7) "CGI/1.1" ["SCRIPT_URL"]=> string(35) "/phpscript/c05/formularioSimple.php" ["DOCUMENT_ROOT"]=> string(34) "/home/users/web/b676/moo.vickuscom" ["UNIQUE_ID"]=> string(24) "VfGp6woBcFsAAD3DDAEAAABH" ["SERVER_NAME"]=> string(14) "www.vickus.com" ["HTTP_REFERER"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.htm" ["SERVER_ADMIN"]=> string(31) "cgiadmin@yourhostingaccount.com" ["HTTP_ACCEPT_ENCODING"]=> string(13) "gzip, deflate" ["HTTP_CONNECTION"]=> string(10) "keep-alive" ["CONTENT_LENGTH"]=> string(2) "56" ["SCRIPT_URI"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.php" ["SERVER_PORT"]=> string(2) "80" ["REMOTE_ADDR"]=> string(12) "148.205.56.1" ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1" ["REQUEST_URI"]=> string(35) "/phpscript/c05/formularioSimple.php" ["HTTP_HOST"]=> string(14) "www.vickus.com" ["TZ"]=> string(7) "EST5EDT" ["PHP_SELF"]=> string(35) "/phpscript/c05/formularioSimple.php" ["REQUEST_TIME"]=> int(1441901035) ["argv"]=> array(0) { } ["argc"]=> int(0) } 
_SERVER -> 'Array' DUMP:
    array(32) { ["PATH"]=> string(28) "/usr/local/bin:/usr/bin:/bin" ["SCRIPT_NAME"]=> string(35) "/phpscript/c05/formularioSimple.php" ["REQUEST_METHOD"]=> string(4) "POST" ["HTTP_ACCEPT"]=> string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8" ["SCRIPT_FILENAME"]=> string(69) "/home/users/web/b676/moo.vickuscom/phpscript/c05/formularioSimple.php" ["SERVER_SOFTWARE"]=> string(8) "Apache/2" ["REMOTE_PORT"]=> string(5) "36574" ["HTTP_USER_AGENT"]=> string(72) "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0" ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0" ["HTTP_ACCEPT_LANGUAGE"]=> string(14) "en-US,en;q=0.5" ["CONTENT_TYPE"]=> string(33) "application/x-www-form-urlencoded" ["GATEWAY_INTERFACE"]=> string(7) "CGI/1.1" ["SCRIPT_URL"]=> string(35) "/phpscript/c05/formularioSimple.php" ["DOCUMENT_ROOT"]=> string(34) "/home/users/web/b676/moo.vickuscom" ["UNIQUE_ID"]=> string(24) "VfGp6woBcFsAAD3DDAEAAABH" ["SERVER_NAME"]=> string(14) "www.vickus.com" ["HTTP_REFERER"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.htm" ["SERVER_ADMIN"]=> string(31) "cgiadmin@yourhostingaccount.com" ["HTTP_ACCEPT_ENCODING"]=> string(13) "gzip, deflate" ["HTTP_CONNECTION"]=> string(10) "keep-alive" ["CONTENT_LENGTH"]=> string(2) "56" ["SCRIPT_URI"]=> string(56) "http://www.vickus.com/phpscript/c05/formularioSimple.php" ["SERVER_PORT"]=> string(2) "80" ["REMOTE_ADDR"]=> string(12) "148.205.56.1" ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1" ["REQUEST_URI"]=> string(35) "/phpscript/c05/formularioSimple.php" ["HTTP_HOST"]=> string(14) "www.vickus.com" ["TZ"]=> string(7) "EST5EDT" ["PHP_SELF"]=> string(35) "/phpscript/c05/formularioSimple.php" ["REQUEST_TIME"]=> int(1441901035) ["argv"]=> array(0) { } ["argc"]=> int(0) } 
HTTP_SERVER_VARS -> 'Array' DUMP:
    array(0) { } 
_FILES -> 'Array' DUMP:
    array(0) { } 
HTTP_POST_FILES -> 'Array' DUMP:
   array(3) { ["nombre"]=> string(4) "Beto" ["datoOculto"]=> string(23) "Este es un campo oculto" ["ok"]=> string(6) "ENVIAR" } 
_REQUEST -> 'Array' DUMP:
   array(3) { ["nombre"]=> string(4) "Beto" ["datoOculto"]=> string(23) "Este es un campo oculto" ["ok"]=> string(6) "ENVIAR" } 
valor -> 'Array' DUMP:
string(5) "valor" cve -> 'valor' DUMP: 