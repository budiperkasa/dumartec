<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td class="label_block_2 border_3b">CONTACT US</td>
  </tr>
  <tr>
    <td class="contentofthecell">
    <p> Fields marked with an asterisk (*) are required.</p><br><br>
    <form action="" method="POST" id="userinput">
    <label for="name">*Tell us your name</label>
    <input type="text" name="name" maxlength="255" id="name" value="<?=$_POST["name"]?>">
    <label for="email">*Your email</label>
    <input type="text" name="email" maxlength="255" id="email" value="<?=$_POST["email"]?>">
    <label for="email">*Phone</label>
    <input type="text" name="phone" maxlength="255" id="phone" value="<?=$_POST["phone"]?>">
    <label for="message">*your message</label>
    <textarea name="message" id="message"><?=$_POST["message"]?></textarea>
    <input type="submit" name="submit" value="Send Message" class="submitbutton">
    </form>
    </td>
  </tr>
</table>
