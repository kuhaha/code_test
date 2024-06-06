<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h2>バーコードをスキャンして下さい</h2> 
<input id="isbn"/>
<h2>検索結果</h2>
<div id="result"></div>
<script>
var isbn = '9784802614443';
$('#isbn').change(function(){
    isbn = this.value;
    var settings = {
        "url": "https://www.googleapis.com/books/v1/volumes?q=isbn:"+isbn,
        "method": "GET",
        "timeout": 0
    };

    $.ajax(settings).done(function (data) {
        //$("#result").html(JSON.stringify(data));
        if (data.totalItems>0){
            var info = data.items[0].volumeInfo;
            var book = '';            
            book +='<img src="https://ndlsearch.ndl.go.jp/thumbnail/'+isbn+'.jpg">';
            var elements = ['title','authors','publisher', 'publishedDate','description',
                'pageCount',"categories"];
            elements.forEach(function (elem){
                book +='<br>' + info[elem];
            });
            $("#result").html(book);
        } 
    });
});


</script>
  
</body>
 </html>