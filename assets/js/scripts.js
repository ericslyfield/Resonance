const globalNavigation = document.querySelector('.navigation');
const scrollObserver   = document.createElement('div');

scrollObserver.setAttribute('data-scroll-observer', '');
globalNavigation.before(scrollObserver);

const navBehaviour = new IntersectionObserver((entries) => {
    console.log(entries);
    globalNavigation.classList.toggle('stick');
})

navBehaviour.observe(scrollObserver);

