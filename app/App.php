<?php

declare(strict_types=1);

function getTransactionFiles(string $dirPath): array
{
    $files = [];

    foreach (scandir($dirPath) as $file) {

        if (is_dir($file)) {
            continue;
        }
        $files[] = $dirPath .$file; 
        //var_dump($file);
    }

    return $files; 
}

function getTransactions(string $fileName): array
{
    if (!file_exists($fileName)) {
        trigger_error('File "'. $fileName . '"does not exists.', E_USER_ERROR);
    }

    $file = fopen($fileName, 'r');

    fgetcsv($file);

    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = $transaction;
    }

    return $transactions;
}

function readTransactionCSV(array $transactionRow):array {

    [$date, $checkNumber,  $description, $amount] = $transactionRow;

    $amount = str_replace(['$', ',', '"'], '', $amount);

    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount
    ];
}