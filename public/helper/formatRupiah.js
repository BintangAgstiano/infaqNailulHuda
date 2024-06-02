const nominals = document.querySelectorAll('#nominal');
nominals.forEach(nominal=>{
    nominal.addEventListener('input',(e)=>{
        nominal.value = formatRupiah(e.target.value,'Rp. ')
    })
})

const shows = document.querySelectorAll('.showNom');
shows.forEach(show => {
    show.innerText = formatRupiah(show.innerText, 'Rp ');
})

function formatRupiah(angka, prefix) {
    let number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        let separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
    if(number_string.length>0){
        return prefix + rupiah;
    }else{
        return ''
    }
}
