<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cart.css">
    <title>Профиль</title>
</head>

<body>
    <header class="header">
        <a href="{{ route('home') }}" class="header-logo"><img src="img/logo.png"></a>
        <div class="search-box">
            <input class="search-txt" type="search" name="search" placeholder="Поиск...">
            <a class="search-btn" href="#"><img src="img/Лупа.png"></a>
        </div>
        <ul class="header-list">                    
            <li>
                <a href="#" class="header-btn">Каталог</a>
                <ul class="catalog-list">
                    <li><a href="{{route('listProduct')}}" class="catalog-btn">Microsoft Windows</a></li>
                    <li><a href="{{route('listProduct')}}" class="catalog-btn">Microsoft Office</a></li>  
                    <li><a href="{{route('listProduct')}}" class="catalog-btn">Антивирусы</a></li>  
                    <li><a href="{{route('listProduct')}}" class="catalog-btn">Архиваторы</a></li>    
                    <li><a href="{{route('listProduct')}}" class="catalog-btn">Графические редакторы</a></li>  
                </ul>
            </li>            
            @auth
                <li><a class="header-btn">{{ Auth::user()->name }}</a></li>
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
            <li><a href="#" class="header-link"><img src="img/Помойка.png"></a></li>
        </ul>     
    </header>
    <div class="content">
           <ul>
                <li class="h4">Имя: {{Auth::user()->name}}</li>
                <li class="h5">Почта: {{Auth::user()->email}}</li>
           </ul>
    </div>
    <footer>
        <nav class="footer-navigation">
            <nav class="footer-catalog">
                <ul>                    
                    <li>
                        <span class="catalog">Каталог</span>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-btn">Microsoft Windows</a></li>
                            <li><a href="#" class="footer-btn">Microsoft Office</a></li>  
                            <li><a href="#" class="footer-btn">Антивирусы</a></li>  
                            <li><a href="#" class="footer-btn">Архиваторы</a></li>    
                            <li><a href="#" class="footer-btn">Графические редакторы</a></li>  
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
                    <li><span class="footer-info">8(987)-654-32-10</span></li> 
                    <li><span class="footer-info">12-34-56</span></li> 
                    <li><span class="footer-info">pochta@pochta.com</span></li> 
                </ul>
            </nav>           
        </nav>
        <nav class="rights">
            <p>Все права защищены 2022</p>
        </nav>
    </footer>
</body>
</html>