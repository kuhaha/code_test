# 書誌情報を検索できるサービス・APIs

## A. 出版書誌データベース

- https://www.books.or.jp

『出版書誌データベース』、通称『Books』は出版業界唯一の出版情報の公開データベースです。紙の書籍、電子書籍、定期刊行物など数多くの出版情報を検索できます。2018年4月１日に一般社団法人 日本書籍出版協会のデータベースセンターと一般社団法人 日本出版インフラセンター（JPO）の 出版情報登録センター（JPRO）は組織統合されました。

さらに、両者のデータベースを2019年1月31日にシステム統合し、よりデータ活用できる充実したデータベースとなり、 名称も「データベース日本書籍総目録」から「出版書誌データベース」としましたが、 2021年3月31日にサービスを終了し、日本出版インフラセンターへ管理・運営を移行しています。

問い合わせ
```
  一般社団法人 日本出版インフラセンター（JPO）
  出版情報登録センター(JPRO)
  出版書誌データベース（Books）
  担当： 浜崎・米津
  Email： info-books@jpo-center.jp
```

## B. 国会図書館

- https://www.ndl.go.jp/
- https://ndlsearch.ndl.go.jp/ 
- https://www.ndl.go.jp/jp/use/api/
  - 検索API（SRU,OpeSearch,OpenURL,OAI-PMH） 
  - 書影API (https://ndlsearch.ndl.go.jp/thumbnail/[isbn].jpg)

## C. openBD: 書誌情報・書影を自由に

- https://openbd.jp/
- API: https://api.openbd.jp/v1/get?isbn=[isbn][&pretty]

openBD APIが提供する書誌・書影・内容紹介・書評情報などすべての情報は、本の販促・紹介目的に限り使用できます。個人・団体・企業を問いません。 

openBDは、株式会社カーリルがAPIシステムを開発します。株式会社カーリルは、図書館蔵書・貸出情報を横断的に高速で検索するサイトを提供しています。ここで培ったノウハウを活用します。

openBDに掲載する書誌情報・書影は版元ドットコムが収集します(版元ドットコムAPIは2019年11月末日停止しました)。版元ドットコムは、会員出版社229社のつくった本の書誌情報・書影をネット上で公開し、書店・取次などに送り届けるシステムをつくる出版社団体です。

さらに会員出版社だけでなく、大手から中小出版社まで、24,747社の約76万タイトルの本の書誌情報、書影、ためし読み、書評掲載情報などをあつめてサイトやAPIで提供しています。提供のために、出版社・出版業界・国立国会図書館などからの収集の蓄積を活用して取組みます。

版元ドットコムのサイトからご提供しているAPIは、2019年11月末日をもって停止しました。
版元ドットコムでは株式会社カーリルと一緒に、書誌情報・書影を、だれでも自由に使える、高速なAPIの提供を始めました。

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

書籍を検索する際の項目は以下です（リクエスト）。

```
書籍のタイトル
著者名
ISBN10 / ISBN13
Googleブックス上のIDなど
```

APIでは、主に以下の情報が入手できます（レスポンス）。

```
Googleブックス上のID
書籍タイトル / サブタイトル
著者
出版日
書籍についての説明文（あらすじなど）
ISBN10 / ISBN13
ページ数
サムネ画像のURL
言語
```

このAPIを利用するには楽天やAmazonのAPIと違って認証が必要なく、誰でも簡単に利用できます。
APIで情報を入手するには、基本的にURLの最後のq=以降に条件となるテキストを入れます。

```
https://www.googleapis.com/books/v1/volumes?q=検索語句
```

設定できる項目の中で、主に利用するものをまとめました。
- `intitle`: 	タイトル
- `inauthor`: 	著者名
- `isbn`:	ISBN10もしくはISBN13（どちらでも可）

※このほか、詳しくは[公式ドキュメント](https://developers.google.com/books)を参考にしてください。

```
kind:
totalItems:
Items:
  [
    kind:
    id:
    etag:
    selfLink:
    volumeInfo:
      title:
      authors:
        []
      publisher:
      publishedDate:
      description:
      industryIndentifiers:
        [
          type: "ISBN_10"
          identifier:
        ],
        [
          type: "ISBN_13"
          identifier:
        ],
      readingMode:
      pageCount:
      printType:
      categories:
        []
      maturityRating:
      allowAnonLogging:
      panelizationSummmary:
      imageLinks:
        smallThumnail:
        thumnail:
      language:
      previewLink:
      canonicalVolumeLink:
      saleInfo:
        country:
        saleability:
        isEbook:
        listPrice:
          amount:
          currencyCode: JPY
        retailPrice:
          amount:
          currencyCode: JPY
        buyLink:
        offers:
      accessInfo:
        country:
        viewability:
  ],    
  [

  ]
  
```

## E. Amazon Product Advertising API (PA-API)

Amazon APIは、Amazonの機能を他のアプリケーションやサービスで利用できるようにするための手段を提供します。APIは、プログラムが互いにコミュニケーションを取り、機能を統合することを容易にするための重要な技術です。

物販に活用できるAmazon APIは、大きく次の2種類に分けることができます。

### Amazon Product Advertising API

Amazon Product Advertising APIは、アフィリエイトによる商品リンクや広告の実装を支援するAPIです。このAPIを使うことで、自社サイトやアプリ内にAmazonの商品画像や情報、価格比較機能を組み込めます。

アフィリエイトは、ユーザーが商品をクリックしたり購入した際に報酬が発生する仕組みのことです。

PA-APIをご利用いただくためには下記のご対応が必要となります。

1. Amazonアソシエイト・プログラムの有効なアカウントが必要です。アカウントの取得はこちら。
2. Amazonアソシエイト・プログラム運営規約に同意する必要があります。
3. アソシエイト・プログラム活動を開始して、売上実績を獲得し、審査に進んでいただく
(申し込みだけではPA-APIは使用はできません。初期の段階では、通常のアソシエイトリンクを使用して売上実績を獲得してください。)
アソシエイト・アカウントの審査に関しては、こちらをご確認ください。
4. アソシエイト・プログラムの審査に合格した後に、Product Advertising APIのページにてアクセスキーを取得してPA-APIの利用を開始してください。

### MWS API

Amazon Marketplace Web Service(MWS) APIは、Amazonマーケットプレイスで販売する出品者やベンダーが利用できるAPIです。商品データのアップロードや在庫同期、注文情報の取得、支払いの確認など、様々なマーケットプレイス関連のデータにプログラムでアクセスできます。

巨大な流通プラットフォームであるAmazonマーケットとシームレスに連携でき、自動化された業務プロセスを構築可能です。利用にはセキュリティ面の厳格な条件が課せられるので、開発上や運用上の細かなルールも守る必要があります。

ただし、MWSは2023年12月31日以降は利用できなくなります。Amazon出品パートナーが、注文、出荷、支払いなどのデータにプログラムでアクセスするための「Selling Partner API」が提供されており、こちらの活用が今後スタンダードとなっていきます。

# 参考
1. 書籍検索に使える登録不要APIちゃんはちょっと足りない, https://qiita.com/khsk/items/9679f16b7bf6bfac9c2a

2. PHPScraper, https://github.com/spekulatius/PHPScraper
