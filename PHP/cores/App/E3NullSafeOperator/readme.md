## Exercise 3 - Null safe operator

### If we use '?' as postfix with the object. If the object return null then this operator discard rest of the statements

### Testing codebase

    use App\E3NullSafeOperator\Library\Transaction;
    use App\E3NullSafeOperator\Library\Customer;
    
    $transaction = new Transaction(100, 'Test');
    
    $transaction->customer = new Customer();
    
    echo $transaction->customer?->paymentProfile?->id;