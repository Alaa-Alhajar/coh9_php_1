<div class="row justify-content-between">

    <div class="col-sm-2 ml-4 my-5 pt-5">

        <div class="card mb-3">

            <div class="card-body" style="background-color: #766d6d;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">

                <h5 class="card-title text-center">total Items:(<?= $data->items_count ?>)</h5>

            </div>

        </div>

    </div>

    <div class="col-sm-2 my-5 pt-5">

        <div class="card">

            <div class="card-body" style="background-color: #766d6d;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">

                <h5 class="card-title text-center">total Userss: (<?= $data->user_count ?>)</h5>

            </div>

        </div>

    </div>

    <div class="col-sm-2 my-5 pt-5">

        <div class="card">

            <div class="card-body" style="background-color: #766d6d;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">

                <h5 class="card-title text-center">transactions: (<?php echo $data->transactions_count?>)</h5>

            </div>

        </div>

    </div>

    <div class="col-sm-2 my-5 pt-5">

        <div class="card">

            <div class="card-body" style="background-color: #766d6d;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">

                <!-- <h5 class="card-title text-center">total sales: (<?= $transaction->total_seals ?>)</h5> -->

            </div>

        </div>

    </div>
<div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">item name</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data->top as $tops):?>

    <tr>
      <td><?php echo $tops['item_name'];?></td>
      <td><?php echo $tops['price'];?></td>
      <?php endforeach ?> 
    </tr>
  </tbody>
</table>

<?php



