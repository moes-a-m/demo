$(function () {

    $("#driver").click(function () {
        $.ajax({
            url: "/model/invoice.php",
            dataType: "json",
            success: function (jasonData) {
                //  $('#output').html("<br> name: "+jasonData.name+"<br> productcode: "+jasonData.productcode +"<br> jasonData.quantity: "+jasonData.quantity+"<br>price:"+jasonData.price);
                var html = '',
                    el = document.getElementById("output");
                html += "<tr>";
                $.each(jasonData, function (key, value) {
                    html += "<td> name: " + value.customer_name + "</td><td> productcode: " + value.productcode + "</td><td> quantity: " + value.quantity + "</td><td>price:" + value.price + "</td>";
                   // html += "<br>"+ value.customer_name+"<br>";
                });
                html+= "</tr>";
                el.innerHTML = html;
            }
        });
    });



    /*
    $("#driver").click(function () {
        $.getJSON("/model/invoice.php", function (jasonData) {
            //  $('#output').html("<br> name: "+jasonData.name+"<br> productcode: "+jasonData.productcode +"<br> jasonData.quantity: "+jasonData.quantity+"<br>price:"+jasonData.price);

            var html = '',
                el = document.getElementById("output");
            $.each(jasonData, function (key, value) {
                //html += "<br> name: " + value[key].name + "<br> productcode: " + value[key].productcode + "<br> quantity: " + value[key].quantity + "<br>price:" + value[key].price + "<br>";
                html += "<br>"+ value[key]+"<br>";
            });
            el.innerHTML = html;
        });
    });
*/

});