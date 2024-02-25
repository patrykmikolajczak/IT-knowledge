const mysql = require('mysql')
const dotenv = require('dotenv');

dotenv.config();

class Database {
    constructor() {
        this.connection = null;
        this.connect();
    }

    connect() {
        this.connection = mysql.createConnection({
            host: 'localhost',
            user: 'root',
            password: 'password',
            database: 'mydatabase'
        });

        this.connection.connect((err) => {
            if (err) {
                console.error('Błąd połączenia z bazą danych:', err.message);
                return;
            }
            console.log('Połączono z bazą danych MySQL');
        });
    }

    query(sql, params, callback) {
        this.connection.query(sql, params, callback);
    }

    close() {
        this.connection.end((err) => {
            if (err) {
                console.error('Błąd zamykania połączenia z bazą danych:', err.message);
                return;
            }
            console.log('Połączenie z bazą danych MySQL zostało zakończone');
        });
    }
}

module.exports = new Database();