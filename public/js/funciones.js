function buscador()
{
	var form=document.form1;
	if(form.buscar.value==0)
	{
		form.buscar.value='';
		return false;
	}
	form.submit();
}
function ocultar(id)
{
	document.getElementById(id).style.display="none";
	//document.getElementById(id+"_li").classList.remove("mistabs_active");
	$( id+"_li" ).removeClass( "mistabs_active" );
}
function mostrar(id)
{
	ocultar('uno');
	ocultar('dos');
	ocultar('tres');
	document.getElementById(id).style.display="block";
	$( id+"_li" ).addClass( "mistabs" );
}
