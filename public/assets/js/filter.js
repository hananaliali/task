// filter
$('.filter').change(function(){

    filter_function();
    
    });
    
    $('.container .row .brand_box').show(); 
    
    function filter_function(){
    $('.container .row .brand_box').hide(); //hide all rows
    
    var companyFlag = 0;
    var companyValue = $('#filter-company').val();
    
     var priceFlag = 0;
    var priceValue = $('#filter-price').val();
    
    
    $('.container .brand_box').each(function() {  
    
      if(companyValue == 0){   
      companyFlag = 1;
      }
      else if(companyValue == $(this).find('h3.company').data('company')){ 
        companyFlag = 1;      
      }
      else{
        companyFlag = 0;
      }
      
      
     
      
      if(priceValue == 0){   //if no value then display row
        priceFlag = 1;
      }
      else if(priceValue == $(this).find('span.price').data('price')){ 
        priceFlag = 1;       //if value is same display row
      }
      else{
        priceFlag = 0;
      }
       
      
      
      
     if(companyFlag && priceFlag){
       $(this).show();  
     }
    
    });
    
    
    
    }
    // search
    $(document).ready(function () {
        $("#search").on("keyup", function () {
           
          var value = $(this).val().toLowerCase();
          $(".phone ").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
          });
        });
    });
    