$(document).ready(function(){

   $(document).on('change', '#file1', function(){
  var name = document.getElementById("file1").files[0].name;
  var nama = document.getElementById("nama").value;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1)
  {
   alert("Invalid Image File");
   return false;
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file1").files[0]);
  var f = document.getElementById("file1").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 500000)
  {
   alert("Ukuran File Gambar Terlalu Besar, Maksimal 500 KB");
  }
  else
  {
   form_data.append("file", document.getElementById('file1').files[0]);
   $.ajax({
    url:"../plugins/configurasi/upload1.php?nama="+nama,
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image1').html("<label class='text-success'>Sedang Mengupload Gambar...</label>");
    },
    success:function(data)
    {
     $('#uploaded_image1').html(data);
    }
   });
  }
 });
});










