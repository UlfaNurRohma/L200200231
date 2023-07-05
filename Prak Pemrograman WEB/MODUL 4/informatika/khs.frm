TYPE=VIEW
query=select `informatika`.`mahasiswa`.`NIM` AS `NIM`,`informatika`.`nilai`.`Nama_MK` AS `Nama_MK`,`informatika`.`nilai`.`Nilai_Angka` AS `Nilai_Angka`,`informatika`.`nilai`.`Nilai_Huruf` AS `Nilai_Huruf` from (`informatika`.`mahasiswa` join `informatika`.`nilai` on(`informatika`.`mahasiswa`.`NIM` = `informatika`.`nilai`.`NIM`))
md5=0824c38c1e99289f324771709f5e001b
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2023-03-30 21:34:00
create-version=2
source=SELECT mahasiswa.NIM, nilai.Nama_MK, nilai.Nilai_Angka, nilai.Nilai_Huruf FROM (mahasiswa INNER JOIN nilai ON mahasiswa.NIM=nilai.NIM)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `informatika`.`mahasiswa`.`NIM` AS `NIM`,`informatika`.`nilai`.`Nama_MK` AS `Nama_MK`,`informatika`.`nilai`.`Nilai_Angka` AS `Nilai_Angka`,`informatika`.`nilai`.`Nilai_Huruf` AS `Nilai_Huruf` from (`informatika`.`mahasiswa` join `informatika`.`nilai` on(`informatika`.`mahasiswa`.`NIM` = `informatika`.`nilai`.`NIM`))
mariadb-version=100422
