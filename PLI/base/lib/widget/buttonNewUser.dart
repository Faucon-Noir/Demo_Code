import 'package:flutter/material.dart';
import 'package:login_minimalist/widget/user_model.dart';
import 'package:http/http.dart' as http;
import 'package:login_minimalist/widget/newEmail.dart';
import 'package:login_minimalist/widget/Firstname.dart';
import 'package:login_minimalist/widget/Lastname.dart';
import 'package:login_minimalist/widget/Username.dart';
import 'package:login_minimalist/widget/password.dart';
import 'package:login_minimalist/pages/login.page.dart';

class ButtonNewUser extends StatefulWidget {
  @override
  _ButtonNewUserState createState() => _ButtonNewUserState();
}

Future<UserModel> createUser(String username, String email, String password,
    String firstname, String lastname) async {
  final String apiUrl = "https://elishome.fr/api/user/create";

  final response = await http.post(apiUrl, body: {
    "username": username,
    "email": email,
    "password": password,
    "firstname": firstname,
    "lastname": lastname
  });

  if (response.statusCode == 201) {
    final String responseString = response.body;

    return userModelFromJson(responseString);
  } else {
    return null;
  }
}

class _ButtonNewUserState extends State<ButtonNewUser> {
  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.only(top: 40, right: 50, left: 200),
      child: Container(
        alignment: Alignment.bottomRight,
        height: 50,
        width: MediaQuery.of(context).size.width,
        decoration: BoxDecoration(boxShadow: [
          BoxShadow(
            color: Colors.blue[300],
            blurRadius: 10.0, // has the effect of softening the shadow
            spreadRadius: 1.0, // has the effect of extending the shadow
            offset: Offset(
              5.0, // horizontal, move right 10
              5.0, // vertical, move down 10
            ),
          ),
        ], color: Colors.white, borderRadius: BorderRadius.circular(30)),
        child: FlatButton(
          onPressed: () async {
            final String username = usernameController.text;
            final String email = emailController.text;
            final String password = passwordController.text;
            final String firstname = firstnameController.text;
            final String lastname = lastnameController.text;

            Navigator.push(
                context, MaterialPageRoute(builder: (context) => LoginPage()));

            final UserModel user = await createUser(
                username, email, password, firstname, lastname);
          },
          child: Row(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              Text(
                'Sign Up',
                style: TextStyle(
                  color: Colors.lightBlueAccent,
                  fontSize: 14,
                  fontWeight: FontWeight.w700,
                ),
              ),
              Icon(
                Icons.arrow_forward,
                color: Colors.lightBlueAccent,
              ),
            ],
          ),
        ),
      ),
    );
  }
}
