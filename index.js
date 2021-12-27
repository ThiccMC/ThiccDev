const express = require('express');
const mustacheExpress = require('mustache-express');
const bodyParser = require('body-parser');

const routes = require('./routes');

let app = express();

app.set('views', `${__dirname}/views`);
app.set('view engine', 'mustache');
app.engine('mustache', mustacheExpress());
app.use(express.static('public'));
app.use(bodyParser.urlencoded({ extended: true }));
app.use('/', routes);
app.listen(process.env.PORT || 3000, function() {
    console.log(`Server started on port: ${process.env.PORT || 3000}`);
});