<?php 

function sendMessage($name, $email, $telephone, $subject, $message, $marketing) {
    include 'connection.php';

    $sql = "INSERT INTO contact_form(name, email, telephone, subject, message, marketing) VALUES('$name', '$email', '$telephone', '$subject', '$message', '$marketing')";

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



function getLatestNews() {
    include 'connection.php';

    $sql = 'SELECT * FROM latest_news ORDER BY date_posted DESC LIMIT 3';

    try {
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    } catch (Exception $e) {
        echo "Error!: " .  $e->getMessage() . "<br />";
        return false;
    }   
}


?>