
$(document).ready(function(){
  
  // Add item to list
$(".submit").click(function(e){
  e.preventDefault();
   
    const input = $("#input-add").val();
    //console.log(input);
    $("ul").append('<li>'+ input +  '<input type="checkbox" name="checkbox" id="list-1" /> <i class= "fa-solid fa-trash-can"> </i> <i class="fa-solid fa-pencil"></i> </li>');
    $(this).val(input).Date.now();
})

// Edit items of list
$("ul").on("click",".fa-pencil",function(){
    $(this).parent("li").find("label").attr("contenteditable","true");
})
//  Delete Items from list
  $("ul").on("click",".fa-trash-can",function(){
   $(this).parent("li").remove();
  })
})