<?php
include '../b/header.php';
include_once '../businessLogic/variables.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $userList = VariablesExample::getUsers();
} else {
    header("Location:./a/index.php");
}


?>

<div>
    <h1>This is Dashboard page</h1>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Username</td>
                    <td>Mosha</td>
                    <td>Detajet</td>
                    <td>Modifiko</td>
                    <td>Fshij</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['age']; ?></td>
                        <td><a href=<?php echo "../businessLogic/detailsUser.php?id=" . $user['id']; //to be continued next week 
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "../businessLogic/modifyUser.php?id=" . $user['id']; //to be continued next week 
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "../businessLogic/deleteUser.php?id=" . $user['id']; //to be continued next week 
                                    ?>>Fshij</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>




<?php
include './components/footer.php'
?>