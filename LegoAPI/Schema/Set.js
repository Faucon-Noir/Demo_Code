const mongoose = require('mongoose');

const thingSchema = mongoose.Schema({
    name: { type: String, required: true },
    parts: { type: String, required: true },
    price: { type: Number, required: true },
    set_URL: { type: String, required: true },
});

module.exports = mongoose.model('Set', SetSchema);