
DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your an apache web server that supports PHP 5.4.0 and MySQL Server 5.0 and above.


INSTALLATION
------------

Copy the busaracenter directory to the root directory of your apache web server.

CONFIGURATION
-------------
### Cookie Validation key
Set the cookie validation key in `busaracenter/config/web.php` file to your secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => 'Your secret key',
],
```

### Database
Execute the sql commands found in the database_alters/database_script.sql to create the database.

Edit the file `config/db.php` with your database credentials, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=busaracenter',
    'username' => 'Your database username',
    'password' => 'Your database password',
    'charset' => 'utf8',
];
```


RUNNING
-------
You can then access the application through the following URL:

~~~
http://localhost/busaracenter/web/
~~~

Where localhost is your web server's domain name or IP address.
