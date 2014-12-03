$.getJSON( "http://jenskre.at.ifi.uio.no/dinner/api/users/", function( data ) {
	var items = $("<div/>");
	$.each( data, function( key, val ) {
		$( "<button id='" + key + "'>" + val + "</button>" ).click(function(data) {
			$.getJSON( "http://jenskre.at.ifi.uio.no/dinner/api/user/" + val, function( data ) {
				alert('Name: ' + data.name + '\nBalance: ' + data.balance);
			});
		}).appendTo(items);
	});

	items.appendTo("body");
});
