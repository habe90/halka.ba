<?php 

require_once 'inc/db.php'; 

 if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT naziv FROM sura WHERE naziv LIKE :naziv';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['naziv' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['naziv'] . '</a>';
      }
    } else {
      echo '<h5 class="list-group-item border-1" stlye="font-size:10px;">Nema rezultata</h5>';
    }
  }

?>