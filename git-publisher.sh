#!/bin/bash
chmod 777 git-publisher.sh
# clear images in ./app/upload/
rm -r ./app/upload/*
# publish to github
git add .
git commit -m "$1"
git push