var xhttp = new XMLHttpRequest();

function loadPage() {
	xhttp.onreadystatechange = function(){
	if (this.readyState == 4 && this.status == 200) {
		setTimeout(function(){ getList();} , 1000);
		}		     
    }
	xhttp.open("POST", "index.php");
	xhttp.send();
}

function addUser(){
	var user = $("#user").val();
	setTimeout(function(){
		$.post('php/add.php', {'users' : user} , function(response){
			var data = JSON.parse(response);
			alert(data.msg);
		});
	}, 500);
	user.value = " ";
}


function getList(){
	$.get('php/getUsers.php', function(response){
		var data = JSON.parse(response);
		var list = data.dataSet;
		var html = '';
		if(data.status == 1){
			var i;
			for(i = 0; i < list.length; i++){
				html+= "<li class='list-group-item'>";
				html+= "<span class='showList'>"+list[i].user+"</span>";
				html+= "<button onclick='deleteList(this.id); loadPage();' id='"+list[i].id+"' class='close'>&#9940</button>";
				html+= "<button onclick='editList(this.id)' id='"+list[i].id+"' class='close'>&#9997</button>";
				html+= "<div id='hideEdit' ><span id='eBtn"+list[i].id+"'>";
				html+= "<input class='editInput' type='text' id='saveBtn"+list[i].id+"' placeholder='"+list[i].user+"'>";
				html+= "<button onclick='editUser(this.id); loadPage();' id='"+list[i].id+"' class='saveBtn'>&#9989</button>";
				html+= "</span></div>"
				html+= "</li>";
			}
			$('#userList').html(html);
		}
	});
}

function deleteList(get_id) {
	$.post('php/delete.php', {'users' : get_id} , function(response){
		var data = JSON.parse(response);
		alert(data.msg);
	})
}

function editList(get_id2) {
	$("#eBtn"+get_id2).toggle();
}

function editUser(get_id3) {
	var userId = get_id3;
	var userEdit = $("#saveBtn"+get_id3).val();
	setTimeout(function(){
		$.post('php/edit.php', {'users' : userEdit, 'id' : userId} , function(response){
			var data = JSON.parse(response);
			alert(data.msg);
		});
	}, 500);
}