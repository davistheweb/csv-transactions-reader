<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Transaction Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />  
  </head>
  <body class="bg-light p-5">
    <div class="container">
      <h2 class="mb-4">Transaction History</h2>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Date</th>
            <th>Check #</th>
            <th>Description</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($transactions)) : ?>
            <?php foreach($transactions as $transaction) :?>
              <tr>
                <td><?= $transaction[0] ?></td>
                <td><?= $transaction[1] ?></td>
                <td><?= $transaction[2] ?></td>
                <td><?= $transaction[3] ?></td>
              </tr>
            <?php endforeach ?>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
