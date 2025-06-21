<?php include 'includes/header.php'; ?>
<h2>Visitor Records</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Reason</th>
      <th>Category</th>
      <th>Student</th>
      <th>Visit Time</th>
    </tr>
  </thead>
  <tbody>
<?php
$stmt = $pdo->query('SELECT * FROM visitors ORDER BY visit_time DESC');
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";
    echo "<td>" . htmlspecialchars($row['reason']) . "</td>";
    echo "<td>" . htmlspecialchars($row['category']) . "</td>";
    echo "<td>" . htmlspecialchars($row['student']) . "</td>";
    echo "<td>" . htmlspecialchars($row['visit_time']) . "</td>";
    echo "</tr>";
}
?>
  </tbody>
</table>
<?php include 'includes/footer.php'; ?>
