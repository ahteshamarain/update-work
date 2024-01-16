$(document).ready(function(){
    let searchBtn = $('.categorybtn');

    searchBtn.on('click', function(){
        let cat_id = $(this).attr('data-filter');
         console.log(cat_id)
        $.ajax({
            url : 'search.php',
            method : 'post',
            data : {
                cat_id : cat_id
            },
            success : function(data){
                $('#card').html(data); // Update this line to target the correct container
            }
        });
    });
});
