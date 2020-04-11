# 音声ガイド付レシピ・デモアプリ

# 概要
音声ガイド機能を搭載したレシピアプリです。
「次」、「もう一回」、「戻る」と３種類の声かけで、ガイドの音声操作が可能です。
日頃感じていた、以下のような調理中の手間を省くことができます。

- 濡れた手でスマホを触るのが嫌だ
- 煮込むときにタイマーをかけるのが面倒
- 次の工程なんだっけ？

# 機能一覧
- レシピ閲覧機能
- 音声ガイド機能
- 材料買い忘れ防止のための打ち消し機能
- 検索機能（材料名からのレシピ検索）
- レシピ登録機能（管理者ユーザーのみ）
- 材料登録機能（管理者ユーザーのみ）

# リンク
**https://recipe-demo.net/**<br>
<br>
1ページのみのデモアプリです。<br>
「作り方」欄の「音声ガイドをスタートする」のボタンから音声ガイドを開始できます。<br> 
**※Web Speech API Speech Recognitionを利用しているため、PC版Google Chromeで閲覧してください**<br>
**※「○分待つ」工程では、デモアプリのため１５秒後にアナウンスが流れる仕様にしています。**


# 使用画面サンプル

| レシピ一覧画面 | 材料打ち消し機能/音声ガイドスタートボタン | ガイド操作説明画面 |
----|----|----
| <img src="https://i.gyazo.com/783f9f7cc97ed71b66b5008461331ce0.jpg" width="300px"> | <img src="https://i.gyazo.com/28d7ac87f25ea56e59d7a22aa97e1f46.png" width="300px"> | <img src="https://i.gyazo.com/759b41304829b5756f524e85c0d4f9d8.png" width="300px"> |

# 使用技術
- PHP
- Laravel
- JavaScript
- JQuery
- haml
- sass
