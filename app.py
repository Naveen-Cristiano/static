from flask import Flask, render_template, request, redirect, session
import pymysql
import boto3

app = Flask(__name__)
app.secret_key = 'supersecretkey'

# DB Config
db = pymysql.connect(
    host='YOUR_AURORA_ENDPOINT',
    user='YOUR_DB_USER',
    password='YOUR_DB_PASS',
    database='real_madrid'
)

@app.route('/')
def index():
    if 'user' in session:
        cursor = db.cursor()
        cursor.execute("SELECT name, jersey FROM players")
        players = cursor.fetchall()
        return render_template('dashboard.html', players=players)
    return redirect('/login')

@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']
        cursor = db.cursor()
        cursor.execute("SELECT * FROM users WHERE username=%s AND password=%s", (username, password))
        user = cursor.fetchone()
        if user:
            session['user'] = username
            return redirect('/')
    return render_template('login.html')

@app.route('/signup', methods=['GET', 'POST'])
def signup():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']
        cursor = db.cursor()
        cursor.execute("INSERT INTO users (username, password) VALUES (%s, %s)", (username, password))
        db.commit()
        return redirect('/login')
    return render_template('signup.html')

@app.route('/logout')
def logout():
    session.pop('user', None)
    return redirect('/login')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8000)
