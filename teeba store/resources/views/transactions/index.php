
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container my-5">
    <div class="d-flex justify-content-between">
        <h1>list transaction</h1>
        <div>
            <strong>Total Sales</strong>
            <span id="total-sales">0</span>
        </div>
    </div>
    <hr>

    <form id="userInputContainer" class="my-4 d-flex justify-content-between" method="POST" action="/transactions/store">

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Items</span>
            <select  id="items" class="form-select" name="item_name" aria-label="Default select example">
                <option selected>Select One Of The Items</option>
                <?php foreach ($data->items as $item) : ?>
                  <option value="<?= $item->item_name ?>" value="<?= $item->price ?>" ><?= $item->item_name ?></option>
           

                  <?php endforeach ?> 
                  <input type="hidden" value="<?= $item->price ?>" name="price">

            </select>
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Quantity</span>
            <input id="quantity" type="number" class="form-control" aria-describedby="addon-wrapping" min="0" name="quantity">
        </div>

       

        <button id="add-item" class="btn btn-success">Add</button>

    </form>



    <div id="dataTableContainer">


        <table class="table table-hover">
            <thead>
                <tr style="background-color:#f8f9fad1">
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price Per Unit</th>
                    <th scope="col">Total</th>
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
        <?php $x=(int)($transaction->price) * (int)($transaction->quantity)?>
        <td><?php echo $x?></td>
        <td><a href="/transactions/delete?id=<?php echo $transaction->id?>" class="btn btn-danger">delete</a> <a href="/transactions/edit?id=<?php echo $transaction->id?>" class="btn btn-warning">edit</a></td>
        <?php endforeach?>
    </tr>   
            </tbody>
        </table>
                    


    </div>




    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src ="resources/css/app.js">
     
    </script>


</body>

</html>
<!-- <script>// $(document).ready(function () {

// });

$(function () {
    const items = $('#items');
    const quanitiy = $('#quantity');
    const price = $('#price');
    const addItem = $('#add-item');
    const table = $('tbody');
    const totalSalesElement = $('#total-sales');

    let totalSales = 0;

    let counter = 1;
    addItem.click(function (e) {
        e.preventDefault();

        let item = items.val();
        let q = quanitiy.val();
        let p = price.val();

        if (q == "" || p == "" || item == "") {
            alert("You need to enter the item values to proceed!");
            return;
        }

        table.append(`
    <tr style="background-color:#f8f9fad1">
        <td>${counter}</td>
        <td>${item}</td>
        <td>${q}</td>
        <td>${p}</td>
        <td>${q * p}</td>
    </tr>
    `);

        totalSales += q * p;
        totalSalesElement.text(totalSales);
        counter++;
        $('#userInputContainer').trigger('reset');

    });
});</script> -->