const express = require("express");
const { check, validationResult } = require("express-validator/check");
const bcrypt = require("bcryptjs");
const jwt = require("jsonwebtoken");
const router = express.Router();

const User = require("../Schema/user");

router.post(
    "/register", [
        check("name", "Please Enter a Valid Username")
        .not()
        .isEmpty(),
        check("email", "Please enter a valid email").isEmail(),
        check("password", "Please enter a valid password").isLength({
            min: 4
        })
    ],
    async(req, res) => {

        const {
            name,
            email,
            password,
        } = req.body;
        try {
            const ExitUser = await User.findOne({ email });

            if (ExitUser) {
                return res.status(409).send("User Already Exist. Please Login");
            }


            user = new User({
                name,
                email,
                password,
            });

            const salt = await bcrypt.genSalt(10);
            user.password = await bcrypt.hash(password, salt);


            await user.save();
            const payload = {
                user: {
                    id: user.id
                }
            };

            const token = jwt.sign(
                payload, "token",
                process.env.TOKEN_KEY

            );
            user.token = token;
            res.status(201).json(user);
        } catch (err) {
            console.log(err);
        }
    });

router.post(
    "/login", [
        check("email", "Invalid Email").isEmail(),
        check("password", "Invalid Password").isLength({
            min: 6
        })
    ],
    async(req, res) => {
        const errors = validationResult(req);

        if (!errors.isEmpty()) {
            return res.status(400).json({
                errors: errors.array()
            });
        }

        const { email, password } = req.body;
        try {
            let user = await User.findOne({
                email
            });
            if (!user)
                return res.status(400).json({
                    message: "User Does not Exists"
                });

            const isMatch = await bcrypt.compare(password, user.password);
            if (!isMatch)
                return res.status(400).json({
                    message: "Invalid Password"
                });

            const payload = {
                user: {
                    id: user.id
                }
            };

            const token = jwt.sign(
                payload, "token",
                process.env.TOKEN_KEY
            );
            user.token = token;
            res.status(201).json(user);
        } catch (err) {
            console.log(err);
        }

    }
);
module.exports = router;