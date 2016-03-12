$(function()
{
   ////-----------------------------------------------------------------------
   //// 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
   ////-----------------------------------------------------------------------
   //$.ajax({
   //     url: "/model/invoice.php",                  //the script to call to get data
   //     data: "",                        //you can insert url argumnets here to pass to api.php
   //                                      //for example "id=5&parent=6"
   //     dataType: 'json',                //data format
   //     success: function(data)          //on recieve of reply
   //     {
   //         var id = data[0];              //get id
   //         var name = data[1];           //get name
   //         var procutcode = data[2];
   //         var quantity = data[3];
   //         var price = data[4];
   //         //--------------------------------------------------------------------
   //         // 3) Update html content
   //         //--------------------------------------------------------------------
   //         $('#output').html("<b>id: </b>"+id+"<b> name: </b>"+name+"<b> productcode: </b>"+procutcode+"<b> quantity: </b>"+quantity+"<b>price: </b>"+price); //Set output element html
   //
   //     }
   //});

    $("#driver").click(function(event){
        $.getJSON("/model/invoice.php", function(jd) {
            $('#output').html("<br> id: "+jd.id+"<br> name: "+jd.name+"<br> productcode: "+jd.productcode +"<br> jd.quantity: "+jd.quantity+"<br>price:"+jd.price);
        });
    });


});