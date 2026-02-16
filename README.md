# test-rsig-2026

## PHP
### 1. Pembuat Nama Band

Intruksi: Teman saya sedang mencari nama baru untuk bandnya. Dia menyukai band yang menggunakan rumus: "Sebuah" + kata benda (dengan huruf pertama kapital).

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

### 3. Akumulasi
Instruksi: Buatlah sebuah fungsi bernama accum yang menerima sebuah string dan mengembalikan string baru dengan format seperti contoh di bawah. Setiap karakter dalam string asli akan diulang sesuai dengan posisinya (indeks ke-1), diawali dengan huruf kapital, dan diikuti oleh huruf kecil. Setiap kelompok huruf dipisahkan oleh tanda hubung (`-`).

Ketentuan:

Input hanya berisi huruf `a..z` dan `A..Z`.

Karakter pertama di setiap kelompok harus **Huruf Kapital**.

Sisa karakter di kelompok tersebut harus **Huruf Kecil**.

Contoh: 
`akum("abcd")` -> `A-Bb-Ccc-Dddd`
`akum("RqaEzty")` -> `R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy`
`akum("cwAt")` -> `C-Ww-Aaa-Tttt`

## SQL
Import sql pada folder `sql/dump.sql`

1. Tampilkan nama tes dan biaya yang harganya di atas Rp 50.000. Urutkan dari yang termahal.
2. Tampilkan nama semua pasien berjenis kelamin 'P' (Perempuan) yang lahir sebelum tahun 1995.
3. Tampilkan nama pasien, nama tes yang diambil, hasil nilai, dan nama dokter yang merujuknya.
4. Tampilkan nama tes dan rata-rata hasil_nilai, tetapi kelompokkan berdasarkan jenis kelamin pasien (L/P).
5. Tampilkan nama pasien yang sudah melakukan lebih dari satu jenis tes yang berbeda (bukan tes yang sama berulang kali). Nama kolom yang ditampilkan nama pasien dan jumlah tes
