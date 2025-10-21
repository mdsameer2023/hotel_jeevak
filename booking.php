<?php include __DIR__ . '/includes/header.php'; ?>
<section class="container">
  <h2 class="section-title">Booking</h2>
  <form method="post" style="max-width:700px">
    <label>Full Name</label><br><input type="text" name="name" style="width:100%;padding:8px;margin:6px 0"><br>
    <label>Check-in</label><br><input type="date" name="checkin" style="padding:8px;margin:6px 0"><br>
    <label>Check-out</label><br><input type="date" name="checkout" style="padding:8px;margin:6px 0"><br>
    <label>Room Type</label><br><select name="room" style="padding:8px;margin:6px 0;width:100%"><option>Deluxe Room</option><option>Super Deluxe</option><option>Suite Room</option></select><br>
    <button class="btn" type="submit" style="background:#f57c00;color:#fff;padding:10px 16px;border-radius:8px;border:none">Request Booking</button>
  </form>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>