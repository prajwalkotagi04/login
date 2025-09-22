<?php
    include "../connection.php";
    include "sidbar.php";

    $sql = "SELECT * FROM user";
    $result = $con->query($sql);
?>
<div class="ml-[20%] p-20">
    <h1 class="text-2xl font-bold">View User Area</h1>
    <table class="shadow max-h-screen" cellpadding="10" cellspacing="0">
        <thead class="bg-gray-200">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['phone']."</td>
                                <td>".$row['password']."</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No users found</td></tr>";
                }
            ?>
        </tbody>
    </table>
</div>
