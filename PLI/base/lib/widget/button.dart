import 'package:flutter/material.dart';
import 'package:login_minimalist/pages/challengeslist.page.dart';
import 'package:login_minimalist/pages/profile.page.dart';
import 'package:login_minimalist/widget/login_model.dart';
import 'package:login_minimalist/widget/inputEmail.dart';
import 'package:login_minimalist/widget/passwordlogin.dart';
import 'package:http/http.dart';

class ButtonLogin extends StatefulWidget {
  @override
  _ButtonLoginState createState() => _ButtonLoginState();
}

Future<LoginModel> loginUser(String username, String password) async {
  final urlpost = "https://elishome.fr/api/user/auth";

  final response = await post(Uri.parse(urlpost),
      body: {"username": username, "password": password});

  if (response.statusCode == 200) {
    final String responseString = response.body;
    print(responseString);
    return loginModelFromJson(responseString);
  } else {
    return null;
  }
}

class _ButtonLoginState extends State<ButtonLogin> {
  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.only(top: 40, right: 50, left: 200),
      child: Container(
        alignment: Alignment.bottomRight,
        height: 50,
        width: MediaQuery.of(context).size.width,
        decoration: BoxDecoration(
          boxShadow: [
            BoxShadow(
              color: Colors.blue[300],
              blurRadius: 10.0, // has the effect of softening the shadow
              spreadRadius: 1.0, // has the effect of extending the shadow
              offset: Offset(
                5.0, // horizontal, move right 10
                5.0, // vertical, move down 10
              ),
            ),
          ],
          color: Colors.white,
          borderRadius: BorderRadius.circular(30),
        ),
        child: FlatButton(
          onPressed: () async {
            final String username = usernameController.text;
            final String password = passwordloginController.text;

            final LoginModel user = await loginUser(username, password);
            if (user != null) {
              Navigator.push(context,
                  MaterialPageRoute(builder: (context) => MyStatefulWidget()));
            }
          },
          child: Row(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              Text(
                'Sign In',
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
