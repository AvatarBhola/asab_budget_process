        $(function () {
            //Build an array containing Customer records.
            var customers = new Array();
            //Add the data rows.
            for (var i = 0; i < customers.length; i++) {
                AddRow(customers[i][0], customers[i][1]);
            }
        });
 
        function Add() {
            AddRow($("#txtName").val(), $("#txtCountry").val());
            $("#txtName").val("");
            $("#txtCountry").val("");
        };
 
        function AddRow(name, country) {
            //Get the reference of the Table's TBODY element.
            var tBody = $("#tblCustomers > TBODY")[0];
 
            //Add Row.
            row = tBody.insertRow(-1);
 
            //Add Name cell.
            var cell = $(row.insertCell(-1));
            cell.html(name);
 
            //Add Country cell.
            cell = $(row.insertCell(-1));
            cell.html(country);
 
            //Add Button cell.
            cell = $(row.insertCell(-1));
            var btnRemove = $("<input />");
            btnRemove.attr("type", "button");
            btnRemove.attr("onclick", "Remove(this);");
            btnRemove.val("Remove");
            cell.append(btnRemove);
        };
 
        function Remove(button) {
            //Determine the reference of the Row using the Button.
            var row = $(button).closest("TR");
            var name = $("TD", row).eq(0).html();

                //Get the reference of the Table.
                var table = $("#tblCustomers")[0];
 
                //Delete the Table row using it's Index.
                table.deleteRow(row[0].rowIndex);
        };
        
        
                $(function () {
            //Build an array containing Customer records.
            var email = new Array1();
            //Add the data rows.
            for (var i = 0; i < email.length; i++) {
                AddRow(email[i][0],email[i][1]);
            }
        });
 
        function Add1() {
            AddRow1($("#Name").val(), $("#Country").val());
            $("#Name").val("");
            $("#Country").val("");
        };
 
        function AddRow1(name1, country1) {
            //Get the reference of the Table's TBODY element.
            var tBody = $("#tblCustomer > TBODY")[0];
 
            //Add Row.
            row = tBody.insertRow(-1);
 
            //Add Name cell.
            var cell = $(row.insertCell(-1));
            cell.html(name1);
 
            //Add Country cell.
            cell = $(row.insertCell(-1));
            cell.html(country1);
 
            //Add Button cell.
            cell = $(row.insertCell(-1));
            var btnRemove = $("<input />");
            btnRemove.attr("type", "button");
            btnRemove.attr("onclick", "Remove(this);");
            btnRemove.val("Remove");
            cell.append(btnRemove);
        };
 
        function Remove(button) {
            //Determine the reference of the Row using the Button.
            var row = $(button).closest("TR");
            var name = $("TD", row).eq(0).html();

                //Get the reference of the Table.
                var table = $("#tblCustomer")[0];
 
                //Delete the Table row using it's Index.
                table.deleteRow(row[0].rowIndex);
        };
             