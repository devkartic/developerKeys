function notifyAll(sendSms, SendEmail) {
    console.log('Start Promise');
    sendSms();
    SendEmail();
}


notifyAll(function() {
    console.log('Send Sms...')    
}, function() {
    console.log('Send Email...')
}
)

console.log('end Process');