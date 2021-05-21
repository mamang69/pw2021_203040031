const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const kontener = document.querySelector('.kontener');


tombolCari.style.display = 'none';


keyword.addEventListener('keyup', function () {

  fetch('php/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (kontener.innerHTML = response));
});


function previewImage() {
  const gambar = document.querySelector('.img');
  const imgPreview = document.querySelector('.img-preview');


  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}