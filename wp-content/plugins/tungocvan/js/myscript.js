new DataTable('#list_employees');
   //Client
    //Ẩn thông báo 
//    jQuery("#alert_danger").hide();
    


jQuery( document ).ready(function() {
    console.log( "ready!" );
    jQuery("#alert_danger").hide();
       //Thêm emplyee
    jQuery("#ems_form_data").validate({
        submitHandler : function() {
            alert('submuit');
            var postData = "action=addemploy&param=save&"+jQuery("#ems_form_data").serialize();           

            jQuery.post(ajaxurl.baseURL, postData, function(res) {
                var result = jQuery.parseJSON(res);
                if(result.status == "200") {
                    jQuery("#alert_danger").show();
                    jQuery("#alert_danger").text(result.message);
                    // Ẩn thông báo sau 3s
                    setTimeout(() => {
                        jQuery("#alert_danger").hide();
                    }, 3000)
                }
            });
        }
    }); 

    
    //Edit Empoyee
jQuery("#ems_form_edit_data").validate({
    submitHandler: function () {
        var editData = "action=editemploy&param=update&" + jQuery("#ems_form_edit_data").serialize();
        console.log(editData);

        jQuery.post(ajaxurl.baseURL, editData, function (res) {
            var result = jQuery.parseJSON(res);
            if (result.status == "201") {
                jQuery("#alert_danger").show();
                jQuery("#alert_danger").text(result.message);
                // Ẩn thông báo sau 3s
                setTimeout(() => {
                    jQuery("#alert_danger").hide();
                }, 3000)
            }
        });
    }
});

});

jQuery(document).on("click", ".deletedata", function () {
    var isDelete = confirm("Are you want to sure delete this employee");
    if(isDelete) {
        var dataID = jQuery(this).attr('data-id');
        console.log(dataID);
         var data = "action=delete&id="+dataID;
    
    
        jQuery.post(ajaxurl.baseURL, data, function (res) {
            var result = jQuery.parseJSON(res);
            if (result.status == "200") {
                // Ẩn thông báo sau 3s
                setTimeout(() => {
                    location.reload();
                }, 3000)
            }
        });
    }
})