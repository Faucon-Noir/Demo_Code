const set = require('../Schema/set')
const bodyParser = require('body-parser');

const setController = {
    all(req, res) {
        set.find({})
            .then((result) => {
                res.status(200).send(result);

            })
            .catch((err) => {
                console.log(err);
                res.status(500).send(err);
            })
    },
    Byid(req, res) {
        set.findById(req.params.id)
            .then((result) => {
                res.render('set', { title: "set", set: result })
            })
            .catch((err) => {
                res.render('set', { title: "set", set: null })
            })
    },
    create(req, res) {
        console.log(res.body)
        const lego = new set({
            name: req.body.name,
            parts: req.body.parts,
            price: req.body.price,
            set_URL: req.body.set_URL
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
        set.findByIdAndDelete((req.params.id))
            .then((result) => {
                if (!result) {
                    res.status(201).send('Set not Found')
                } else {
                    res.status(201).send('Deleted set');
                }
            })
            .catch((err) => res.status(404).send('Set not found'));
    },
    update(req, res) {
        const idParam = req.params.id;
        let asset = req.body;

        set.findOne({ _id: idParam }, (err, data) => {

            data.class = asset.class;
            data.race = asset.race;
            data.origin = asset.origin;
            data.description = asset.description;
            if (asset.gm) {
                data.gm = asset.gm;
            } else {
                data.gm = false;
            }

            data.save((err, updated) => {
                res.redirect('/set/' + idParam)
            });
        })
    },
    up(req, res) {
        set.findById(req.params.id)
            .then((result) => {
                res.render('setupdate', { title: "Update set", set: result })
            })
            .catch((err) => {
                console.log(err);
                res.status(404).send('set not found')
            })
    }
}

module.exports = setController;