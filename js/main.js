const chk = document.getElementById('chk');
chk.addEventListener('change', result);

function result() {
    let darkDiv = document.querySelectorAll('.mode');
    for(let x of darkDiv) {
        x.classList.toggle('dark')
    }
}