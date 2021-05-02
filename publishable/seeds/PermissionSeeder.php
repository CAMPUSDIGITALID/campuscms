<?php

use Illuminate\Database\Seeder;
use Ajifatur\FaturCMS\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            // Dashboard
            ['key' => 'DashboardController::admin', 'name' => 'Menampilkan Dashboard Admin'],
            ['key' => 'DashboardController::member', 'name' => 'Menampilkan Dashboard Member'],

            // Role
            ['key' => 'RoleController::index', 'name' => 'Menampilkan Data Role'],
            ['key' => 'RoleController::edit', 'name' => 'Mengupdate Role'],

            // Role Permission
            ['key' => 'RolePermissionController::index', 'name' => 'Manajemen Hak Akses'],
            ['key' => 'PermissionController::create', 'name' => 'Menambah Akses'],
            ['key' => 'PermissionController::edit', 'name' => 'Mengupdate Akses'],
            ['key' => 'PermissionController::delete', 'name' => 'Menghapus Akses'],

            // Package
            ['key' => 'PackageController::index', 'name' => 'Menampilkan Data Package'],
            ['key' => 'PackageController::me', 'name' => 'Menampilkan My Package'],

            // Artisan
            ['key' => 'ArtisanController::index', 'name' => 'Menampilkan Data Command Artisan'],

            // Pengaturan
            ['key' => 'SettingController::index', 'name' => 'Menampilkan Data Pengaturan'],
            ['key' => 'SettingController::edit', 'name' => 'Mengupdate Pengaturan'],

            // User
            ['key' => 'UserController::index', 'name' => 'Menampilkan Data User'],
            ['key' => 'UserController::create', 'name' => 'Menambah User'],
            ['key' => 'UserController::detail', 'name' => 'Menampilkan Detail User'],
            ['key' => 'UserController::edit', 'name' => 'Mengupdate User'],
            ['key' => 'UserController::delete', 'name' => 'Menghapus User'],
            ['key' => 'UserController::profile', 'name' => 'Menampilkan Profil User'],
            ['key' => 'UserController::editProfile', 'name' => 'Mengupdate Profil User'],
            ['key' => 'UserController::export', 'name' => 'Mengekspor Data User'],

            // Visitor
            ['key' => 'VisitorController::index', 'name' => 'Menampilkan Data Visitor'],
            ['key' => 'VisitorController::topVisitor', 'name' => 'Menampilkan Data Top Visitor'],

            // Log
            ['key' => 'LogController::index', 'name' => 'Menampilkan Data Log'],
            ['key' => 'LogController::activity', 'name' => 'Menampilkan Log Aktivitas'],
            ['key' => 'LogController::login', 'name' => 'Menampilkan Log Login'],

            // Media
            ['key' => 'MediaController::index', 'name' => 'Menampilkan Data Media'],
            ['key' => 'MediaController::detail', 'name' => 'Menampilkan Detail Media'],
            ['key' => 'MediaController::delete', 'name' => 'Menghapus Media'],
            ['key' => 'MediaController::deleteBatch', 'name' => 'Menghapus Media (Batch)'],

            // Rekening
            ['key' => 'RekeningController::index', 'name' => 'Menampilkan Data Rekening'],
            ['key' => 'RekeningController::create', 'name' => 'Menambah Rekening'],
            ['key' => 'RekeningController::edit', 'name' => 'Mengupdate Rekening'],
            ['key' => 'RekeningController::delete', 'name' => 'Menghapus Rekening'],

            // Default Rekening
            ['key' => 'DefaultRekeningController::index', 'name' => 'Menampilkan Data Default Rekening'],
            ['key' => 'DefaultRekeningController::create', 'name' => 'Menambah Default Rekening'],
            ['key' => 'DefaultRekeningController::edit', 'name' => 'Mengupdate Default Rekening'],
            ['key' => 'DefaultRekeningController::delete', 'name' => 'Menghapus Default Rekening'],

            // Transaksi
            ['key' => 'KomisiController::index', 'name' => 'Menampilkan Data Transaksi Komisi'],
            ['key' => 'WithdrawalController::index', 'name' => 'Menampilkan Data Transaksi Withdrawal'],
            ['key' => 'PelatihanController::transaction', 'name' => 'Menampilkan Data Transaksi Pelatihan'],

            // Email
            ['key' => 'EmailController::index', 'name' => 'Menampilkan Data Email'],
            ['key' => 'EmailController::create', 'name' => 'Menambah Email'],
            ['key' => 'EmailController::detail', 'name' => 'Menampilkan Detail Email'],
            ['key' => 'EmailController::delete', 'name' => 'Menghapus Email'],

            // File Manager
            ['key' => 'FileController::index', 'name' => 'Menampilkan File Manager'],
            ['key' => 'FileController::create', 'name' => 'Menambah File'],
            ['key' => 'FileController::detail', 'name' => 'Menampilkan Detail File'],
            ['key' => 'FileController::edit', 'name' => 'Mengupdate File'],
            ['key' => 'FileController::delete', 'name' => 'Menghapus File'],
            ['key' => 'FolderController::create', 'name' => 'Menambah Folder'],
            ['key' => 'FolderController::edit', 'name' => 'Mengupdate Folder'],
            ['key' => 'FolderController::delete', 'name' => 'Menghapus Folder'],

            // Halaman
            ['key' => 'HalamanController::index', 'name' => 'Menampilkan Data Halaman'],
            ['key' => 'HalamanController::create', 'name' => 'Menambah Halaman'],
            ['key' => 'HalamanController::edit', 'name' => 'Mengupdate Halaman'],
            ['key' => 'HalamanController::delete', 'name' => 'Menghapus Halaman'],

            // Artikel
            ['key' => 'BlogController::index', 'name' => 'Menampilkan Data Artikel'],
            ['key' => 'BlogController::create', 'name' => 'Menambah Artikel'],
            ['key' => 'BlogController::edit', 'name' => 'Mengupdate Artikel'],
            ['key' => 'BlogController::delete', 'name' => 'Menghapus Artikel'],

            // Kategori Artikel
            ['key' => 'KategoriArtikelController::index', 'name' => 'Menampilkan Data Kategori Artikel'],
            ['key' => 'KategoriArtikelController::create', 'name' => 'Menambah Kategori Artikel'],
            ['key' => 'KategoriArtikelController::edit', 'name' => 'Mengupdate Kategori Artikel'],
            ['key' => 'KategoriArtikelController::delete', 'name' => 'Menghapus Kategori Artikel'],

            // Tag Artikel
            ['key' => 'TagController::index', 'name' => 'Menampilkan Data Tag Artikel'],
            ['key' => 'TagController::create', 'name' => 'Menambah Tag Artikel'],
            ['key' => 'TagController::edit', 'name' => 'Mengupdate Tag Artikel'],
            ['key' => 'TagController::delete', 'name' => 'Menghapus Tag Artikel'],

            // Kontributor Artikel
            ['key' => 'KontributorController::index', 'name' => 'Menampilkan Data Kontributor Artikel'],
            ['key' => 'KontributorController::create', 'name' => 'Menambah Kontributor Artikel'],
            ['key' => 'KontributorController::edit', 'name' => 'Mengupdate Kontributor Artikel'],
            ['key' => 'KontributorController::delete', 'name' => 'Menghapus Kontributor Artikel'],

            // Acara
            ['key' => 'AcaraController::index', 'name' => 'Menampilkan Data Acara'],
            ['key' => 'AcaraController::create', 'name' => 'Menambah Acara'],
            ['key' => 'AcaraController::edit', 'name' => 'Mengupdate Acara'],
            ['key' => 'AcaraController::delete', 'name' => 'Menghapus Acara'],

            // Kategori Acara
            ['key' => 'KategoriAcaraController::index', 'name' => 'Menampilkan Data Kategori Acara'],
            ['key' => 'KategoriAcaraController::create', 'name' => 'Menambah Kategori Acara'],
            ['key' => 'KategoriAcaraController::edit', 'name' => 'Mengupdate Kategori Acara'],
            ['key' => 'KategoriAcaraController::delete', 'name' => 'Menghapus Kategori Acara'],

            // Program
            ['key' => 'ProgramController::index', 'name' => 'Menampilkan Data Program'],
            ['key' => 'ProgramController::create', 'name' => 'Menambah Program'],
            ['key' => 'ProgramController::edit', 'name' => 'Mengupdate Program'],
            ['key' => 'ProgramController::delete', 'name' => 'Menghapus Program'],

            // Kategori Program
            ['key' => 'KategoriProgramController::index', 'name' => 'Menampilkan Data Kategori Program'],
            ['key' => 'KategoriProgramController::create', 'name' => 'Menambah Kategori Program'],
            ['key' => 'KategoriProgramController::edit', 'name' => 'Mengupdate Kategori Program'],
            ['key' => 'KategoriProgramController::delete', 'name' => 'Menghapus Kategori Program'],

            // Pelatihan
            ['key' => 'PelatihanController::index', 'name' => 'Menampilkan Data Pelatihan'],
            ['key' => 'PelatihanController::create', 'name' => 'Menambah Pelatihan'],
            ['key' => 'PelatihanController::detail', 'name' => 'Menampilkan Detail Pelatihan'],
            ['key' => 'PelatihanController::edit', 'name' => 'Mengupdate Pelatihan'],
            ['key' => 'PelatihanController::delete', 'name' => 'Menghapus Pelatihan'],
            ['key' => 'PelatihanController::participant', 'name' => 'Menampilkan Peserta Pelatihan'],
            ['key' => 'PelatihanController::trainer', 'name' => 'Menampilkan Pelatihan yang Diampu Trainer'],

            // Kategori Pelatihan
            ['key' => 'KategoriPelatihanController::index', 'name' => 'Menampilkan Data Kategori Pelatihan'],
            ['key' => 'KategoriPelatihanController::create', 'name' => 'Menambah Kategori Pelatihan'],
            ['key' => 'KategoriPelatihanController::edit', 'name' => 'Mengupdate Kategori Pelatihan'],
            ['key' => 'KategoriPelatihanController::delete', 'name' => 'Menghapus Kategori Pelatihan'],

            // Karir
            ['key' => 'KarirController::index', 'name' => 'Menampilkan Data Karir'],
            ['key' => 'KarirController::create', 'name' => 'Menambah Karir'],
            ['key' => 'KarirController::edit', 'name' => 'Mengupdate Karir'],
            ['key' => 'KarirController::delete', 'name' => 'Menghapus Karir'],

            // Psikolog
            ['key' => 'PsikologController::index', 'name' => 'Menampilkan Data Psikolog'],
            ['key' => 'PsikologController::create', 'name' => 'Menambah Psikolog'],
            ['key' => 'PsikologController::edit', 'name' => 'Mengupdate Psikolog'],
            ['key' => 'PsikologController::delete', 'name' => 'Menghapus Psikolog'],

            // Slider
            ['key' => 'SliderController::index', 'name' => 'Menampilkan Data Slider'],
            ['key' => 'SliderController::create', 'name' => 'Menambah Slider'],
            ['key' => 'SliderController::edit', 'name' => 'Mengupdate Slider'],
            ['key' => 'SliderController::delete', 'name' => 'Menghapus Slider'],

            // Deskripsi
            ['key' => 'DeskripsiController::index', 'name' => 'Menampilkan Data Deskripsi'],

            // Fitur
            ['key' => 'FiturController::index', 'name' => 'Menampilkan Data Fitur'],
            ['key' => 'FiturController::create', 'name' => 'Menambah Fitur'],
            ['key' => 'FiturController::edit', 'name' => 'Mengupdate Fitur'],
            ['key' => 'FiturController::delete', 'name' => 'Menghapus Fitur'],

            // Cabang
            ['key' => 'CabangController::index', 'name' => 'Menampilkan Data Cabang'],
            ['key' => 'CabangController::create', 'name' => 'Menambah Cabang'],
            ['key' => 'CabangController::edit', 'name' => 'Mengupdate Cabang'],
            ['key' => 'CabangController::delete', 'name' => 'Menghapus Cabang'],

            // Mitra
            ['key' => 'MitraController::index', 'name' => 'Menampilkan Data Mitra'],
            ['key' => 'MitraController::create', 'name' => 'Menambah Mitra'],
            ['key' => 'MitraController::edit', 'name' => 'Mengupdate Mitra'],
            ['key' => 'MitraController::delete', 'name' => 'Menghapus Mitra'],

            // Mentor
            ['key' => 'MentorController::index', 'name' => 'Menampilkan Data Mentor'],
            ['key' => 'MentorController::create', 'name' => 'Menambah Mentor'],
            ['key' => 'MentorController::edit', 'name' => 'Mengupdate Mentor'],
            ['key' => 'MentorController::delete', 'name' => 'Menghapus Mentor'],

            // Testimoni
            ['key' => 'TestimoniController::index', 'name' => 'Menampilkan Data Testimoni'],
            ['key' => 'TestimoniController::create', 'name' => 'Menambah Testimoni'],
            ['key' => 'TestimoniController::edit', 'name' => 'Mengupdate Testimoni'],
            ['key' => 'TestimoniController::delete', 'name' => 'Menghapus Testimoni'],

            // E-Sertifikat
            ['key' => 'SertifikatController::indexTrainer', 'name' => 'Menampilkan Data Sertifikat Trainer'],
            ['key' => 'SertifikatController::indexParticipant', 'name' => 'Menampilkan Data Sertifikat Peserta'],
            ['key' => 'SertifikatController::detailTrainer', 'name' => 'Menampilkan Detail Sertifikat Trainer'],
            ['key' => 'SertifikatController::detailParticipant', 'name' => 'Menampilkan Detail Sertifikat Peserta'],

            // Tandatangan Digital
            ['key' => 'SignatureController::index', 'name' => 'Menampilkan Data Tandatangan Digital'],
            ['key' => 'SignatureController::input', 'name' => 'Membuat Tandatangan Digital'],
            ['key' => 'SignatureController::delete', 'name' => 'Menghapus Tandatangan Digital'],

            // Absensi
            ['key' => 'AbsensiController::index', 'name' => 'Menampilkan Data Absensi'],
            ['key' => 'AbsensiController::delete', 'name' => 'Menghapus Absensi'],
            ['key' => 'AbsensiController::export', 'name' => 'Mengekspor Absensi'],
        ];

        foreach($array as $key=>$data){
            Permission::updateOrCreate(['key_permission' => $data['key']], ['nama_permission' => $data['name'], 'order_permission' => ($key+1)]);
        }
    }
}
