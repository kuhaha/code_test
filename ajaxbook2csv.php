
<!DOCTYPE html>
<html  lang="ja-jp">
<head>
   <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h2>バーコードをスキャンして下さい</h2> 
<input id="isbn"/>
<h2>検索結果</h2>
<div id="result"></div>

<?php
$data = array(
    array(
        'id' => 1,
        'name' => 'Aさん',
        'email' => 'aaa@a.com',
        'password' => 'aaaaa'
    ),
    array(
        'id' => 2,
        'name' => 'Bさん',
        'email' => 'bbb@b.com',
        'password' => 'bbbbb'
    ),
    array(
        'id' => 3,
        'name' => 'Cさん',
        'email' => 'ccc@c.com',
        'password' => 'ccccc'
    ),
);
try {

    $fileName = time() . rand() . '.csv';
    $res = fopen($fileName, 'w');
    if ($res === FALSE) {
        throw new Exception('ファイルの書き込みに失敗しました。');
    }

    // 項目名先に出力
    $header = ["id", "name", "email", "password"];
    fputcsv($res, $header);

    // ループしながら出力
    foreach($data as $dataInfo) {
        // 文字コード変換。エクセルで開けるようにする
        mb_convert_variables('SJIS', 'UTF-8', $dataInfo);

        // ファイルに書き出しをする
        fputcsv($res, $dataInfo);
    }

    // ファイルを閉じる
    fclose($res);
} catch(Exception $e) {

    // 例外処理をここに書きます
    echo $e->getMessage();

}