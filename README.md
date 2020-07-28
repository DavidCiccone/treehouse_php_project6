# Unit Testing in PHP

In this project PHP unit tests were written for an existing application.

files of interest:
```
tests\ListingBasicTests.php
tests\ListingFeaturedTest.php
tests\ListingPremiumTest.php
```

## Instillation

Clone or download the repository.

Install PHPUnit to the root folder, using composer, with the following command ```composer require --dev phpunit/phpunit ^8```

Then run all tests with the following command ```vendor/bin/phpunit tests```

All tests should be passing.

```
 ==> ListingBasicTest           ✔  ✔  ✔  ✔  ✔  ✔
 ==> ListingFeaturedTest        ✔  ✔
 ==> ListingImageTest           ✔  ✔  ✔
 ==> ListingPremiumTest         ✔  ✔
 ```