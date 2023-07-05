<?php
$pageName = "Setting";
$pageGroup = "User Profile";
$currentPage = "Setting";
require_once "./includes/header.php";
require_once "./includes/sidebar.php";
require "./includes/connection.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['loggedin']) == true) {
    header("Location:../auth/login.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_SESSION['user'];
    $cupass = $_POST['cupass'];
    $newpass = $_POST['newpass'];
    $repass = $_POST['repass'];

    $sql = "SELECT * FROM `users` WHERE id = {$user}";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($cupass, $row['password'])) {
            if ($newpass === $repass) {
                $newpasshash = password_hash($newpass, PASSWORD_DEFAULT);
                $sql = "UPDATE `users` SET `password` = '{$newpasshash}' WHERE id = '{$user}'";
                $result = $conn->query($sql);

                if ($result) {
                    $_SESSION['msg'] = "Password updated successfully";
                } else {
                    $_SESSION['msg'] = "Error updating password";
                }
            } else {
                $_SESSION['msg'] = "New password and retype password do not match";
            }
        } else {
            $_SESSION['msg'] = "Old password is incorrect";
        }
    }
}
?>

<body>
  <main id="content">
    <!-- BREADCRUM -->
    <?php require_once "./includes/breadcrum.php" ?>
    <!-- YOUR CONTENT STARTS FROM HERE -->
    <div class="container d-flex align-items-center justify-content-center">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <form action="" method="post">
              <div class="my-2">
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-4 col-form-label">Currenat Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword" name="cupass">

                  </div>

                </div>

                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-4 col-form-label">New Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword" name="newpass">

                  </div>

                </div>

                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-4 col-form-label">Retype Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword" name="repass">

                  </div>

                </div>

                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                  <div class="col-sm-8 d-grid">
                    <button type="submit" class="btn btn-primary">change</button>

                  </div>

                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>