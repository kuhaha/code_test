<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Google Books APIs</title>
</head>
<body>
<?php 
  include 'googlebooksapi.php'; 
  function get($obj, $property, $default='N/A')
  {
    if ($obj instanceof stdClass and property_exists($obj, $property))
      return $obj->$property;
    return $default;
  }
?>
<p>全<?=$total_count?>件中、<?=$get_count?>件を表示中</p>
<!-- 1件以上取得した書籍情報がある場合 -->
<?php if($get_count > 0): ?>
  <div class="loop_books">
    <!-- 取得した書籍情報を順に表示 -->
    <?php foreach($books as $book):
        $info = get($book, 'volumeInfo');
        // タイトル
        $title = get($info, 'title');
        // 出版社
        $publisher = get($info, 'publisher');
        $publishedDate = get($info, 'publishedDate');
        $isbn = get($info, 'industryIdentifiers');
        $isbn10 = $isbn[0]->type=='ISBN_10' ? get($isbn[0],'identifier') : 'N/A';
        $isbn13 = $isbn[1]->type=='ISBN_13' ? get($isbn[1],'identifier') : 'N/A';
        // サムネ画像
        $imglink = get($info,'imageLinks');
        $thumbnail = get($imglink,'thumbnail');
        // 著者（配列なのでカンマ区切りに変更）
        $authors = get($info, 'authors');
        if (is_array($authors))
          $authors = implode(',', $authors);

        $intro = get(get($book, 'searchInfo'), 'textSnippet');
    ?>
      <div class="loop_books_item">
        <img src="<?=$thumbnail?>" alt="<?=$title?>"><br />
        <p>
          <b><?=$title?></b><br />
          著　者：<?=$authors?><br />
          出版社：<?=$publisher?><br />
          出版日：<?=$publishedDate?><br />
          ISBN13：<?=$isbn10?><br />
          概要：<?=$intro?><br />
        </p>
      </div>
    <?php endforeach?>

  </div><!-- ./loop_books -->

<!-- 書籍情報が取得されていない場合 -->
<?php else: ?>
  <p>情報が有りません</p>

<?php endif?>

<?php
echo '<pre>';
var_dump($json);
echo '</pre>';
?>

</body>
</html>