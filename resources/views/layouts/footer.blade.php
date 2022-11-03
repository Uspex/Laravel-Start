<footer class="footer-dark bg-slate-blue">
    <div class="footer-top padding-seven-tb lg-padding-eight-tb sm-padding-50px-tb">
        <div class="container">
            <div class="row justify-content-center text-center text-md-left">
                <!-- start footer column -->
                <div class="col-12 col-lg-3 col-sm-6 order-5 order-lg-0 text-md-center text-lg-left last-paragraph-no-margin">
                    <a href="{{ route('homepage') }}" class="footer-logo margin-25px-bottom margin-5px-top d-inline-block"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                    <p>Супермаркет готовых сайтов</p>
                    <p>Все права защищены. Copyright © 2020-{{ date('Y') }}. @yield('title', config('app.name'))</p>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg offset-xl-1 col-md-3 col-sm-4 order-1 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Обзор</span>
                    <ul>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Маркетинг</a></li>
                        <li><a href="#">Договор оферты</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg col-md-3 col-sm-4 order-2 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Проект</span>
                    <ul>
                        <li><a href="#">Команда</a></li>
                        <li><a href="#">Партнерам</a></li>
                        <li><a href="#">Реферальная система</a></li>
                        <li><a href="#">Вакансии</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg col-md-3 col-sm-4 order-3 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Услуги</span>
                    <ul>
                        <li><a href="#">Настройка рекламы</a></li>
                        <li><a href="#">Покупка доменов</a></li>
                        <li><a href="#">Консультации</a></li>
                        <li><a href="#">Кодинг</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg col-md-3 col-sm-6 order-4 order-lg-0 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Поддержка</span>
                    <ul>
                        <li><a href="#">написать сообщение</a></li>
                        <li><a href="#">Частые вопросы</a></li>
                        <li><a href="#">Полезные советы</a></li>
                        <li><a href="#">Инструкции</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </div>
</footer>
