import 'package:flutter/material.dart';

class TextNew extends StatefulWidget {
  @override
  _TextNewState createState() => _TextNewState();
}

class _TextNewState extends State<TextNew> {
  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.only(top: 15.0, left: 10.0),
      child: Container(
        //color: Colors.green,
        height: 100,
        width: 150,
        child: Column(
          children: <Widget>[
            Container(
              height: 50,
            ),
            Center(
              child: Text(
                'Green Level',
                style: TextStyle(
                  fontSize: 24,
                  color: Colors.white,
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
