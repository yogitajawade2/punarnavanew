// mobile no. script 
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
     
   
     function isAlphaKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31  && (charCode < 65 || charCode > 66))
            return false;

         return true;
      }
//edit city
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }



     function isAlphaKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31  && (charCode < 65 || charCode > 66))
            return false;

         return true;
      }

// edit taluka
 
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      
     function isAlphaKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31  && (charCode < 65 || charCode > 66))
            return false;

         return true;
      }

// fade in fade out
 
          $(document).ready( function() {
            $('.alert-danger').delay(4000).fadeOut();
          });
      $(document).ready( function() {
            $('.flash').delay(4000).fadeOut();
          });

