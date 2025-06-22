<?php
include 'db.php';
header('Content-Type: application/json');
$sql = "SELECT date, title, amount FROM expenses ORDER BY date DESC, id DESC";
$result = mysqli_query($conn, $sql);
$expenses = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $expenses[] = $row;
    }
    echo json_encode(['success' => true, 'expenses' => $expenses]);
} else {
    echo json_encode(['success' => false, 'expenses' => []]);
}
?>
