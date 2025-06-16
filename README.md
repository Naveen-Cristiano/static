
# Real Madrid Fan Flask App

## Features
- User login/signup (stored in Aurora MySQL)
- Player list (dynamic from DB)
- Static content served via S3 + CloudFront

## Setup
1. Edit `app.py` and add your Aurora endpoint, user, password
2. Upload player images to S3 and use CloudFront for URLs
3. Deploy to EC2 with Python 3, Flask, and Gunicorn
4. Serve with Nginx

## DB Schema
Run schema.sql on Aurora:
- users (id, username, password)
- players (id, name, jersey)
