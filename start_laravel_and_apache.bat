@echo off
:: menjalankan npm run dev
echo starting run dev
start cmd /k "npm run dev"

:: Menjalankan Laravel
echo Starting Laravel development server...
start cmd /k "php artisan serve"

:: Menjalankan Apache24
echo Starting Apache24...
C:\Apache24\bin\httpd.exe

:: Hentikan script setelah Laravel selesai
echo Stopping Apache24...
net stop Apache2.4
