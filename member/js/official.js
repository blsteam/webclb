$(document).ready(function(){
    function fetch_data()
    {
        $.ajax({
            url: "ajax_official.php",
            method: "POST",
            success:function(data)
            {
                $('#load_official_member').html(data);
            }
        });
    }
    
    fetch_data();
})