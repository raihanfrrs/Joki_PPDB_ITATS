Project Setup :

1. clone repository dari github.

2. jalankan perintah :

    ```
    composer install
    ```

3. Duplikat file `.env.example` kemudian ubah namanya menjadi `.env`.

4. jalankan perintah :

    ```
    php artisan key:generate
    ```

5. buat database dengan nama : `ppdb`.

6. Ubah konfigurasi database pada file `.env`
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ppdb
    DB_USERNAME=root
    DB_PASSWORD=
    ```
7. jalankan perintah :
    ```
    php artisan migrate:fresh --seed
    ```
8. jalankan perintah :

    ```
    php artisan serve
    ```

    / pakai valet bila ada9

9. buka browser `http://127.0.0.1:8000`

10. akses halaman admin dengan beri url `/admin` seperti contoh : `http://127.0.0.1:8000/admin`

11. sign-in / login ke halaman admin :

    ```
    Username : adminppdb
    Password : admin123
    ```

12. sign-in / login ke halaman kepala sekolah :

    ```
    Username : principleppdb
    Password : principle123
    ```

13. sign-in / login ke halaman siswa :

    ```
    Username : studentppdb
    Password : student123
    ```

# ppdb
