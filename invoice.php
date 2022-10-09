
<?php 
include('../layoutt/includes/connect_db.php');
$id = $_GET['id'];
/*echo $id;
exit;*/
$req = $bdd->query(" SELECT * FROM devis WHERE id = $id ");
$donnees = $req->fetch();
?>


<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from ivonne.vercel.app/domain-hosting-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 19:43:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeMarch">
  <!-- Site Title -->
  <title>Domain & Hosting Invoice</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="cs-container">
    <div class="cs-invoice cs-style1">
      <div class="cs-invoice_in" id="download_section">
        <div class="cs-invoice_head cs-type1 cs-mb25">
          <div class="cs-invoice_left">
            <p class="cs-invoice_number cs-primary_color cs-mb0 cs-f16"><b class="cs-primary_color" name="id">Invoice No:</b> <?php echo $donnees['id'] ?></p>
          </div>
          <div class="cs-invoice_right cs-text_right">
            <div class="cs-logo cs-mb5"><img src="assets/img/logo.svg" alt="Logo"></div>
          </div>
        </div>
       
       
        <div class="cs-table cs-style2">
          <div class="cs-round_border">
            <div class="cs-table_responsive">
         
              <table>
                <thead>
                  <tr class="cs-focus_bg">
                    <th class="cs-width_6 cs-semi_bold cs-primary_color">Nom service</th>
                    <th class="cs-width_2 cs-semi_bold cs-primary_color">Nom client</th>
                    <th class="cs-width_2 cs-semi_bold cs-primary_color">email</th>
                    <th class="cs-width_2 cs-semi_bold cs-primary_color">adresse</th>
                    <th class="cs-width_2 cs-semi_bold cs-primary_color">telephone</th>
                    <th class="cs-width_2 cs-semi_bold cs-primary_color">deadline</th>


                  </tr>
                </thead>
                <tbody>
              
                  <tr>
										
                    <td><?php echo $donnees['nomservice'] ?></td>
                    <td><?php echo $donnees['nomclient'] ?></td>
                    <td><?php echo $donnees['email'] ?></td>
                    <td><?php echo $donnees['adresse'] ?></td>
                    <td><?php echo $donnees['telephone'] ?></td>
                    <td><?php echo $donnees['deadline'] ?></td>
                    </tr>
									
                </tbody>
              </table>
            </div>
          </div>
          <div class="cs-invoice_footer">
            <div class="cs-left_footer cs-mobile_hide"></div>
            <div class="cs-right_footer">
            
             
            </div>
          </div>
        </div>
       
      
      
        <div class="cs-note">
          <div class="cs-note_left">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M256 56v120a32 32 0 0032 32h120M176 288h160M176 368h160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
          </div>
          <div class="cs-note_right">
            <p class="cs-mb0"><b class="cs-primary_color cs-bold">Note:</b></p>
            <p class="cs-m0">Here we can write a additional notes for the client to get a better understanding of this invoice.</p>
          </div>
          
       
      

        </div><!-- .cs-note -->
      </div>
      <div>
      <?php 
          require_once 'phpqrcode/qrlib.php';
          $path = 'phpqrcode/images/';
          $file = $path.uniqid().".png";
          $text=$donnees['id'];
          $text.=$donnees['nomclient'];
          $text.=$donnees['telephone'];
          QRcode::png($text,$file);
          echo "<center><img src='".$file."'><center>";
       ?>
      </div>
   
     
   
    

      <div class="cs-invoice_btns cs-hide_print">
        <a href="javascript:window.print()" class="cs-invoice_btn cs-color1">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="392" cy="184" r="24"/></svg>
          <span>Print</span>
        </a>
        <button id="download_btn" class="cs-invoice_btn cs-color2">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Download</title><path d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/></svg>
          <span>Download</span>
        </button>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jspdf.min.js"></script>
  <script src="assets/js/html2canvas.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from ivonne.vercel.app/domain-hosting-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 19:43:43 GMT -->
</html>