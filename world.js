
$(document).on('click','#showdataCounrtyWise',function(e){
    var country = document.getElementById("country").value;
    $.ajax({    
      type: "GET",
      url: "world.php?country="+country,             
      dataType: "html",                  
      success: function(data){                    
          $("#resultCounrtyWise").html(data); 
         
      }
  });
});

// citt wise data
$(document).on('click','#showdataCityWise',function(e){
    var country = document.getElementById("country").value;
    var cities = 'cities';
    $.ajax({    
      type: "GET",
      url: "world.php?country="+country+"&context=cities",             
      dataType: "html",                  
      success: function(data){                    
          $("#resultCounrtyWise").html(data); 
         
      }
  });
});