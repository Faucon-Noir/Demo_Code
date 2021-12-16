const brick = require('../Schema/brick')
const bodyParser = require('body-parser');

const brickController = {
    all(req, res) {
        brick.find({})
            .then((result) => {
                res.status(201).send(result)
            })
            .catch((err) => {
                console.log(err);
            })
    },
    Byid(req, res) {
        brick.findById(req.params.id)
            .then((result) => {
                res.status(201).send(result)
            })
            .catch((err) => {
                console.log(err);
            })
    },
    create(req, res) {
        console.log(res.body)
        const lego = new brick({
            name: req.body.name,
            type: req.body.type,
            dimension: req.body.dimension,
            color: req.body.color,
            image_URL: req.body.image_URL
        });

        lego.save()
            .then((result) => {
                res.send(result);
                res.status(201).send('Created brick');
            })
            .catch((err) => {
                res.status(err);
                res.status(404).json("404 Not Found");
            })

    },
    delete(req, res) {
        brick.findByIdAndDelete((req.params.id))
            .then((result) => {
                if (!result) {
                    res.status(201).send('Brick not Found')
                } else {
                    res.status(201).send('Deleted brick');

                }
            })
            .catch((err) => res.status(404).send('Brick not found'));
    },
    update(req, res) {
        const idParam = req.params.id;
        let asset = req.body;

        brick.findOne({ _id: idParam }, (err, data) => {

            data.name = asset.name;
            data.quest = asset.quest;
            data.idbrick = asset.idbrick

            data.save((err, updated) => res.json(updated));
        })
    }
}


module.exports = brickController;