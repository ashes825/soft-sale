<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2p55rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- CSS only -->
    <link href="css/login.css" rel="stylesheet">
    <title>Авторизация</title>
</head>

<body> 
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class = "rectangle">
        <a href="{{route('home')}}" class = "back" >Вернуться назад</a>
        <section class="forms-section">
            <div class="forms">
                <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Вход
                    <span class="underline"></span>
                </button>

                <!-- Вход -->

                <form class="form form-login" method="post" action = "{{route('login')}}">
                    @csrf
                    <fieldset>
                        <legend>Пожалуйста введите email и пароль, чтобы войти.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" type="email" name="email" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Пароль</label>
                            <input id="login-password" type="password" name="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Войти</button>
                </form>
                </div>
                <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Регистрация
                    <span class="underline"></span>
                </button>

                <!-- Регистрация -->

                <form class="form form-signup" method="post" action = "{{route('register')}}">
                    @csrf
                    <fieldset>
                        <legend>Пожалуйста введите email и пароль, чтобы зарегистрироваться.</legend>
                        <div class="input-block">
                            <label for="signup-name">Логин</label>
                            <input id="signup-name" type="name" name="name" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="signup-email" type="email" name="email" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Пароль</label>
                            <input id="signup-password" type="password" name="password" autocomplete="new-password" required>
                        </div>
                        <div class="input-block">
                            <label for="password_confirmation">Подтвердите пароль</label>
                            <!-- <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors -> all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div> -->
                            <input id="password_confirmation"  type="password" name="password_confirmation" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-signup">Зарегистрироваться</button>
                </form>

                </div>
            </div>
        </section>
    </div>
    <script>
        const switchers = [...document.querySelectorAll('.switcher')]
        switchers.forEach(item => {
            item.addEventListener('click', function() {
                switchers.forEach(item => item.parentElement.classList.remove('is-active'))
                this.parentElement.classList.add('is-active')
            })
        })
    </script>
</body>

</html>
