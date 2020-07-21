    <script src="<?= base_url('assets/frontend/')?>/js/jquery.js"></script>
    <script src="<?= base_url('assets/frontend/')?>/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/bootstrap.js"></script>
</body>
    
    <script>
        function plus(){
            let qty=Number($('#qty').text());
            let stock=$('#stock_ticket').val();
            let price=$('#harga_ticket').val();
            if(qty<stock){
                qty+=1;
            }
            let total=formatMoney(qty*price);
            $('#qty').text(qty); 
            $('#qty1').text(qty);
            $('#total').text(total);
        }
        function minus(){
            let qty=Number($('#qty').text());
            let price=$('#harga_ticket').val();
            if(qty>0){
                qty-=1;
            }
            let total=formatMoney(qty*price);
            $('#qty').text(qty); 
            $('#qty1').text(qty);
            $('#total').text(total);
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
</html>
