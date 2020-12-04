<div class="content">
  <h2>Admin</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Action</th>
    </tr>

    <?php
    foreach ($contacts as $contact) {
    ?>
      <tr>
        <td>
          <a href="<?= base_url?>detail&id=<?= $contact->id; ?>"> <?= $contact->name; ?></a>
        </td>
        <td>
          <?= $contact->phone; ?>
        </td>
        <td>
          <?= $contact->email; ?>
        </td>
        <td>
          <a id="edit" href="<?= base_url?>admin/edit&id=<?= $contact->id; ?>"> Edit</a>
          <a href="<?= base_url?>delete&id=<?= $contact->id; ?>"> Delete</a>
          </ul>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
  <br>
  <a type="button" href="<?= base_url?>admin/create">Add Contact</a>
</div>