const express = require('express');
const { MongoClient } = require('mongodb')
const mongoose = require('mongoose')
const bodyParser = require('body-parser');
//Controllers
const UserController = require('./controllers/userControllers')
const brickController = require('./controllers/brickControllers');

const setController = require('./controllers/setControllers');


const auth = require("./auth/auth");

const user = require("./routes/user");
const InitiateMongoServer = require("./dbco/db");


// Initiate Mongo Server
InitiateMongoServer();

const app = express();

const Port = process.env.Port || 3000;

app.use(bodyParser.json());

app.get("/", (req, res) => {
    res.json({ message: "API Working" });
});

app.listen(Port, (req, res) => {
    console.log(`Server is listening on http://localhost:${Port}`);
});

//ROUTES USER
app.use("/user", user);


app.delete('/user/:id', UserController.delete)
app.get('/user', UserController.all)
app.get('/user/:id', UserController.Byid)
app.put('/user/:id', UserController.update)

//ROUTES brick
app.delete('/brick/:id', brickController.delete);
app.get('/brick', brickController.all);
app.get('/brick/:id', brickController.Byid);
app.post('/brick/new', brickController.create);
app.put('/brick/:id', brickController.update);


//ROUTES set
app.delete('/set/:id', setController.delete)
app.get('/set', setController.all)
app.get('/set/:id', setController.Byid)
app.post('/set/new', setController.create)
app.put('/set/update/:id', setController.update)


app.post('/test', (req, res) => {
    console.log(req.body.name)
    res.status(201).send('Created User');
});


const User = require('./Schema/user')