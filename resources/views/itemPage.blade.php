<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/itemPageStyle.css">
    <title>Главная страница</title>
</head>

<body>
    <header class="header">
        <a href="{{route('home')}}" class="header-logo"><img src="img/logo.png"></a>
        <div class="search-box">
            <input class="search-txt" type="search" name="search" placeholder="Поиск...">
            <a class="search-btn" href="#"><img src="img/Лупа.png"></a>
        </div>
        <ul class="header-list">                    
            <li>
                <a href="" class="header-btn">Каталог</a>
                <ul class="catalog-list">
                    <li><a href="MicrosoftWindows.html" class="catalog-btn">Microsoft Windows</a></li>
                    <li><a href="MicrosoftOffice.html" class="catalog-btn">Microsoft Office</a></li>  
                    <li><a href="Antiviruses.html" class="catalog-btn">Антивирусы</a></li>  
                    <li><a href="Archivers.html" class="catalog-btn">Архиваторы</a></li>    
                    <li><a href="Adobe.html" class="catalog-btn">Графические редакторы</a></li>  
                </ul>
            </li>            
            <li><a href="{{route('login')}}" class="header-btn">Войти</a></li>        
            <li><a href="{{route('cart')}}" class="header-link"><img src="img/Помойка.png"></a></li>
        </ul>     
    </header>
    <div class="content">     
        <div class="item">
            <div class="item-img">
                <img class="img" src="img/W10Pro.jpg" alt="">
            </div>
            <div class="info">
                <span>Microsoft Windows 10 Профессиональная(Pro)</span>
                <div class="specs-div">Характеристики:</div>
                <div class="specs">
                    <span>Срок действия: Бессрочная лицензия</span>
                    <span>Разработчик: Microsoft</span>
                    <span>Версия: Windows 10</span>
                    <span>Язык интерфейса: Русский</span>
                </div>
                <div class="text-descr">Описание</div>
                <div class="description">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe magnam repellat adipisci neque unde explicabo voluptatem alias 
                    consequatur maxime necessitatibus ut doloremque laborum excepturi quasi, corporis 
                    possimus nulla molestias porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus numquam consequuntur veritatis deserunt 
                    alias fuga reiciendis delectus iste, laboriosam ab odit vel cumque obcaecati, nemo adipisci, omnis quo ipsa voluptates.</p>
                </div>                                                
            </div>
            <div class="price-container">
                <span class="price">Цена: 3000уе</span> 
                <div class="add">
                    <a class="cart-btn" href="cart.html"><img src="img/Помойка.png" alt=""></a>
                    <a class="cart-btn" href="cart.html"><span class="to-cart">В корзину</span></a>
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

</body>
</html>