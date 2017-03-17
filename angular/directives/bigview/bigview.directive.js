class BigviewController{
    constructor(){
        'ngInject';

        //
    }
}

export const BigviewDirective = function() {
    return {
        controller: BigviewController,
        link(scope, element) {
            element.bind("click", function() {
                if (element.hasClass("biggerimage")) element.removeClass("biggerimage");
                else element.addClass("biggerimage");
                console.log("test");
            });
        }
    }
}
