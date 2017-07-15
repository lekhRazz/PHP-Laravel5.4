function warning(){
	var a=confirm("do you want to delete this record?");
	if(a){
		return true;
	}
	else{
		return false;
	}
}
function postWarn(){
	var a=confirm("do you want to post record?");
	if(a){
		return true;
	}
	else{
		return false;
	}
}
