# 書誌情報を検索できるサービス・APIs

## A. 出版書誌データベース

- https://www.books.or.jp

『出版書誌データベース』、通称『Books』は出版業界唯一の出版情報の公開データベースです。紙の書籍、電子書籍、定期刊行物など数多くの出版情報を検索できます。日本書籍出版協会から、日本出版インフラセンターへ管理・運営を移行しています。

一般社団法人 日本出版インフラセンター（JPO）
- 出版情報登録センター(JPRO)
- 出版書誌データベース（Books）
- 担当： 浜崎・米津
- Email： info-books@jpo-center.jp

## B. 国会図書館

- https://www.ndl.go.jp/
- https://ndlsearch.ndl.go.jp/ 
- https://www.ndl.go.jp/jp/use/api/
  - 検索API（SRU,OpeSearch,OpenURL,OAI-PMH） 
  - 書影API (https://ndlsearch.ndl.go.jp/thumbnail/[isbn].jpg)

## C. opebBD, 書誌情報・書影を自由に

- https://openbd.jp/
- API: https://api.openbd.jp/v1/get?isbn=[isbn][&pretty]

openBD APIが提供する書誌・書影・内容紹介・書評情報などすべての情報は、本の販促・紹介目的に限り使用できます。個人・団体・企業を問いません。 

openBDは、カーリルがAPIシステムを開発します。カーリルは、図書館蔵書・貸出情報を横断的に高速で検索するサイトを提供しています。ここで培ったノウハウを活用します。

openBDに掲載する書誌情報・書影は版元ドットコムが収集します。版元ドットコムは、会員出版社229社のつくった本の書誌情報・書影をネット上で公開し、書店・取次などに送り届けるシステムをつくる出版社団体です。
さらに会員出版社だけでなく、大手から中小出版社まで、24,747社の約76万タイトルの本の書誌情報、書影、ためし読み、書評掲載情報などをあつめてサイトやAPIで提供しています。提供のために、出版社・出版業界・国立国会図書館などからの収集の蓄積を活用して取組みます。

## D. Google Books

- https://books.google.co.jp/

書籍の全文が登録された世界最大級の包括的なインデックスを検索できます。

### Google Books APIs
- https://developers.google.com/books?hl=ja
- https://labo.kon-ruri.co.jp/google-books-apis/

著者名、書籍タイトル、ISBNなどで書籍の情報を得るには、Google Books APIsがかなり手頃で使いやすいです。

- 特別な認証は必要なし
- レスポンスまでの速度も早い

とあって、使いやすさ抜群。一方で、書籍の網羅率には国会図書館サーチなどにはやや劣りますが、ISBN10でもISBN13でも検索ができるので、「書籍情報をちょっと調べたい」というときには最適です。
