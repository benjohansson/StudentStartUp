<!DOCTYPE html>
<html>
  <head>
    <title>StudentStartUp</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
  </head>
  <body>
    <div class="mainBorder">
      <div class="header">
        <h1>StudentStartUp</h1>
      </div>
      <div class="logInClass">
        <form id="logIn" name="logIn" method="POST" action="login-process.php">
          <input type="email" id="logEmail" name="logEmail" placeholder="E-mail">
          <input type="password" id="logPassword" name="logPassword" placeholder="Lösenord">
          <input type="submit" value="Logga in!" id="loginbtn">
        </form>
      </div>
      <div class="register">
        <fieldset>
          <legend>Inte registrerad? Registrera dig här!</legend>
          <form id="postFrame" onsubmit="return validate()" name="registerForm" method="POST" action="register-process.php">
            <input type="text" id="regnamn" name="regnamn" placeholder="Fullständigt namn">

            <select name="program" placeholder="Område" method="POST" action="register-process.php">
              <option value="ekonomi">Ekonomi</option>
              <option value="läkare">Läkare</option>
              <option value="datorvetenskap">Datorvetenskap</option>
              <option value="systemvetenskap">Systemvetenskap</option>
            </select><br><br>

            <input type="email" id="regmail" name="regmail" placeholder="E-post">
            <select name="school" id="school" placeholder="Universitet" method="POST" action="register-process.php">
              <option value="Uppsala universitet">Uppsala univeritet</option>
              <option value="KTH">KTH</option>
              <option value="Stockholms universitet">Stockholms universitet</option>
              <option value="Chalmers">Chalmers</option>
            </select><br><br>

            <input type="password" id="reglösenord" name="reglösenord" placeholder="Välj lösenord"></textarea><br><br>

            <input type="password" id="valLösen" name="valLösen" placeholder="Upprepa lösenord"></textarea><br>

            <input type="submit" value="Registrera dig!" name="regbtn" id="regbtn">
          </form>
        </fieldset>
      </div>
      <div class="navigation">
        <ul id="menu">
          <li>Hjälp</li>
          <li>Om oss</li>
          <li>Våra villkor</li>
          <li>Kontakta oss</li>
      </div>
    </div>
  </body>
</html>
