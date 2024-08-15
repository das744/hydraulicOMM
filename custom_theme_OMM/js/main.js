$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();
  
  });
  $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('.nav').addClass('affix');
        
    } else {
        $('.nav').removeClass('affix');
    }
  });
  
  
  function slide(){
  
    var li=$('ul#slider_section li.active');
  
    if(li.next().length>0 )
    {
        li.removeClass('active', 3000, "easeInBack");
        li.next().addClass('active', 3000, "easeInBack");
  
    }else if(li.prev().length>0){
       li.removeClass('active', 3000, "easeInBack");
       $('ul#slider_section li').first('li').addClass('active', 3000, "easeInBack");
    }else
    {
        return;
    }
  }
  
  $('.next').click(function(){
  
    var li=$('ul#slider_section li.active');
  
    if(li.next().length>0 )
    {
        li.removeClass('active', 100, "easeInBack");
        li.next().addClass('active', 100, "easeInBack");
  
    }else {
       li.removeClass('active', 100, "easeInBack");
       $('ul#slider_section li').first('li').addClass('active', 100, "easeInBack");
    }
  });
  
  $('.prev').click(function(){
    
    var li=$('ul#slider_section li.active');
  
    if(li.prev().length>0 && li.prev().is("li"))
    {
        li.removeClass('active', 100, "easeInBack");
        li.prev().addClass('active', 100, "easeInBack");
  
    }else {
       
    }
  });
  
  // open pdf file

  function openPdf() {
   var pdfFilePath = 'http://hydraulicomm.com.au/wp-content/uploads/2024/02/InformationRequired.pdf'; 
  
    // Open the PDF file in a new browser window
    window.open(pdfFilePath, '_blank');
}

// Attach the function to the button click event
document.getElementById('openPdfButton').addEventListener('click', openPdf);

 