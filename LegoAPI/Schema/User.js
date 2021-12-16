const mongoose = require('mongoose');
const Schema = mongoose.Schema;
const AutoIncrement = require('mongoose-sequence')(mongoose);

const UserSchema = new Schema({
    name: {
        type: String,
        required: true,
    },
    email: {
        type: String,
        required: true,
    },
    password: {
        type: String,
        required: true,

    },
    token: {
        type: String
    },
}, { timestamps: true, _id: false });
UserSchema.plugin(AutoIncrement, { id: 'user_id_counter' });

const User = mongoose.model('Users', UserSchema);
module.exports = User;