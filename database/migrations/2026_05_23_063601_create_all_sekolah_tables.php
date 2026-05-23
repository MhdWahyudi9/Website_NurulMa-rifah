<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run Migration
     */
    public function up(): void
    {

        /*
        |--------------------------------------------------------------------------
        | TABEL SEKOLAH
        |--------------------------------------------------------------------------
        */
        Schema::create('sekolah', function (Blueprint $table) {

            $table->id();

            $table->string('nama_sekolah');
            $table->enum('jenjang', ['PAUD', 'SD', 'SMP', 'SMA']);

            $table->text('alamat')->nullable();

            $table->string('telepon')->nullable();

            $table->string('email')->nullable();

            $table->string('logo')->nullable();

            $table->text('deskripsi')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL USERS
        |--------------------------------------------------------------------------
        */
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('sekolah_id')->nullable();

            $table->string('name');

            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');

            $table->string('no_hp', 20)->nullable();

            $table->text('alamat')->nullable();

            $table->string('foto')->nullable();

            $table->string('kk')->nullable();

            $table->string('akta')->nullable();

            $table->enum('role', [
                'admin',
                'guru',
                'siswa',
                'orang_tua'
            ])->default('siswa');

            $table->enum('status', [
                'pending',
                'diterima',
                'ditolak'
            ])->default('pending');

            $table->rememberToken();

            $table->timestamps();

            $table->foreign('sekolah_id')
                ->references('id')
                ->on('sekolah')
                ->onDelete('set null');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL SISWA
        |--------------------------------------------------------------------------
        */
        Schema::create('siswa', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->unsignedBigInteger('sekolah_id')->nullable();

            $table->string('nisn')->unique();

            $table->string('nama_lengkap');

            $table->enum('jenis_kelamin', [
                'L',
                'P'
            ]);

            $table->date('tanggal_lahir')->nullable();

            $table->string('tempat_lahir')->nullable();

            $table->text('alamat')->nullable();

            $table->string('nama_ayah')->nullable();

            $table->string('nama_ibu')->nullable();

            $table->string('no_hp')->nullable();

            $table->string('foto')->nullable();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('sekolah_id')
                ->references('id')
                ->on('sekolah')
                ->onDelete('set null');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL GURU
        |--------------------------------------------------------------------------
        */
        Schema::create('guru', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->unsignedBigInteger('sekolah_id')->nullable();

            $table->string('nip')->nullable();

            $table->string('nama_guru');

            $table->string('mapel')->nullable();

            $table->string('foto')->nullable();

            $table->text('alamat')->nullable();

            $table->string('no_hp')->nullable();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('sekolah_id')
                ->references('id')
                ->on('sekolah')
                ->onDelete('set null');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL KELAS
        |--------------------------------------------------------------------------
        */
        Schema::create('kelas', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('sekolah_id')->nullable();

            $table->unsignedBigInteger('wali_kelas_id')->nullable();

            $table->string('nama_kelas');

            $table->string('tingkat');

            $table->string('jurusan')->nullable();

            $table->timestamps();

            $table->foreign('sekolah_id')
                ->references('id')
                ->on('sekolah')
                ->onDelete('set null');

            $table->foreign('wali_kelas_id')
                ->references('id')
                ->on('guru')
                ->onDelete('set null');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL PEMBAYARAN
        |--------------------------------------------------------------------------
        */
        Schema::create('pembayaran', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('siswa_id')->nullable();

            $table->string('jenis_pembayaran');

            $table->string('bulan', 50)->nullable();

            $table->string('tahun', 10)->nullable();

            $table->bigInteger('jumlah');

            $table->date('tanggal_bayar')->nullable();

            $table->string('metode_pembayaran', 50)->nullable();

            $table->enum('status', [
                'lunas',
                'belum_lunas'
            ])->default('belum_lunas');

            $table->timestamps();

            $table->foreign('siswa_id')
                ->references('id')
                ->on('siswa')
                ->onDelete('cascade');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL TESTIMONI
        |--------------------------------------------------------------------------
        */
        Schema::create('testimoni', function (Blueprint $table) {

            $table->id();

            $table->string('nama');

            $table->string('pekerjaan')->nullable();

            $table->text('isi');

            $table->string('foto')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL KONTAK
        |--------------------------------------------------------------------------
        */
        Schema::create('kontak', function (Blueprint $table) {

            $table->id();

            $table->string('nama');

            $table->string('email', 100);

            $table->string('subjek');

            $table->longText('pesan');

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL SLIDER
        |--------------------------------------------------------------------------
        */
        Schema::create('slider', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->text('subjudul')->nullable();

            $table->string('gambar')->nullable();

            $table->string('tombol_text', 100)->nullable();

            $table->string('tombol_link')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL VISITORS
        |--------------------------------------------------------------------------
        */
        Schema::create('visitors', function (Blueprint $table) {

            $table->id();

            $table->string('ip_address', 100)->nullable();

            $table->string('browser')->nullable();

            $table->string('device')->nullable();

            $table->timestamp('visited_at')->nullable();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL BERITA
        |--------------------------------------------------------------------------
        */
        Schema::create('berita', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->string('slug')->unique();

            $table->longText('isi');

            $table->string('thumbnail')->nullable();

            $table->unsignedBigInteger('author_id')->nullable();

            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL GALERI
        |--------------------------------------------------------------------------
        */
        Schema::create('galeri', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->string('gambar');

            $table->text('deskripsi')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL PENDAFTARAN PPDB
        |--------------------------------------------------------------------------
        */
        Schema::create('ppdb', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('siswa_id')->nullable();

            $table->unsignedBigInteger('sekolah_id')->nullable();

            $table->date('tanggal_daftar')->nullable();

            $table->enum('status', [
                'pending',
                'diterima',
                'ditolak'
            ])->default('pending');

            $table->timestamps();

            $table->foreign('siswa_id')
                ->references('id')
                ->on('siswa')
                ->onDelete('cascade');

            $table->foreign('sekolah_id')
                ->references('id')
                ->on('sekolah')
                ->onDelete('set null');
        });

                /*
        |--------------------------------------------------------------------------
        | TABEL YAYASAN
        |--------------------------------------------------------------------------
        */
        Schema::create('yayasan', function (Blueprint $table) {

            $table->id();

            $table->string('nama_yayasan');

            $table->string('logo')->nullable();

            $table->text('alamat')->nullable();

            $table->string('telepon')->nullable();

            $table->string('email')->nullable();

            $table->text('visi')->nullable();

            $table->text('misi')->nullable();

            $table->longText('sejarah')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | ALTER TABLE SEKOLAH
        |--------------------------------------------------------------------------
        */
        Schema::table('sekolah', function (Blueprint $table) {

            $table->unsignedBigInteger('yayasan_id')->nullable()->after('id');

            $table->foreign('yayasan_id')
                ->references('id')
                ->on('yayasan')
                ->onDelete('set null');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL MATA PELAJARAN
        |--------------------------------------------------------------------------
        */
        Schema::create('mata_pelajaran', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('sekolah_id')->nullable();

            $table->string('nama_mapel');

            $table->string('kode_mapel')->nullable();

            $table->string('kategori')->nullable();

            $table->timestamps();

            $table->foreign('sekolah_id')
                ->references('id')
                ->on('sekolah')
                ->onDelete('cascade');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL JADWAL PELAJARAN
        |--------------------------------------------------------------------------
        */
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('kelas_id')->nullable();

            $table->unsignedBigInteger('guru_id')->nullable();

            $table->unsignedBigInteger('mata_pelajaran_id')->nullable();

            $table->string('hari');

            $table->time('jam_mulai');

            $table->time('jam_selesai');

            $table->timestamps();

            $table->foreign('kelas_id')
                ->references('id')
                ->on('kelas')
                ->onDelete('cascade');

            $table->foreign('guru_id')
                ->references('id')
                ->on('guru')
                ->onDelete('set null');

            $table->foreign('mata_pelajaran_id')
                ->references('id')
                ->on('mata_pelajaran')
                ->onDelete('cascade');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL ABSENSI
        |--------------------------------------------------------------------------
        */
        Schema::create('absensi', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('siswa_id')->nullable();

            $table->unsignedBigInteger('kelas_id')->nullable();

            $table->date('tanggal');

            $table->enum('status', [
                'hadir',
                'izin',
                'sakit',
                'alfa'
            ])->default('hadir');

            $table->text('keterangan')->nullable();

            $table->timestamps();

            $table->foreign('siswa_id')
                ->references('id')
                ->on('siswa')
                ->onDelete('cascade');

            $table->foreign('kelas_id')
                ->references('id')
                ->on('kelas')
                ->onDelete('cascade');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL NILAI
        |--------------------------------------------------------------------------
        */
        Schema::create('nilai', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('siswa_id')->nullable();

            $table->unsignedBigInteger('mata_pelajaran_id')->nullable();

            $table->string('semester');

            $table->integer('tugas')->default(0);

            $table->integer('uts')->default(0);

            $table->integer('uas')->default(0);

            $table->integer('nilai_akhir')->default(0);

            $table->timestamps();

            $table->foreign('siswa_id')
                ->references('id')
                ->on('siswa')
                ->onDelete('cascade');

            $table->foreign('mata_pelajaran_id')
                ->references('id')
                ->on('mata_pelajaran')
                ->onDelete('cascade');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL PENGUMUMAN
        |--------------------------------------------------------------------------
        */
        Schema::create('pengumuman', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->longText('isi');

            $table->string('thumbnail')->nullable();

            $table->enum('status', [
                'publish',
                'draft'
            ])->default('publish');

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL EVENT
        |--------------------------------------------------------------------------
        */
        Schema::create('event', function (Blueprint $table) {

            $table->id();

            $table->string('nama_event');

            $table->longText('deskripsi')->nullable();

            $table->date('tanggal')->nullable();

            $table->string('lokasi')->nullable();

            $table->string('banner')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL FASILITAS
        |--------------------------------------------------------------------------
        */
        Schema::create('fasilitas', function (Blueprint $table) {

            $table->id();

            $table->string('nama_fasilitas');

            $table->string('gambar')->nullable();

            $table->longText('deskripsi')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL EKSTRAKURIKULER
        |--------------------------------------------------------------------------
        */
        Schema::create('ekstrakurikuler', function (Blueprint $table) {

            $table->id();

            $table->string('nama_ekskul');

            $table->string('pembina')->nullable();

            $table->string('gambar')->nullable();

            $table->longText('deskripsi')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL PRESTASI
        |--------------------------------------------------------------------------
        */
        Schema::create('prestasi', function (Blueprint $table) {

            $table->id();

            $table->string('nama_prestasi');

            $table->string('tingkat')->nullable();

            $table->string('tahun')->nullable();

            $table->longText('deskripsi')->nullable();

            $table->string('foto')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL ALUMNI
        |--------------------------------------------------------------------------
        */
        Schema::create('alumni', function (Blueprint $table) {

            $table->id();

            $table->string('nama');

            $table->string('tahun_lulus')->nullable();

            $table->string('pekerjaan')->nullable();

            $table->string('foto')->nullable();

            $table->longText('testimoni')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL TAGIHAN
        |--------------------------------------------------------------------------
        */
        Schema::create('tagihan', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('siswa_id')->nullable();

            $table->string('nama_tagihan');

            $table->bigInteger('jumlah');

            $table->date('jatuh_tempo')->nullable();

            $table->enum('status', [
                'lunas',
                'belum_lunas'
            ])->default('belum_lunas');

            $table->timestamps();

            $table->foreign('siswa_id')
                ->references('id')
                ->on('siswa')
                ->onDelete('cascade');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL NOTIFICATIONS
        |--------------------------------------------------------------------------
        */
        Schema::create('notifications', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->string('judul');

            $table->longText('pesan');

            $table->boolean('is_read')->default(false);

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL DOKUMEN PPDB
        |--------------------------------------------------------------------------
        */
        Schema::create('dokumen_ppdb', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('siswa_id')->nullable();

            $table->string('jenis_dokumen');

            $table->string('file');

            $table->enum('status_verifikasi', [
                'pending',
                'valid',
                'ditolak'
            ])->default('pending');

            $table->timestamps();

            $table->foreign('siswa_id')
                ->references('id')
                ->on('siswa')
                ->onDelete('cascade');
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL VIDEO PROFILE
        |--------------------------------------------------------------------------
        */
        Schema::create('video_profile', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->string('youtube_url');

            $table->string('thumbnail')->nullable();

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TABEL KALENDER AKADEMIK
        |--------------------------------------------------------------------------
        */
        Schema::create('kalender_akademik', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->date('tanggal_mulai');

            $table->date('tanggal_selesai')->nullable();

            $table->text('keterangan')->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse Migration
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb');
        Schema::dropIfExists('galeri');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('visitors');
        Schema::dropIfExists('slider');
        Schema::dropIfExists('kontak');
        Schema::dropIfExists('testimoni');
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('guru');
        Schema::dropIfExists('siswa');
        Schema::dropIfExists('users');
        Schema::dropIfExists('sekolah');
        Schema::dropIfExists('kalender_akademik');
        Schema::dropIfExists('video_profile');
        Schema::dropIfExists('dokumen_ppdb');
        Schema::dropIfExists('notifications');
        Schema::dropIfExists('tagihan');
        Schema::dropIfExists('alumni');
        Schema::dropIfExists('prestasi');
        Schema::dropIfExists('ekstrakurikuler');
        Schema::dropIfExists('fasilitas');
        Schema::dropIfExists('event');
        Schema::dropIfExists('pengumuman');
        Schema::dropIfExists('nilai');
        Schema::dropIfExists('absensi');
        Schema::dropIfExists('jadwal_pelajaran');
        Schema::dropIfExists('mata_pelajaran');
        Schema::dropIfExists('yayasan');
    }

};