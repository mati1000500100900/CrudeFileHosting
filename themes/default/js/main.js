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
							bootbox.dialog({ message: 'Error', size: 'small', backdrop: true, onEscape: true });
						}
						if(message.success){
							if(message.success==="delete"){
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
						if(message.error==='denied'){
							bootbox.dialog({ message: 'Acces denied', size: 'small', backdrop: true, onEscape: true });
						}
						if(message.success){
							if(message.success==="delete"){
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
						if(message.error==='denied'){
							bootbox.dialog({ message: 'Acces denied', size: 'small', backdrop: true, onEscape: true });
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

function preview(x){
	bootbox.dialog({ message: '<img src="/files/'+x+'" width="100%">', backdrop: true, onEscape: true });
}