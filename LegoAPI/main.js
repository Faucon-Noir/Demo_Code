//Server Parameters
const express = require("express");
const app = express();
const port = process.env.PORT || 3000;
app.listen(port, () => {
    console.log(`Server is listening at localhost:${port}`)
});


/*--------------------------------------------------Basic Routing--------------------------------------------------*/

/* Bricks */
//GET Bricks
app.get("/bricks", (req, res) => {
    res.send("Get Bricks");
});

//POST Bricks
app.post('/bricks/new', function(req, res) {
    res.send('Add a new Brick');
});

//PUT Bricks
app.put('/bricks/update', function(req, res) {
    res.send('Update an existing Brick');
});

//DELETE Bricks
app.delete('/bricks/delete', function(req, res) {
    res.send('Delete a Brick');
});

/* Sets */
//GET Set
app.get("/set", function(req, res) {
    res.send("Get Sets");
});

//POST Set
app.post('/set/new', function(req, res) {
    res.send('Add a new Set');
});

//PUT Set
app.put('/set/update', function(req, res) {
    res.send('Update an existing Set');
});

//DELETE Set
app.delete('/set/delete', function(req, res) {
    res.send('Delete a Set');
});

/*--------------------------------------------------Error Handling--------------------------------------------------*/

//401
app.use((req, res, next) => {

    res.status(401).send("<h2>401 Unauthorized</h2>");
});

//403
app.use((req, res, next) => {
    res.status(403).send("<h2>403 Forbidden</h2>");
});

//404
app.use((req, res, next) => {
    res.status(404).send("<h2>404 Not Found</h2>");
});

//500
app.use((req, res, next) => {
    res.status(500).send("<h2>500 Internal Server Error</h2>");
});

//503
app.use((req, res, next) => {
    res.status(503).send("<h2>503 Service Unavailable</h2>");
});