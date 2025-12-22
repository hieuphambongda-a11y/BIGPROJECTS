const scrollButtonToan = document.querySelector('.ToanC');
const targetElementToan = document.getElementById('KHToan_C');

function smoothScrollToan() {
    if (targetElementToan) {
        targetElementToan.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}
scrollButtonToan.addEventListener('click', smoothScrollToan);

/*----------*/

const scrollButtonVan = document.querySelector('.VanC');
const targetElementVan = document.getElementById('KHVan_C');

function smoothScrollVan() {
    if (targetElementVan) {
        targetElementVan.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}
scrollButtonVan.addEventListener('click', smoothScrollVan);

/*----------*/

const scrollButtonAnh = document.querySelector('.AnhC');
const targetElementAnh = document.getElementById('KHAnh_C');

function smoothScrollAnh() {
    if (targetElementAnh) {
        targetElementAnh.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}
scrollButtonAnh.addEventListener('click', smoothScrollAnh);