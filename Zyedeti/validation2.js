$(document).ready(function() {
    var wrapper         = $(".wrap_1"); //Fields wrapper
    var add_button      = $(".add_field_1"); //Add button ID
    var added = "";
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
		added = '<div class="wrap_1"><br><label>Job Title:</label> <br> <input type="text" name="c1_j'+x.toString()+'" class="field" placeholder="Title" ><a href="#" class="remove_field">X</a><br><br><label>Date:</label> <br> <input type="text" name="c1_d'+x.toString()+'" class="field" placeholder="date" ><br><br><label>description:</label><br>	<textarea rows="5" placeholder="Description" name="c1_t'+x.toString()+'" required data-validation-required-message="Please enter a message."></textarea><br><br><div>';
		x++; //text box increment
		$(wrapper).append(added); //add input box
		
		$('#hid_1').val(x.toString());
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;$('#hid_1').val(x.toString());
    })
});

$(document).ready(function() {
    var wrapper         = $(".wrap_2"); //Fields wrapper
    var add_button      = $(".add_field_2"); //Add button ID
    var added = "";
    var y = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
		added = '<div class="wrap_2"><br><label>Diploma:</label> <br> <input type="text" name="c2_j'+y.toString()+'" class="field" placeholder="Diploma" ><a href="#" class="remove_field">X</a><br><br><label>Date:</label> <br> <input type="text" name="c2_d'+y.toString()+'" class="field" placeholder="date" ><br><br><label>description:</label><br>	<textarea rows="5" placeholder="Description" name="c2_t'+y.toString()+'" required data-validation-required-message="Please enter a message."></textarea><br><br><div>';
		y++; //text box increment
		$(wrapper).append(added); //add input box
		
		$('#hid_2').val(y.toString());
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); y--;$('#hid_2').val(y.toString());
    })
});

$(document).ready(function() {
    var wrapper         = $(".wrap_3"); //Fields wrapper
    var add_button      = $(".add_field_3"); //Add button ID
    var added = "";
    var z = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
		added = '<div class="wrap_3"><br><label>Title:</label> <br> <input type="text" name="c3_j'+z.toString()+'" class="field" placeholder="Title" ><a href="#" class="remove_field">X</a><br><br><label>description:</label><br>	<textarea rows="5" placeholder="Description" name="c3_t'+z.toString()+'" required data-validation-required-message="Please enter a message."></textarea><br><br><div>';
		z++; //text box increment
		$(wrapper).append(added); //add input box
		
		$('#hid_3').val(z.toString());
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); z--;$('#hid_3').val(z.toString());
    })
});