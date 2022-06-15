<style>
    .page-banner .breadcrumb > li.active {
        color: #b0a9a9;
    }
</style>
<li><a href="{{URL::previous()}}">
        @if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName()=='home')
            Головна
        @elseif(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName()=='about')
            Про нас
        @elseif(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName()=='news')
            Лікування
        @elseif(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName()=='contact')
            ЗВОРОТНІЙ ЗВ’ЯЗОК
        @elseif(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName()=='reviews')
         Відгуки
        @elseif(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName()=='more.info')
           Детальніше
        @else
            Головна
        @endif
    </a></li>

