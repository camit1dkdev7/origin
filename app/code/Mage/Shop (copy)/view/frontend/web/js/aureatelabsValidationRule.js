define([
    'jquery',
    'jquery/ui',
    'jquery/validate',
    'mage/translate'
    ], function($){
        'use strict';
        return function() {
            $.validator.addMethod(
                "aureatelabsvalidationrule",
                function(value, element) {
                    console.log("-------");
                    //Perform your operation here and return the result true/false.
                    return false;
                },
                $.mage.__("Your validation message.")
            );
    }
});