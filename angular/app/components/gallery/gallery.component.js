class GalleryController{
    constructor(API){
        'ngInject';
        var vm = this;

        vm.page = 1;
        vm.inprogress = true;
        vm.API = API;

        API.one('fhac/' + this.page).get().then(function (data) {
            vm.inprogress = false;
            vm.photos = data.photos;
        });
    }

    $onInit(){
    }

    addMoreItems() {
        var vm = this;



        if (vm.inprogress == false) {
            vm.inprogress = true;
            vm.page++;

            vm.API.one('fhac/' + this.page).get().then(function (data) {

                vm.inprogress = false;
                vm.photos = vm.photos.concat(data.photos);
            });
        }

    }
}

export const GalleryComponent = {
    templateUrl: './views/app/components/gallery/gallery.component.html',
    controller: GalleryController,
    controllerAs: 'vm',
    bindings: {}
}
