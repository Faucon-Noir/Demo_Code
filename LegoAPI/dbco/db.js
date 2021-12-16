const mongoose = require("mongoose");

const uri = "mongodb+srv://admin:Si6Wxv1PrU6xEn3h@legoapi.krmmm.mongodb.net/LegoAPI?retryWrites=true&w=majority";

const InitiateMongoServer = async() => {
    try {
        await mongoose.connect(uri, {
            useNewUrlParser: true
        });
        console.log("Connected to Database !");
    } catch (e) {
        console.log(e);
        throw e;
    }
};

module.exports = InitiateMongoServer;