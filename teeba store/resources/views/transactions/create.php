<div id="dataTableContainer">

<h1 style=";background-color:#f8f9fad1">transaction:(<?php echo $data->transactions_count?>)</h1>

<table class="table table-hover">
            <thead>
                <tr style="background-color:#f8f9fad1">
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price Per Unit</th>
                    <th scope="col">Total</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data->transactions as $transaction):?>
            <tr style="background-color:#f8f9fad1">
        <td><?php echo $transaction->id?></td>
        <td><?php echo $transaction->item_name?></td>
        <td><?php echo $transaction->quantity?></td>
        <td><?php echo $transaction->price?></td>
        <?php $x= ($transaction->price) * ($transaction->quantity) ?>
        <td><?php echo $x?></td>
        <td><?php echo $transaction->created_at?></td>
        <td><?php echo $transaction->updated_at?></td>
        <td><a href="/transactions/delete?id=<?php echo $transaction->id?>" class="btn btn-danger">delete</a> <a href="/transactions/edit?id=<?php echo $transaction->id?>" class="btn btn-warning">update</a></td>
        <?php endforeach?>
    </tr>
            </tbody>
        </table>



</div>