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
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <!-- Template JS File -->
  <script src="<?= base_url('assets/backend/'); ?>js/scripts.js"></script>
  <script src="<?= base_url('assets/backend/'); ?>js/custom.js"></script>

  <!-- Page Specific JS File -->

  <script src="<?= base_url('assets/backend/'); ?>plugins/select2/js/select2.js"></script>
  <script src="<?= base_url('assets/backend/'); ?>js/stage.js"></script>
  
  <script>
    $(document).ready(function(){
      ticketTable=$('#ticketTable').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "paging": false,
        "ordering": false,
        "info": false,
        "retrieve": true,
        "searching": false,
        "ajax": {
          "url": "<?= base_url('admin/events/ticket_list')?>",
          "type": "POST",
          "data":function (d){d.id=$('#hiddenId').val()}
        },
        "columnDefs": [
          {
            "targets": [0,5,6],
            "className": "text-center"
          },
          {
            "targets": [3,4],
            "className": "text-right"
          },
        ],
      });
      $("select").select2(); 
      $('#description').summernote({
        toolbar: [
          // [groupName, [list of button]]
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['misc',['undo','redo']],
        ]
      });
      $("#table_data").DataTable({
        "paging": false,
        "ordering": false,
        "info": false,
        "retrieve": true,
        "searching": false
      });
      //Event Js
      loadTmpEvents();
      loadOrder();
      $('#timepicker').timepicker({
        uiLibrary: 'bootstrap4'
      });
      $('#startdate').datetimepicker({modal: true, footer: true, format: 'yyyy-mm-dd HH:MM' });
      $('#enddate').datetimepicker({modal: true, footer: true, format: 'yyyy-mm-dd HH:MM' });
      $("#banner-input").change(function() {
        $("#banner-name").text(this.files[0].name);
        $('#image-check').val(this.files[0].name);
        readURL(this);
      });

    // Map View JS
      if (document.URL=="<?= base_url('admin/stage/view') ?>"){
        let geo=$('#geocode').val();
        geo = geo.split(",",2);
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWRhaWRlIiwiYSI6ImNrZDE5aHNrcDExZnkycnFyOGZnY282ZXcifQ.uBbquafl-3hyE0TlddYsQg';
        var map = new mapboxgl.Map({
          container: 'map',
          style: 'mapbox://styles/mapbox/streets-v11',
          center: [geo[0],geo[1]],
          zoom: 13
        });
        var marker = new mapboxgl.Marker({
          draggable: false,
          color:'red'
        })
        .setLngLat([geo[0],geo[1]])
        .addTo(map);
      }
    })
  </script>
  
  <script>

    //event
    function readURL(input) {
      if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#banner-img').attr('src', e.target.result);
      }
    
      reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }
    //check banner image
    function checkImg(){
      let name=$('#banner-name').text();
      console.log(name);
      $('#image-check').val(name);
    }

    //set id_event if date hasbeen changed
    function changeDate() {
      let now=$('#startdate').val();
      let y= now.substr(0,4);
      let m= now.substr(5,2);
      let d= now.substr(8,2);
      $('#date_tmp').text(d+m+y);
      $('#date_events').val(d+m+y);

    }

    //load table for ticket event temporary
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

   
    //load ticket from current events
    function loadDetailEvents(id){
      $('#hiddenId').val(id);
      ticketTable.ajax.reload();
    }

    function ticketStatus(id,status){
      let id_event=$('#hiddenId').val();
      $.ajax({
        url:"<?= base_url('admin/events/ticketStatus') ?>",
        type:'post',
        dataType:"json",
        data:{
          id_event:id_event,id:id,status:status
        }, success : function(data){
          console.log(data);
          ticketTable.ajax.reload();
        }
      });
    }

    
    function addTmpTicket(){
      var id_type=$('#id_type').val();
      var price=$('#price').val();
      var stock=$('#stock').val();
      $.ajax({
        url:"<?= base_url('admin/events/insertTmpTicket') ?>",
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
      let id_event=id;
      $.ajax({
        url:"<?= base_url('admin/events/getTmpTicket') ?>",
        type:'post',
        dataType:"json",
        data:{
          id:id_event
        },success : function (data) {
          $('#id_type').val(data['id_jenis_tiket']);
          $('#id_type').trigger('change');
          $('#price').val(data['harga_tiket']);
          $('#stock').val(data['stok_tiket']);
        }
      });
    }
    
    function deleteTmpTicket(id){
      let id_event=id;
      $.ajax({
        url:"<?= base_url('admin/events/deleteTmpTicket') ?>",
        type:'post',
        dataType:"json",
        data:{
          id:id_event
        }, success : function(data){
          loadTmpEvents();
        }
      });
      
    }


    //event main
    function deleteEvent(id){
      console.log(id);
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            type: "POST",
            url: "<?= base_url('admin/events/delete'); ?>",
            data: {id_event:id},
            success: function(){
              Swal.fire(
                'Deleted!',
                'Your data has been deleted.',
                'success'
              ).then(function(){
                window.location="<?= base_url('admin/events') ?>";
              })
            }
          }); 
        }
    }) 
    }
    //stage main
    function deleteStage(id){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            type: "POST",
            url: "<?= base_url('admin/stage/delete'); ?>",
            data: {id_event:id},
            success: function(){
              Swal.fire(
                'Deleted!',
                'Your data has been deleted.',
                'success'
              ).then(function(){
                window.location="<?= base_url('admin/stage') ?>";
              })
            }
          }); 
        }
      }) 
    }

    //ticket type

    function editTicketType(id,name){
      swal.fire({
        title: 'Enter New Name',
        input: 'text',
        inputValue:name,
        inputAttributes: {
          autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Change'
      }).then((result) => {
        if (result.value) {
          let newName = JSON.stringify(result.value);
          $.ajax({
            type: "POST",
            url: "<?= base_url('admin/ticket/edit'); ?>",
            data: {id:id,name:newName},
            success: function(){
              Swal.fire(
              'Updated',
              'Ticket Has Been Updated',
              'success'
              ).then(function(){
                window.location="<?= base_url('admin/ticket') ?>";
              })
            }
          }); 
        }
      })
    }

    function createTicketType(){
      swal.fire({
        title: 'Enter New Name',
        input: 'text',
        inputPlaceholder: 'Enter Ticket Name',
        inputAttributes: {
          autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Submit'
      }).then((result) => {
        if (result.value) {
          let name = JSON.stringify(result.value);
          $.ajax({
            type: "POST",
            url: "<?= base_url('admin/ticket/insert'); ?>",
            data: {name:name},
            success: function(){
              Swal.fire(
              'Saved',
              'Ticket Has Been Saved',
              'success'
              ).then(function(){
                window.location="<?= base_url('admin/ticket') ?>";
              })
            }
          }); 
        }
      });
    }

    function deleteTicketType(id){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            type: "POST",
            url: "<?= base_url('admin/ticket/delete'); ?>",
            data: {id:id},
            success: function(){
              Swal.fire(
                'Deleted!',
                'Your data has been deleted.',
                'success'
              ).then(function(){
                window.location="<?= base_url('admin/ticket') ?>";
              })
            }
          }); 
        }
      }) 
    }
      
    //order
    //load table for confirm order
    function loadOrder(){
      $('#orderTable').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "retrieve": true,
        "ajax": {
          "url": "<?= base_url('admin/order/order_list')?>",
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
    //Placing Data To Modal
    function confirmOrder(id){
      $.ajax({
        url:"<?= base_url('admin/order/getDataOrder'); ?>",
        method:"POST",
        dataType:"json",
        data :{id:id},
        success:function(data){
          $('#id_order').val(data['id_pemesanan']);
          $('#id_confirm').val(data['id_konfirmasi']);
          $('#img_poofer').val(data['bukti_pembayaran']);
          $('#id_events').val(data['id_event']);
          $('#events_name').val(data['nama_event']);
          $('#id_ticket').val(data['id_jenis_tiket']);
          $('#ticket_type').val(data['jenis_tiket']);
          $('#price').val(formatMoney(data['harga_tiket']));
          $('#stock').val(data['stok_tiket']);
          $('#status_ticket').className=null;
          let status_ticket;
          if(data['status_tiket']==0){
            status_ticket="COMING SOON";
            badge="badge badge-warning";
          }else if(data['status_tiket']==1){
            status_ticket="OPEN";
            badge="badge badge-info";
          }else if(data['status_tiket']==2){
            status_ticket="SOLD OUT";
            badge="badge badge-danger";
          }
         
          $('#status_ticket').addClass(badge);
          $('#status_ticket').text(status_ticket);
          $('#qty').val(data['jml_beli']);
          $('#total').val(formatMoney(data['total_harga']));
          $('#hideTotal').val(data['total_harga']);

          //optional setting
          if((data['status_pemesanan']=='PENDING')||(data['status_pemesanan']=='AWAITING')){
            $('#confirm').show();
            $('#decline').show();
          }else{
            $('#confirm').hide();
            $('#decline').hide();
          }
        }
      });
    }
    
    function changeStatus(status){
      let id=$('#id_order').val();
      let id_events=$('#id_events').val();
      let qty=$('#qty').val();
      let id_ticket=$('#id_ticket').val();
      $.ajax({
        url:"<?= base_url('admin/order/changeStatus'); ?>",
        method:"POST",
        dataType:"json",
        data :{id:id,status:status,id_events:id_events,qty:qty,id_ticket:id_ticket},
        success : function (data){
          console.log(data);
        },
        complete :function(){
          loadOrder();
        }
      });
      
    }


    function exchangeOrder(){
      let id=$('#qrcode').val();
      $.ajax({
        url:"<?= base_url('admin/exchange/getDataOrder'); ?>",
        method:"POST",
        dataType:"json",
        data :{id:id},
        success : function (data){
          console.log(data);
          if(data){
            let n=data.id_tiket.length;
            let str="";
            for(i=0;i<n;i++){
              str+='<input class="swal2-input" value="'+data.id_tiket.slice(i,i+1)+'"readonly>';
            }     
            Swal.fire({
              title: '<strong>List Ticket</strong>',
              icon: 'info',
              html: str,              
              focusConfirm: false
            });
          }else{
            Swal.fire({
              icon: 'error',
              title: 'Sorry',
              text: 'Code Is Wrong!',
              showConfirmButton: false,
              timer: 1500,
              footer: "Code isn't Registered Yet or Unactive"
            })
          }
          
        }
      });
      
      
    }
    //View Image Poofer From Payment
    function viewPoofer(){
      let img=$('#img_poofer').val();
      let id=$('#id_confirm').val();
      let total=$('#hideTotal').val();
      let str="Confirm ID : "+id+"\n"+
              "Amount Payment : "+formatMoney(total)+"\n";
      if(img){
        Swal.fire({
          title: 'Poofer Payment',
          html: '<pre>' + str + '</pre>',
          imageUrl: '<?= base_url('assets/backend/img/order/') ?>'+img,
          imageWidth: 300,
          imageHeight: 400,
          imageAlt: 'Custom image',
        })
      }else{
        Swal.fire(
          'Proof Payment?',
          'User has not uploaded the proof!',
          'question'
        )
      }
     
    }

    function formatMoney(amount, decimalCount = 2, decimal = ",", thousands = ".") {
          try {
            decimalCount = Math.abs(decimalCount);
            decimalCount = isNaN(decimalCount) ? 2 : decimalCount;
        
            const negativeSign = amount < 0 ? "-" : "";
        
            let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
            let j = (i.length > 3) ? i.length % 3 : 0;
        
            return "Rp."+negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands)+",-"
          } catch (e) {
            console.log(e)
          }
        };

    
    
    
    
    
    
    
  </script>
</body>
</html>
