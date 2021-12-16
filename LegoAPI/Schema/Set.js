const mongoose = require('mongoose');
const Schema = mongoose.Schema;
const AutoIncrement = require('mongoose-sequence')(mongoose);

const setSchema = new Schema({
    name: {
        type: String,
        required: true,
    },
    parts: {
        type: String,
        required: true,
    },
    price: {
        type: String,
        required: true,
    },
    set_URL: {
        type: String,
        required: true,
    },
}, { titmestamps: true, _id: false });
setSchema.plugin(AutoIncrement, { id: 'set_id_counter' });

const set = mongoose.model('sets', setSchema)

module.exports = set;