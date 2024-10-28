<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
  <header class="header">
    <form class="header-form" action="/register.html">
      <div class="header__inner">
          <h1 class="header__logo">FashionablyLate</h1>
          <input class="header__btn" type="submit" value="register">
      </div>
    </form>
  </header>

  <main>
    <div class="contact">
        <div class="contact__content">
            <div class="contact-form__heading">
              <h2>Login</h2>
            </div>
            <div class="box">
            <form class="form" action="/admin.html">
              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">メールアドレス</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" />
                  </div>
                  <div class="form__error">
                    
                  </div>
                </div>
              </div>
              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">パスワード</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="password" name="password" placeholder="例:coachtech1106"/>
                  </div>
                  <div class="form__error">
                    
                  </div>
                </div>
              </div>
              {{-- <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">確認用パスワード</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="password" name="password_confirmation" placeholder="例:coachtech1106"/>
                  </div>
                </div>
              </div> --}}
              <div class="form-submit">
                <button class="form-submit__btn" type="submit" name="submit">ログイン</button>
            </div>
            </form>
          </div>
        </div>
    </div>    
  </main>
</body>

</html>