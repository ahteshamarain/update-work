$(document).ready(function(){
    let addcart = $('#addcart');
    console.log(addcart);
    
    $('#addcart').on('click', function(e){
        e.preventDefault();
        
        let userid = $("#user_id").val();
        let proid = $("#pro_id").val();
        let pname = $("#pname").val();
        let pprice = $("#pprice").val();

        // Prepare data to send
        let dataToSend = {
            user_id: userid,
            pro_id: proid,
            pname: pname,
            pprice: pprice
        };

        // AJAX request
        $.ajax({
            type: 'POST',  // You can change this to 'GET' if appropriate
            url: 'adddata.php',  // Replace with the actual server-side script URL
            data: dataToSend,
            success: function(response) {
                // Handle success (if any)
                console.log(response);
            },
            
            
        });
    });
});
