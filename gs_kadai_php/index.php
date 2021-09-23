<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Form</title>
</head>
<body>
    <form method="post" action="post.php">
        <header>Form</header>
        <table align="center">
          <tr>  
            <td><input name="name" type="text" placeholder="Your Name..."></td>
          </tr>
          <tr>
            <td><input name="address" type="text" placeholder="Mail Address..."></td>
          </tr>
          <tr>
            <td><input name="tel" type="tel" placeholder="Phone Number..."></td>
          </tr>
          <tr>
            <td><textarea name="other"  cols="80" rows="8" placeholder="Details of your inquiry"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">
              <button type="resetform" value="reset">Reset</button>
              <button type="submitform"   value="submit" onclick="location.href='./post.php'">Submit</button>
            </td>
          </tr>
        </table>
    </form>
</body>
</html>
