const router = require('express').Router();
const library = require("./library");

router.get('/', async function(request, response) {
    var players = await library.getPlayer();
    var country = await library.getCountry(request.socket.remoteAddress);

    var info = {
        players: players.online,
        location: country
    }

    response.render('index', info);
});

module.exports = router;