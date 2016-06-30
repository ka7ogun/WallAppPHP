$(document).ready(function(){
	
	var firstname
	var lastname
	var email
	var	borough
	var age
	var year
	var occupation
	var address
	var city
	var state
	var zip
	var amt 
	var	type
	var	cc 




	var firstname_valid 	= false;
	var lastname_valid  	= false;
	var email_valid     	= false;
	var age_valid           = false;
	var year_valid			= false;
	var occupation_valid    = false;
	var address_valid		= false;
	var city_valid			= false;
	var state_valid			= false;
	var zip_valid			= false;
	var amount_valid 		= false;
	var	type_valid 			= false;
	var	cc_valid 			= false;



	$("#joinBtn").click(function(){

		firstname = $("#FN").val();
		lastname  = $("#LN").val();
		email     = $("#E1").val();
		borough   = $("#city").val();
		age       = $("#age").val();
		year	  = $("#year").val();
		occupation= $("#occu").val();



		if( firstname === "" ){
			$("#FN").css("border", "solid 1px red");
		}else{
			firstname_valid = validate( "normalString", firstname );
		}

		if( lastname === "" ){
			$("#LN").css("border", "solid 1px red");
		}else{
			lastname_valid = validate( "normalString", lastname);
		}

		if( email === "" ){
			$("#email").css("border", "solid 1px red");
		}else{
			email_valid = validate( "emailAddress", email);
		}

		if( borough === "" ){
			$("#city").css("border", "solid 1px red");
		}else{
			city_valid = validate( "normalString", borough);
		}

		if( age === "" ){
			$("#age").css("border", "solid 1px red");
		}else{
			age_valid = validate( "number", age);
		}


		if( year === "" ){
			$("#year").css("border", "solid 1px red");
		}else{
			year_valid = validate( "number", year);
		}

		if( occupation === "" ){
			$("#occu").css("border", "solid 1px red");
		}else{
			occupation_valid = validate( "normalString", occupation);
		}


		if( firstname_valid&&lastname_valid&&email_valid&&borough_valid&&age_valid&&year_valid&& occupation_valid){
			$("#wallJoin").submit();
		}else{
			alert("Please complete form");
		}

	});

		$("#donateBtn").click(function(){

		firstname = $("#FN").val();
		 lastname = $("#LN").val();
		    email = $("#E1").val();
		  address = $("#street1").val();
		     city = $("#city1").val();
			state = $("#state1").val();
			  zip = $("#zip1").val();
			  amt = $("#amount").val();
		     type = $("#cc1").val();
		       cc = $("#cc").val();

		if( firstname === "" ){
			$("#FN").css("border", "solid 1px red");
		}else{
			firstname_valid = validate( "normalString", firstname );
		}

		if( lastname === "" ){
			$("#LN").css("border", "solid 1px red");
		}else{
			lastname_valid = validate( "normalString", lastname);
		}

		if( email === "" ){
			$("#E1").css("border", "solid 1px red");
		}else{
			email_valid = validate( "emailAddress", email);
		}

		if( address === "" ){
			$("#street1").css("border", "solid 1px red");
		}else{
			address_valid = validate( "normalString", address);
		}

		if( state === "" ){
			$("#state1").css("border", "solid 1px red");
		}else{
			state_valid = validate( "normalString", state);
		}

		if( zip === "" ){
			$("#zip1").css("border", "solid 1px red");
		}else{
			zip_valid = validate( "zipCode", zip);
		}

		if( type === "" ){
			$("#cc1").css("border", "solid 1px red");
		}else{
			type_valid = validate( "normalString", type);
		}

		if( cc === "" ){
			$("#cc").css("border", "solid 1px red");
		}else{
			cc_valid = validate( "creditCard", cc);
		}

		if( amt === "" ){
			$("#amount").css("border", "solid 1px red");
		}else{
			amount_valid = validate( "number", amt);
		}
	
		if(firstname_valid&&lastname_valid&&email_valid&&address_valid&&city_valid&&state_valid&&zip_valid&&state_valid&&cc_valid&&amount_valid){
			$("#wallDonate").submit();
		}else{
			alert("Please complete form");
		}
	});

});





	function validate( inputType, userInput ){
		var valid = false;
		switch( inputType ){
			case 'normalString':
					console.log( "Validating a String" );
					userInput = cleanUp( userInput );
					valid = true;
				break;
			case 'emailAddress':
				console.log( "Validating Email Address" );
					userInput = cleanUp( userInput );
					if( userInput.indexOf("@") >= 0){
						//valid so far...
						if( userInput.indexOf(".") >= 0 ){
							valid = true;
						}
					}
				break;
			case 'zipCode':
					console.log( "Validating a zip code" );
					userInput = cleanUp( userInput );
					if( isNaN( userInput ) ){
						valid = false;
					}else{
						//so far so good.
						if( userInput.length == 5 ){
							valid = true;
						}else{
							valid = false;
						}
					}
				break;
			case "creditCard":
					console.log("Validating CC")
					userInput = cleanUp( userInput );
					if( isNaN( userInput ) ){
						valid = false;
					}else{
						if( userInput.length == VISA){
							valid = true;
						}else{
							valid = false;
						}
					}
				break;
			case "number":
					userInput = cleanUp( userInput );
					if( isNaN( userInput ) ){
						valid = false;
					}else{
						valid = true;
					}
				break;
		}
		return valid;
	}

	function cleanUp( userInput ){
		console.log("cleanUp() initiated...");
		var temp = userInput;
		temp = temp.replace(/-/g, "");
		temp = temp.replace("<", "&lt;");
		temp = temp.replace(">", "&gt;");
		temp = temp.replace("SELECT", "");
		temp = temp.replace("DELETE", "");
		temp = temp.replace("INSERT", "");
		temp = temp.replace("alert()", "");
		return temp;
	}