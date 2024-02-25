import mysql.connector
from dotenv import load_dotenv
import os

load_dotenv()

class Database:
    _instance = None

    def __new__(cls):
        if cls._instance is None:
            cls._instance = super().__new__(cls)
            cls._instance.connection = mysql.connector.connect(
                host=os.getenv('DB_HOST'),
                user=os.getenv('DB_USER'),
                password=os.getenv('DB_PASSWORD'),
                database=os.getenv('DB_DATABASE')
            )
            print("Połączono z bazą danych MySQL")
        return cls._instance

    def query(self, sql):
        cursor = self.connection.cursor()
        cursor.execute(sql)
        result = cursor.fetchall()
        cursor.close()
        return result

    def close(self):
        self.connection.close()
        print("Połączenie z bazą danych MySQL zostało zakończone")