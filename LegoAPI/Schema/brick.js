const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const BrickSchema = mongoose.Schema({
    name: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        required: true,
    },
    dimension: {
        type: String,
        required: true,
    },
    color: {
        type: String,
        required: true,
    },
    image_URL: {
        type: String,
        required: true,
    },
});
const Brick = mongoose.model('Brick', BrickSchema);
module.exports = Brick;