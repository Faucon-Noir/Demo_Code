import 'package:flutter/material.dart';
import 'package:login_minimalist/widget/buttonNewUser.dart';
import 'package:login_minimalist/widget/newEmail.dart';
import 'package:login_minimalist/widget/Firstname.dart';
import 'package:login_minimalist/widget/Lastname.dart';
import 'package:login_minimalist/widget/Username.dart';
import 'package:login_minimalist/widget/password.dart';
import 'package:login_minimalist/widget/Logo.dart';
import 'package:login_minimalist/widget/textNew.dart';
import 'package:login_minimalist/widget/userOld.dart';

class NewUser extends StatefulWidget {
  @override
  _NewUserState createState() => _NewUserState();
}

class _NewUserState extends State<NewUser> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        decoration: BoxDecoration(
          gradient: LinearGradient(
              begin: Alignment.topRight,
              end: Alignment.bottomLeft,
              colors: [Colors.blueGrey, Colors.lightBlueAccent]),
        ),
        child: ListView(
          children: <Widget>[
            Column(
              children: <Widget>[
                Row(children: <Widget>[
                  Logo(),
                  TextNew(),
                ]),
                SizedBox(
                  height: 32,
                ),
                Firstname(),
                Lastname(),
                Username(),
                NewEmail(),
                PasswordInput(),
                ButtonNewUser(),
                UserOld(),
              ],
            ),
          ],
        ),
      ),
    );
  }
}
