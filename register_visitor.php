<?php include 'includes/header.php'; ?>
<h2>Register Visitor</h2>
<form method="POST" action="submit_visitor.php" id="visitorForm">
  <div class="mb-3">
    <label for="fullname" class="form-label">Full Name</label>
    <input type="text" name="fullname" id="fullname" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="reason" class="form-label">Reason for Visit</label>
    <input type="text" name="reason" id="reason" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="student" class="form-label">Student to Visit</label>
    <input type="text" name="student" id="student" class="form-control" required>
  </div>
  <button type="button" class="btn btn-info" onclick="categorizeReason()">Categorize Reason</button>
  <button type="submit" class="btn btn-success">Submit</button>
</form>

<hr>
<h4>Face Detection (Allow camera access)</h4>
<video id="inputVideo" width="320" height="240" autoplay muted></video>

<script src="assets/js/face-api.min.js"></script>
<script src="assets/js/face_detection.js"></script>
<script>
async function categorizeReason() {
  const reasonInput = document.getElementById('reason').value;
  const response = await fetch('categorize_reason.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({reason: reasonInput})
  });
  const data = await response.json();
  alert('Categorized Reason: ' + data.category);
}

// Face detection script will start after models load
</script>

<?php include 'includes/footer.php'; ?>
