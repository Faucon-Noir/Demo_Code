import 'package:flutter/material.dart';
import 'package:login_minimalist/pages/timer.page.dart';

void main() => runApp(new ShowerChallenge());

class ShowerChallenge extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return new MaterialApp(
      showPerformanceOverlay: false,
      title: 'Flutter Demo',
      theme: new ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: new MyHomePage(),
    );
  }
}

class MyHomePage extends StatelessWidget {
  MyHomePage({Key key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return new Scaffold(
      appBar: new AppBar(
        title: new Text("Shower challenge"),
      ),
      body: new Container(child: new TimerPage()),
    );
  }
}

