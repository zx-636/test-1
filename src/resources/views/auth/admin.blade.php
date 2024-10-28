<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <header class="header">
        <form class="header-admin" action="/register.html">
            <div class="header__inner">
                <h1 class="header__logo">FashionablyLate</h1>
                <input class="header__btn" type="submit" value="logout">
            </div>
        </form>
    </header>

    <main>
        <div class="admin">
            <div class="admin__content">
                <h2 class="admin-form__heading">Admin</h2>
            </div>

            <form class="admin-form" action="contact.html">
                <input type="text" placeholder="名前やメールアドレスを入力してください">

                <select>
                    <option>性別</option>
                    <option value="gender">全て</option>
                    <option value="gender">男性</option>
                    <option value="gender">女性</option>
                    <option value="gender">その他</option>
                </select>

                <select>
                    <option value="">お問い合わせの種類</option>
                    <option value="">商品の交換について</option>
                    <option value="">商品トラブル</option>
                    <option value="">ショップへのお問合せ</option>
                    <option value="">その他</option>
                </select>

                <input type="date" name="date">
                <input type="submit" name="search" value="検索">
                <input type="reset" name="reset" value="リセット">

                <div class="export">
                    <input type="button" name="export" value="エクスポート">
                    <div class="pagenate">
                        <button class="page-btn" type="button"><</button>
                        <button class="page-btn" type="button">1</button>
                        <button class="page-btn" type="button">2</button>
                        <button class="page-btn" type="button">3</button>
                        <button class="page-btn" type="button">4</button>
                        <button class="page-btn" type="button">5</button>
                        <button class="page-btn" type="button">></button>
                    </div>
                </div>

                <table class="contact-list">
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>山田 太郎</td>
                        <td>男性</td>
                        <td>taro@example.com</td>
                        <td>商品の交換について</td>
                        <td><button type="button" class="detail-btn">詳細</button></td>
                    </tr>
                    <tr>
                        <td>佐藤 花子</td>
                        <td>女性</td>
                        <td>hanako@example.com</td>
                        <td>商品トラブル</td>
                        <td><button type="button" class="detail-btn">詳細</button></td>
                    </tr>
                    <tr>
                        <td>鈴木 一郎</td>
                        <td>男性</td>
                        <td>ichiro@example.com</td>
                        <td>ショップへのお問合せ</td>
                        <td><button type="button" class="detail-btn">詳細</button></td>
                    </tr>
                </table>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <button class="delete-btn" type="button">削除</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>