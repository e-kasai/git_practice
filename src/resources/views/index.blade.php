<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header>Contact Form</header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <div class="validation-status">
                @if (session('message'))
                    <div class="validation-status--pass">
                        {{ session('message') }}
                    </div>
                @endif
                {{-- validation failの場合はエラーメッセージを表示 --}}
                @if ($errors->any())
                    <div class="validation-status--fail">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @enderror

        </div>
        <form class="form" action="/contact" method="post" novalidate>
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group--text">
                    <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" required />
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group--text">
                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}"
                        required />
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                </div>
                <div class="form__group--text">
                    <textarea name="message" placeholder="資料をいただきたいです" required>{{ old('message') }}</textarea>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
</main>
</body>

</html>
