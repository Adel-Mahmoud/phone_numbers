/*
|======================================
|
|      programming  : Adel Mahmoud
|      phone number : +201018646196
|   
|======================================
*/

/*## Start LocalStorage Data ##*/
let data = [];

let countItem = 0;
if(localStorage.getItem("data") || localStorage.getItem("data") !== null){
    data=localStorage.getItem("data").split(",");  
    view();      
}   
function addP(id){
   if(data !== "" || data !== 0){
      if(data.includes(id) !== true){
        countItem++
        data.push(id);
        view();
      }else{
      	swal({
          title: "",
          text: `
          You have already selected this number.
انت بالفعل اختارت هذا الرقم.
          ` ,
          type: "warning",
          confirmButtonClass: 'btn-outline-warning',
          confirmButtonText: 'Ok'
        });
      }
   }      
}
function view(){
  $("#cart").text(data.length);
  $("#cartNumbers").html("");
  let contentHtml = "";
  data.map((item)=>{contentHtml+=`<div class="dropdown-item " onclick="remov(this.innerHTML)">${item}</div>`;});
  $("#cartNumbers").html(contentHtml);
  localStorage.setItem("data",data);
  if (data.length == 0 || data == "") {
  	window.localStorage.clear();
    $(".next-page").hide();
  }
  if (data.length > 0) {
    // $("[data-id]").css("pointer-events","inherit");
  }
}
function remov(id){       
   //id = '0'+id;
   data = data.filter(function(item) {
      return item !== id;
   })
   if(data == ""){
     window.localStorage.clear();
   }
   view();
}
/*## End LocalStorage Data ##*/
/*## Data Ajax ##*/
$(document).ready(()=>{
  // Get All Networks 
  $.ajax({url: "code.php?networks", success: function(result){
    $("#networks").html(result);
    }
  });
  // Get All Numbers 
  $.ajax({url: "code.php?numbers", success: function(result){
    $("#container_numbers").html(result);
    data.length > 0 ? $(".next-page").show() : $(".next-page").hide();
    $("[data-id]").each(function(i,item){
      $(item).click(function(){
        //if(data.length !== $("#max").val()){
        if(1 !== 1){
          swal({
			          title: "",
			          text: `
			          You reached the maximum numbers of lines.
لقد تجاوزتم الحد الأقصى للخطوط.
			          ` ,
			          type: "warning",
			          confirmButtonClass: 'btn-outline-warning',
			          confirmButtonText: 'Ok'
			        });
          // $("[data-id]").css("pointer-events","none");
        }else{
        	addP($(item).attr("data-id"));
        }
        if (data.length > 0) {
          $(".next-page").show();
        }
      });
    });
    $("#removeAllNumbers").click(()=>{
      localStorage.clear();
       window.location='index.php';
    });
    //* animation cart *//
    $('.items').flyto({
	    item      : '.item',
	    target    : '.cart',
	    button    : '.my-btn'
	  });
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36251023-1']);
	  _gaq.push(['_setDomainName', 'jqueryscript.net']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	    $(".plans-btn").hide();
			$.ajax({url: "code.php?plans", success: function(result){
				$(".owl-plan").html(result);
				let dataPlans = "";
				$(".btn-choose").each(function(i,item){
        $(item).click(function(){
        	$(".plans-btn").show();
        	var phoneNum = $(item).parentsUntil().children("input").val()
        	dataPlans+=
        	`
        	<div class="card-body">
				    <h5 class="card-title color-dark">${phoneNum}</h5>
				    <h6 class="card-subtitle mb-2 text-muted color">
				    ${$(item).attr("data-btn").replace("centerPlanTitle",'</h6><p class="card-text">')}
        	  </p>
				  </div>
				  <hr>
        	`;
					//alert(dataPlans.length);
					$(item).parents().eq(6).slideUp();
					$(item).parents().eq(6).hide(1000);
				})})
				$(".plans-btn").click(()=>{
					var dataHtml = dataPlans;
					if (data.length !== dataHtml.split("<hr>").length-1) {
						$(".btn-choose").each(function(i,item){
							$(item).parents().eq(5).css("border","red 1px solid");
						});
							swal({
			          title: "",
			          text: `
			          Please select rate plan for all lines first.
برجاء إختيار خطط الأسعار لجميع الأرقام أولا.
			          ` ,
			          type: "warning",
			          confirmButtonClass: 'btn-outline-warning',
			          confirmButtonText: 'Ok!'
			        });
					}else{
						localStorage.setItem("dataPlans",dataHtml);
						window.location.href='readPlans.php';
					}
					// alert(dataHtml.split("<h1>").length)
					$("#plans-reader").html(dataHtml);
				})
				//* animation cart *//
        $('.owl-carousel').owlCarousel({
          margin: 10,
          nav: true,
          loop: false,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 3
            },
            1000: {
              items: 5
            }
          }
        })
        /* plans page */
			  $(".choose-plan").each((i,item)=>{
			  $(item).click(()=>{
			    $(item).children().attr("checked","true");
			  })
			})
	  }}); // end ajax2
  }});// end ajax // 
  /****** Start view plans page ******/
  if (localStorage.getItem("dataPlans")!=="") {
  	$("#view-data").html(localStorage.getItem("dataPlans"));
  	$("#dataEmail").val(localStorage.getItem("dataPlans"));
  }
  /****** End view plans page ******/
  /****** Start Register page ******/
  $(".form-register input").each((i,elem)=>{
  	$(elem).attr("required","required");
  });
  /****** End Register page ******/
});// end document ready
/*## End Data Ajax ##*/
var plansHtml = "";
data.map((number,i)=>{
	
	 plansHtml += `
	<div class="myNumber container bg-light border shadow">
	  <br>
	  <ul>
	    <li>✓ ${number}</li>
	  </ul>
	</div>
	<br />
	<section>
	 <div class="container ">
	   <div class="owl-carousel owl-theme owl-plan">

	   </div>
	   <input type="hidden" value="${number}">
	 </div>
	</section>
	<hr>
	`;
});
$("#plansNumber").html(plansHtml);

/*# inputSearch #*/
$("#inputSearch").on("keyup", function() {
  var value = this.value.toLowerCase().trim();
  $(".numbers").show().filter(function() {
    return $(this).text().toLowerCase().trim().indexOf(value) == -1;
  }).hide();
});
/* Start animation scroll */
AOS.init({
   easing: 'ease-in-out-sine'
});
  /* End animation scroll */
