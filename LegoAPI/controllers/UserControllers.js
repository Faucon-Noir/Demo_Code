const User = require('../Schema/user')
const bodyParser = require('body-parser');

const UserController = {
    all(req, res) {
        User.find({})
            .then((result) => {
                res.status(200).send(result);

            })
            .catch((err) => {
                console.log(err);
                res.status(500).send(err);
            })
    },
    Byid(req, res) {
        User.findById(req.params.id)
            .then((result) => {
                res.status(200).send(result);

            })
            .catch((err) => {
                console.log(err);
                res.status(404).send(err);

            })
    },
    delete(req, res) {
        User.findByIdAndDelete((req.params.id))
            .then((result) => {
                if (!result) {
                    res.status(404).send('User not Found')
                } else {
                    res.status(200).send('Deleted User');
                }
            })
            .catch((err) => res.status(405).send('User not found'));
    },
    update(req, res) {
        const idParam = req.params.id;
        let asset = req.body;

        User.findOne({ _id: idParam }, (err, data) => {

            data.name = asset.name;
            data.email = asset.email;

            data.save((err, updated) => {
                res.status(200).json(updated)

            });
        })
    },
    up(req, res) {
        User.findById(req.params.id)
            .then((result) => {
                res.status(200).render('userupdate', { title: "Update user", user: result })
            })
            .catch((err) => {
                console.log(err);
                res.status(404).send('User not found')
            })
    }
}

module.exports = UserController;