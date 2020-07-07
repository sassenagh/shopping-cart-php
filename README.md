# ShoppingCart

ShoppingCart is a PHP cart for e-commerce where you can add products and vouchers.

## Getting Started

A product can be added calling the function addProduct, where you can create the product to be added by using the Factory pattern. In the case of vouchers, you need to use the function createVoucher. The same pattern is used to create a voucher.

Then, you can get the total price from the cart by using the function getTotalCart.

### Prerequisites

You need to have Composer already installed.

### Installing

To start the app you need to install all the dependencies with the following command:

```bash
$ composer install
```

### Testing

In order to test the correct functioning of the creation of products, vouchers and the shopping cart, you can run some tests using the following command:

```bash
./vendor/bin/phpunit tests
```

## Built With

- [PHP](https://www.php.net/) - The PHP language

## Authors

- **Anna Alcaide** - _Initial work_ - [ShoppingCart](#)
