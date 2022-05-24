<!DOCTYPE html>
<html>
    <head>
        <title>Sebarkan.id</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
   

   
   
   
   
    </head>

    <style>
      .tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
    </style>

   <body>
       <section>
           <div class="container col-sm-6">
               <br><br>
               @foreach($urltampil as $tampil) 
               @endforeach
               <h3 class="display-4 text-center"></h3>
               <h3 class="display-4 text-center">Buat dan Sesuaikan Nama Undangan</h3>
               <br><br>

               <input type="text" class="form-control text-center" id="myInput" name="input"  placeholder="Masukan Nama Undangan Disini" required >
            
               <br>

               
               <button type="button" class="form-control btn btn-primary"  onclick="getUrl()">Buat Url</button>

               <br><br>
               <div class="card text-center">
               
                <div class="card-body">
                  <h5 id="myText" class="card-title">klik tombol Buat Url. jika sudah, Klik tombol Tampilkan Undangan. untuk mendapatkan, undangan website yang sudah tercantum nama undangan</h5>
                  <input type="text"  class="form-control text-center" value="" id="test" onchange="berubah()" readonly>
                  <br>
                  
                      <button id="copy"  class="form-control btn btn-success" data-clipboard-action="copy" data-clipboard-target="#test" onclick="copyMessage()"> 
                      <i class="bi bi-clipboard"></i> Copy Url
                      </button>

                     
               

                  
                  
                </div>
             
              </div>

              
                
           
       </section>
   </body>

  

   <script>
          function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("test").value;

            window.open(copyText); 
            }

            
   </script>



   <script>
       function getUrl(){
        const element = document.getElementById("copy");
        if (element.className == "form-control btn btn-secondary") {
            element.className = "form-control btn btn-success";
        } 
        // var x = document.getElementById("nama").value;
        var namaunda = document.getElementById("myInput").value;

        if (namaunda == ""){
            alert("Tidak boleh kosong!!");
            return false;
        }

        var withoutSpaces = namaunda.replaceAll(' ', '+');

            
        document.getElementById("test").value = "{{$tampil->url}}"+withoutSpaces;
       }

       
   </script>




<script>
function copyMessage() {

const element = document.getElementById("copy");
if (element.className == "form-control btn btn-success") {
    element.className = "form-control btn btn-secondary";
  } 

  alert("Data Berhasil Di Copy!");
}
</script>

   



</html>