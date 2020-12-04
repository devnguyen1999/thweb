<h2>Edit contact</h2>
<form id="formEdit" action="<?= base_url ?>edit" method="POST">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" placeholder="" readonly value="<?= $contact->id; ?>"><br><br>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Name" required value="<?= $contact->name; ?>"><br><br>
    <label for="phone">Phone: </label>
    <input type="tel" id="phone" name="phone" placeholder="Phone" pattern="[0-9]{10}" required value="<?= $contact->phone; ?>"><br><br>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" placeholder="Email" required value="<?= $contact->email; ?>"><br><br>
    <button type="submit">Submit</button>
</form>