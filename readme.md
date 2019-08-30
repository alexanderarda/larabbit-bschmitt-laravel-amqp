# Larabbit Series - Publishing Message Using `php-amqplib`

Laravel project example in very simply way for publish message using  `bschmitt/laravel-amqp` library 

![alt text](https://laravel.com/assets/img/components/logo-laravel.svg)

### :rocket: TL;DR

#### Publish Message

```php
for($idx = 0; $idx < 25; $idx++ ) {

    $rand = str_random(4);
    
    $amqp = new Amqp();
    $amqp->publish('hello', $rand);

    echo "Send message = ".$rand."<br/>";
}
``` 


## Library
```bash
https://github.com/bschmitt/laravel-amqp
```
## Credit


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
