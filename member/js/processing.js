$(document).ready(function(){
    function fetch_data()
    {
        $.ajax({
            url: "ajax_processing.php",
            method: "POST",
            success:function(data)
            {
                $('#load_processing_member').html(data);
            }
        });
    }
    
    fetch_data();
})