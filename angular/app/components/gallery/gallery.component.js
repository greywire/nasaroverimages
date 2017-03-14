class GalleryController{
    constructor(API){
        'ngInject';

        this.API = API;
        var vm = this;

        API.one('fhac').get().then(function (data) {
            vm.photos = data.photos;
        });
    }

    $onInit(){
    }
}

export const GalleryComponent = {
    templateUrl: './views/app/components/gallery/gallery.component.html',
    controller: GalleryController,
    controllerAs: 'vm',
    bindings: {}
}
