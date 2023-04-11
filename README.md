# リポジトリ修正上のルール
1.必ずコードを最新化する。＜git pull origin develop＞
2.作業ブランチを作る。＜git checkout -b develop-作業者名-項番＞
3.PRを作る際は、タイトルに時刻を入力し、本文に概要を記す。

# wp-flocss-rem-fromPCの使い方


- WordPressThemeは必要に応じて変更してください
	- WordPressTheme
	- sass
	- gulpfile.js
	- package.json
	- .gitignore
	- index.php

## JSの記述
- assets内のjsフォルダ内で直書きする


## 画像
- assets内のimgフォルダ内で直書きする
- 必要に応じてフォルダを作成してその中にいれる
- 自動圧縮は削除。最後に圧縮作業をする

## 使い方
- npm i でインストール → node_modulesが生成されればOK
- npx gulp で起動

