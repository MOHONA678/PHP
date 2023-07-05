<?php
$pageName = "Notification";
$pageGroup = "User Profile";
$currentPage = "Notification";
require_once "./includes/header.php";
require_once "./includes/sidebar.php";
?>

<body>
    <main id="content">
        <!-- BREADCRUM -->
        <?php require_once "./includes/breadcrum.php" ?>
        <!-- YOUR CONTENT STARTS FROM HERE -->
        <section class="my-5">

            <body>
                <table class="table">
                    <thead>
                        <tr>
                            <th>image</th>
                            <th>name of user</th>
                            <th>Desciption</th>
                            <th>Time</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><img src="https://via.placeholder.com/50x50" alt="" class="rounded-circle"></td>
                            <td>
                                <div class="my-3">
                                    Nasir
                                </div>
                            </td>
                            <td>
                                <div class="my-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>

                            </td>
                            <td>
                                <div class="my-3">
                                    2 minutes ago
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </section>
    </main>
</body>

</html>