<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Chat aplikace</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Emailová adresa</label>
          <input type="text" name="email" placeholder="Zadejte email" required>
        </div>
        <div class="field input">
          <label>Heslo</label>
          <input type="password" name="password" placeholder="Zadejte heslo" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="pokračovat na chat">
        </div>
      </form>
      <div class="link">Nemáte registraci?<a href="index.php"> Registrace</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
