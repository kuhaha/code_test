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


## C. Google Books

- https://books.google.co.jp/

書籍の全文が登録された世界最大級の包括的なインデックスを検索できます。

### Google Books APIs
- https://developers.google.com/books?hl=ja
- https://labo.kon-ruri.co.jp/google-books-apis/

著者名、書籍タイトル、ISBNなどで書籍の情報を得るには、Google Books APIsがかなり手頃で使いやすいです。

- 特別な認証は必要なし
- レスポンスまでの速度も早い

とあって、使いやすさ抜群。一方で、書籍の網羅率には国会図書館サーチなどにはやや劣りますが、ISBN10でもISBN13でも検索ができるので、「書籍情報をちょっと調べたい」というときには最適です。
