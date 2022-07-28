# drupal9-test

Drupal 9 Demo

1. Download repository ke dalam komputer menggunakan perintah git clone. Url repository dapat dilihat di dalam repository

git clone https://github.com/denapey/drupal9-test.git <folder_tujuan>

Update Repository

2. Perbarui repository yang telah diunduh ke dalam komputer menggunakan perintah git pull.

git pull origin master

git pull https://github.com/denapey/drupal9-test.git master

3. Buat database dengan nama drupal_vox

mysql -u root -p -e "create database drupal_vox";

4. Import Database file drupal_vox.sql

mysql -u root -p drupal_vox < drupal_vox.sql
