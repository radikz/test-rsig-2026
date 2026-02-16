# test-rsig-2026

### 1. Instruksi Tugas: Pembuat Nama Band

Teman saya sedang mencari nama baru untuk bandnya. Dia menyukai band yang menggunakan rumus: "Sebuah" + kata benda (dengan huruf pertama kapital).

Contoh:



`"dolphin"` -> `"Sebuah Dolphin"`

Namun, jika kata benda tersebut DIAWALI dan DIAKHIRI dengan huruf yang sama, dia ingin mengulang kata tersebut dua kali dan menggabungkannya menjadi satu kata (TANPA kata "Sebuah" di depannya). Huruf terakhir di kata pertama dan huruf pertama di kata kedua dilebur menjadi satu.

Contoh:



`"alaska"` -> `"Alaskalaska"` (karena diawali dan diakhiri huruf 'a')

`"tart"` -> `"Tartart"` (karena diawali dan diakhiri huruf 't')

Tugas Anda:

Selesaikan fungsi yang menerima input berupa kata benda (string) dan mengembalikan nama band yang sesuai dalam bentuk string.

### 2. Mencari Angka Ganjil
Instruksi: Diberikan sebuah array bilangan bulat (integers), temukan satu angka yang muncul dalam jumlah ganjil.

Ketentuan:

Akan selalu ada tepat satu angka yang jumlah kemunculannya ganjil.

Angka lainnya pasti muncul dalam jumlah genap.

Contoh:

`[7]` harus mengembalikan `7`, karena muncul 1 kali (ganjil).

`[0,1,0,1,0]` harus mengembalikan `0`, karena muncul 3 kali (ganjil).

`[1, 2, 2, 3, 3, 3, 4, 3, 3, 3, 2, 2, 1]` harus mengembalikan `4`, karena muncul 1 kali (ganjil).
