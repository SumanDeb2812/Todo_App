<?php
if(isset($_POST['create'])){
    try {
        $conn = new PDO("mysql:host=localhost;dbname=test", "root", "");
        $name = $_POST['name'];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $query = $conn->prepare("INSERT INTO test_table_1 (name, email, contact) VALUES (:name, :email, :contact)");
        $query->execute([':name' => $name, ':email' => $email, ':contact' => $contact]);
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
    header("Location:index1.php");
}
?>