<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $titles = $_POST['title'];
    $amounts = $_POST['amount'];
    $ok = true;
    for ($i = 0; $i < count($titles); $i++) {
        $title = $titles[$i];
        $amount = $amounts[$i];
        $sql = "INSERT INTO expenses (date, title, amount) VALUES ('$date', '$title', '$amount')";
        if (!mysqli_query($conn, $sql)) {
            $ok = false;
        }
    }
    if ($ok) {
        echo json_encode(['success' => true, 'message' => 'Expenses added successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error adding expenses.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
}
?>