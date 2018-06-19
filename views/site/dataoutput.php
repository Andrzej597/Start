
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $user ) {
        echo "<tr>";
        echo "<th scope='row'>".$user->userid. "</th>";
        echo "<td>".$user->username. "</td>";
        echo "<td>".$user->email. "</td>";
        echo "<td>".$user->password. "</td>";
        echo "</tr>";
    }
    ?>

    </tbody>
</table>