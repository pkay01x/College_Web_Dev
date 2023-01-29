
<section>
<nav id="nav">
  <ul>
    <li class="current"><a href="index.php">Home</a></li>
    <li>
      <a href="gallery.php">Gallery</a>
    </li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="store.php">Store</a></li>
        <?php if(!isset($_SESSION['email'])) { ?>
        <li><a href="register.php">LogIn / Sign Up</a></li>
    <?php } else { ?>
    <li>
    <a href=""><?php echo $_SESSION['name']; ?></a>
    <ul>
    <li><a href="index.php?logout='1'">LogOut</a></li>
    <li><a href="user_home.php">Change Passowrd</a></li>
    <li><a href="user_home.php">Userinfo</a></li>
    </ul>
    </li>
    <?php } ?>
  </ul>
  </nav>
  </section>


