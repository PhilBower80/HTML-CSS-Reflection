<?php 

function sendMessage($name, $email, $telephone, $subject, $message, $marketing) {
    include 'connection.php';

    $sql = "INSERT INTO contact_form(name, email, telephone, subject, message, marketing) VALUES('$name', '$email', '$telephone', '$subject', '$message', '$marketing')";
    // $sql = "INSERT INTO `contact_form` (`id`, `name`, `email`, `telephone`, `subject`, `message`, `marketing`) VALUES (NULL, 'Derek Bower', 'derek.bower@email.com', '01602722645', 'Help!', 'This is a test message', '1')";

    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':telephone', $telephone, PDO::PARAM_INT);
        $stmt->bindValue(':subject', $subject, PDO::PARAM_STR);
        $stmt->bindValue(':message', $message, PDO::PARAM_STR);
        $stmt->bindValue(':marketing', $marketing, PDO::PARAM_BOOL);

        $stmt->execute();
    } catch (Exception $e){
        echo "Error!: " . $e->getMessage() . "<br />";
    }
}

?>