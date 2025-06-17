from flask import Flask, render_template, request
import boto3
import pymysql

app = Flask(__name__)

# S3 static file example (CloudFront handles actual URL in production)
s3 = boto3.client('s3')
S3_BUCKET = 'your-s3-bucket-name'

# Aurora DB example connection
conn = pymysql.connect(
    host='your-aurora-endpoint',
    user='your-db-user',
    password='your-db-pass',
    database='your-database-name'
)

@app.route('/')
def homepage():
    return render_template('index.html')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80)
