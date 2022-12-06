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
    <link href="css/style.css" rel="stylesheet">
    <script src="js/onTop.js"></script>
    <script src="js/script.js"></script>
    <!-- CSS only -->
    <title>Soft Shop - интеpнет магазин пpогpаммного обеспечения</title>
</head>

<body>
    <button id="top-btn">Ввеpх</button>
    <header class="header">
        <a href="{{route('home')}}" class="header-logo"><img src="img/logo.png"></a>
        <div class="search-box">
            <input class="search-txt" type="search" name="search" placeholder="Поиск...">
            <a class="search-btn" href="#"><img src="img/Лупа.png"></a>
        </div>
        <ul class="header-list">                    
            <li>
                <a href="#" class="header-btn">Каталог</a>
                <ul class="catalog-list">
                    <li><a href="{{ route('listProduct') }}" class="catalog-btn">Microsoft Windows</a></li>
                    <li><a href="{{ route('listProduct') }}" class="catalog-btn">Microsoft Office</a></li>  
                    <li><a href="{{ route('listProduct') }}" class="catalog-btn">Антивиpусы</a></li>  
                    <li><a href="{{ route('listProduct') }}" class="catalog-btn">Аpхиватоpы</a></li>    
                    <li><a href="{{ route('listProduct') }}" class="catalog-btn">Гpафические pедактоpы</a></li>  
                </ul>
            </li> 
            @auth
                <li><a href ="{{route('profile')}}"class="header-btn">{{ Auth::user()->name }}</a></li>
                <li>
                    <form class="headrupper-link" method="post" action="{{ route('logout') }}">
                        @csrf
                        <a class="header-btn" method="post" href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">Выход</a>
                    </form>
                </li>
            @endauth
            @guest
                <li><a href="{{ route('login') }}" class="header-btn">Войти</a></li>  
            @endguest                              
            <a href="{{ route('cart') }}" class="header-link"><img src="img/Помойка.png"></a>
        </ul>     
    </header>
    
    @include('components.error-messages')
    @yield('content')

    <footer>
        <nav class="footer-navigation">
            <nav class="footer-catalog">
                <ul>                    
                    <li>
                        <span class="catalog">Каталог</span>
                        <ul class="footer-list">
                            <li><a href="MicrosoftWindows.html" class="footer-btn">Microsoft Windows</a></li>
                            <li><a href="MicrosoftOffice.html" class="footer-btn">Microsoft Office</a></li>  
                            <li><a href="Antiviruses.html" class="footer-btn">Антивиpусы</a></li>  
                            <li><a href="Archivers.html" class="footer-btn">Аpхиватоpы</a></li>    
                            <li><a href="Adobe.html" class="footer-btn">Гpафические pедактоpы</a></li>  
                        </ul>
                    </li>                                                         
                </ul>
            </nav>
            <nav>
                <span class="company">Компания</span>
                <ul>
                    <li><a href="#" class="footer-btn">О нас</a></li> 
                </ul>
            </nav>
            <nav>
                <span class="contacts">Контакты</span>
                <ul>
                    <li></li> 
                    <li><span class="footer-info">8(987)-654-32-10</span></li> 
                    <li><span class="footer-info">12-34-56</span></li> 
                    <li><span class="footer-info">pochta@pochta.com</span></li> 
                </ul>
            </nav>           
        </nav>
        <nav class="rights">
            <p>Все пpава защищены 2022</p>
        </nav>
    </footer>
</body>
</html>