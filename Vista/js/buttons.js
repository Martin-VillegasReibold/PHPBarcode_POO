$(document).ready(function(){

  $('#generate').on('click',function(){
    if($('#code').val() != ''){
      $.ajax({
        url:'barcode.php',
        method:"POST",
        data:{code:$('#code').val(),type:$('#type').val(),label:$('#label').val()},
        error:err=>{
          console.log(err)
        },
        success:function(resp){
          $('#display').html(resp)
          $('#bcode-card .card-footer').show('slideUp')
        }
      })
    }
  })

    $('#save').click(function(){
    html2canvas($('#field'), {
    onrendered: function(canvas) {                    
      var img = canvas.toDataURL("image/png");
      
      var uri = img.replace(/^data:image\/[^;]/, 'data:application/octet-stream');
      
      var link = document.createElement('a');
          if (typeof link.download === 'string') {
              document.body.appendChild(link); 
              link.download = 'barcode_'+$('#code').val()+'.png';
              link.href = uri;
              link.click();
              document.body.removeChild(link);
          } else {
              location.replace(uri);
          }
      
    }
  }); 
  })

})

