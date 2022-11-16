<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style-index.css">
<link rel="stylesheet" href="css/style-main.css">
<link rel="icon" href="img/icon.png" >

<style>

</style>
</head>
<body>

<h2>به آچارک خوش آمدید</h2>
<div class="container btns" >
    <button onclick="document.getElementById('login').style.display='block'" style="width:auto;">ورود</button>
    <button onclick="document.getElementById('register').style.display='block'" style="width:auto;">عضویت</button>

    <a href="show_all.php"><button  style="width:auto;">نمایش همه (تست)</button></a>

</div>
<div id="login" class="modal">
  
  <form class="modal-content animate" action="login_check.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
    </div>

    <div class="container">
      <label for="user"><b>نام کاربری</b><input type="text" placeholder="" name="user" required></label>
      

      <label for="pass"><b>رمز عبور</b><input type="password" placeholder="" name="pass" required></label>
      
        
      <input type="submit" value="ورود">
      <label>
      مدیر هستم
      <select name="admin">
      <option value="member"></option>
      <option value="admin">بلی</option>
       </select>
       </label>
    </div>

  </form>
</div>

<div id="register" class="modal">
  
  <form class="modal-content animate" action="member/register_member.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
    </div>

    <div class="container">
      <label for="uname"><b>نام کاربری</b><input type="text" placeholder="" name="user" required></label>
      <label for="email"><b>ایمیل</b><input type="email" placeholder="" name="email" ></label>
      <label for="psw"><b>رمز عبور</b><input type="password" placeholder="" name="pass" required></label>
      <button type="submit">عضویت</button>
      </div>
    </div>


  </form>
</div>

<!-- باز و بستن کدر لاگین و عضویت -->
<script>
  // Get the modal
  var login = document.getElementById('login');
  var register = document.getElementById('register');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == login) {
          modal.style.display = "none";
      }
  }
  window.onclick = function(event) {
      if (event.target == register) {
          modal.style.display = "none";
      }
}
</script>

  <?php
include 'footer.php';
  ?>

</body>
</html>
