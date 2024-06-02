$("#table-pemasukan").DataTable();
$(".btn-submit").on("click", function (e) {
    e.preventDefault()
    let number = $(this).data("number")
    Swal.fire({
        title: 'Peringatan!',
        text: "Apakah anda yakin ingin menghapus data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya,hapus',
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            $(`.form-${number}`).submit();
        }
    })
});
