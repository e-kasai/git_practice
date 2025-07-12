## 概要

Laravel バリデーション付きの問い合わせフォーム

## 構成

-   名前、メール、お問い合わせ内容（全て必須）
-   FormRequest によるバリデーション
-   バリデーションエラーの一覧表示（$errors->all()）
-   入力値の保持（old 関数）
-   完了メッセージをセッションで表示

## 対応ファイル一覧

-   app/Http/Controllers/FormController.php
-   app/Http/Requests/ContactRequest.php
-   resources/views/index.blade.php
-   routes/web.php
