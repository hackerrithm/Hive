/*          */
    $(document).ready(function() {
        $('.gallery-dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: true, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'right' // Displays dropdown with edge aligned to the left of button
            
          }
        );
        $('.slider').slider({full_width:true, height:562});
        
    });
/*          */    
    $(document).ready(function(){
    $('.carousel').carousel();
    });
/*          */
    $(document).ready(function () {
        $(".button-collapse").sideNav();
    });
 /*          */   
    $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
/*          */    
    $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
  });
  
  /* */
   $(document).ready(function(){
    $('ul.tabs').tabs();
  });
  
  (function($){
  $(function(){
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

/*   check and validate email address       */  
  function checkEmail(emailAddress) {
    var sQtext = '[^\\x0d\\x22\\x5c\\x80-\\xff]';
    var sDtext = '[^\\x0d\\x5b-\\x5d\\x80-\\xff]';
    var sAtom = '[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+';
    var sQuotedPair = '\\x5c[\\x00-\\x7f]';
    var sDomainLiteral = '\\x5b(' + sDtext + '|' + sQuotedPair + ')*\\x5d';
    var sQuotedString = '\\x22(' + sQtext + '|' + sQuotedPair + ')*\\x22';
    var sDomain_ref = sAtom;
    var sSubDomain = '(' + sDomain_ref + '|' + sDomainLiteral + ')';
    var sWord = '(' + sAtom + '|' + sQuotedString + ')';
    var sDomain = sSubDomain + '(\\x2e' + sSubDomain + ')*';
    var sLocalPart = sWord + '(\\x2e' + sWord + ')*';
    var sAddrSpec = sLocalPart + '\\x40' + sDomain; // complete RFC822 email address spec
    var sValidEmail = '^' + sAddrSpec + '$'; // as whole string

    var reValidEmail = new RegExp(sValidEmail);

    if(reValidEmail.test(emailAddress)== true) {
        return true;
    }else{
        alert("Please input a valid email address!")
        return false;
    }
}


     

