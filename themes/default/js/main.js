function deleteFile(x){
	bootbox.confirm({ 
	size: "small",
	message: "Are you sure?", 
	callback: function(result){ 
			if(result){
				$.ajax({
					type: 'POST',
					url: '/ajax/deletefile',
					data: 'id='+x,
					dataType: 'json',
					success: function (message) {
						if(message.error){
							alert(message.error);
						}
						if(message.success){
							if(message.success=="delete"){
								$('#file'+x).hide(500);
							}	
						}
					}
				});
			}
		}
	});
}
function deleteProtectedFile(x){
	bootbox.prompt({ 
	size: "small",
	inputType: "password",
	title: "Enter password", 
	callback: function(result){ 
			if(result){
				$.ajax({
					type: 'POST',
					url: '/ajax/deletefile',
					data: {id: x, pass: result},
					dataType: 'json',
					success: function (message) {
						if(message.error){
							alert(message.error);
						}
						if(message.success){
							if(message.success=="delete"){
								$('#file'+x).hide(500);
							}	
						}
					}
				});
			}
		}
	});
}
function downloadFile(src,name){
	bootbox.dialog({ message: '<a id="dlink" onClick="bootbox.hideAll()" href="files/'+src+'" download="'+name+'">Start download</a>', size: 'small', backdrop: true, onEscape: true });
}

function downloadProtectedFile(x){
	bootbox.prompt({ 
	size: "small",
	inputType: "password",
	title: "Enter password", 
	callback: function(result){ 
			if(result){
				$.ajax({
					type: 'POST',
					url: '/ajax/download',
					data: {id: x, pass: result},
					dataType: 'json',
					success: function (message) {
						if(message.error){
							alert(message.error);
						}
						if(message.success){
							downloadFile(message.src,message.name);
						}
					}
				});
			}
		}
	});
}