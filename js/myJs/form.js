

const btn = document.getElementById('btn');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');

btn.addEventListener('click', () => {
    const form = document.getElementById('form');

    if (form.style.display == 'none') {

        form.style.display = 'block';
    } else {

        form.style.display = 'none';
    }
});

btn2.addEventListener('click', () => {
    const form2 = document.getElementById('form2');

    if (form2.style.display === 'none') {

        form2.style.display = 'block';
    } else {

        form2.style.display = 'none';
    }
});

btn3.addEventListener('click', () => {
    const form3 = document.getElementById('form3');

    if (form3.style.display === 'none') {

        form3.style.display = 'block';
    } else {

        form3.style.display = 'none';
    }
});

