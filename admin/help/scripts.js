//This is to display the datatable on the home page.
$(document).ready(function(){
	$('#datatable1').dataTable({
		'iDisplayLength': 25,
		"sDom": 'T<"clear">lfrtip',
		"oTableTools": {
			"sSwfPath": "../../resources/tabletools/media/swf/copy_csv_xls_pdf.swf",
			"aButtons":
			[
				{
				   "sExtends": "copy",
				   "sButtonText": "Copy to clipboard"
				},
				{
				   "sExtends": "csv",
				   "sButtonText": "CSV",
				   "sFileName": "file_name.csv"
				},
				{
				   "sExtends": "xls",
				   "sButtonText": "Excel",
				   "sFileName": "file_name.xls"
				},															
				{
				   "sExtends": "pdf",
				   "sButtonText": "PDF",
				   "sFileName": "file_name.pdf"
				}															
			  ]

		}
	});
	
});


//This function is used to display all tables other than the homepage
function display(obj){

	var datatable_html = "";
	if($(obj).parent().html().match(/class=\"?datatable\"?/gi)){
		datatable_html = $(obj).next().next().html().replace(/datatable/gi,'temp_datatable');
	}
	
	html_results = $(obj).next().html();
	//if($(obj).parent().html().match(/<xmp>/gi)){
	if($(obj).next().next().html().match(/<xmp>/gi)){			
		html_results += "<br /><hr /><textarea style='width:1050px' cols='130' rows='50'>";
		
		html_results += $(obj).next().next().html().replace(/<xmp>/gi,'').replace(/<\/xmp>/gi,'');
		
		html_results+="</textarea>";
	}
	else{
		html_results += "<br /><hr />";
		if(datatable_html != ""){
			html_results += datatable_html;
		}
		else{
			html_results += $(obj).next().next().html();
		}
	}
	
	$('#page').css("border-left","1px solid #999999");
	$('#page').html(html_results);

	
	$('.temp_datatable').dataTable({
		'iDisplayLength': 25,
		"sDom": 'T<"clear">lfrtip',
		'bDestroy':true,
		'bRetrieve':true,				
		"oTableTools": {
			"sSwfPath": "../../resources/tabletools/media/swf/copy_csv_xls_pdf.swf",
			"aButtons":
			[
				{
				   "sExtends": "copy",
				   "sButtonText": "Copy to clipboard"
				},
				{
				   "sExtends": "csv",
				   "sButtonText": "CSV",
				   "sFileName": "file_name.csv"
				},
				{
				   "sExtends": "xls",
				   "sButtonText": "Excel",
				   "sFileName": "file_name.xls"
				},															
				{
				   "sExtends": "pdf",
				   "sButtonText": "PDF",
				   "sFileName": "file_name.pdf"
				}															
			  ]

		}
	});

}

function toggle_display(obj){

	if($(obj).parent().children('ul').css("display") == "block"){
	
		$(obj).parent().children('ul').css("display","none");			
		
	}
	else{
	
		$(obj).parent().children('ul').css("display","block");

	}


}

function expand(obj){
	
	$(obj).css('display','none');
	$(obj).next().css('display','block');

}

function display_datatables(){

	return $('.datatable').dataTable({
		'iDisplayLength': 25,
		"sDom": 'T<"clear">lfrtip',
		'bRetrieve': true,
		'bDestroy': true
	});				

}
