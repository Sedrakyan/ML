jQuery(document).ready(function ($) {
    var optionTypeClass = '.fw-option-type-number';

    /**
     * Listen to special event that is triggered for uninitialized elements
     */
    fwEvents.on('fw:options:init', function (data) {
        /**
         * data.$elements are jQuery selected elements
         * that contains options html that needs to be initialized
         *
         * Find uninitialized options by main class
         */
        var $options = data.$elements.find(optionTypeClass +':not(.initialized)');


        /**
         * After everything has done, mark options as initialized
         */
        $options.addClass('initialized');
    });
});