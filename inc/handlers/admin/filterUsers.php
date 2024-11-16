   <?php
    include_once "../../db.php";
    ?>

   <section>
       <div class="text-white text-capitalize d-flex justify-content-end">
           <select name="userType" id="userType" onchange="filterUsers(event)">
               <option name="all" value="all">All</option>
               <option name="user" value="user">users</option>
               <option name="admin" value="admin">admins</option>
           </select>
       </div>
       <h1>Manage Users</h1>
       <table class="table table-centered mb-0">
           <thead>
               <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>Phone Number</th>
                   <th>Address</th>
                   <th>City</th>
                   <th>Postal Code</th>
                   <th>Active?</th>
                   <th>Province</th>
                   <th>Email</th>
                   <th>Create Date</th>
                   <th>Active?</th>
                   <th>Action</th>
               </tr>
           </thead>
           <tbody>
               <?php
                // SQL query to fetch all user details
                if (isset($_GET['userType']) && $_GET['userType'] !== 'all') {
                    $userType = $_GET['userType'];
                    $sql = "SELECT * FROM users WHERE roll = '$userType'"; // You can modify this to select specific fields if needed
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }


                // Check if any users are found
                if (count($users) > 0) {
                    foreach ($users as $user) {
                        echo '
                                            <tr>
                                                <td>' . htmlspecialchars($user["user_id"]) . '</td>
                                                <td>' . htmlspecialchars($user["first_name"]) . '</td>
                                                <td>' . htmlspecialchars($user["phone_number"]) . '</td>
                                                <td>' . htmlspecialchars($user["address"]) . '</td>
                                                <td>' . htmlspecialchars($user["city"]) . '</td>
                                                <td>' . htmlspecialchars($user["postal_code"]) . '</td>
                                                <td>' . htmlspecialchars($user["province"]) . '</td>
                                                <td>' . htmlspecialchars($user["roll"]) . '</td>
                                                <td>' . htmlspecialchars($user["email"]) . '</td>
                                                <td>' . htmlspecialchars($user["created_at"]) . '</td>
                                                <td>
                                                    <form method="POST" action="../../inc/handlers/admin/update_user_status.php">
                                                        <input type="hidden" name="user_id" value="' . htmlspecialchars($user["user_id"]) . '">
                                                        <div>
                                                            <input type="checkbox" name="account_status" value="1" ' . ($user["account_status"] == 1 ? 'checked' : '') . ' onchange="this.form.submit()" />
                                                        </div>
                                                    </form>
                                                </td>
                                               <td>
                                                    <a href="#" onclick="deleteUser(event,' . htmlspecialchars($user["user_id"]) . ')">Delete</a>
                                               </td>
                                            </tr>';
                    }
                } else {
                    echo '<p>No users found.</p>';
                }
                ?>
           </tbody>
       </table>
   </section>