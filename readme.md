# 音声ガイド付レシピ・デモアプリ

# 概要
音声ガイド機能を搭載したレシピアプリです。<br>
「次」、「もう一回」、「戻る」と３種類の声かけで、ガイドの音声操作が可能です。<br>

# 制作背景
レシピアプリを使って自宅で料理をする際に、普段困っていた点を解決できるアプリを制作しました<br>
具体的には特に以下の４点です。
- 濡れた手でスマホを触りたくない
- 煮込むときにタイマーをかけるのが面倒
- 買い出しの際にどの材料をカゴに入れたのか忘れてしまう

# リンク
**https://recipe-demo.net/**<br>
<br> 
**※Web Speech API Speech Recognitionを利用しているため、PC版Google Chromeで閲覧してください**<br>
**※「○分待つ」工程では、デモアプリのため１５秒後にアナウンスが流れる仕様にしています。**<br>
「作り方」欄の「音声ガイドをスタートする」のボタンから音声ガイドを開始できます。<br>
管理者ユーザーにのみ、レシピ・材料の登録権限を付与しています

# 使用画面サンプル
| レシピ一覧画面 | 材料打ち消し機能/音声ガイドスタートボタン | ガイド操作説明画面 |
----|----|----
| <img src="https://i.gyazo.com/783f9f7cc97ed71b66b5008461331ce0.jpg" width="300px"> | <img src="https://i.gyazo.com/28d7ac87f25ea56e59d7a22aa97e1f46.png" width="300px"> | <img src="https://i.gyazo.com/759b41304829b5756f524e85c0d4f9d8.png" width="300px"> |

# 工夫したポイント
- レシピに対するコメント機能を実装し。質問があれば管理者からのレクチャーが受けられるようにしている<br>
（自宅の鍋や火加減に応じて、同じレシピで作っても違う味わいになることがあるため）
- 材料からレシピの検索ができる機能を実装。自宅に余った材料からレシピを逆引きできるつくりにしました<br>

# DB設計
## usersテーブル
|Column|Type|Options|
|------|----|-------|
|name|string|null: false unique: true|
|email|string|null: false, unique: true|
|password|string|null: false|
### Association
- has_many: posts
- has_many: likes
- has_many: comments

## postsテーブル
|Column|Type|Options|
|------|----|-------|
|name|string||
|caption|text||
|user_id|integer||
### Assciation
- has_many: materials
- has_many: likes
- has_many: comments
- belongs_to: user

## materialsテーブル
|Column|Type|Options|
|------|----|-------|
|name|string||
|amount|string||
|post_id|inteeger||
### Association
- belongs_to: post

## commentsテーブル
|Column|Type|Options|
|------|----|-------|
|comment|string||
|post_id|integer||
|user_id|integer||
### Association
- belongs_to: user
- belongs_to: post

## likesテーブル
|Column|Type|Options|
|------|----|-------|
|post_id|integer||
|user_id|integer||
### Association
- belongs_to: user
- belongs_to: post

# 使用技術
- PHP
- Laravel
- JavaScript
- JQuery
- haml
- sass
