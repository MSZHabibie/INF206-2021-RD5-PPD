$(function() {

    const baseurl = 'http://localhost/INF206-2021-RD5-PPD/public';

    $('.tombolTambahAktivitas').on('click', function() {
        $('#judulModal').html('Tambah Aktivitas');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('.modal-body form').attr('action', baseurl.concat('/activity/tambah'));
        $('#nama').val('');
        $('#gambar').val('');
        $('#syarat').val('');
        $('#maks_peserta').val('');
        $('#waktu').val('');
        $('#tempat').val('');
        $('#poin').val('');
        $('#deskripsi').val('');
    });

    $('.tampilModalEdit').on('click', function () {
        
        $('#judulModal').html('Edit Aktivitas');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl.concat('/activity/edit'));

        const id = $(this).data('id');
    
        $.ajax({
            url: baseurl.concat('/activity/getDataEdit'),
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#gambar').val(data.gambar);
                $('#syarat').val(data.syarat);
                $('#maks_peserta').val(data.maks_peserta);
                $('#waktu').val(data.waktu);
                $('#tempat').val(data.tempat);
                $('#poin').val(data.poin);
                $('#deskripsi').val(data.deskripsi);
            }
        });

    });

});