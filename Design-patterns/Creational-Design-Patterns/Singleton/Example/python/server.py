from flask import Flask, jsonify
from database import Database

app = Flask(__name__)

@app.route('/')
def index():
    db = Database()
    try:
        result = db.query("SELECT * FROM users")
        return jsonify(result)
    except Exception as e:
        return jsonify({"error": str(e)}), 500
    finally:
        db.close()

if __name__ == '__main__':
    app.run(debug=True)