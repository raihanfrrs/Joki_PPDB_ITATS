/**
 * Page User List
 */

'use strict';

// Datatable (jquery)
function tbl_reporting_student_passed () {
  let borderColor, bodyBg, headingColor;

  if (isDarkStyle) {
    borderColor = config.colors_dark.borderColor;
    bodyBg = config.colors_dark.bodyBg;
    headingColor = config.colors_dark.headingColor;
  } else {
    borderColor = config.colors.borderColor;
    bodyBg = config.colors.bodyBg;
    headingColor = config.colors.headingColor;
  }

  var dt_brand_table = $('#listReportingStudentPassedTable');

  if (dt_brand_table.length) {
    var dt_user = dt_brand_table.DataTable({
      ajax: "/listReportingStudentPassedTable",
      columns: [
        { data: '' },
        { data: 'index', class: 'text-center' },
        { data: 'nisn', class: 'text-center' },
        { data: 'nik', class: 'text-center' },
        { data: 'name', class: 'text-center' },
        { data: 'phone', class: 'text-center' },
        { data: 'email', class: 'text-center' },
        { data: 'pob_dob', class: 'text-center' },
        { data: 'gender', class: 'text-center' },
        { data: 'address' },
        { data: 'created_at', class: 'text-center' },
        { data: 'action' }
      ],
      columnDefs: [
        {
          className: 'control',
          searchable: false,
          orderable: false,
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          targets: 1,
          responsivePriority: 4,
          render: function (data, type, full, meta) {
            return full.index;
          }
        },
        {
          targets: 2,
          render: function (data, type, full, meta) {
            return full.nisn;
          }
        },
        {
          targets: 3,
          render: function (data, type, full, meta) {
            return full.nik;
          }
        },
        {
          targets: 4,
          render: function (data, type, full, meta) {
            return full.name;
          }
        },
        {
          targets: 5,
          render: function (data, type, full, meta) {
            return full.phone;
          }
        },
        {
          targets: 6,
          render: function (data, type, full, meta) {
            return full.email;
          }
        },
        {
          targets: 7,
          render: function (data, type, full, meta) {
            return full.pob_dob;
          }
        },
        {
          targets: 8,
          render: function (data, type, full, meta) {
            return full.gender;
          }
        },
        {
          targets: 9,
          render: function (data, type, full, meta) {
            return full.address;
          }
        },
        {
          targets: 10,
          render: function (data, type, full, meta) {
            return full.created_at;
          }
        },
        {
          targets: -1,
          title: 'Actions',
          searchable: false,
          orderable: false,
          render: function (data, type, full, meta) {
              return full.action;
          }
        },
      ],
      order: [[1, 'asc']],
      dom:
        '<"row me-2"' +
        '<"col-md-2"<"me-3"l>>' +
        '<"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>' +
        '>t' +
        '<"row mx-2"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',
      language: {
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Search..'
      },
      // Buttons with Dropdown
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-label-secondary dropdown-toggle mx-3',
          text: '<i class="ti ti-screen-share me-1 ti-xs"></i>Export',
          buttons: [
            {
              extend: 'print',
              text: '<i class="ti ti-printer me-2" ></i>Print',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7, 8, 9],
              },
              customize: function (win) {
                $(win.document.body)
                  .css('font-size', '10px') // Perkecil teks
                  .css('margin', '0') // Hilangkan margin berlebih
                  .css('padding', '0'); // Hilangkan padding berlebih
              
                $(win.document.body)
                  .find('table')
                  .addClass('compact')
                  .css('font-size', '10px') // Ukuran font lebih kecil untuk tabel
                  .css('width', '100%'); // Pastikan tabel menggunakan seluruh lebar halaman
              }
            },
            {
              extend: 'csv',
              text: '<i class="ti ti-file-text me-2" ></i>Csv',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7, 8, 9],
              }
            },
            {
              extend: 'excel',
              text: '<i class="ti ti-file-spreadsheet me-2"></i>Excel',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7, 8, 9],
              }
            },
            {
              extend: 'pdf',
              text: '<i class="ti ti-file-code-2 me-2"></i>PDF',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7, 8, 9], // Pastikan hanya kolom penting yang diekspor
              },
              orientation: 'landscape', // Gunakan mode landscape agar lebih lebar
              pageSize: 'A4', // Ukuran halaman A4
              customize: function (doc) {
                doc.defaultStyle.fontSize = 8; // Ukuran font dikurangi agar muat
                doc.styles.tableHeader.fontSize = 10; // Header dibuat lebih besar
                doc.styles.tableHeader.alignment = 'center'; // Posisi header di tengah
                doc.content[1].table.widths = ['5%', '10%', '12%', '12%', '15%', '12%', '12%', '10%', '12%', '20%'];
                doc.content[1].layout = 'fixed'; // Mencegah tabel melebihi lebar halaman
                doc.styles.tableBodyEven.alignment = 'center';
                doc.styles.tableBodyOdd.alignment = 'center';
              }
            },
            {
              extend: 'copy',
              text: '<i class="ti ti-copy me-2" ></i>Copy',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7, 8, 9],
              }
            }
          ]
        }
      ],
      // For responsive popup
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details';
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIndex +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/><tbody />').append(data) : false;
          }
        }
      }
    });
  }

  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);
};
