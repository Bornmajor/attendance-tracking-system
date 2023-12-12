$(document).ready(function(){

    //check in form
    $('#form_check_in').submit(function(e){
      e.preventDefault();
      let postData = $(this).serialize();
      $.post('./php/date_entry.php',postData,function(data){
      $('#feedback').html(data);
      })
     

    })

       //end session
       $('#form_check_out').submit(function(e){
        e.preventDefault();
        let postData = $(this).serialize();
        $.post('./php/end_date_entry.php',postData,function(data){
        $('#feedback').html(data);
        })
       
  
      })

      $('#form_table').submit(function(e){
        e.preventDefault();
        let postData = $(this).serialize();
        $.post('./php/load_table_hours.php',postData,function(data){
            $('.load_data').html(data);
        })
      })


})