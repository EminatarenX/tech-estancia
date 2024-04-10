import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube tus imagenes aqui",
    acceptedFiles: ".png,.jpg,.jpeg",
    addRemoveLinks: true,
    dictRemoveFile: "Eliminar",
    maxFiles: 1,
    uploadMultiple: false,
    init: function(){
        if(document.querySelector('[name="image"]').value.trim()){
            console.log(document.querySelector('[name="image"]').value);
            let image = {};
            image.size = 1234;
            image.name = document.querySelector('[name="image"]').value;
            console.log(image);

            this.options.addedfile.call(this, image);
            this.options.thumbnail.call(this, image, `/uploads/${image.name}`);
            image.previewElement.classList.add('dz-success', 'dz-complete');

        }
    }
})

dropzone.on('success', function (file, response) {
    console.log(response);
    document.querySelector('[name="image"]').value = response[1];

})

dropzone.on("removedfile", function(file){
    document.querySelector('[name="image"]').value = '';
})