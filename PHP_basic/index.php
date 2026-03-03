<?php include 'db.php'; ?>

<h2>PHP Basic Task Manager</h2>

<form action="add.php" method="POST">
    <input type="text" name="title" placeholder="New task" required>
    <button>Add</button>
</form>

<ul>
<?php
$result = $conn->query("SELECT * FROM todos");

while($row = $result->fetch_assoc()) {
    echo "<li>{$row['title']} 
    <a href='delete.php?id={$row['id']}'>❌</a></li>";
}
?>
</ul>