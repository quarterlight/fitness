<?

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "sandbox");


$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
  if (!$conn){
  	die("Database connection failed: " . mysql_error());
  }

$db_select = mysql_select_db(DB_NAME, $conn);
  if (!$db_select){
  	die("Database selection failed: " . mysql_error());
  }
  
  
?>