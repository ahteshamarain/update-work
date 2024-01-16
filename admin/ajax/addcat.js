$(document).ready(function () {
  let cform = $("#row1");
    let cat_name = $("#cat_name");
    let cat_des = $("#cat_des");
    let addCat = $("#addCat");
    $("#status").change(function () {
      // Get the selected value
      let status = $(this).val();
  
      // console.log(cat_des, cat_name, selectedValue, addCat);
  
      addCat.on("click", function (e) {
        e.preventDefault()
        function insert(){
        $.ajax({
          url: "insertcat.php",
          method: "POST",
          data: {
            cat_name: cat_name.val(),
            cat_des: cat_des.val(),
            cat_status: status,
          },
          success: function (data) {
           alert(data);
           cform.trigger('reset')
           
            
          },
        });
      }
      insert()
      });
    });

    function display() {
      $.ajax({
          url: 'cfetch.php', // Update the URL to the PHP script that fetches user data
          method: 'POST',
          success: function (data) {
           
              $('#ctab').html(data); // Set the HTML content of utab
          },
      });
  }

  display();

  // delete record


$('tbody').on('click','.delete',function(){
  let userid= $(this).attr('data-id');

  $.ajax({
   url : 'cdelete.php',
   method : 'POST',
   data : {
       userid : userid

   },
   success: function(data){
 
    
       
       
       
       display();
      //  alert(data);
   }
  })
  
  
})


let cname = document.getElementById('cname');
    let cid = document.getElementById('cid')

    let cdes =document.getElementById('cdes')

$('tbody').on('click', '.edit', function () {
  let userid = $(this).attr('data-id');

  $.ajax({
      url: 'cupdatedata.php',
      method: 'POST',
      data: {
          user_id: userid
      },
      success: function (data) {
    
              let user_Data = JSON.parse(data);
            // console.log(user_Data);
            console.log(user_Data);
              // Assuming id, cat_name, and cat_des are input elements
              cid.value = user_Data.catid
              cname.value = user_Data.catname
              cdes.value = user_Data.catdes

        
    
   
      }
});
});



  });
  