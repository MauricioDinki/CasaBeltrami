<?php
include "config.php";
    if (isset($_GET['d'])):
        $stmt = $mysqli->prepare("DELETE FROM events WHERE id_event=?");
        $stmt->bind_param('s', $id);
        $id = $_GET['d'];
        if ($stmt->execute()):
            $mysqli->close();
            echo "<script>location.href='events.php'</script>";
        else:
            echo "<script>alert('" . $stmt->error . "')</script>";
        endif;
    endif;
?>
