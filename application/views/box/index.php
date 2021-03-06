<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<style type="text/css">
#btn_add{
  margin-bottom: 10px;
}
.img-responsive{
  margin : 0 auto;
}
#modal_qr .modal-content{
  width: 300px;
  margin : 0 auto;
}

#modal_qr .btn{
  display: block;
  margin: 0 auto;
}
</style>
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1 style="visibility: hidden;">
        Blank page
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Box</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Database Box</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-sm-12">
                  <?php if($level>1) : ?>
                    <button id="btn_add" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus"> Add New Box</i>
                    </button>
                  <?php endif;?>
                    <table class="table table-sm table-responsive-lg" id="tb_box">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th>Kode</th>
                                <th>Npwp</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Blok</th>
                                <th>Rak</th>
                                <th>Lantai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">

        </div><!-- /.box-footer-->
    </div><!-- /.box -->

</section><!-- /.content -->
<!-- Modal -->
<div class="modal modal-default fade" id="modal_add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">New Box</h4>
      </div>
      <form method="POST" id="form_box">
      <div class="modal-body">
        <input type="hidden" id="id" name="id">
        <div class="form-group">
          <label>Kode</label>
          <input type="text" class="form-control" name="kode" id="kode" placeholder="Enter ..." />
        </div>
        <div class="form-group">
          <label>NPWP</label>
          <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Enter ..." required minlength="20" maxlength="20" autofocus />
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter ..." required maxlength="30" />
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Enter ..." required maxlength="180" />
        </div>
        <div class="form-group">
          <label>Blok</label>
          <input type="text" class="form-control" name="blok" id="blok" placeholder="Enter ..." required maxlength="8" />
        </div>
        <div class="form-group">
          <label>Rak</label>
          <input type="text" class="form-control" name="rak" id="rak" placeholder="Enter ..." required maxlength="8" />
        </div>
        <div class="form-group">
          <label>Lantai</label>
          <input type="text" class="form-control" name="lantai" id="lantai" placeholder="Enter ..." required maxlength="8" />
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-primary">Save changes</button>
           <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal modal-default fade" id="modal_view">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_title_view">Box B001- Box Name</h4>
      </div>
      <div class="modal-body">
        <table class="table table-sm table-responsive-lg" id="tb_doc">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama File</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal modal-default fade" id="modal_qr">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Qr Code</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <div id="qr">
            <img src="" class="text-center img-responsive" id="img_qrcode">
            </div>
            <button class="btn btn-sm btn-success" id="btn_print" type="button">
              <i class="fa fa-print"> Print</i>
            </button>
          </div>
        </div>
        
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal modal-default fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_title_delete">Delete Box</h4>
      </div>
      <div class="modal-body">
        <p class="text-left"> Harap perhatikan, bahwa dengan menghapus box data-data yang ada di dalam box akan ikut terhapus dan tidak dapat dikembalikan lagi.</p>
        <form id="form_delete" type="POST">
          <input type="hidden" name="id_box" id="id_box">  
          <div class="form-group">
            <label>Reason</label>
            <textarea class="form-control" name="reason" id="reason" required></textarea>
          </div>
          <div class="form-group">
             <button type="submit" class="btn btn-primary">Save changes</button>
             <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<script type="text/javascript">
