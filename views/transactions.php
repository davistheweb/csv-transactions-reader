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
                <td><?= formatDate($transaction['date']) ?></td>
                <td><?= $transaction['checkNumber'] ?></td>
                <td><?= $transaction['description'] ?></td>
                <td class="<?= $transaction['amount'] <0 ? 'text-danger': 'text-success' ?>"><?= formatDollarAmount($transaction['amount']) ?></td>
              </tr>
            <?php endforeach ?>
          <?php endif ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="3">Total Income:</th>
            <td><?= formatDollarAmount($totals['totalIncome'] ?? 0) ?></td>
          </tr>
          <tr>
            <th colspan="3">Total Expense</th>
            <td><?= formatDollarAmount($totals['totalExpense'] ?? 0) ?></td>
          </tr>
          <tr>
            <th colspan="3">Net Total</th>
            <td><?= formatDollarAmount($totals['netTotal'] ?? 0) ?></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </body>
</html>
