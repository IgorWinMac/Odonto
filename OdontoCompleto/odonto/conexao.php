<?php 

define('host','localhost');
define('usuario','root'); 
define('senha','senac'); 
define('banco','odonto');
define('port','3307');

$conn = mysqli_connect(host,usuario,senha,banco,port) or die 
('Não foi possível conectar!' . $conexao->connect_error);

?>