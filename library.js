const axios = require('axios');

module.exports = {
    getPlayer: async() => {
        try {
            const res = await axios.get('https://api.mcsrvstat.us/1/thiccsmp.qtpc.tech');
            if (res.data.players) {
                return res.data.players;
            }
            return "offline";
        } catch (error) {
            console.error(error);
        }
    },

    getCountry: async(ip) => {
        try {
            const res = await axios.get(`http://ip-api.com/json/${ip}`);
            if (res.data.countryCode) {
                return res.data.countryCode;
            }
        } catch (error) {
            return "N/A";
        }
    }
}