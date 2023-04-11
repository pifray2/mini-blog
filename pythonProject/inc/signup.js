const mysql = require('mysql');
const express = require('express');
const app = express();

const connection =
mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'users'
});
connection.connect();

app.use(express.urlencoded({ extended: true }));

app.post('inc/signup', (req, res) => {
  const name = req.body.name;
  const email = req.body.email;
  const password = req.body.password;

  const query = `INSERT INTO users (id, name, email, password) VALUES (null, '${name}', '${email}', '${password}')`;

  connection.query(query, (error, results, fields) => {
    if (error) throw error;
    console.log('Data has been inserted successfully');
    res.send('Data has been inserted successfully');
  });
});

app.listen(3000, () => {
  console.log('Server is running on port 3000');
});