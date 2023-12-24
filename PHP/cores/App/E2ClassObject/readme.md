## Exercise 2 - Introducing to Class and Object

### Testing codebase

    use App\E2ClassObject\Library\PaymentGateway\Stripe\Transaction;
    
    $transaction = new Transaction('100', 'Test transaction');
    
    
    $amount = $transaction->addTax(8)->applyDiscount(10)->get();
    
    echo $amount . '<br/>';