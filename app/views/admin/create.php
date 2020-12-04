<h2>Create new contact</h2>
<form id="formCreate" action="<?= base_url ?>create" method="POST">
  <label for="name">Name: </label>
  <input type="text" id="name" name="name" placeholder="Name" required><br><br>
  <label for="phone">Phone: </label>
  <input type="tel" id="phone" name="phone" placeholder="Phone" pattern="[0-9]{10}" required><br><br>
  <label for="email">Email: </label>
  <input type="email" id="email" name="email" placeholder="Email" required><br><br>
  <button type="submit">Submit</button>
</form>