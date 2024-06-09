<!DOCTYPE html>
<html lang="ja">
<head>
  <title>OpenBD Books APIs</title>
</head>
<body>
<?php

// 検索条件を配列にする
$params = array(
  '9784802614443', // ISBN 13
  '4802614446', // ISBN 10
  '9784274067815',
);

// APIの基本になるURL
$base_url = 'https://api.openbd.jp/v1/get?isbn=';
$url = $base_url . $params[1];
// 書籍情報を取得
$json = file_get_contents($url);
// デコード（objectに変換）
$data = json_decode($json, true);

echo '<pre>';
print_r($data);
echo '</pre>';
function get($arr, $key, $default=null){
    if (is_array($arr) and isset($arr[$key])){
        return $arr[$key];
    }
    return $default;
}
function parse_openbd($data)
{
    if (count($data) > 0){
        $book = $data[0];
    }
    return null;

}
/*
[
  onix:
    CollateralDetail:  []
    RecordReference: 9784274067815
    NotificationType: 03
    ProductIdentifier:
        ProductIDType: 15
        IDValue: 9784274067815
    DescriptiveDetail
        TitleDetail:
            TitleType: 01
            TitleElement:
                TitleElementLevel: 01
                TitleText
                    collationkey => プログラミング Haskell
                    content => プログラミングHaskell
        Contributor:
            [0]:
                SequenceNumber: 1
                ContributorRole:  []
                PersonName:
                    content: Hutton, Graham
                    collationkey: 
                    
            [1]:
                SequenceNumber: 2
                ContributorRole:  []
                PersonName:
                    content: 山本, 和彦, 1970-
                    collationkey: ヤマモト, カズヒコ
 
    PublishingDetail:
        Imprint:
            ImprintName: オーム社
        PublishingDate:
            [0]:
                PublishingDateRole: 11
                Date: 200911

    ProductSupply:
        SupplyDetail:
            ProductAvailability: 99
            Price:
                [0]:
                    PriceType: 01
                    CurrencyCode: JPY
                    PriceAmount: 2800

hanmoto:
    datecreated: 2016-08-27 19:13:14
    dateshuppan: 2009-11
    datemodified: 2016-08-27 19:13:14

summary:
    isbn: 9784274067815
    title: プログラミングHaskell
    volume: 
    series: 
    publisher: オーム社
    pubdate: 200911
    cover: 
    author: Hutton,Graham 山本,和彦,1970-
*/