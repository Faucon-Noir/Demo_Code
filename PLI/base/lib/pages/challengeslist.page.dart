import 'package:flutter/material.dart';
import 'package:login_minimalist/pages/showerChallenge.page.dart';

void main() => runApp(ChallengesList());

class ChallengesList extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'list of challenges',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: ChallengesListPage(),
    );
  }
}

class ChallengesListPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final ButtonStyle style = ElevatedButton.styleFrom(
        textStyle: const TextStyle(fontSize: 20),
        minimumSize: const Size(250, 35));

    return Scaffold(
      appBar: AppBar(
        title: Text("Challenges"),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            Form(
              child: Column(
                children: [
                  ElevatedButton(
                    style: style,
                    onPressed: () {
                      Navigator.push(context,
                          MaterialPageRoute(builder: (context) => ShowerChallenge()));
                    },
                    child: Text(
                      'Shower Challenge',
                    ),
                  ),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                  ElevatedButton(
                      style: style,
                      onPressed: () => showDialog<String>(
                            context: context,
                            builder: (BuildContext context) => AlertDialog(
                              title: const Text('Coming soon'),
                              content:
                                  const Text('This challenge coming soon !'),
                              actions: <Widget>[
                                TextButton(
                                    onPressed: () =>
                                        Navigator.pop(context, 'OK'),
                                    child: const Text('OK')),
                              ],
                            ),
                          ),
                      child: const Text('Coming soon')),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
