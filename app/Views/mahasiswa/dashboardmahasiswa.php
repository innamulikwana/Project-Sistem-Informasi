<?= $this->extend('mahasiswa/template/templatemahasiswa'); ?>
<?= $this->section('content'); ?>
<h2 class="mb-1">DASHBOARD</h2>
<table border="0">
    <tr>
        <td width="280px"><a class="btn btn-primary" href="#" role="button"><img src="assets/img/gambaricon/mail.svg" alt="..." width="180" height="180" /><P class="mb-0"><b>SURAT AKADEMIK</b></P></a>
        </td>
        <td><a class="btn btn-primary" href="#" role="button"><img src="assets/img/gambaricon/cek.svg" alt="..." width="180" height="140" /><P class="mb-0"><b>CEK INFORMASI</b></P ><b> SURAT AKADEMIK</b></P></a>
        </td>
    </tr>
</table>
<?= $this->endSection();?>