import 'package:flutter/material.dart';
import 'package:tugas_kelompok/database_helper/login_page.dart';
import 'package:tugas_kelompok/database_helper/register.dart';
import 'package:tugas_kelompok/database_helper/register.dart';
import 'package:tugas_kelompok/home/menu.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Login Demo',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: LoginForm(),
      routes: {
        '/login': (context) => MenuApp(),
        '/register': (context) => RegisterForm(),
      },
    );
  }
}
