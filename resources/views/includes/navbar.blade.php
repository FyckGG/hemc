<nav class="navbar navbar-expand-md grid gap-5 text-center border-bottom p-3 bg-body-tertiary rounded">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-underline me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{active_link('main')}} fs-6" aria-current="page" href="/">{{__('Главная')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{active_link('about-us')}} fs-6"  href="/about-us">{{__('О нас')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{active_link('products*')}} fs-6"  href="/products">{{__('Каталог')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{active_link('contacts')}} fs-6"  href="/contacts">{{__('Контакты')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
