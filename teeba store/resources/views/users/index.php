<h1 class="d-flex justify-content-around mb-5">Users List (<?= $data->users_count ?>)</h1>

<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="color: white; background-color:#4e4848">Display Name</th>
                <th scope="col" style="color: white;background-color:#4e4848">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data->users as $user) : ?>
                <tr style="background-color: #4e4848; color:white">
                    <td><?= $user->display_name ?></td>
                    <td><a href="./user?id=<?= $user->id ?>" class="btn btn-dark">Check User</a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>