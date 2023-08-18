$(document).ready(function(){
	$("#loader").hide();
    $("#spaceForHeader").height($(".container-fluid").height());
    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (width < 993) {
        var marginLeft = ($("#myNavbarHeader").width() - $("#logo").width()) / 2 - $("#leftNavBar").width();
        var marginRight = ($("#myNavbarHeader").width() - $("#logo").width()) / 2 - $("#cartNavBar").width() - $("#searchNavBar").width()-25;
        $("#middleNavBar").css("margin-left", marginLeft);
        $("#middleNavBar").css("margin-right", marginRight);
    }
	reloadCart();
});

function reloadCart() {
	$.ajax({
		url: '/contentProductCart',
		headers: {'csrftoken': '{{ csrf_token() }}'},
		data: JSON.stringify({}),
		type: 'POST',
		datatype: 'JSON',
		contentType: 'application/json',
		success: function (response) {
			if(response[2] != '0') {
				$('#badgeDesktop').removeClass('hidden');
				$('#badgeMobile').removeClass('hidden');
                $('#cartContent').removeClass('hidden');
                $('#emptyCart').addClass('hidden');
			}
			$('#productCartContainer').html(response[0]);
			$('#divTotal').html(response[1]);
			$('#badgeDesktop').html(response[2]);
			$('#badgeMobile').html(response[2]);
		},
		error: function (response) {
		}
	}).always(function () {
		//Recheck if it is to show Bayar button by reloading actionButtons div
		$("#actionButtons").load(location.href + " #actionButtons");
	});
}

// SEARCHING
function searchByUrl() {
	var query = document.getElementsByClassName('searchBox')[0].value + document.getElementsByClassName('searchBox')[1].value;
	url = location.protocol + '//' + location.host + "/shop/all/list/1" + "?s=" + query;
	window.location = url;
}

var anchors = document.getElementsByClassName("searchBox")
for(var i = 0; i < anchors.length; i++) {
	var anchor = anchors[i];
	anchor.addEventListener("keyup", function(event) {
		event.preventDefault();
		if (event.keyCode === 13) {
			document.getElementById("searchButton").click();
		}
	});
}

// OTHERS

//CART
function myDelete(input) {
	document.getElementById("orderCart").value = input;
	document.getElementById("orderCart2").value = input;
}