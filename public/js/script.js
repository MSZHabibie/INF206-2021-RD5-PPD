$(function () {

    const baseurl = 'http://localhost/INF206-2021-RD5-PPD/public';

    $('.tombolTambahAktivitas').on('click', function () {
        $('#judulModal').html('Tambah Aktivitas');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('.modal-body form').attr('action', baseurl.concat('/activity/tambah'));
        $('#nama').val('');
        $('#gambar').val('');
        $('#syarat').val('');
        $('#maks_peserta').val('');
        $('#tanggal').val('');
        $('#jam').val('');
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
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#gambar').val(data.gambar);
                $('#syarat').val(data.syarat);
                $('#maks_peserta').val(data.maks_peserta);
                $('#tanggal').val(data.tanggal);
                $('#jam').val(data.jam);
                $('#tempat').val(data.tempat);
                $('#poin').val(data.poin);
                $('#deskripsi').val(data.deskripsi);
            }
        });

    });

    $('.tombolTambahVoucher').on('click', function () {
        $('#judulModal2').html('Tambah Voucher');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('.modal-body form').attr('action', baseurl.concat('/poin/tambah'));
        $('#nama').val('');
        $('#deskripsi').val('');
        $('#poin').val('');
        $('#gambar').val('');
        $('#jumlah').val('');

    });

    $('.tampilModalEdit2').on('click', function () {

        $('#judulModal2').html('Edit Voucher');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl.concat('/poin/edit'));

        const id = $(this).data('id');

        $.ajax({
            url: baseurl.concat('/poin/getDataEdit'),
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#deskripsi').val(data.deskripsi);
                $('#poin').val(data.poin);
                $('#gambar').val(data.gambar);
                $('#jumlah').val(data.jumlah);

            }
        });

    });

    $('.tombolJoinKomunitas').on('click', function () {
        const link_join = $(this).data('link-join');
        const id_warga = $(this).data('id-warga');
        const id_komunitas = $(this).data('id-komunitas');

        $('#modalJoin .modal-body a').html(link_join);
        $('#modalJoin form input[name=id_warga]').val(id_warga);
        $('#modalJoin form input[name=id_komunitas]').val(id_komunitas);
    });

});