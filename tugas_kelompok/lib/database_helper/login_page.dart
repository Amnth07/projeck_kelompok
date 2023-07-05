import 'package:flutter/material.dart';

class LoginForm extends StatefulWidget {
  @override
  _LoginFormState createState() => _LoginFormState();
}

class _LoginFormState extends State<LoginForm> {
  TextEditingController _usernameController = TextEditingController();
  TextEditingController _passwordController = TextEditingController();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Row(
          children: [
            Image.asset(
              'assets/images/angkringan__kami.png', // Ganti dengan path gambar logo Anda
              width: 32,
              height: 32,
            ),
            SizedBox(width: 8.0),
            Text('angkringan__kami'),
          ],
        ),
      ),
      body: Padding(
        padding: EdgeInsets.all(16.0),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            TextField(
              controller: _usernameController,
              decoration: InputDecoration(
                labelText: 'Username',
              ),
            ),
            TextField(
              controller: _passwordController,
              obscureText: true,
              decoration: InputDecoration(
                labelText: 'Password',
              ),
            ),
            SizedBox(height: 16.0),
            ElevatedButton(
              onPressed: () {
                // Panggil fungsi untuk mengirimkan data ke halaman pemrosesan login
                _login();
              },
              child: Text('Login'),
            ),
            SizedBox(height: 16.0),
            TextButton(
              onPressed: () {
                // Panggil fungsi untuk pindah ke halaman form register
                _goToRegister();
              },
              child: Text('Register'),
            ),
            TextButton(
              onPressed: () {
                // Panggil fungsi untuk pindah ke halaman lupa password
                _goToForgotPassword();
              },
              child: Text('Forgot Password'),
            ),
          ],
        ),
      ),
    );
  }

  void _login() {
    String username = _usernameController.text;
    String password = _passwordController.text;

    // Lakukan pemrosesan login sesuai kebutuhan, misalnya mengirim data ke server
    // Setelah berhasil login, pindah ke halaman beranda
    Navigator.pushReplacementNamed(context, '/beranda');
  }

  void _goToRegister() {
    // Pindah ke halaman form register
    Navigator.pushNamed(context, '/register');
  }

  void _goToForgotPassword() {
    // Pindah ke halaman lupa password
    Navigator.pushNamed(context, '/forgot_password');
  }
}
