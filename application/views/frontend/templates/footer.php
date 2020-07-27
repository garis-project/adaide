    <script src="<?= base_url('assets/frontend/')?>/js/jquery.js"></script>
    <script src="<?= base_url('assets/frontend/')?>/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/backend/') ?>js/qrcode.js"></script>
    <script>
    $(document).ready(function(){
        $("#image-input").change(function() {
            $("#image-name").text(this.files[0].name);
            $('#image-check').val(this.files[0].name);
            readURL(this);
        });
        if (document.URL=="<?= base_url('order/detail') ?>"){
          var qrcode = new QRCode(document.getElementById("qrcode"), {
              width : 220,
              height : 220
          });
          var qr = document.getElementById("qr");       
	        qrcode.makeCode(qr.value);
        }
    });
    </script>
    <script>
        function plus(){
            let qty=Number($('#qtyTmp').text());
            let stock=$('#stock_ticket').val();
            let price=$('#harga_ticket').val();
            if(qty<stock){
                qty+=1;
            }
            let total=formatMoney(qty*price);
            $('#qtyTmp').text(qty); 
            $('#qty1').text(qty);
            $('#qty').val(qty);
            $('#totalTmp').text(total);
            $('#total').val(qty*price);
        }
        function minus(){
            let qty=Number($('#qtyTmp').text());
            let price=$('#harga_ticket').val();
            if(qty>0){
                qty-=1;
            }
            let total=formatMoney(qty*price);
            $('#qtyTmp').text(qty); 
            $('#qty1').text(qty);
            $('#qty').val(qty);
            $('#totalTmp').text(total);
            $('#total').val(qty*price);
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
        function readURL(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('#proofPayment').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
    //check upload image
        function checkImg(){
          let name=$('#image-name').text();
          $('#image-check').val(name);
        }

        function cekStatus (id,status) {		
          $.ajax({
            type: "POST",
            url: "<?= base_url('order/cekStatus'); ?>",
            data: {status:status},
            success: function(data){
             data = data.slice(1, -1);
              let url = "<?= base_url('order/'); ?>"+data;
              let form = $('<form action="' + url + '" method="post">' +
                '<input type="hidden" name="id_order" value="' + id + '" />' +
                '</form>');
              $('body').append(form);
              form.submit();
              console.log(url);
            }
          }); 
        }

    </script>
</body>
</html>
