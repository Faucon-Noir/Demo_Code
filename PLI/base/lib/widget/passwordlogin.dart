import 'package:flutter/material.dart';

class PasswordLoginInput extends StatefulWidget {
  @override
  _PasswordLoginInputState createState() => _PasswordLoginInputState();
}

final TextEditingController passwordloginController = TextEditingController();

class _PasswordLoginInputState extends State<PasswordLoginInput> {
  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.only(top: 10, left: 50, right: 50),
      child: Container(
        height: 60,
        width: MediaQuery.of(context).size.width,
        child: TextField(
          controller: passwordloginController,
          style: TextStyle(
            color: Colors.white,
          ),
          obscureText: true,
          decoration: InputDecoration(
            border: InputBorder.none,
            labelText: 'Password',
            labelStyle: TextStyle(
              color: Colors.white70,
            ),
          ),
        ),
      ),
    );
  }
}
