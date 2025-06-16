#!/bin/bash
sudo yum update -y
sudo yum install python3 python3-pip nginx git -y
pip3 install flask pymysql boto3 gunicorn
