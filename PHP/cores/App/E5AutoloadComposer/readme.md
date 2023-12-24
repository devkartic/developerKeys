## Exercise 5 - Namespace and Autoload

### Class loading with procedural way

    require_once 'Library/PaymentGateway/Paddle/Transaction.php';
    require_once 'Library/PaymentGateway/Paddle/CustomerProfile.php';
    require_once 'Library/Notification/Email.php';
    require_once 'Library/PaymentGateway/Stripe/Transaction.php';


### Class load with spl_autoload_register [PHP build in function] or custom autoload file

    spl_autoload_register(
        function ($class) {
            $classPath = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
            require $classPath;
        }
    );

### Class loading with composer dependency manager, adding namespace in composer.json file 
    # Register the required namespace in to the composer.json file
    {
        "autoload": {
            "psr-4": {
                "App\\": "App/"
            }
        }
    }

    # Run the folloing commend in terminal to generate autolad namespace files in vendor / composer directory
    
    $ composer dumb-autoload

    # Add the required namespace in to the composer.json file
    
    require_once __DIR__.'/vendor/autoload.php';

### Testing codebase

    require_once __DIR__.'/../../vendor/autoload.php';
    
    use App\E5AutoloadComposer\Library\PaymentGateway\Paddle\Transaction;
    
    # Alias of class name if same class us in one page or long name of the class.
    use App\E5AutoloadComposer\Library\PaymentGateway\Stripe\Transaction as StripeTransaction;
    
    $paddle_object = new Transaction();
    $stipe_object = new StripeTransaction();
    
    var_dump($paddle_object, $stipe_object);