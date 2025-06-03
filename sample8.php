<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付リスト (1年分)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .date-list {
            line-height: 1.8;
            column-count: 3;
            column-gap: 40px;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <h1>今日から1年分の日付リスト</h1>
    <div class="date-list">
        <?php
        date_default_timezone_set('Asia/Tokyo');

        $today = date('Y-m-d');
        $endDate = date('Y-m-d', strtotime('+1 year'));

        for ($current = strtotime($today); $current <= strtotime($endDate); $current = strtotime('+1 day', $current)) {
            echo date('n/j(D)', $current) . "<br>";
        }
        ?>
    </div>
</body>
</html>
