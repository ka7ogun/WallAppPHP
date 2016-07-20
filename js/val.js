   function validate( inputType, userInput ){
		var valid = false;

		switch( inputType ){
			case 'normalString':
					console.log( "Validating a String" );
					userInput = cleanUp( userInput );
					valid = true;
				break;

			case 'array':
					console.log( "Validating Array" );
					//console.log( userInput )
					// for(i = 0; i < userInput.length; i++){
					// 	userInput[i] = cleanUp( userInput[i] );
					// }
					if( userInput.length > 0){
						valid = true;
					}
					//userInput = cleanUp( userInput );
					
				break;

			case 'emailAddress':
				console.log( "Validating Email Address" );
					userInput = cleanUp( userInput );
					if( userInput.indexOf("@") >= 0){
						if( userInput.indexOf(".") >= 0 ){
							valid = true;
						}
					}
				break;

			case 'zipCode':
					console.log("Validating a zip code");
					userInput = cleanUp( userInput );
					if( isNaN( userInput ) ){
						valid = false;
					}else{
						if( userInput.length === 5 ){
							valid = true;
						}else{
							valid = false;
						}
					}
				break;

			case 'creditCard':
					console.log("Validating CC");
					//userInput = cleanUp( userInput );

					console.log( userInput.length )
					if( isNaN( userInput ) ){
						valid = false;
					}else{

						if( userInput.length >= 13 && userInput.length <= 16){

							valid = true;
						}else{
							valid = false;
						}
					}
				break;


			case 'number':
					console.log("Validating Number");

					 console.log( userInput )
					 console.log( typeof(userInput))
					 console.log( "-------------")
					 console.log( userInput.length )

					//userInput = cleanUp( userInput );
					if( isNaN( userInput ) ){
						//alert("HI")
						valid = false;
					}else{
					//	alert("HI")
					//	if( userInput.length > 0){

							valid = true;
					//	}else{
						//	valid = false;
						//}
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
	var artistname
	var muralname
	var file
	var display
	var addressM
	var cityM
	var stateM
	var zipM
	var country
	var description



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
	var artistname_valid	= false;
	var	muralname_valid		= false;
	var file_valid			= false;
	var display_valid		= false;
	var addressM_valid		= false;
	var cityM_valid 		= false;
	var stateM_valid 		= false;
	var zipM_valid 			= false;
	var country_valid 		= false;
	var description_valid 	= false;






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

		if( firstname_valid&&lastname_valid&&email_valid&&city_valid&&age_valid&&year_valid&& occupation_valid){
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

		if( city === "" ){
			$("#city1").css("border", "solid 1px red");
		}else{
			city_valid = validate( "normalString", city);
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
			amount_valid = validate( "number", parseInt(amt) );
		}
	
		if(firstname_valid&&lastname_valid&&email_valid&&address_valid&&city_valid&&state_valid&&zip_valid&&type_valid&&cc_valid&&amount_valid){
			$("#wallDonate").submit();
		}else{
			alert("Please complete form");
		}
	});






		$("#uploadBtn").click(function(){

		 artistname = $("#AN").val();
		 muralname = $("#MN").val();
		 description = [];

		 $.each($("#muralIN input[name='script[]']:checked"), function(){
		 	//console.log( $(this) );
		 	description.push( $(this).val() )
		 });

		 console.log( description )
	    //description = $("#muralIN input[name='script[]']").val();
	   // console.log( $("#muralIN input[name='script[]'][checked='true']") )
	   // console.log( typeof(description) )

		  addressM = $("#streetM").val();
		     cityM = $("#cityM").val();
		    stateM = $("#stateM").val();
			  file = $("#file1").val();
		   display = $("#visible").val();


	    if( artistname === "" ){
			$("#AN").css("border", "solid 1px red");
		}else{
			artistname_valid = validate( "normalString", artistname);
		}

		if( muralname === "" ){
			$("#MN").css("border", "solid 1px red");
		}else{
			muralname_valid = validate( "normalString", muralname);
		}


		if( description === "" ){
			$("#muralIN").css("border", "solid 1px red");
		}else{
			description_valid = validate( "array", description);
		}

		if( addressM === "" ){
			$("#streetM").css("border", "solid 1px red");
		}else{
			addressM_valid = validate( "normalString", addressM);
		}

		if( cityM === "" ){
			$("#cityM").css("border", "solid 1px red");
		}else{
			cityM_valid = validate( "normalString", cityM);
		}

		if( stateM === "" ){
			$("#stateM").css("border", "solid 1px red");
		}else{
			stateM_valid = validate( "normalString", stateM);
		}

		// if( file === "" ){
		// 	$("#file1").css("border", "solid 1px red");
		// }else{
		// 	//validate( "normalString", file);
		// }
		 file_valid = true;

		if( display === "" ){
			$("#visible").css("border", "solid 1px red");
		}else{
			display_valid = validate( "normalString", display);
		}
		

		if(artistname_valid||muralname_valid&&description_valid&&display_valid&&file_valid&&addressM_valid&&cityM_valid||stateM_valid){
			//alert("READY!")
			$("#wallUpload").submit();
		}else{
			alert("Please complete form");
		}

	});

  });



	