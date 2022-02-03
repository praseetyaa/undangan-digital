<div class="wrap">
  <div class="heading">
    <h2>
      <span>Spandiv</span>
      <span>Addtional Plugin</span>
    </h2>
  </div>

  <div class="row">
    <div class="col-lg-9">
      <table class="table bg-white table-borderless rounded-3 shadow-sm">
        <thead class="border-bottom">
          <tr>
            <th hidden></th>
            <th><p>Name</p></th>
            <th><p>Content</p></th>
          </tr>
        </thead>
        <form action="" method="post">

        <?php
          $result = $wpdb->get_results("SELECT * FROM $table_settings");
          foreach($result as $print) { ?>

          <tbody>
            <tr>
              <td hidden><input class="form-control" type="text" id="uptSettingsId" name="uptSettingsId" value="<?= "$print->settings_id" ?>" disabled></td>
            </tr>
            <tr>
              <td><p>Address</p></td>
              <td><textarea class="form-control" rows="3" type="text" id="uptaddress" name="uptaddress"><?= "$print->address" ?></textarea></td>
            </tr>
            <tr><td class="text-primary"><b><p>Contact</p></b></td></tr>
            <tr>
              <td><p>Telephone</p></td>
              <td><input class="form-control" type="text" id="upttelephone" name="upttelephone" value="<?= "$print->telephone" ?>"></td>
            </tr>
            <tr>
              <td><p>Message</p></td>
              <td><textarea class="form-control" type="text" id="uptmessage" name="uptmessage" rows="3"><?= "$print->message" ?></textarea></td>
            </tr>
            <tr>
              <td><p>Email</p></td>
              <td><input class="form-control" type="text" id="uptemail" name="uptemail" value="<?= "$print->email" ?>"></td>
            </tr>
             <tr><td class="text-primary"><b><p>Social Media</p></b></td></tr>
            <tr>
              <td><p>Facebook</p></td>
              <td><input class="form-control" type="text" id="uptfacebook" name="uptfacebook" value="<?= "$print->facebook" ?>"></td>
            </tr>
            <tr>
              <td><p>Twitter</p></td>
              <td><input class="form-control" type="text" id="upttwitter" name="upttwitter" value="<?= "$print->twitter" ?>"></td>
            </tr>
            <tr>
              <td><p>Instagram</p></td>
              <td><input class="form-control" type="text" id="uptinstagram" name="uptinstagram" value="<?= "$print->instagram" ?>"></td>
            </tr>
            <tr>
              <td><P>Youtube</P></td>
              <td><input class="form-control" type="text" id="uptyoutube" name="uptyoutube" value="<?= "$print->youtube" ?>"></td>
            </tr>
             <tr><td class="text-primary"><b><p>About Us</p></b></td></tr>
            <tr>
              <td><p>About</p></td>
              <td><textarea class="form-control" type="text" id="uptabout" name="uptabout" rows="4"><?= "$print->about" ?></textarea></td>
            </tr>
            <tr>
              <td><p>Google Maps Embed</p></td>
              <td><textarea class="form-control" type="text" id="uptmaps" name="uptmaps" rows="3"><?= "$print->maps" ?></textarea></td>
            </tr>
          </tbody>

          <?php } ?>

          <tfoot>
            <tr>  
              <td></td>
              <td><button type="submit" name="uptsubmit_settings" id="uptsubmit_settings" class="btn btn-primary float-end px-3 rounded-3">Save</button></td>
            </tr>
          </tfoot>
        </form>  
      </table>
    </div>

    <?php include('sidebar.php'); ?>

  </div>
</div>