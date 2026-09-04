
<div>

 <form  id="esewa-form"  action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
  @csrf
  amount
 <input type="text" id="amount" name="amount" value="{{$data['amount']}}" required>
 <br>
 tax amount
 <input type="text" id="tax_amount" name="tax_amount" value ="0" required><br>
 total amount
 <input type="text" id="total_amount" name="total_amount" value="{{$data['total_amount']}}" required><br>
 transaction_uuid
 <input type="text" id="transaction_uuid" name="transaction_uuid" value="{{$data['transaction_uuid']}}" required><br>
 product_code
 <input type="text" id="product_code" name="product_code" value ="{{$data['product_code']}}" required><br>
 <input type="text" id="product_service_charge" name="product_service_charge" value="0" required><br>
 <input type="text" id="product_delivery_charge" name="product_delivery_charge" value="0" required><br>
success url
 <input type="text" id="success_url" name="success_url" value="{{$data['success_url']}}" required><br>
failure url
 <input type="text" id="failure_url" name="failure_url" value="{{$data['failure_url']}}" required><br>
signed field names
 <input type="text" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required><br>
 signature
 <input type="text" id="signature" name="signature" value="{{$data['signature']}}" required><br>
 <input value="Submit" type="submit">
 </form>
<script>
window.addEventListener("load", function() {
    document.getElementById("esewa-form").submit();
});
</script>
</div>
