<div class="content">
  <h2>Contact</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
    </tr>

    <?php
    foreach ($contacts as $contact) {
    ?>
      <tr>
        <td>
          <a href="detail&id=<?= $contact->id; ?>"> <?= $contact->name; ?></a>
        </td>
        <td>
          <?= $contact->phone; ?>
        </td>
        <td>
          <?= $contact->email; ?>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
</div>