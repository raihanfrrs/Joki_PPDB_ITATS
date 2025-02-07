/**
 * File Upload
 */

'use strict';

(function () {
  // previewTemplate: Updated Dropzone default previewTemplate
  // ! Don't change it unless you really know what you are doing
  const previewTemplate = `<div class="dz-preview dz-file-preview">
<div class="dz-details">
  <div class="dz-thumbnail">
    <img data-dz-thumbnail>
    <span class="dz-nopreview">No preview</span>
    <div class="dz-success-mark"></div>
    <div class="dz-error-mark"></div>
    <div class="dz-error-message"><span data-dz-errormessage></span></div>
    <div class="progress">
      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
    </div>
  </div>
  <div class="dz-filename" data-dz-name></div>
  <div class="dz-size" data-dz-size></div>
</div>
</div>`;

  // Basic Dropzone
  // --------------------------------------------------------------------
  const dropzoneBasic = document.querySelector('#dropzone-basic');
  if (dropzoneBasic) {
    const myDropzone = new Dropzone(dropzoneBasic, {
      previewTemplate: previewTemplate,
      parallelUploads: 1,
      maxFilesize: 5,
      addRemoveLinks: true,
      maxFiles: 1,
      acceptedFiles: "image/*", // Hanya menerima file gambar
      headers: {
        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
      },
      init: function() {
        this.on("success", function(file, response) {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Bukti Pembayaran berhasil diunggah",
            showConfirmButton: false,
            timer: 1500
          });
          if (response.success) {
            setTimeout(() => {
              window.location.href = response.redirect; // Redirect setelah upload sukses
            }, 1000);
          }
        });

        this.on("error", function(file, response) {
          console.log("Terjadi kesalahan:", response);
        });

        this.on("removedfile", function(file) {
          $.ajax({
            url: '/delete', // Sesuaikan dengan route untuk menghapus file
            type: 'POST',
            data: { filename: file.name },
            headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            success: function(response) {
              console.log("File berhasil dihapus:", response);
            },
            error: function(response) {
              console.log("Terjadi kesalahan saat menghapus file:", response);
            }
          });
        });
      }
    });
  }

  const dropzoneBasicEdit = document.querySelector('#dropzone-basic-edit');
  if (dropzoneBasicEdit) {
    const myDropzone = new Dropzone(dropzoneBasicEdit, {
      previewTemplate: previewTemplate,
      parallelUploads: 1,
      maxFilesize: 5,
      addRemoveLinks: true,
      maxFiles: 1,
      acceptedFiles: "image/*", // Hanya menerima file gambar
      headers: {
        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
      },
      init: function() {
        this.on("success", function(file, response) {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Bukti Pembayaran berhasil diubah",
            showConfirmButton: false,
            timer: 1500
          });
          if (response.success) {
            setTimeout(() => {
              window.location.href = response.redirect; // Redirect setelah upload sukses
            }, 1000);
          }
        });

        this.on("error", function(file, response) {
          console.log("Terjadi kesalahan:", response);
        });

        this.on("removedfile", function(file) {
          $.ajax({
            url: '/delete', // Sesuaikan dengan route untuk menghapus file
            type: 'POST',
            data: { filename: file.name },
            headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            success: function(response) {
              console.log("File berhasil dihapus:", response);
            },
            error: function(response) {
              console.log("Terjadi kesalahan saat menghapus file:", response);
            }
          });
        });
      }
    });
  }
})();
