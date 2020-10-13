/*

Source : https://ejs.co/#promo

Use Template Engine ejs [Embedded JavaScript]

Install : $ npm install ejs

Use :

Pass EJS a template string and some data. BOOM, you've got some HTML.

let ejs = require('ejs'),
    people = ['geddy', 'neil', 'alex'],
    html = ejs.render('<%= people.join(", "); %>', {people: people});

*/