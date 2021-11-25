import 'package:flutter/material.dart';
import 'package:login_minimalist/pages/contact.page.dart';

class ButtonContact extends StatefulWidget {
  @override
  _ButtonContactState createState() => _ButtonContactState();
}

class _ButtonContactState extends State<ButtonContact> {
  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.only(top: 30, left: 18),
      child: Container(
        alignment: Alignment.topLeft,
        //color: Colors.red,
        height: 20,
        child: Row(
          children: <Widget>[
            FlatButton(
              padding: EdgeInsets.all(0),
              onPressed: () {
                Navigator.push(context,
                    MaterialPageRoute(builder: (context) => MyHomePage()));
              },
              child: Text(
                'Contact us?',
                style: TextStyle(
                  fontSize: 12,
                  color: Colors.white,
                ),
                textAlign: TextAlign.left,
              ),
            ),
          ],
        ),
      ),
    );
  }
}
