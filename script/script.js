// JavaScript Document


//	$(document).ready(function() {
//
//   	$('[data-toggle="tooltip"]').tooltip();  
//		ensure();
//	   	
//	   });
   
	$(window).on("load",function(e){
		ensure();		
		$('[data-toggle="tooltip"]').tooltip();  

	});
	
		
	$(window).resize(function(e) {
		ensure();
		$('[data-toggle="tooltip"]').tooltip();  
	});

	
/*	function header_line_height_set()		//to make college name vertically center
	{
		var headerset=$("#header_height").outerHeight();  //header_height is as id in header file used to determine height of header
		$("#header_title").css("line-height",headerset+"px");
	}
*/	
	
function ensure()		//ensure that footer always stick to bottom
	{
		var b=$('body').outerHeight();
		var w=$(window).outerHeight();
		if(b<w)
		{
			var set=w-b;
			$("section").height($("section").height()+(set)+"px");	
		}
		else
		{
			$("section").height("");
		}
		
	} 

function adminlogin(str)		//ADMIN login box appears 
	{	
		if(str=='open')
		{
			$("#admin_form").css("display","block");
			$('#admin_form').html("<img src='images/load.gif' class='load_image'>");
			$.ajax({
					url: 'login.php',
					type: 'POST',
					success: function(result){
						$("#admin_form").html(result);
					}
				});
		}
		if(str=='close')
		{
			$("#admin_form").css("display","none");
				
		}
	}	

	
function isNumberKey(evt)		// Allow only number in textbox
	{
		var charCode=(evt.which)?evt.which:event.keycode
		
		if(charCode>31 && (charCode<48 || charCode>57))
		return false;
		
		return true;
	}
	
function AllowAlphabet(e)		// Allow only alphbet,number will be deleted automatically
{						 		// 45=-  32='' 46=. 31=unitseparator  48=0  57=9   
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    return false;
      }
}

function delete_faculty(id,branch_code) //delete faculty from edit_faculty
{
	var x=confirm("Are you sure to delete faculty with ID="+id+" ?");
	if(x==true)
	{
		$.ajax({
			url:'delete_faculty_data.php',
			data:"id="+id+"&branch_code="+branch_code,
			type:'POST',
			success: function(result){
				$('#table_showdata').html(result);		
				}
		});
	}
}
function delete_download(id) //delete uploaded file from files from download_show page
{
	var x=confirm("Are you sure to delete download with ID="+id+" ?");
	if(x==true)
	{
		$.ajax({
				url:'delete_download.php',
				data:"id="+id,
				type:'POST',
				success: function(result){
					$('#download_show_table').html(result);		
					}
			});
	}
}

function delete_gallery_image(id) // delete gallery image from clg_gallery table
{
	var x=confirm("Are you sure to delete gallery with ID="+id+" ?");
	if(x==true)
	{
		$.ajax({
			url:'delete_gallery_image.php',
			data:"id="+id,
			type:'POST',
			success: function(result){
				$('#gallery_image_show_admin').html(result);		
				}
		});
	}
}
function delete_article(id) // delete article image from clg_article table
{
	var x=confirm("Are you sure to delete article with ID="+id+" ?");
	if(x==true)
	{
		$.ajax({
			url:'delete_article.php',
			data:"id="+id,
			type:'POST',
			success: function(result){
				$('#article_show_table').html(result);		
				}
		});
	}
}

function delete_recruited(id) // delete article image from clg_article table
{
	var x=confirm("Are you sure to delete recruited with ID="+id+" ?");
	if(x==true)
	{
		$.ajax({
			url:'delete_recruited.php',
			data:"id="+id,
			type:'POST',
			success: function(result){
				$('#recruited_show_table').html(result);
				}
		});
	}

}


function initMap()		//loads google map for college location
	{				
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 21.1802535, lng: 72.815359},
		  zoom: 15
        });
      }
