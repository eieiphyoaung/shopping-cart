Shopping Cart is the website that the user browses the products, add the product to cart and then purchase.

Shopping Cart project use following Technology.

- Laravel 6.x
- AdminLTE for Admin Panel

#### Larvel 6.x

Laravel 6.x is released in September 3rd, 2019. 

For more detail see [documentation](https://laravel.com/docs/6.x).

#### Backpackforlaravel

Shopping uses [[AdminLTE](https://adminlte.io/) for Admin Panel. 

Please read [AdminLTE Doc](https://adminlte.io/docs/2.4/installation) before making any changes.

### Setup

1. Clone the repo
```
git clone https://github.com/eieiphyoaung/shopping-cart.git
```

2. Migrate Database
```
php artisan migrate
```

3. Add temp data
```
php artisan db:seed

``` 

4. To run
```
php artisan key:generate

php artisan storage:link

php artisan serve

``` 

### To see admin panel, go to /admin.

### Useful Links

- [Laravel 6.x Doc](https://laravel.com/docs/6.x)
- [AdminLTE](https://adminlte.io/)