;(function() {

    var PRICE_PER_PERSON = 35
    
    $(function() {
        $(document).on("click", ".btnAddPerson", btnAddPersonClick)
        $(document).on("click", ".btnSubmitCart", btnSubmitCartClick)
        $(document).on("click", ".btnRemovePerson",  btnRemovePersonClick)
    })
    
    function btnSubmitCartClick() {
        var valid = true
        
        $(".captian .form-control:visible, .person .form-control:visible").each(function(i, item) {
            if($(item).val() == "") {
                valid = false
            }
        })
        
        if(valid == false) {
            $(".form-error").fadeIn()
            
            $(window).scrollTop(0)
            
            return   
        }
        
        $("form[target='paypal']:visible").each(function(i, item) {
            var duration = 500 * i
            var form = $(this)
            
            setTimeout(function() {
                form.submit()
            }, duration)
        })
    }
    
    function btnAddPersonClick() {
        var person = $(".person:not(:visible)").clone()
        
        person.find("option:first").prop("selected", true)
        person.find("input:text").val("")
        
        $(".person:last").after(person)
        
        person.slideDown()
    }
    
    function btnRemovePersonClick() {
        $(this).closest(".panel").slideUp(function() {
            $(this).remove()
        })
    }
    
})();