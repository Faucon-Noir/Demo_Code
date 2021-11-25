import 'package:flutter/material.dart';
import 'package:login_minimalist/pages/challengeslist.page.dart';

void main() => runApp(EndChallenge());

class EndChallenge extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'list of challenges',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: EndChallengePage(),
    );
  }
}

class EndChallengePage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final ButtonStyle style = ElevatedButton.styleFrom(
        textStyle: const TextStyle(fontSize: 20),
        minimumSize: const Size(250, 35),
        primary: Colors.green);

    return Scaffold(
      appBar: AppBar(
        title: Text("Challenge"),
      ),
      body: Column(
        children: [
          Container(
              alignment: Alignment.topCenter,
              child: Padding(
                padding: EdgeInsets.all(25.0),
                child: Text(
                  "Challenge completed successfully !",
                  textAlign: TextAlign.center,
                  style: TextStyle(fontWeight: FontWeight.bold, fontSize: 30),
                ),
              )),
          Container(
            height: 500,
            alignment: Alignment.center,
            child: Text("Fun fact here"),
          ),
          Container(
              alignment: Alignment.bottomCenter,
              child: ElevatedButton(
                style: style,
                onPressed: () {
                  Navigator.push(
                      context,
                      MaterialPageRoute(
                          builder: (context) => ChallengesList()));
                },
                child: Text(
                    'Finish',
                ),
              ),
          ),
        ],
      ),
    );
  }
}
