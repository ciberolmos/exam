 <?php
$servername = "localhost";
$username = "php";
$password = "1234";
$dbname = "pruebas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$cod=$_POST["cod"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];

$sql = "INSERT INTO productos (cod, descripcion, precio)
VALUES ('$cod', '$descripcion', '$precio')";

$resultado = mysqli_query($conn, $sql);

if ($resultado) {
echo "Producto insertado correctamente";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

