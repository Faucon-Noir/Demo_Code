const mongoose = require('mongoose');

const thingSchema = mongoose.Schema({
    name: { type: String, required: true },
    type: { type: String, required: true },
    dimension: { type: String, required: true },
    color: { type: String, required: true },
    image_URL: { type: String, required: true },
});

module.exports = mongoose.model('Brick', BrickSchema);