jQuery(document).ready(function($) {



if (document.cookie.indexOf('inprogess') >= 0) {
    $('.field-inprogress').hide();
}


        $('.field-inprogress .close').click(function(){
            $('.field-inprogress').slideUp();
            var nDays = 1;
            var cookieName = "inprogress";
            var cookieValue = "true";
            var today = new Date();
            var expire = new Date();
            expire.setTime(today.getTime() + 3600000*24*nDays);
            document.cookie = cookieName+"="+escape(cookieValue)+";expires="+expire.toGMTString()+";path=/";
         });

});
