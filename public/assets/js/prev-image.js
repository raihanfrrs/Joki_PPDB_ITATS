function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    if (image.files && image.files[0]) {
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    } else {
        // Tetap gunakan gambar default jika tidak ada file yang dipilih
        imgPreview.src = '../../assets/img/avatars/14.png';
    }
}