$(document).ready(function(){

  $("#npwp").inputmask({"mask": "99.999.999.9-999.999"});

  function insert_log(keterangan){
    $.ajax({
      url : "<?=site_url('log/insert_log')?>",
      data : {aksi : keterangan},
      type : 'POST',
      beforeSend : function(){},
      success : function(result){
        console.log(result);
      },
      error : function(xhr, ajaxOptions, thrownError){
        console.log(xhr.status + ' - ' + thrownError);
      }
    })
  }

  $('#btn_print').on('click',function(){
    var DocumentContainer = document.getElementById('qr');
    var WindowObject = window.open('', "PrintWindow", "width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.writeln(DocumentContainer.innerHTML);
    WindowObject.document.close();
    WindowObject.focus();
    WindowObject.print();
    WindowObject.close();
  })

  var tb = $('#tb_box').DataTable({
      ajax : {
          url : "<?=site_url('box/ajax_dt_box')?>",
          data : {},
          type : 'POST',
      },
      order : [],
      autoWidth: false,
      scrollX : true,
      scrollCollapse : true,
      columns : [
          {
              data : 'id'
          },
          {
              data : 'kode'
          },
          {
              data : 'npwp',
              render : function(data, type, row){
                return data.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
              }
          },
          {
              data : 'nama'
          },
          {
              data : 'alamat',
              width : '150px'
          },
          {
              data : 'blok'
          },
          {
              data : 'rak'
          },
          {
              data : 'lantai'
          },
          {
              data : 'id',
              render : function(data, type, row){
                var level = "<?=$level?>";
                var btn1 = '<button class="btn btn-warning btn-sm text-white mr-2 mb-2 btn-edit" data-id="'+data+'"><i class="fa fa-edit"></i></button>';
                var btn2 = '<button class="btn btn-danger btn-sm text-white mr-2 mb-2 btn-delete" data-id="'+data+'"><i class="fa fa-trash"></i></button>';
                var btn3 = '<a class="btn btn-success btn-sm text-white mr-2 mb-2 btn-view" href="<?=site_url('document/view/')?>'+data+'"><i class="fa fa-eye"></i></a>';
                var btn4 = '<button class="btn btn-info btn-sm text-white mr-2 mb-2 btn-qr" data-id="'+data+'"><i class="fa fa-qrcode"></i></button>';
                if(level>1){
                  return btn1+btn2+btn3+btn4;
                }else{
                  return btn3+btn4;
                } 
              },
          },
      ],
  });

  $('.dataTables_filter input').attr('maxlength', 30);

  tb.on( 'order.dt search.dt', function () {
      tb.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
          cell.innerHTML = i+1;
      } );
  } ).draw();

  $('#btn_add').on('click', function(){
      $('.modal-title').html('Add Box');
      $('#kode').removeAttr('required');
      $('#kode').prop('readonly',true);
      $('#npwp').focus();
      $('#kode').attr('placeholder','Kode akan auto generate setelah data disimpan');
      $('#modal_add').modal();
  })

  $('.btn-close').on('click', function(){
      $('#form_box')[0].reset();
  })

  $(document).on('click', '.btn-delete' ,function(){
    var id = $(this).data('id');

    $('#id_box').val(id);
    $('#modal_delete').modal();
  })
  
  $(document).on('click','.btn-edit', function(){
    var id = $(this).data('id');

    $.ajax({
        url : "<?=site_url('box/get_info')?>",
        data : {id : id},
        type : 'GET',
        dataType : 'JSON',
        beforeSend : function(){
            $('.modal-title').html('Edit Box');
            $('#kode').removeAttr('required');
            $('#kode').prop('readonly',true);
            $('#kode').attr('placeholder','Kode akan auto generate setelah data disimpan');
        },
        success: function(result){
            console.log(result);
            $.each(result, function(i,val){
                $('#'+i).val(val).change();
            });
            $('#modal_add').modal();
        },
        error : function(xhr, ajaxOptions, thrownError){
          Swal.fire({
            icon: 'warning',
            title: 'Error',
            text: xhr.status + ' ' +thrownError,
            showConfirmButton: false,
            timer: 1500
          })  
        }
    })
  })

  $(document).on('click','.btn-qr', function(){
    var id = $(this).data('id');

    $.ajax({
        url : "<?=site_url('box/get_qr')?>",
        data : {id : id},
        type : 'GET',
        dataType : 'JSON',
        beforeSend : function(){
            
        },
        success: function(result){
            console.log(result);
            $('#img_qrcode').attr('src','<?=base_url("files/qrcode/")?>'+result.qrcode);
            $('#modal_qr').modal();
        },
        error : function(xhr, ajaxOptions, thrownError){
          Swal.fire({
            icon: 'warning',
            title: 'Error',
            text: xhr.status + ' ' +thrownError,
            showConfirmButton: false,
            timer: 1500
          })  
        }
    })
  })
  

  $('#modal_add').on('hidden.bs.modal', function () {
     $('input[name=id]').val('');
     $('#form_box')[0].reset();
  });

  $('#form_box').on('submit', function(e){
      e.preventDefault();

      if(confirm('Are you sure ?')){
          var formdata = new FormData($(this)[0]);
          $.ajax({
            url : "<?=site_url('box/submitForm')?>",
            data: formdata,
            processData: false,
            contentType: false,
            async: false,
            cache: false,
            enctype: 'multipart/form-data',
            type : 'POST',
            dataType : 'JSON',
            beforeSend : function(){},
            success : function (result) {
              if(result.code=='200'){
                Swal.fire({
                    icon: 'success',
                    title: 'Great',
                    text: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 1500
                 })
              }else{
                Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: result.message,
                    showConfirmButton: false,
                    timer: 1500
                 })
              }
              tb.ajax.reload();
              $('#modal_add').modal('hide');
            },
            error : function(xhr, ajaxOptions, thrownError) {
              Swal.fire({
                icon: 'warning',
                title: 'Error',
                text: xhr.status + ' ' +thrownError,
                showConfirmButton: false,
                timer: 1500
             })
            }
          })
      }
  })

  $('#form_delete').on('submit', function(e){
    e.preventDefault();

    if(confirm('Are you sure ?')){
      var formdata = new FormData($(this)[0]);
      $.ajax({
        url : "<?=site_url('box/delete_box')?>",
        data: formdata,
        processData: false,
        contentType: false,
        async: false,
        cache: false,
        enctype: 'multipart/form-data',
        type : 'POST',
        dataType : 'JSON',
        beforeSend : function(){},
        success : function (result) {
          if(result.code=='200'){
            Swal.fire({
                icon: 'success',
                title: 'Great',
                text: 'Data saved successfully',
                showConfirmButton: false,
                timer: 1500
             })
            $('#modal_delete').modal('hide');
          }else{
            Swal.fire({
                icon: 'warning',
                title: 'Error',
                text: result.message,
                showConfirmButton: false,
                timer: 1500
             })
          }
          tb.ajax.reload();
        },
        error : function(xhr, ajaxOptions, thrownError) {
          Swal.fire({
            icon: 'warning',
            title: 'Error',
            text: xhr.status + ' ' +thrownError,
            showConfirmButton: false,
            timer: 1500
         })
        }
      })
    }
  })
})
</script>
<?php
$this->load->view('template/foot');
?>