      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="https://github.com/garis-project/adaide">ADAIDE</a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js" ></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
  <script src="<?= base_url('assets/backend/'); ?>js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/backend/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/backend/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  
  <!-- Template JS File -->
  <script src="<?= base_url('assets/backend/'); ?>js/scripts.js"></script>
  <script src="<?= base_url('assets/backend/'); ?>js/custom.js"></script>

  <!-- Page Specific JS File -->

  <script src="<?= base_url('assets/backend/'); ?>plugins/select2/js/select2.js"></script>
  <script src="<?= base_url('assets/backend/'); ?>js/stage.js"></script>
  <?php if(($this->uri->segment(2)=="stage")&&($this->uri->segment(3)=="add")){ echo "<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA4JBMFGxGOzT49oFyOuqCDER6yZMwDtak&&callback=myMap'></script>";}?>
  <?php //if(($this->uri->segment(1)=="events")&&($this->uri->segment(2)=="add")){ echo "<script src='".base_url('assets/').'js/events.js'."'></script>";}?>
  
  <script>
    $(document).ready(function(){
      $("select").select2(); 
      $("#table_data").DataTable();
      loadTmpEvents();
      $('#timepicker').timepicker({
        uiLibrary: 'bootstrap4'
      });
      $('#startdate').datetimepicker({modal: true, footer: true, format: 'yyyy-mm-dd HH:MM' });
      $('#enddate').datetimepicker({modal: true, footer: true, format: 'yyyy-mm-dd HH:MM' });
      $("#banner-input").change(function() {
      $("#banner-name").text(this.files[0].name);
        readURL(this);
      });
    })
  </script>

<script>
    function readURL(input) {
      if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#banner-img').attr('src', e.target.result);
      }
    
      reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    function changeDate() {
      var now=$('#startdate').val();
      var y= now.substr(0,4);
      var m= now.substr(5,2);
      var d= now.substr(8,2);
      $('#date_tmp').text(d+m+y);
      $('#date_events').val(d+m+y);

    }
    function loadTmpEvents(){
      $('#tmpTicketTable').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "paging": false,
        "ordering": false,
        "info": false,
        "retrieve": true,
        "searching": false,
        "ajax": {
          "url": "<?= base_url('admin/events/ticket_tmp')?>",
          "type": "POST"
        },
        "columnDefs": [
          {
            "targets": [0,5],
            "className": "text-center"
          },
          {
            "targets": [3,4],
            "className": "text-right"
          },
        ],
      }).ajax.reload();
    }

    function loadDetailEvents(){
      $('#ticketTable').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "paging": false,
        "ordering": false,
        "info": false,
        "retrieve": true,
        "searching": false,
        "ajax": {
          "url": "<?= base_url('admin/events/ticket_list')?>",
          "type": "POST"
        },
        "columnDefs": [
          {
            "targets": [0,5],
            "className": "text-center"
          },
          {
            "targets": [3,4],
            "className": "text-right"
          },
        ],
      }).ajax.reload();
    }
    
    function addTmpTicket(){
      var id_type=$('#id_type').val();
      var price=$('#price').val();
      var stock=$('#stock').val();
      $.ajax({
        url:"<?= base_url('admin/events/insertTicket') ?>",
        type:'post',
        dataType:"json",
        data:{
          id_type:id_type,
          price:price,
          stock:stock
        },
        success:function(data){
          if ($('#tmpTicketTable').is(":hidden")){
            $('#tmpTicketTable').show();
          }
          loadTmpEvents();
          $('#id_type').val('default');
          $('#id_type').trigger('change');
          $('#price').val(null);
          $('#stock').val(null);
        },error:function(error){
          console.log(error);
        }
      });
    }

    function editTmpTicket(id){
      $.ajax({
        url:"<?= base_url('admin/events/getTmpTicket') ?>",
        type:'post',
        dataType:"json",
        data:{
          id:id
        },success : function (data) {
          $('#id_type').val(data['id_jenis_tiket']);
          $('#id_type').trigger('change');
          $('#price').val(data['harga_tiket']);
          $('#stock').val(data['stok_tiket']);
        }
      });
    }
    
    function deleteTmpTicket(id){
      $.ajax({
        url:"<?= base_url('admin/events/deleteTmpTicket') ?>",
        type:'post',
        dataType:"json",
        data:{
          id:id
        }, success : function(data){
          loadTmpEvents();
        }
      });
      
    }
  </script>
</body>
</html>
