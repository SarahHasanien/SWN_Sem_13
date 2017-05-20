function funcMakeManager(id){
			
			$.post("makeManager.php",{ID:id});
			$.post("deleteEmp.php",{ID:id});
			window.location.reload();
		}
function funcDeleteEmp(id){
			
			$.post("deleteEmp.php",{ID:id});
			window.location.reload();
		}		