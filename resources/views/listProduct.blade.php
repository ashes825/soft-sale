<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/catalogStyle.css">
    
    <title>Главная страница</title>
</head>

<body>
    <button id="top-btn">Вверх</button>
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
            <li><a href="{{route('cart')}}" class="header-link"><img src="img/Помойка.png"></a></li>
        </ul>     
    </header>
    <div class="content">
        <div class="title">Microsoft Windows</div>
        <div class="sort-by">
            Сортировать по:
                <div class="sort-by-type">Цене</div>
                <div class="sort-by-type">В наличии</div>
        </div> 
        <div class="products-container">       
            <div class="products">
                <div class="items">
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W10Pro.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 10 Профессиональная(Pro)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                                            
                        </div>
                    </div>      
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W10Home.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 10 Домашняя(Home)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                        
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W11Pro.png" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 11 Профессиональная(Pro)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                         
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W11Home.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 11 Домашняя(Home)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                         
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W11Home.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 11 Домашняя(Home)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                         
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W11Home.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 11 Домашняя(Home)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                         
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W11Home.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 11 Домашняя(Home)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                         
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W11Home.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 11 Домашняя(Home)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                         
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W11Home.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 11 Домашняя(Home)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                         
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <a href="{{route('itemPage')}}"><img src="img/W11Home.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="{{route('itemPage')}}"><h3>Microsoft Windows 11 Домашняя(Home)</h3></a>
                            <div class="price-container">
                                <span class="price">3000уе</span> 
                                <div class="add">
                                    <a class="cart-btn" href="#"><img src="img/Помойка.png" alt=""></a>
                                    <a class="cart-btn" href="#"><span class="to-cart">В корзину</span></a>
                                </div> 
                            </div>                         
                        </div>
                    </div> 
                </div>                       
            </div>
            <div class="filter-container">
                <div class="filter-params">                     
                    <span>Цена</span>   
                    <div class="filter-price">
                        <div class="price-input">
                            <div class="field">
                                <input type="number" class="input-min" value="2500">
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                                <input type="number" class="input-max" value="7500">
                            </div>
                        </div>  
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                            <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                        </div>                          
                    </div>             
                    <span>Версия</span> 
                    <div class="filter-versions"> 
                        <input type="checkbox" id="W11" name="versions">
                        <label for="W11">Windows 11</label>
                        <br>
                        <input type="checkbox" id="W10" name="versions">
                        <label for="W10">Windows 10</label>
                        <br>
                        <input type="checkbox" id="W8" name="versions">
                        <label for="W8">Windows 8</label>
                        <br>
                        <input type="checkbox" id="W7" name="versions">
                        <label for="W7">Windows 7</label>
                        <br>
                        </div>
                    </div> 
                    <span>Редакция</span> 
                    <div class="filter-edition">
                        <input type="checkbox" id="Pro" name="edition">
                        <label for="Pro">Professinal</label>
                        <br>
                        <input type="checkbox" id="Home" name="edition">
                        <label for="Home">Home</label>
                        <br>
                        <input type="checkbox" id="HB" name="edition">
                        <label for="HB">Home Basic</label>
                        <br>
                        <input type="checkbox" id="HP" name="edition">
                        <label for="HP">Home Premium</label>
                        <br>
                        <input type="checkbox" id="Ult" name="edition">
                        <label for="Ult">Ultimate</label>
                        <br>
                    </div> 
                    <span>Срок действия лицензии</span> 
                    <div class="filter-license-period">
                        <input type="checkbox" id="Inf" name="period">
                            <label for="Inf">Бессорчная лицензия</label>
                            <br>
                    </div> 
                </div>  
            </div>                 
        </div>  
    </div>
    <footer>
        <nav class="footer-navigation">
            <nav class="footer-catalog">
                <ul>                    
                    <li>
                        <span class="catalog">Каталог</span>
                        <ul class="footer-list">
                            <li><a href="MicrosoftWindows.html" class="footer-btn">Microsoft Windows</a></li>
                            <li><a href="MicrosoftOffice.html" class="footer-btn">Microsoft Office</a></li>  
                            <li><a href="Antiviruses.html" class="footer-btn">Антивирусы</a></li>  
                            <li><a href="Archivers.html" class="footer-btn">Архиваторы</a></li>    
                            <li><a href="Adobe.html" class="footer-btn">Графические редакторы</a></li> 
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
            <p>Все права защищены 2022</p>
        </nav>
    </footer>
    <script src="js/range-slider.js"></script>  
</body>
</html>