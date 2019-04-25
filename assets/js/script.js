// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mobileSidebar = document.getElementById("mobileSidebar");

function w3_open() {
    if (mobileSidebar.style.display === 'block') {
        mobileSidebar.style.display = 'none';
    } else {
        mobileSidebar.style.display = 'block';
    }
}

function openNav() {
  document.getElementById("mobileSidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mobileSidenav").style.width = "0";
}

// Select all links with hashes
jQuery('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var jQuerytarget = jQuery(target);
          jQuerytarget.focus();
          if (jQuerytarget.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            jQuerytarget.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            jQuerytarget.focus(); // Set focus again
          };
        });
      }
    }
  });
jQuery(function(){
  jQuery('.load_more_buttom').on('click', function(){
    let offset = jQuery('.pn_post_content article .pn_posts').length;
    jQuery.ajax({
      type:'POST',
      url:pn_ajaxUrl,
      data:{action:'pn_load_more_posts', offset:offset},
      success:function(html){
        if(html != ''){
          jQuery('.pn_post_content').append(html);
      } else{
          jQuery('.load_more_buttom').hide();
      }
      }

    });
    });
  });


function pn_openOffcanvas() {
    document.getElementById("pn_Offcanvas").style.width = "200px";
    document.getElementById("pn_mainContent").style.marginLeft = "0px";
}
function pn_openNav3() {
    document.getElementById("pn_CanvasNav").style.width = "100%";
    document.getElementById("pn_CanvasNav").style.opacity = "0.8";  
}
function pn_closeOffcanvas() {
    document.getElementById("pn_Offcanvas").style.width = "0%";
    document.getElementById("pn_mainContent").style.marginLeft= "0%";
    document.body.style.backgroundColor = "white";
    document.getElementById("pn_CanvasNav").style.width = "0%";
    document.getElementById("pn_CanvasNav").style.opacity = "0"; 
}


jQuery('#mobileSidenav .menu .w3-dropdown-content').hide(); //Hide children by default

jQuery('#mobileSidenav .menu').children().click(function(){   
    jQuery(this).children('#mobileSidenav .menu .w3-dropdown-content').slideToggle('slow');     
}); 
jQuery(document).ready(function(){
  jQuery(".mobileDropdown > a:first-child").removeAttr('href'); 
});

jQuery(document).ready(function() {
    jQuery('.form').submit(function(event) {
        event.preventDefault();
        var name = jQuery('#name').val();
        var gd_name = jQuery('#gd_name').val();
        var gd_email = jQuery('#gd_email').val();
        var gd_subject = jQuery('#gd_subject').val();
        var gd_message = jQuery('#gd_message').val();
        jQuery.ajax({
            type: 'POST',
            url: pn_ajaxUrl,
            async: false,
            data: {
                action: 'gd_contact_form_send',
                name: name,
                gd_name: gd_name,
                gd_email: gd_email,
                gd_subject: gd_subject,
                gd_message: gd_message
            },
            beforeSend: function() {
                jQuery("#gd_send").prop('disabled', true);
            },
            success: function(returnData) {
                jQuery('#gd_contact_form_msg').html(returnData);
                //jQuery('#gd_contact_form').hide("slow", function() {
                    jQuery('#gd_contact_form_msg').show("fast").addClass("success"); 
				    
				
                //});
            }
        });
        event.preventDefault();
    });
});

let mgclose = document.getElementsByClassName("mgclose");
let i;

for (i = 0; i < mgclose.length; i++) {
  mgclose[i].onclick = function(){
    let div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}

