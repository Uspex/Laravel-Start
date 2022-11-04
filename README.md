## Laravel Start - admin panel + blog
> Готовая админ панель + блог.  
> Рассчитана на разработчиков для быстрого разворачивания новых проектов

Комплект:
- Laravel Framework 9.9.0
- Laratrust (https://laratrust.santigarcor.me/) - система управления Ролями

### Использованные шаблоны
1. Admin panel - DashLite https://themeforest.net/item/dashlite-bootstrap-responsive-admin-dashboard-template/25780042
2. Web site template - Litho https://themeforest.net/item/litho-the-multipurpose-html5-template/29955912

## Установка

1. Клонировать проект с гита (https://github.com/Uspex/Laravel-Start)
2. Запустить `composer install`
3. Настроить в `.env` файле подключения к БД
4. `php artisan config:cache`
5. `php artisan cache:clear`
6. Запустить Миграции `php artisan migrate`
7. Запускаем `php artisan db:seed`    
   1. CreateRole - Стартовые роли
   2. PermissionSeeder - Разрешения для ролей
   3. CreateUser - пользователи для доступа в админ панель(логин и пароль смотреть в данном сидере)

    
## Contacts
* https://chernoshtan.com/
* https://www.linkedin.com/in/uspex/
