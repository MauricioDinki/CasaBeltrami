<?php
include "config.php";
    if (isset($_GET['d'])):
        $stmt = $mysqli->prepare("DELETE FROM party_room WHERE id_party_room=?");
        $stmt->bind_param('s', $id);
        $id = $_GET['d'];
        if ($stmt->execute()):
            $mysqli->close();
            echo "<script>location.href='salon.php'</script>";
        else:
            echo "<script>alert('" . $stmt->error . "')</script>";
        endif;
    endif;
?>
