<?PHP
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'chatroom';
    $conn = new mysqli($server, $username, $password, $database) or die("not connected");
    echo "connected"
?>